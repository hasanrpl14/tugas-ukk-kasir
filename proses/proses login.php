<?php
// echo md5('password');
// md5() buat mengenscripsi data password

session_start();
include "koneksi.php"; 
// include itu untuk mengambil

    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "" ;

    if(!empty($_POST['submit_validasi'])){
        
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' && password = '$password' ");
    // untuk menghubungkan dan memanggil data dari database dan isi dari dalam tabel user

    $hasil = mysqli_fetch_array($query);
    // ini variabel untuk menyimpan atau mengambi dari data di atas  $query = mysqli_query
        if($hasil){
            $_SESSION['username_tugas'] = $username;
            header('location:../index.php?x=home');
        }else{ ?>
            <script>
                alert('Username / Password salah');
                window.location='../login.php'
            </script>
<?php
        }
    }
?>

<!-- pw : 123
username : hasan@gmail.com -->