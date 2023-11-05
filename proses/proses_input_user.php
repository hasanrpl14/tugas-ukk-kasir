<?php 

include "koneksi.php"; 
// include itu untuk mengambil

    $nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "" ;
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $id_level = (isset($_POST['id_level'])) ? htmlentities($_POST['id_level']) : "" ;
    // $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "" ;
    

    
    if(!empty($_POST['input_user_validate'])){
        
        $query = mysqli_query($conn, "INSERT INTO user (nama,username,password)
        values ('$nama','$username','$password')");
        // untuk menghubungkan dan menambahkan data dari database dan dari dalam tabel user
    
        // $hasil = mysqli_fetch_array($query);
        // ini variabel untuk menyimpan atau mengambi dari data di atas  $query = mysqli_query
            if($query){
                $message = '<script>alert("Data gagal dimasukkan")</script>';
            }else{
                $message = '<script>alert("Data berhasil dimasukkan");
                window.location"../user"</script>';
            }
        }echo $message;
?> 