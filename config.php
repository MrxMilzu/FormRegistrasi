<?php
       $server    = "localhost";
       $user      = "root";
       $password  = "";
       $nama_database = "pendaftaran_siswa";
       $db = mysqli_connect($server, $user, $password, $nama_database);
       if( !$db ) {
                die("ERROR UNTUK TERHUBUNG: " . mysqli_connect_error());
       }
?>
