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
        }
    </style>
</head>
<body>
    <p>Tạo Mảng lưu trữ các học viên:</p>
    <?php
        $Arr = array(
             array('TenHV' => 'Nguyễn Trương Bảo Quyết','Lop'=>'JAVA10',    'DiemCSS'=>90,  'DiemPHP'=>70,  'DiemJAVA'=>98),   
             array('TenHV' => 'Nguyễn Quang Đức',       'Lop'=>'PHP26',     'DiemCSS'=>80,  'DiemPHP'=>95,  'DiemJAVA'=>75),   
             array('TenHV' => 'Trần Nhật Vinh',         'Lop'=>'JAVA11',    'DiemCSS'=>86,  'DiemPHP'=>80,  'DiemJAVA'=>95),   
             array('TenHV' => 'Trần Nguyễn Thành Luân', 'Lop'=>'PHP27',     'DiemCSS'=>72,  'DiemPHP'=>90,  'DiemJAVA'=>71),   
             array('TenHV' => 'Trương Văn Công Nhất',   'Lop'=>'PHP26',     'DiemCSS'=>100,  'DiemPHP'=>95,  'DiemJAVA'=>80),   
             array('TenHV' => 'Hoàng Văn Nguyên',       'Lop'=>'JAVA10',    'DiemCSS'=>80,  'DiemPHP'=>100,  'DiemJAVA'=>80),   
        );
    ?>
    <table border="1px" style="border-collapse:collapse">
        <tr>
            <th>TenHV</th>
            <th>Lop</th>
            <th>DiemCSS</th>
            <th>DiemPHP</th>
            <th>DiemJAVA</th>
        </tr>
        <?php
            foreach($Arr as $item){
                ?>
                    <tr>
                        <td><?php echo $item['TenHV']?></td>
                        <td><?php echo $item['Lop']?></td>
                        <td><?php echo $item['DiemCSS']?></td>
                        <td><?php echo $item['DiemPHP']?></td>
                        <td><?php echo $item['DiemJAVA']?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <p>a, Hiển thị danh sách học viên có TenHV có chứa từ "Nguyễn" theo dạng table như trên.</p>
    <?php
        foreach ($Arr as $key => $item) {
            $find = strpos($item['TenHV'], 'Nguyễn');
            if(is_numeric($find)) {
                $ArrFindIndex[] = $key; 
            }
        }  
        foreach ($ArrFindIndex as $index) {
            $newArr[] = $Arr[$index]; 
        } 
        
    ?>
    <table border="1px" style="border-collapse:collapse">
        <tr>
            <th>TenHV</th>
            <th>Lop</th>
            <th>DiemCSS</th>
            <th>DiemPHP</th>
            <th>DiemJAVA</th>
        </tr>
        <?php
            foreach($newArr as $item){
                ?>
                    <tr>
                        <td><?php echo $item['TenHV']?></td>
                        <td><?php echo $item['Lop']?></td>
                        <td><?php echo $item['DiemCSS']?></td>
                        <td><?php echo $item['DiemPHP']?></td>
                        <td><?php echo $item['DiemJAVA']?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <p>b, Tính tổng điểm của các học viên thuộc lớp PHP</p>
    <?php
        unset($ArrFindIndex);
        foreach ($Arr as $key => $item) {
            $find = strpos($item['Lop'], 'PHP');
            if(is_numeric($find)) {
                $ArrFindIndex[] = $key; 
            }
        } 
        foreach ($ArrFindIndex as $index) {
            $ArrPHP[] = $Arr[$index]; 
        }
        foreach ($ArrPHP as $item) {
            $tong = $item['DiemCSS'] + $item['DiemPHP'] + $item['DiemJAVA'];
            echo 'Tổng điểm của học viên '.$item['TenHV'].' thuộc lớp PHP là: '.$tong.'<br/>';
        }
    ?>
    <p>c, Học viên lớp JAVA nào có điểm CSS cao nhất?</p>
    <?php
        unset($ArrFindIndex);
        foreach ($Arr as $key => $item) {
            $find = strpos($item['Lop'], 'JAVA');
            if(is_numeric($find)) {
                $ArrFindIndex[] = $key; 
            }
        } 
        foreach ($ArrFindIndex as $index) {
            $ArrJAVA[] = $Arr[$index]; 
        }
        // echo '<pre>';
        //     print_r($ArrJAVA);
        // echo '</pre>';
        $maxPoint = 0;
        $index = 0;
        foreach($ArrJAVA as $key => $item) {
            if($item['DiemCSS']>$maxPoint) {
                $maxPoint = $item['DiemCSS'];
                $index = $key;
            }
        }
        echo 'Học viên lớp JAVA: '.$ArrJAVA[$index]['TenHV'].' có điểm CSS cao nhất với số điểm '.$maxPoint;

    ?>
    <p>d, Tính DTB (Điểm trung bình) môn PHP của lớp PHP, DTB môn JAVA của lớp JAVA. Lớp nào có DTB môn cao hơn?</p>
    <?php
        $DTB = 0;
        foreach($ArrPHP as $item) {
            $DTB += ($item['DiemCSS'] + $item['DiemPHP'] + $item['DiemJAVA'])/3; 
        }
        $DTB_PHP= round($DTB/count($ArrPHP),2);

        $DTB = 0;
        foreach($ArrJAVA as $item) {
            $DTB += ($item['DiemCSS'] + $item['DiemPHP'] + $item['DiemJAVA'])/3; 
        }
        $DTB_JAVA= round($DTB/count($ArrJAVA),2);
        if ($DTB_JAVA > $DTB_PHP) {
            echo 'Lớp Java có điểm trung bình môn cao nhất với số điểm là: '.$DTB_JAVA;
        } elseif ($DTB_JAVA < $DTB_PHP) {
            echo 'Lớp PHP có điểm trung bình môn cao nhất với số điểm là: '.$DTB_PHP;

        } else {
            echo 'Hai lớp có điểm trung bình môn bằng nhau'; 
        }
    ?>    
</body>
</html>