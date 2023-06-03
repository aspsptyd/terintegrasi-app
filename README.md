## Terintegrasi App
Aplikasi ini merupakan implementasi sistem yang terintegrasi dengan database, fitur bisa disesuaikan dengan kebutuhan user, terintegrasi memmiliki gagasan ingin menerapkan data yang saling terkait satu sama lainnya, sehingga tidak memerlukan administrasi yang begitu rumit (memangkas birokrasi)

## Tahapan Installasi
Tahapan Pertama, clone project terlebih dahulu dengan command seperti berikut

```.shell
$ git clone https://github.com/aspsptyd/terintegrasi-app.git
```

Tahapan Kedua, akses branch yang ingin di tuju sesuai versi, seperti contoh

```.shell
$ git checkout master-v1
```

Tahapan berikutnya Ketiga, ketikkan command seperti berikut, untuk menginstallkan library 

```.shell
$ npm install
```
Setelah berhasil ketikkan command berikut juga

```.shell
$ npm run build
```

Tahapan terakhir, jalankan project dengan perintah seperti berikut

```.shell
$ php artisan serve
```

Done.