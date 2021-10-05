<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1</title>
    <style>
        th,td{
            padding: 4px 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $arr = array(
        array('tenHV' => 'Nguyễn Trương Bảo Quyết', 'Lop' => 'JAVA10', 'DiemCSS' => 90, 'DiemPHP' => 70, 'DiemJAVA' => 98),
        array('tenHV' => 'Nguyễn Quang Đức', 'Lop' => 'PHP26', 'DiemCSS' => 80, 'DiemPHP' => 95, 'DiemJAVA' => 75),
        array('tenHV' => 'Trần Nhật Vinh', 'Lop' => 'JAVA11', 'DiemCSS' => 86, 'DiemPHP' => 80, 'DiemJAVA' => 95),
        array('tenHV' => 'Trần Nguyễn Thành Luân', 'Lop' => 'PHP27', 'DiemCSS' => 72, 'DiemPHP' => 90, 'DiemJAVA' => 71),
        array('tenHV' => 'Trương Văn Công Nhất', 'Lop' => 'PHP26', 'DiemCSS' => 100, 'DiemPHP' => 95, 'DiemJAVA' => 80),
        array('tenHV' => 'Hoàng Văn Nguyên', 'Lop' => 'JAVA10', 'DiemCSS' => 80, 'DiemPHP' => 100, 'DiemJAVA' => 80)
    );
    //    echo '<pre>';print_r($arr);echo '</pre>';	

    ?>
    a, Hiển thị danh sách học viên có TenHV có chứa từ "Nguyễn":
    <?php
    foreach ($arr as $key => $item) {
        $find = strpos($item['tenHV'], 'Nguyễn');
        if (is_numeric($find)) {
            $arrFindIndex[] = $key;
        }
    }
    // echo '<pre>';print_r($arrFindIndex);echo '</pre>';
    foreach ($arrFindIndex as $index) {
        $newArr[] = $arr[$index];
    }
    // echo '<pre>';print_r($newArr);echo '</pre>';    

    ?>
    <table border='1px' style="border-collapse:collapse;">
        <tr>
            <th>TenHV</th>
            <th>Lop</th>
            <th>DiemCSS</th>
            <th>DiemPHP</th>
            <th>DiemJAVA</th>
        </tr>
        <?php
        foreach ($newArr as $item) {
        ?>
            <tr>
                <td><?php echo $item['tenHV'] ?> </td>
                <td><?php echo $item['Lop'] ?> </td>
                <td><?php echo $item['DiemCSS'] ?> </td>
                <td><?php echo $item['DiemPHP'] ?> </td>
                <td><?php echo $item['DiemJAVA'] ?> </td>
            </tr>
        <?php
        }
        ?>
    </table>
    
    b,Tính tổng điểm của các học viên thuộc lớp PHP
    <?php
        unset($arrFindIndex);
        foreach ($arr as $key => $item) {
            $find = strpos($item['Lop'], 'PHP');
            if (is_numeric($find)) {
                $arrFindIndex[] = $key;
            }
        }
        // echo '<pre>';print_r($arrFindIndex);echo '</pre>';
        foreach ($arrFindIndex as $index) {
            $arrPHP[] = $arr[$index];
        }
        // echo '<pre>';print_r($arrPHP);echo '</pre>';  
        foreach ($arrPHP as $item) {
            $tong = $item['DiemCSS'] + $item['DiemPHP'] + $item['DiemJAVA'];
            echo "<p>".'Tổng điểm của học viên '.$item['tenHV'].' thuộc lớp PHP là: '.$tong."</p>";
        }
    ?>	
    c,Học viên lớp JAVA nào có điểm CSS cao nhất?
    <?php
        unset($arrFindIndex);
        foreach ($arr as $key => $item) {
            $find = strpos($item['Lop'], 'JAVA');
            if (is_numeric($find)) {
                $arrFindIndex[] = $key;
            }
        }
        foreach ($arrFindIndex as $index) {
            $arrJAVA[] = $arr[$index];
        }
        // echo '<pre>';print_r($arrJAVA);echo '</pre>';
        $maxPoint = 0;
        $index = 0;
        foreach ($arrJAVA as $key => $item) {
            if($item['DiemCSS']>$maxPoint) {
                $maxPoint = $item['DiemCSS'];
                $index = $key;
            }
        }
        echo 'Học viên lớp JAVA: '.$arrJAVA[$index]['tenHV'].' có điểm CSS cao nhất với số điểm '.$maxPoint;
    ?>	 
    d,Tính DTB (điểm trung bình) môn PHP của lớp PHP, DTB môn JAVA của lớp JAVA. Lớp nào có DTB môn cao hơn.
    <?php
        $tongDiem = 0;
        $count = count($arrPHP);
        foreach ($arrPHP as $item) {
            $tongDiem += $item['DiemPHP'];
        }
        $DTB_PHP=round($tongDiem/$count, 2);
        echo '<br> Điểm Trung bình môn PHP của lớp PHP là: '.$DTB_PHP;
        $tongDiem = 0;
        $count = count($arrJAVA);
        foreach ($arrJAVA as $item) {
            $tongDiem += $item['DiemJAVA'];
        }
        $DTB_JAVA=round($tongDiem/$count, 2);
        echo '<br> Điểm Trung bình môn JAVA của lớp JAVA là: '.$DTB_JAVA;
        if ($DTB_JAVA > $DTB_PHP) {
            echo '<br> Lớp JAVA có điểm trung bình môn cao hơn.';
        } else if($DTB_JAVA < $DTB_PHP) {
            echo '<br> Lớp PHP có điểm trung bình môn cao hơn.';
        }else {
            echo '<br> Hai lớp có điểm trung bình môn bằng nhau';
        }
    ?>	


</body>

</html>