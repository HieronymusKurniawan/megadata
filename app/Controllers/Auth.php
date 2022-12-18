<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PegawaiModel;

class Auth extends BaseController
{
    protected $AdminModel;
    protected $PegawaiModel;

    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->PegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        if (session()->get('role') != null) {
            if (session()->get('role') == 1) {
                return redirect()->to('admin');
            }

            if (session()->get('role') == 2) {
                return redirect()->to('pegawai');
            }
        }

        $admin = $this->AdminModel->asObject()->first();
        if ($admin == null) {
            return redirect()->to('auth/install');
        }

        return view('auth/login');
    }
    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Cari Data Admin Berdasarkan email
        $admin = $this->AdminModel->getAdminByEmail($email);
        // CEK APAKAH ADA ADMIN
        if ($admin != null) {
            // CEK APAKAH PASSWORD BENAR
            if ($admin->password != ($password)) {
                session()->setFlashdata('pesan', "
                    <script>
                        Swal.fire(
                            'Error!',
                            'Password Salah',
                            'error'
                        )
                    </script>
                ");
                return redirect()->to('auth')->withInput();
            }

            $data_admin = [
                'id_admin' => $admin->id_admin,
                'nama_admin' => $admin->nama_admin,
                'email' => $admin->email,
                'role' => $admin->role
            ];
            session()->set($data_admin);
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Berhasil!',
                        'Berhasil Login!',
                        'success'
                    )
                </script>
            ");

            return redirect()->to('admin');
        }

        $pegawai = $this->PegawaiModel->getByEmail($email);
        // CEK APAKAH ADA PEGAWAI
        if ($pegawai != null) {
            // CEK APAKAH AKUN ACTIVE 
            if ($pegawai->is_active == 0) {
                session()->setFlashdata('pesan', "
                    <script>
                        Swal.fire(
                            'Error!',
                            'Akun Anda Tidak Aktif!',
                            'error'
                        )
                    </script>
                ");
                return redirect()->to('auth')->withInput();
            }
            // CEK APAKAH PASSWORD BENAR
            if ($pegawai->password != $password) {
                session()->setFlashdata('pesan', "
                    <script>
                        Swal.fire(
                            'Error!',
                            'Password Salah',
                            'error'
                        )
                    </script>
                ");
                return redirect()->to('auth')->withInput();
            }

            $data_pegawai = [
                'id_pegawai' => $pegawai->id_pegawai,
                'nip' => $pegawai->nip,
                'nama_pegawai' => $pegawai->nama_pegawai,
                'email' => $pegawai->email,
                'role' => $pegawai->role
            ];
            session()->set($data_pegawai);
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Berhasil!',
                        'Berhasil Login!',
                        'success'
                    )
                </script>
            ");

            return redirect()->to('pegawai');
        }

        // JIKA AKUN TIDAK DITEMUKAN
        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Error!',
                    'Akun Tidak Ditemukan!',
                    'error'
                )
            </script>
        ");

        return redirect()->to('auth')->withInput();
    }

    public function register()
    {
        // CEK APAKAH NIP SUDAH ADA ATAU TIDAK
        if (!$this->validate([
            'nip' => [
                'rules' => 'is_unique[pegawai.nip]',
                'errors' => [
                    'is_unique' =>  session()->setFlashdata('pesan', "
                <script>
                     Swal.fire(
                         'Error!',
                         'NIP sudah terdaftar!',
                        'error'
                     )
               </script>
             ")
                ]

            ]
        ])) {
            return redirect()->to('auth')->withInput();
        }
        // CEK APAKAH EMAIL SUDAH ADA ATAU TIDAK
        if (!$this->validate([
            'email' => [
                'rules' => 'is_unique[pegawai.email]',
                'errors' => [
                    'is_unique' =>  session()->setFlashdata('pesan', "
                <script>
                     Swal.fire(
                         'Error!',
                         'Email sudah terdaftar!',
                        'error'
                     )
               </script>
             ")
                ]
            ]
        ])) {
            return redirect()->to('auth')->withInput();
        }
        $data_pegawai = [
            'nip' => $this->request->getVar('nip'),
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'jabatan' => $this->request->getVar('jabatan'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'gambar' => 'default.jpg',
            'is_active' => 1,
            'role' => 2
        ];

        $this->PegawaiModel->save($data_pegawai);
        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Akun Berhasil Dibuat! Silahkan Login',
                    'success'
                )
            </script>
        ");

        return redirect()->to('auth')->withInput();
    }

    public function install()
    {
        $admin = $this->AdminModel->asObject()->first();
        if ($admin != null) {
            return redirect()->to('auth');
        }

        return view('auth/install');
    }
    public function install_()
    {
        $password = $this->request->getVar('password');
        $confirm_password = $this->request->getVar('confirm_password');

        if ($password != $confirm_password) {
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Error!',
                        'Password Tidak Sama!',
                        'error'
                    )
                </script>
            ");

            return redirect()->to('auth/install')->withInput();
        }

        $this->AdminModel->save([
            'nama_admin' => $this->request->getVar('nama_admin'),
            'email' => $this->request->getVar('email'),
            'password' => $password,
            'gambar' => 'default.jpg',
            'role' => 1
        ]);

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Sukses!',
                    'Admin Disimpan!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('auth');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth');
    }
}
