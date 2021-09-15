<?php 
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $thanhtien = $soluong * $gia;
?>
<p>Kết quả:</p>
<p>Loại hoa: hoa hồng</p>
<p>Số lượng: <?php echo $soluong;?></p>
<p>Giá: <?php echo number_format($gia);?></p>
<p>Thành tiền: <?php echo number_format($thanhtien);?></p>