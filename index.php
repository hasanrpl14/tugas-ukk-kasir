            <?php   
            session_start();
            if(isset($_GET['x']) && $_GET['x'] == 'home'){
                $page = "home.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'menu'){
                $page = "menu.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'order'){
                $page = "order.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'pelanggan'){
                $page = "customer.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'user'){
                // ini session mengambil dari sesion pada file proses login.php
                // ini buat untuk membatasi hak akses dari setiap level yang login
                // if ($_SESSION['id_level_tugas']==1){ ini artinya jika id_level_tugas == 1 maka tampilkan 
                // halaman  user jika bukan id_level 1 maka tidak akan ditampilkan page user
                if ($_SESSION['id_level_tugas']==1){
                    $page = "user.php";
                    include "main.php";
                }else{
                    $page = "home.php";
                    include "main.php";
                }
            }elseif(isset($_GET['x']) && $_GET['x'] == 'report'){
                if ($_SESSION['id_level_tugas']==1){
                    $page = "report.php";
                    include "main.php";
                }else{
                    $page = "home.php";
                    include "main.php";
                }
            }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                include "login.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'logout'){
                include "proses/proses logout.php";
            }
            else{
                $page = "home.php";
                include "main.php";
            }

            ?>
      
