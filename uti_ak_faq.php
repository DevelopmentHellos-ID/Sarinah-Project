<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fab fa-medapps icon-page"></i>
                <font class="text-page">Utility</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Utility</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Info Aktifasi</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [Info Aktifasi] FAQ</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <center>
                        1. JIKA MELAKUKAN AKTIVASI KE SERVER DEVELOPMENT, APAKAH BISA MELAKUKAN PENGIRIMAN DATA KE SERVER PRODUCTION?
                        JAWABAN : TIDAK BISA, UNTUK MELAKUKAN PENGIRIMAN DATA KE SERVER PRODUCTION HARUS MELAKUKAN AKTIVASI KE SERVER PRODUCTION. BEGITU PULA SEBALIKNYA.

                        2. BAGAIMANA SAYA MELAKUKAN AKTIVASI ULANG PADA MODUL?
                        JAWABAN : UNTUK MELAKUKAN AKTIVASI ULANG, ANDA PERLU MELAKUKAN RESET DATABASE SEBAGAI BERIKUT:
                        1. PILIH MENU UTILITY-SETTING
                        2. PILIH TAB SETTING DATABASE
                        3. TEKAN TOMBOL RESET DATABASE
                        4. TEKAN OK APABILA ANDA YAKIN SEMUA DATA YANG ADA AKAN DIHAPUS DAN ANDA HARUS MELAKUKAN AKTIVASI ULANG. SEBELUM MENYETUJUI, PASTIKAN ANDA TELAH MELAKUKAN BACK UP DATA (DIJELASKAN PADA POIN 3).
                        5. AKAN MUNCUL FORM AKTIVASI
                        6. PILIH SETTING SERVER PADA FORM AKTIVASI
                        7. PASTIKAN URL MENGARAH KE HTTPS://ESBBCEXT01.BEACUKAI.GO.ID:9082/PENERIMAANDATASVC/WSTPB
                        8. TES KONEKSI DENGAN MENEKAN TOMBOL TES KONEKSI
                        9. LAKUKAN AKTIVASI

                        3. JIKA SUDAH AKTIVASI KE SERVER DEVELOPMENT, KEMUDIAN INGIN MENGIRIM DATA KE SERVER PRODUCTION BAGAIMANA?
                        JAWABAN : UNTUK DAPAT MENGIRIM DATA KE SERVER PRODUCTION, ANDA PERLU MELAKUKAN AKTIVASI ULANG SEPERTI YANG TELAH DIJELASKAN PADA POIN 2. SEBELUM MELAKUKAN AKTIVASI ULANG, PASTIKAN ANDA MELAKUKAN BACK UP DATA DENGAN LANGKAH BERIKUT:
                        1. LAKUKAN BACK UP DATA DENGAN MENGAKSES MENU UTILITY-BACK UP
                        2. PILIH DOKUMEN YANG ANDA INGIN BACK UP
                        3. PILIH LOKASI DAN NAMA FILE (.XLS) BACK UP DATA ANDA
                        4. TEKAN TOMBOL BACK UP

                        4. SAAT MENGIRIM DATA, SAYA MENDAPATKAN RESPON PARSING GAGAL, ID MODUL, USER PASSWORD SALAH. APA YANG HARUS SAYA LAKUKAN?
                        JAWABAN : ADA BEBERAPA KEMUNGKINAN:
                        1. ANDA MELAKUKAN AKTIVASI KE SERVER DEVELOPMENT NAMUN MELAKUKAN PENGIRIMAN DATA KE SERVER PRODUCTION, BEGITU PULA SEBALIKNYA
                        2. ANDA MELAKUKAN PENGGANTIAN PASSWORD DI PORTAL PENGGUNA JASA, NAMUN TIDAK MELAKUKAN PENGGANTIAN PASSWORD PADA MODUL

                        5. SAYA MENGGANTI PASSWORD DI PORTAL, BAGAIMANA SAYA BISA MENGGANTI PASSWORD DI MODUL?
                        JAWABAN :
                        1. PILIH MENU UTILITY-AKTIVASI INFO
                        2. TEKAN TOMBOL EDIT
                        3. MASUKKAN PASSWORD YANG SESUAI DENGAN PORTAL
                        4. TEKAN TOMBOL SIMPAN

                        6. SAYA MEMILIKI DATABASE MYSQL SENDIRI PADA SERVER SAYA, BAGAIMANA CARA MENGINTEGRASIKAN DENGAN MODUL?
                        1. PADA DATABASE ANDA, BUAT USER BARU DENGAN USERNAME: BEACUKAI DAN PASS: BEACUKAI
                        2. SETELAH ITU BUAT SKEMA DATABASE BARU DENGAN NAMA SKEMA: TPBDBBC23 (UNTUK BC 2.3)
                        3. IMPORT DUMPFILE TPBDBBC23.SQL YANG TELAH DISEDIAKAN PADA FOLDER INSTALLASI MODUL
                        4. TUNGGU HINGGA SELURUH SCRIPT MYSQL BERHASIL DIEKSEKUSI
                        5. LAKUKAN TES KONEKSI DATABASE PADA MODUL

                        7. SAYA MEMILIKI BANYAK PERUSAHAAN DAN SAYA INGIN MEMISAHKAN DATA PERUSAHAAN. BAGAIMANA CARANYA?
                        JAWABAN : PEMISAHAN BISA DILAKUKAN DENGAN MEMISAHKAN SKEMA DATABASE. PEMISAHAN INI BISA MENGGUNAKAN FITUR GENERATE DATABASE
                        1. PADA FORM LOGIN, PILIH SETTING DATABASE
                        2. GANTI NAMA TPBDB MENJADI NAMA SKEMA BARU (MSL DATABASEBARU) 10.102.104.117:3306/DATABASEBARU
                        3. TEKAN TOMBOL GENERATED DATABASE
                        4. TUNGGU HINGGA MUNCUL PESAN DATABASE BERHASIL DIBUAT
                        5. LAKUKAN TES KONEKSI DATABASE

                        8. BAGAIMANA CARA MENENTUKAN ALAMAT KONEKSI DATABASE?
                        JAWABAN : PADA SETTING DATABASE TERDAPAT TIGA BAGIAN YANG BISA DISESUAIKAN DENGAN KEBUTUHAN PERUSAHAAN. CONTOH: LOCALHOST:3306/TPBDB
                        1. LOCALHOST : MERUPAKAN ALAMAT DATABASE. JIKA PERUSAHAAN TELAH MEMILIKI DATABASE, LOCALHOST INI BISA DIUBAH MENJADI IP
                        2. 3306 : PORT, BISA DISESUAIKAN DENGAN PORT PERUSAHAAN
                        3. TPBDB : NAMA SKEMA DATABASE. BISA DIGANTI SESUAI DENGAN KEBUTUHAN PERUSAHAAN.
                        PERLU DIINGATKAN BAHWA SATU SKEMA UNTUK SATU AKTIVASI.

                        9. HASIL TEST SETTING SERVER YANG SAYA DAPATKAN ADALAH 'NOT CONNECTED', APA YANG HARUS SAYA LAKUKAN?
                        JAWABAN : ADA BEBERAPA TAHAPAN YANG DAPAT ANDA LAKUKAN:
                        1. ANDA DAPAT MELAKUKAN COPY URL (HTTPS://ESBBCEXT01.BEACUKAI.GO.ID:9082/PENERIMAANDATASVC/WSTPB) YANG TERDAPAT PADA SETTING SERVER KEMUDIAN PASTE PADA BROWSER PC ANDA. JIKA TIDAK MENAMPILKAN SECURITY CERTIFICATE, ANDA DAPAT MELANJUTKAN KE TAHAP 2.
                        2. ANDA DAPAT MELAKUKAN TETHERING HP, MODEM ATAU MENGGUNAKAN KONEKSI DI LUAR KANTOR ANDA. HAL TERSEBUT DILAKUKAN UNTUK MENGETAHUI APAKAH KONEKSI KE SERVER BEA CUKAI TIDAK DAPAT DILAKUKAN KARENA KEAMANAN JARINGAN KANTOR ANDA. APABILA STATUS SETTING SERVER TETAP 'NOT CONNECTED', ANDA DAPAT MELANJUTKAN KE TAHAP 3.
                        3. APABILA 2 TAHAP DIATAS TIDAK BERHASIL MAKA DAPAT MENGHUBUNGI PIHAK BEA CUKAI.

                        10. SAYA MENGINSTALL MODUL DI BERBAGAI PC, APAKAH BISA MODUL-MODUL TERSEBUT TERINTEGRASI MENGGUNAKAN SATU DATABASE SAJA?
                        JAWABAN : BISA
                        1. PASTIKAN PC TEMPAT DATABASE SELALU MENYALA (SERVER DATABASE)
                        2. CEK IP DARI PC SERVER TSB (MSL 10.101.102.103)
                        3. PADA FAQ POIN 8, GANTI ALAMAT DATABASE (LOCALHOST) MENJADI IP PC SERVER (MSL 10.101.102.103:3306/TPBDB)

                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>