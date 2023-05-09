<?php
//memanggil file bagian atas
include_once 'top.php';
include_once 'koneksi.php';
include_once 'models/Produk.php';
include_once 'models/Jenis_Produk.php';

//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1>Selamat datang di web admin</h1>
            <?php
            error_reporting(0);
            $url = $_GET['url'];
            if ($url == 'dashboard') {
                include_once 'dashboard.php';
            } else if (!empty($url)) {
                include_once '' . $url . '.php';
            } else {
                'dashboard.php';
            }
            ?>
        </div>
    </main>
</div>

<?php
//memanggil file bagian bottom
include_once 'bottom.php';
?>