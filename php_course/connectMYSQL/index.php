<?php
    include_once 'connect.php';
    $conn -> query('SET NAMES UTF8');

    $sql = 'SELECT id_hoa, ten_hoa, mo_ta FROM hoa';

    $result = $conn -> query($sql);

    while($rows= $result->fetch_array()){
        echo '<pre>';
            print_r($rows);
        echo '</pre>';

    }