# lab11web.
# Nama : Monica Putri Utami
# Nim   : 311910190
# Kelas : TI 19 B2
# Praktikum 12
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Dengan cara di bawah ini :
![image](https://user-images.githubusercontent.com/81574673/122777207-04c84480-d2d6-11eb-9ccc-8d89bd8345b4.png)

Hapus tanda ; (titik koma) pada bagian extension yang akan diaktifkan. 
![image](https://user-images.githubusercontent.com/81574673/122777292-1873ab00-d2d6-11eb-8067-277e13351f46.png)

Instalasi CodeIgniter 4
•	Codeigniter dapat didownload dari website https://codeigniter.com/download
•	Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci
•	Ubah nama direktory framework-4.x.xx menjadi ci4
•	Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![image](https://user-images.githubusercontent.com/81574673/122777364-2c1f1180-d2d6-11eb-84a2-172832c41961.png)

Codeigniter menyediakan CLI, untuk mengaksesnya buka terminal lalu arahkan ke direktori project yang akan dibuat. Kemudian jalankan perintah php spark untuk memanggil CLI codeigniter.
![image](https://user-images.githubusercontent.com/81574673/122777809-96d04d00-d2d6-11eb-92f6-6728b94905e9.png)

Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file env menjadi .env kemudian buka filenya dan ubah nilai CI_ENVIRONMENT menjadi development.

![image](https://user-images.githubusercontent.com/81574673/122778082-dac35200-d2d6-11eb-8556-7f6e839ae6d3.png)

Maka pesan kesalahan akan ditampilkan.

![image](https://user-images.githubusercontent.com/81574673/122778203-f6c6f380-d2d6-11eb-8ddb-88a899aa3da4.png)

Langkah 1 - Membuat Route
•	Router terletak pada file app/config/Routes.php
•	Untuk mengetahui route yg ada atau telah berjalan dapat menggunakan perintah php spark routes

![image](https://user-images.githubusercontent.com/81574673/122778301-1231fe80-d2d7-11eb-9f17-3cdd87f7e733.png)

•	Selanjutnya mencoba akses route yang telah dibuat dengan mengakses http://localhost:8080/contact
•	Terjadi error file not found dikarenakan tidak ada file/page untuk halaman contact

![image](https://user-images.githubusercontent.com/81574673/122778596-56250380-d2d7-11eb-90a2-f42a2027a701.png)

Langkah 2 - Membuat Controller
•	Membuat file page.php di dalam direktori Controller (/app/Controllers)

•	Kemudian refresh browser maka halaman sudah dapat diakses dan menampilkan hasilnya.

![image](https://user-images.githubusercontent.com/81574673/122780614-32fb5380-d2d9-11eb-9be7-f2d0410de8e0.png)

•	Menambahkan method baru pada controller page.
•	Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/81574673/122780716-4c9c9b00-d2d9-11eb-8c67-30d92ea1ed93.png)

Langkah 4 - Membuat Layout Web dengan CSS
•	Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout).
•	Kemudian buat folder template pada direktori view, lalu buat file header.php dan footer.php.
header.php

![image](https://user-images.githubusercontent.com/81574673/122780824-676f0f80-d2d9-11eb-9adf-bc818c42824f.png)

footer.php

![image](https://user-images.githubusercontent.com/81574673/122780884-7786ef00-d2d9-11eb-9ce6-37f926c1f60d.png)


•	Kemudian ubah file about.php (/app/view/about.php) seperti berikut.

![image](https://user-images.githubusercontent.com/81574673/122780962-8e2d4600-d2d9-11eb-9ce3-5b71cccf3133.png)

Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

Hasil tugas
•	Tampilan page about

![image](https://user-images.githubusercontent.com/81574673/122781111-b2892280-d2d9-11eb-838c-4c4c52fc93fa.png)

•	Tampilan page artikel

![image](https://user-images.githubusercontent.com/81574673/122781228-ce8cc400-d2d9-11eb-852a-5d9dd8af932b.png)

•	Tampilan page kontak

![image](https://user-images.githubusercontent.com/81574673/122781321-e2d0c100-d2d9-11eb-9ef5-cd3426268cd6.png)

Praktikum 12
Jalankan MySQL dan buat sebuah database sebagai berikut:

![image](https://user-images.githubusercontent.com/81574673/122781647-3b07c300-d2da-11eb-9596-7cd55b5fa8d6.png)

1 - Konfigurasi Database
Membuat konfigurasi hubungan ke database server dengan menggunakan file .env

![image](https://user-images.githubusercontent.com/81574673/122781726-4e1a9300-d2da-11eb-817c-b7622d058797.png)

Lalu buka alamat http://localhost:8080/artikel untuk melihat hasilnya

![image](https://user-images.githubusercontent.com/81574673/122781855-69859e00-d2da-11eb-9f8c-2edb29945c19.png)

Tidak ada data yang ditampilkan karena database masih kosong. Tambahkan data pada database untuk ditampilkan datanya pada phpmyadmin

![image](https://user-images.githubusercontent.com/81574673/122781974-8326e580-d2da-11eb-8464-1d04ac31e49d.png)

Maka akan muncul tampilan seperti ini ketika browser direfresh.

5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan sebuah fungsi baru pada Controller Artikel /app/Controllers/Artikel.php dengan nama view(). dengan code dibawah ini







