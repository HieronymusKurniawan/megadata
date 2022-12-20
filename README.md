1. Buka aplikasi xampp dengan run as administrator 
2. Klik menu Config, Kemudian klik php.ini
3. Cari kata extension=intl supaya cepat bisa langsung klik ctrl+f. Jika sudah ketemu, hapus tanda titik koma yg ada di depan tulisan extension=intl 
4. Save document
5. Buka package aplikasi presensi megadata melalui text editor (saya menggunakan Visual Sutdio Code)
6. Buka file dengan nama .env 
7. lalu ganti 
app.baseURL = "..alamat IP (sesuai IP PC anda buka dengan CMD dengan perintah IP Config)../megadata/public"

Contoh =
app.baseURL = 'https://192.168.0.8/megadata/public/'

8. Hidupkan Apache Xampp dan MySQL, buat basis data baru bernama "megadata" (jangan lupa import megadata.sql)
9. Buka melalui browser ke https://192.168.0.8/megadata/public/
10. Bila terkena jaringan tidak aman, pilih lanjutkan saja
11. Maka web presensi akan terbuka dan bisa dibuka oleh siapa saja yang berada pada 1 jaringan internet
