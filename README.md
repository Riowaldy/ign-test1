## About
IGN Test 1 API.

## Konfigurasi
Untuk mengaktifkan koneksi database dapat mengganti pada file `konfigurasi.php`
```php
$conn = new mysqli("localhost","root","","test");
```

## Migrasi
Untuk menambahkan create table dapat mengakses `http://localhost/ign-test1/createTable.php` <br>
Jika sukses maka akan muncul pesan
```json
{
    statusCode: 200
}  
```
Jika gagal maka akan muncul pesan
```json
{
    statusCode: 201
}  
```

## Show Data
Untuk menampilkan tabel pendaftar dapat mengakses `http://localhost/ign-test1/index.php`

## API Tambah Data
Untuk menambahkan data ke dalam database dapat mengakses `http://localhost/ign-test1/api.php` atau menekan tombol tambah pada halaman `index`
Jika sukses maka akan muncul pesan
```json
{
    statusCode: 200
}  
```
Jika gagal maka akan muncul pesan
```json
{
    statusCode: 201
}  
```
Jika data dari file json sudah ditambahkan semua maka akan muncul pesan
```json
{
    statusCode: "Data JSON Max"
}  
```

## JSON File
Untuk menampilkan data JSON dapat mengakses `http://localhost/ign-test1/data.json`