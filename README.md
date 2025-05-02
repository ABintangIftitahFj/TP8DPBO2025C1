
# TP8DPBO2025C1 - Student Management System

## Janji

Saya **A Bintang Iftitah Fj** dengan NIM **2305995** mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

---

## Database Schema

### Tabel `students`
| Field           | Type        | Deskripsi                             |
|-----------------|-------------|---------------------------------------|
| id              | INT         | Primary Key, Auto Increment           |
| nama            | VARCHAR(100)| Nama lengkap mahasiswa                |
| nim             | VARCHAR(20) | Nomor Induk Mahasiswa (Unique)        |
| no_telp         | VARCHAR(15) | Nomor telepon mahasiswa               |
| tanggal_masuk   | DATE        | Tanggal masuk mahasiswa (YYYY-MM-DD)  |
| id_suku         | INT         | Foreign Key ke tabel `asal_suku`      |

### Tabel `asal_suku`
| Field         | Type        | Deskripsi                     |
|---------------|-------------|-------------------------------|
| id_suku       | INT         | Primary Key, Auto Increment   |
| nama_suku     | VARCHAR(100)| Nama suku                     |
| asal_daerah   | VARCHAR(100)| Daerah asal suku              |

**Relasi**:  
`students.id_suku` → `asal_suku.id_suku`

---

## Fitur Utama
1. **Manajemen Mahasiswa**:
   - Lihat daftar mahasiswa dengan filter suku
   - Tambah mahasiswa baru
   - Edit data mahasiswa
   - Hapus data mahasiswa
   - Validasi form (NIM unik, format tanggal, dll)

2. **Manajemen Suku Asal**:
   - Lihat daftar suku
   - Tambah suku baru
   - Edit data suku
   - Hapus data suku

3. **Dashboard Statistik**:
   - Total mahasiswa terdaftar
   - Total suku terdaftar

4. **Teknologi**:
   - PHP MVC Architecture
   - MySQL Database
   - Bootstrap 5 untuk UI
   - Font Awesome untuk ikon
   - Responsive Design

---

## Kelas dan Struktur Program

### Model
1. **Student.php**  
   - Class untuk operasi CRUD tabel `students`
   - Method: `getAll()`, `create()`, `update()`, `delete()`, `countAll()`

2. **Suku.php**  
   - Class untuk operasi CRUD tabel `asal_suku`
   - Method: `getAll()`, `create()`, `update()`, `delete()`, `countAll()`

### Controller
1. **HomeController.php**  
   - Menampilkan dashboard statistik

2. **StudentController.php**  
   - Menangani logika untuk manajemen mahasiswa
   - Method: `index()`, `create()`, `store()`, `edit()`, `update()`, `delete()`

3. **SukuController.php**  
   - Menangani logika untuk manajemen suku
   - Method: `index()`, `create()`, `store()`, `edit()`, `update()`, `delete()`

### View
- **Templates**:  
  - `header.php`: Navigasi global + CSS
  - `footer.php`: Script JS + penutup HTML

- **Halaman**:
  - `home/main.php`: Dashboard statistik
  - `students/index.php`: Daftar mahasiswa
  - `students/create.php`: Form tambah mahasiswa
  - `students/edit.php`: Form edit mahasiswa
  - `suku/index.php`: Daftar suku
  - `suku/create.php`: Form tambah suku
  - `suku/edit.php`: Form edit suku

---

## Struktur Folder

tp8dpbo2025c1/
├─ assets/ # File CSS & JS
│ ├─ css/
│ └─ js/
│
├─ config/
│ └─ Connection.php # Konfigurasi koneksi DB
│
├─ controllers/ # Logic Controller
│ ├─ HomeController.php
│ ├─ StudentController.php
│ └─ SukuController.php
│
├─ model/ # Class Model
│ ├─ Student.php
│ └─ Suku.php
│
├─ view/ # Tampilan
│ ├─ home/
│ ├─ students/
│ └─ suku/
│
├─ templates/ # Template UI
│ ├─ header.php
│ └─ footer.php
│
├─ index.php # Entry Point
└─ .htaccess # Konfigurasi routing

## Dokumentasi 

![Recording 2025-05-02 104419](https://github.com/user-attachments/assets/d429eb4a-2947-4389-abbb-6d15ea0f2375)






