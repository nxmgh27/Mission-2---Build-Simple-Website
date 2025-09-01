# Mission-2---Build-Simple-Website

Repository ini berisi latihan yang mencakup latihan **PHP dasar**, **HTML dengan PHP**, dan **CodeIgniter 4 (CI4) berbasis MVC**.  

Latihan PHP meliputi instruksi berurutan, pemilihan (if, else, switch), dan pengulangan (for, while, foreach). Mahasiswa juga membuat tabel HTML statis dan dinamis menggunakan looping PHP.  

Project CI4 mencakup instalasi framework via Composer, pengaturan **routes**, database, dan base URL, serta pembuatan controller dan view. Controller yang dibuat antara lain **Hello World**, tabel HTML, dan tabel HTML dengan looping PHP. Bagian MVC menggunakan model untuk menampilkan data mahasiswa dari database, detail view, serta melengkapi dengan **CRUD (Create, Read, Update, Delete, Search)**.  

Struktur repository:  
Mission-2---Build-Simple-Website/
├─ latihanphp/ # Latihan PHP dasar
├─ ci4app/ # Project CodeIgniter 4
│ ├─ app/ # Controller, Model, View, Config
│ ├─ public/ # Front-end entry point
│ ├─ writable/ # Cache, logs, session (tidak di-push)
│ └─ vendor/ # Composer libraries (tidak di-push)
└─ README.md # Dokumentasi ini

**Cara Menjalankan:**  
- **Latihan PHP:** buka file PHP di folder `latihanphp` melalui browser/terminal.  
- **CI4 App:** masuk ke folder `ci4app`, jalankan `php spark serve`, buka browser di `http://localhost:8080`.  
- **Database:** buat database di phpMyAdmin dan sesuaikan konfigurasi di `app/Config/Database.php`.  

**Catatan:**  
- Folder `vendor` dan subfolder `writable` CI4 tidak di-push karena dapat digenerate ulang.  
- File `.env` tidak di-push untuk keamanan.  

**Author:**  
[Nike Kustiane] | NIM: [241511086] | Program Studi: [D3 Teknik Informatika]
