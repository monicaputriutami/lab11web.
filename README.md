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

# Lanjut PRAKTIKUM 13

1. membuat tabel user

![image](https://user-images.githubusercontent.com/81574673/123690500-a6bfd200-d87e-11eb-8647-6b3b6cd84ced.png)

2. membuat Model untuk memproses data login. membuat file baru pada direktori app/Models dengan nama UserModel.php

![image](https://user-images.githubusercontent.com/81574673/123690760-f2727b80-d87e-11eb-9319-4d28945acaec.png)

membuat Controller user dengan nama User.php pada direktori app/Controllers, kemudian tambahkan method index() untuk menampilkan daftar user dan method login () untuk proses login 

![image](https://user-images.githubusercontent.com/81574673/123691203-83e1ed80-d87f-11eb-8c75-7d87e8eaf774.png)

![image](https://user-images.githubusercontent.com/81574673/123691238-90664600-d87f-11eb-9868-f260f08a3031.png)

3. membuat view login baru dengan nama user pada direktori baru dengan nama pada user direktori app/views, kemudian membuat file barub dengan nama login.php

![image](https://user-images.githubusercontent.com/81574673/123691451-d7ecd200-d87f-11eb-9aa4-d7c1293083b4.png)

![image](https://user-images.githubusercontent.com/81574673/123691483-e1763a00-d87f-11eb-82f4-7731033fca80.png)

5. Membuat Database Seeder Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![image](https://user-images.githubusercontent.com/81574673/123696290-c73f5a80-d885-11eb-8357-e9832800422a.png)

![image](https://user-images.githubusercontent.com/81574673/123696336-d7573a00-d885-11eb-9e87-fefebdc33847.png)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![image](https://user-images.githubusercontent.com/81574673/123696390-e8a04680-d885-11eb-9f26-455fba2044bf.png)

![image](https://user-images.githubusercontent.com/81574673/123696969-927fd300-d886-11eb-8d54-295a06f1a7b3.png)

6. Menambahkan Auth Filter Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.

![image](https://user-images.githubusercontent.com/81574673/123697142-c22edb00-d886-11eb-96bb-eea79000f483.png)

Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![image](https://user-images.githubusercontent.com/81574673/123697203-d377e780-d886-11eb-9978-7dbdb4612d0b.png)

![image](https://user-images.githubusercontent.com/81574673/123697239-dd014f80-d886-11eb-85f0-d0c7ef90a51c.png)

percobaan Akses Menu Admin

![image](https://user-images.githubusercontent.com/81574673/123697541-3cf7f600-d887-11eb-931c-4ee9a962decb.png)

![image](https://user-images.githubusercontent.com/81574673/123697868-9cee9c80-d887-11eb-8608-c6119e05a968.png)

7. Fungsi Logout Tambahkan method logout pada Controller User seperti berikut:

![image](https://user-images.githubusercontent.com/81574673/123697929-b2fc5d00-d887-11eb-87e5-9dca2043792c.png)

![image](https://user-images.githubusercontent.com/81574673/123699118-18048280-d889-11eb-8b1d-203b2df5fcff.png)

![image](https://user-images.githubusercontent.com/81574673/123705325-01622980-d891-11eb-88cb-c0611ebccef5.png)











