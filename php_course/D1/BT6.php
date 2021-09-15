<?php ob_start();?>
<?php 
    $n=rand(10,21);
    switch ($n){
        case $n%2==0:
            header ('location:https://it.vinaenter.vn/');
            break;
        case $n%3==0:
            header ('location:https://www.24h.com.vn/');
            break;
        case $n%6==0:
            header ('location:http://google.com');
            break;
        default:
           echo "<a href='BT6.php'>Bấm để tải lại trang.</a>";
    }
?>
<?php ob_end_flush();?>