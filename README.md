# PPDB Sekolah Berbasis Web

## Deskripsi

Aplikasi ini dibuat menggunakan Framework Codeigniter 4, dan desain UI berasal dari Candy, aplikasi ini dibuat untuk membantu Sekolah dalam melaksanakan PPDB secara daring, UI dibuat semudah mungkin untuk dipahami dan mempermudah Operator Sekolah merekap Data.

Demo Web : [Klik Disini](https://habib.masuk.id)

Screenshot Tampilah Web Visitor :

![alt text](https://i.ibb.co/RTG9zBw/Web-capture-18-12-2021-74040-localhost.jpg)


## Fitur

- Dibangun menggunakan Framework Terbaru Codeigniter 4
- Database MariaDB 10.4.22
- JQuery
- Bootstrap (Template By Stisla)
- Fontawesome
- Responsive
- Ajax (Kirim data, pindah halaman tanpa reload)
- Autentikasi by MyAuth Library
- Cegah Duplikasi pendaftarn berdasakan NIK

User atau Pendaftar :
- Rincian pendaftar, data jurusan, sisa kuota
- Rincian jumlah pendaftar berdasarkan asal sekolah
- Informasi pendaftaran, kontak pendaftaran, syarat pendaftaran
- Menu cetak formulir
- Menu pengumuman untuk melihat pengumuman yang dibuat oleh admin sekolah
- Notifikasi WA apabila berhasil mendaftar (Perlu langganan/layanan WA Gateway Pihak ketiga)
- Download formulir dalam format PDF

Operator/Admin Sekolah :
- Edit User dan ubah status menjadi Diterima/Pending
- Melihat rincian pendaftar berdasarkan sekolah, jurusan (coming soon), jenis kelamin
- Input jurusan dan kuota
- Data pendaftar dan Export Excel Massal berdasarkan pendaftar diterima/pending
- Ubah syarat/kontak pendaftaran yang tampil di halaman pendaftar
- Ubah device untuk Notifikasi Wa/Wa brodcast (Perlu langganan/layanan WA Gateway Pihak ketiga)
- Kirim Pesan massal kepada pendaftar (Perlu langganan/layanan WA Gateway Pihak ketiga)
- Ubah pengumuman yang akan dilihat pengunjung
- Manajemen User, dan pengaturan Aplikasi

## System Requirement

- PHP Versi 7.3 atau yang terbaru
- Database MariaDB 10.4.22
- Wa Gateway (Opsional)
- Extensi PHP GD, MBstring harus diaktifkan

## Setup

- Download Source Code .zip dan Database
- Database mungkin tidak tersedia di GitHub, silahkan hubungi saya di WA `082276880570` atau email ke `irfan.akbarihabibi@gmail.com`
- Buat Folder baru didalam folder `htdocs`
- Ekstrak ke dalam folder tsb
- Ubah konfigurasi di file `.env`
- Pada baris `CI_ENVIRONMENT = development` ubah menjadi `CI_ENVIRONMENT = production`
- Pada baris `# app.baseURL = 'http://127.0.0.1'` silahkan ubah sesuai base url anda jika di hosting/localhost dan hilangkan tanda `#`
- Dibagian Database ubah dan sesuaikan hostname, username, password, dan nama database
- `Ctrl + S` atau Save
- Untuk upload di hosting atau VPS anda dapat mencari tutorial `Upload Codeigniter 4 di Hosting`

## Note

Aplikasi ini mungkin masih terdapat bug atau kekurangan di beberapa bagian. Aplikasi ini bebas untuk digunakan ataupun dimodifikasi ulang namun tidak untuk dijual.

## Referensi 
- Candy PPDB for UI
- Codeigniter Documentation
- JQuery Documentation
- Stackoverflow
- Youtube [Web Programming UNPAS](https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg)
- Grup [Codeigniter Indonesia](https://web.facebook.com/groups/codeigniter.id) 
- dll



