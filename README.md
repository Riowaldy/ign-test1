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