<?php
    // Bài 2
    echo "<span style='text-decoration: underline;font-weight:bold'>Bài 2 (15 điểm):</span><br/>";
    // 2a
    echo "a,Tạo các biến sau:<br/>";
    $tenHoa = "Hoa mẫu đơn";
    $giaBan = 120000;
    $soLuong = 4;
    $thanhTien = $giaBan*$soLuong;  
    // 2b  
    echo "<br/>b, In các dòng sau:<br/>";
    echo "- Tên hoa: $tenHoa";
    echo "<br/>- Giá bán: $giaBan VNĐ - Số lượng: $soLuong";
    echo "<br/>- Thành tiền: $thanhTien VNĐ <br/>";
    // 2c
    echo "<br/>c, Dùng hàm thay thế chuỗi và định dạng số để in ra như sau:<br/>";
    $tenHoa = str_replace("mẫu đơn", "Mẫu Đơn", $tenHoa);
    $giaBan = number_format($giaBan,0,',','.');
    $thanhTien = number_format($thanhTien,0,',','.');
    echo "- Tên hoa: $tenHoa";
    echo "<br/>- Giá bán: $giaBan đồng - Số lượng: $soLuong";
    echo "<br/>- Thành tiền: $thanhTien đồng";
    // Bài 3
    echo "<br/><br/><span style='text-decoration: underline;font-weight:bold'>Bài 3 (5 điểm):</span><br/>";
    $banKinh = 50;
    define("PI",3.14);
    $chuVi = 2*$banKinh*PI;
    echo "banKinh = $banKinh <br/>";
    echo "PI =".PI."<br/>";
    echo "chuVi=2 * banKinh * PI = $chuVi";
    // Bài 4
    echo "<br/><br/><span style='text-decoration: underline;font-weight:bold'>Bài 4 (30 điểm):</span><br/>";
    // 4a
    echo "a,";
    $n = 10;
    $tongChan=0;
    for($i=1; $i<=$n ; $i++){
        if($i%2==0){
        $tongChan += $i;
        };
    };
    if($tongChan%3==0){
        echo "Tổng chi hết cho 3";
    }else echo "Tổng không chia hết cho 3";
    // 4b
    echo "<br/>b,";
    $tongLe=0;
    $j=1;
    while($j<=$n){
        if($j%2!=0){
            $tongLe += $j;
        };
        $j++;
    };
    echo "Chữ số tận cùng của tổng là: ".$tongLe%10;
    //4c
    echo "<br/>c,";
    $a = rand(0,50);
    $b = rand(0,50);
    $c = rand(0,50);
    echo "<br />Số nhỏ nhất trong ba số là: ".min($a, $b, $c);
    echo "<br />Số lớn nhất trong ba số là: ".max($a, $b, $c);
    // Bài 5
    echo "<br/><br/><span style='text-decoration: underline;font-weight:bold'>Bài 5 (10 điểm):</span><br/>";
    // 5a
    echo "a,<br/>";
    $A= rand(0,500);
    $donVi = $A%10;
    $chuc = $A/10%10;
    $tram = $A/100%10;
    // echo "<br/>". $A;
    // echo "<br/>". $tram;
    // echo "<br/>". $chuc;
    // echo "<br/>". $donVi;
    echo "Tổng của các chữ số là: ". ($donVi + $chuc + $tram);
    // 5b
    echo "<br/>b,<br/>";
    $x = rand(1,9);
    switch($x){
        case 1: 
            echo "Số ngẫu nhiên là số $x, đọc là một.";
            break;
        case 2: 
            echo "Số ngẫu nhiên là số $x, đọc là hai.";
            break;
        case 3: 
            echo "Số ngẫu nhiên là số $x, đọc là ba.";
            break;
        case 4: 
            echo "Số ngẫu nhiên là số $x, đọc là bốn.";
            break;
        case 5: 
            echo "Số ngẫu nhiên là số $x, đọc là năm.";
            break;
        case 6: 
            echo "Số ngẫu nhiên là số $x, đọc là sáu.";
            break;
        case 7: 
            echo "Số ngẫu nhiên là số $x, đọc là bảy.";
            break;
        case 8: 
            echo "Số ngẫu nhiên là số $x, đọc là tám.";
            break;
        case 9: 
            echo "Số ngẫu nhiên là số $x, đọc là chín.";
    };    

?>

