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
    <div class="row" id="row-faq">
        <div class="col-xl-4">
            <img src="assets/img/svg/faq-animate.svg" alt="">
        </div>
        <div class="col-xl-8">
            <!-- begin #accordion -->
            <div id="accordion" class="accordion">
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center" data-toggle="collapse" data-target="#collapseOne">
                        <i class="fa fa-circle fa-fw text-blue mr-2 f-s-8"></i> 1. JIKA MELAKUKAN AKTIVASI KE SERVER DEVELOPMENT, APAKAH BISA MELAKUKAN PENGIRIMAN DATA KE SERVER PRODUCTION?
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            JAWABAN : TIDAK BISA, UNTUK MELAKUKAN PENGIRIMAN DATA KE SERVER PRODUCTION HARUS MELAKUKAN AKTIVASI KE SERVER PRODUCTION. BEGITU PULA SEBALIKNYA.
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseTwo">
                        <i class="fa fa-circle fa-fw text-indigo mr-2 f-s-8"></i> 2. BAGAIMANA SAYA MELAKUKAN AKTIVASI ULANG PADA MODUL?
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            JAWABAN : UNTUK MELAKUKAN AKTIVASI ULANG, ANDA PERLU MELAKUKAN RESET DATABASE SEBAGAI BERIKUT:
                            <ul>
                                <li>1. PILIH MENU UTILITY-SETTING</li>
                                <li>2. PILIH TAB SETTING DATABASE</li>
                                <li>3. TEKAN TOMBOL RESET DATABASE</li>
                                <li>4. TEKAN OK APABILA ANDA YAKIN SEMUA DATA YANG ADA AKAN DIHAPUS DAN ANDA HARUS MELAKUKAN AKTIVASI ULANG. SEBELUM MENYETUJUI, PASTIKAN ANDA TELAH MELAKUKAN BACK UP DATA (DIJELASKAN PADA POIN 3).</li>
                                <li>5. AKAN MUNCUL FORM AKTIVASI</li>
                                <li>6. PILIH SETTING SERVER PADA FORM AKTIVASI</li>
                                <li>7. PASTIKAN URL MENGARAH KE HTTPS://ESBBCEXT01.BEACUKAI.GO.ID:9082/PENERIMAANDATASVC/WSTPB</li>
                                <li>8. TES KONEKSI DENGAN MENEKAN TOMBOL TES KONEKSI</li>
                                <li>9. LAKUKAN AKTIVASI</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseThree">
                        <i class="fa fa-circle fa-fw text-teal mr-2 f-s-8"></i> 3. JIKA SUDAH AKTIVASI KE SERVER DEVELOPMENT, KEMUDIAN INGIN MENGIRIM DATA KE SERVER PRODUCTION BAGAIMANA?
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            JAWABAN : UNTUK DAPAT MENGIRIM DATA KE SERVER PRODUCTION, ANDA PERLU MELAKUKAN AKTIVASI ULANG SEPERTI YANG TELAH DIJELASKAN PADA POIN 2. SEBELUM MELAKUKAN AKTIVASI ULANG, PASTIKAN ANDA MELAKUKAN BACK UP DATA DENGAN LANGKAH BERIKUT:
                            <ul>
                                <li>1. LAKUKAN BACK UP DATA DENGAN MENGAKSES MENU UTILITY-BACK UP</li>
                                <li>2. PILIH DOKUMEN YANG ANDA INGIN BACK UP</li>
                                <li>3. PILIH LOKASI DAN NAMA FILE (.XLS) BACK UP DATA ANDA</li>
                                <li>4. TEKAN TOMBOL BACK UP</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseFour">
                        <i class="fa fa-circle fa-fw text-info mr-2 f-s-8"></i> Collapsible Group Item #4
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseFive">
                        <i class="fa fa-circle fa-fw text-warning mr-2 f-s-8"></i> Collapsible Group Item #5
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseSix">
                        <i class="fa fa-circle fa-fw text-danger mr-2 f-s-8"></i> Collapsible Group Item #6
                    </div>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- begin card -->
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark-darker pointer-cursor d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapseSeven">
                        <i class="fa fa-circle fa-fw text-muted mr-2 f-s-8"></i> Collapsible Group Item #7
                    </div>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end #accordion -->
        </div>
    </div>
    <!-- end row -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>