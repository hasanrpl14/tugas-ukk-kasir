<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas pbo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Menyisipkan Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />
    Menyisipkan JQuery dan Javascript Bootstrap -->
</head>

<body style="height: 3000px">

    <!-- Header -->
  <?php include "header.php"?>
      <!-- End Header -->

    <div class="container lg">
        <div class="row">
        <!-- Sidebar -->
            <?php include "sidebar.php"?>
            <!-- End Sidebar -->
        

            <!-- Konten -->
            <?php 
            if(isset($_GET['x']) && $_GET['x'] == 'home'){
                include "home.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'order'){
                include "order.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'produk'){
                include "produk.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'pelanggan'){
                include "customer.php";
            }elseif(isset($_GET['x']) && $_GET['x'] == 'report'){
                include "report.php";
            }else{
                include "home.php";
            }

            ?>
            <!-- End Konten -->
        </div>

        <div class="fixed-bottom text-center mb-2">
            Copyright 2023 Hasan
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- 
    <script src="js/bootstrap.min.js"></script> -->
</body>

</html>