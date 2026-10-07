Velocity Child Theme Paket Toko Online Toko 15
=================
[toko15.velocitydeveloper.com](https://toko15.velocitydeveloper.com/)

Child Theme for the Velocity System WordPress theme.

### Required
Theme Velocity versi 2.7.0 keatas, [Download](https://github.com/VelocityDeveloper/velocity/releases)

### Required Plugins
**VD Store**, [Download](https://github.com/Velocity-Developer/vd-store/releases) — produk `store_product`,
kategori `store_product_cat`, merek `brand`. Sejak 1.1.0 tema tidak lagi memakai plugin Velocity Toko
maupun Kirki.

Integrasi VD Store ada di `inc/vd-store.php`, `css/vd-store.css`, dan template override di folder
`vd-store/` (arsip, kategori, merek, detail produk). Pencarian mencari produk.

### Beranda
Halaman ber-template **Home Template** (`page-home.php`): slider, **isi halaman** (landing page blok —
judul, video, gambar, spesifikasi; sunting lewat editor halaman Home), PRODUK TERBARU (6 produk, tombol
Tambah Keranjang + Whatsapp), lalu KERANJANG BELANJA (`[store_cart]` VD Store) langsung di beranda.

### Widget
Demo tanpa widget: tanpa sidebar, footer = bar kontak (nomor dari Pengaturan VD Store) + hak cipta.
`velocity_tema_widget_sidebar()` dan `velocity_tema_widget_footer()` mengembalikan daftar kosong.

### Halaman
Arsip produk (`/produk/`, kategori, merek, pencarian produk): kolom kiri berisi kotak Kategori untuk
berpindah kategori + Filter & Urutkan VD Store (tanpa daftar kategori). Detail produk: Tambah Keranjang +
tombol Whatsapp (nomor WA toko VD Store). Template **Velocity Toko Pricelist**. Halaman Katalog & Profil
Saya selalu tanpa sidebar.
Halaman Berita (Posts Page di Settings > Reading) memakai tampilan arsip (`home.php` → `archive.php`):
hanya daftar berita berjudul nama halaman, tanpa slider/produk beranda.

### Customizer
Appearance > Customize > **Velocity Toko 15**: Warna (utama, sekunder), Popup Sambutan (aktif/nonaktif +
isi HTML, tampil sekali sehari per pengunjung), Font (judul & teks), Slider Home (5 slot gambar).
Logo & gambar header: Site Identity / Header Image. Latar website: Background tema induk. Warna teks/link:
Theme Colors tema induk.

### Usage
Simply download the zip and upload the zip (velocity-toko15.zip) under your WordPress dashboard at Appearance > Themes. Or extract and upload via FTP at wp-content/themes/.
