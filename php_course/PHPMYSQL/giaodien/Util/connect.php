<?php
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'myfriends';

    // Tạo kết nối
    $connect = new mysqli($localhost,$username,$password,$database);

    //Thiết lập font chữ tiếng việt
    $connect->set_charset('utf8');

    // Kiểm tra kết nối
    if($connect->connect_error){
        die("Connection failed: " . $conn->connect_error);        
    }

?>	