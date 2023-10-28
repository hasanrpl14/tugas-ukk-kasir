
            <!-- Konten -->
            <?php 
            if(isset($_GET['x']) && $_GET['x'] == 'home'){
                $page = "home.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'order'){
                $page = "order.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'produk'){
                $page = "produk.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'pelanggan'){
                $page = "customer.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'report'){
                $page = "report.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                include "login.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'logout'){
                include "proses/proses logout.php";
            }
            else{
                include "login.php";
            }

            ?>
            <!-- End Konten -->
