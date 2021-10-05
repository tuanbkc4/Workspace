<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            padding: 4px 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $ar = array(
            array('MaKH' => 'VIP01', 'TenKH' => 'Hồ Văn Quyền',      'DiemTichLuy' => 90),
            array('MaKH' => 'BT02',  'TenKH' => 'Võ Văn Hoà',        'DiemTichLuy' => 80),
            array('MaKH' => 'VIP02', 'TenKH' => 'Nguyễn Văn Tân',    'DiemTichLuy' => 86),
            array('MaKH' => 'VIP03', 'TenKH' => 'Nguyễn Thanh Tùng', 'DiemTichLuy' => 72),
            array('MaKH' => 'BT03',  'TenKH' => 'Nguyễn Văn Trí',    'DiemTichLuy' => 100),
            array('MaKH' => 'BT01',  'TenKH' => 'Nguyễn Tiến Minh',  'DiemTichLuy' => 80)
            
        );
        echo '<pre>';print_r($ar);echo '</pre>';	

    ?>	
    a,Hiển thị danh sách khách hàng theo dạng table như trên.
    <table border="1px">
        <tr>
            <th>MaKH</th>
            <th>TenKH</th>
            <th>DiemTichLuy</th>
        </tr>
        <?php
            foreach ($ar as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['MaKH'];?>	</td>
                        <td style="text-align:left"><?php echo $item['TenKH'];?>	</td>
                        <td><?php echo $item['DiemTichLuy'];?>	</td>
                    </tr>
                <?php
            }    
        ?>        	

    </table>
    b,Tính tổng điểm tích luỹ của khách hàng VIP
        <?php
            $tongDiem = 0;
            foreach ($ar as $key => $item) {
                $find = strpos($item['MaKH'], 'VIP');
                if(is_numeric($find)){
                    $tongDiem += $item['DiemTichLuy'];
                }
            }
            echo $tongDiem;
        ?>
    c,
    
    <table border="1px">
        <tr>
            <th>MaKH</th>
            <th>TenKH</th>
            <th>DiemTichLuy</th>
        </tr>
        <?php
            foreach ($ar as $item) {
                $find = strpos($item['MaKH'], 'VIP');
                if($item['DiemTichLuy'] >= 85) {
                    ?>
                    <tr>
                        <td <?php if (is_numeric($find)){echo 'style="color:red"';} ?>	><?php echo $item['MaKH'];?>	</td>
                        <td style="text-align:left"><?php echo $item['TenKH'];?>	</td>
                        <td><?php echo $item['DiemTichLuy'];?>	</td>
                    </tr>
                    <?php
                }
                
            }    
        ?>        	

    </table>
    
</body>
</html>
