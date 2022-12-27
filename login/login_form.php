<?php
    $conn = new mysqli("localhost","root","","usermod");

    if($conn->connect_error){
        die("Lỗi: ".$conn->connect_error);
    }

    
?>