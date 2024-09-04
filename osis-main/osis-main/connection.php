<?php
    $connection = mysqli_connect("localhost", "root", "", "osis");
    
    if(mysqli_connect_errno()){
        echo "koneksi database gagal: " . mysqli_connect_error();
    }

    return array(
        'host' => "localhost",
        'username' => "root",
        'password' => "",
        'dbname' => "osis"
        
    );
?>