# perpustakaan
aplikasi Web perpustakaan menggunakan framework codeigniter


# Tampilan Aplikasi

1. Tampilan Setup Aplikasi
![Screenshot](screenshot/setup.png)

2. Tampilan Dashboard Super Admin
![Screenshot](screenshot/dashboard.png)

3. Tampilan Data Petugas
![Screenshot](screenshot/petugas.png)

4. Tampilan Data Transaksi
![Screenshot](screenshot/transaksi.png)

5. Tampilan Peminjaman
![Screenshot](screenshot/peminjaman.png)

6. Tampilan Pengembalian
![Screenshot](screenshot/pengembalian.png)

# Cara Menjalankan Aplikasi di Local Komputer

- Pastikan sudah menginstall web server XAMPP di komputer kita dan jalankan Apche dan Mysql

![image](https://user-images.githubusercontent.com/57535407/180644077-dcc891ed-f30c-456e-92cd-394f9bf0a48d.png)

- clone repo github https://github.com/adimarbun/perpusesaunggul-kel-4-pemrograman-web.git

- buka code di code editor anda 

- buka php my admin  dan buat satu database dengan contoh namanya "perpusesaunggul"

![image](https://user-images.githubusercontent.com/57535407/180644169-6997b793-6c7d-4b7b-bec4-26ddea2064fd.png)

- buka project code editor dan cari file scriptdb.sql di folder asset, dan copy kan semua file nya

![image](https://user-images.githubusercontent.com/57535407/180644234-8c65fbef-ddbd-4630-9fae-943be8ad34bb.png)

- buka kembali pypmyadmin database yang kita buat tadi ,pilih sql dan paste hasil copy file dari scriptdb tadi dan pilih go untuk jalanin script nya, dan tabel di database akan di generate

![image](https://user-images.githubusercontent.com/57535407/180644299-bfe9d630-b2a0-48b5-9b3b-6a15e63d1d0e.png)


- buka file config di folder application/config  dan ganti base url sesuai dengan base url yang kita punya, 
 sebelumnya pastikan file project kita di dsimpan di folder htdocs XAMPP,
 
 ![image](https://user-images.githubusercontent.com/57535407/180644374-724ab3a4-b156-4c75-a33b-a198a8b13475.png)

  untuk penulisan baseurl di local "http://localhost/{namafolderprojectkita}
  
  - buka file database.php di folder application/config , 
solahkan ubah config database sesuai dengan yang kita punya

![image](https://user-images.githubusercontent.com/57535407/180644410-c7f9f595-dd68-4673-93d8-71d4f1cf9791.png)

- buka url aplikasi kita misalnya http://localhost/{namafolderprojectkita}

![image](https://user-images.githubusercontent.com/57535407/180644425-6da33e86-d0ab-442f-9585-6e6ff5b203dd.png)

web sudah berhasil berjalan di local kita

 




