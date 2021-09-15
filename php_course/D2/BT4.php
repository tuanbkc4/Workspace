<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 4</title>
    <style>
        th,td{
            padding: 4px 16px;
        }
    </style>
</head>
<body>
    <?php
        $arSanPham = array(
            array("id_sp" => 1, "ten" => "Đồng hồ thông minh", "gia" => 159000, "so_luong" => 5),
            array("id_sp" => 2, "ten" => "Gậy tự sướng", "gia" => 19000, "so_luong" => 10),
            array("id_sp" => 3, "ten" => "Pin sạc dự phòng", "gia" => 259000, "so_luong" => 5),
            array("id_sp" => 4, "ten" => "Heo đỡ điện thoại", "gia" => 9000, "so_luong" => 30),
            array("id_sp" => 5, "ten" => "Kẹp điện thoại đuôi khỉ", "gia" => 25000, "so_luong" => 10),
        );
        
        // echo "<pre>";
        //     print_r($arSanPham);
        // echo "</pre>";
    ?>
    <h2>a/</h2>    
    <table border = "1px" style="border-collapse:collapse;text-align:center" >
        <tr>
            <th>id_sp</th>
            <th>ten</th>
            <th>gia</th>
            <th>so_luong</th>
        </tr>
        <?php
            foreach($arSanPham as $item){            
        ?>
            <tr>
                <td><?php echo $item["id_sp"]; ?></td>
                <td><?php echo $item["ten"]; ?></td>
                <td><?php echo number_format($item["gia"]); ?></td>
                <td><?php echo $item["so_luong"]; ?></td>
            </tr>
        <?php
            };
        ?>
    </table>
    <h2>b/</h2>  
    <?php
        foreach ($arSanPham as $item){
            if($item["gia"]>=20000){
                echo "<b>id_sp: </b>".$item["id_sp"]." <b>ten: </b>".$item["ten"]." <b>gia: </b>".$item["gia"]." <b>so_luong: </b>".$item["so_luong"]."<br/>";
            }
        }
    ?>
    <h2>c/</h2>  
    <?php
        foreach($arSanPham as $key => $item){
            $thanh_tien = $item["gia"]*$item["so_luong"];
            // $item["thanh_tien"]= $thanh_tien; Tại sao??
            $arSanPham[$key]["thanh_tien"]= $thanh_tien;
        }
        // echo "<pre>";
        //     print_r($arSanPham);
        // echo "</pre>";        
    ?>
    <table border = "1px" style="border-collapse:collapse;text-align:center" >
        <tr>
            <th>id_sp</th>
            <th>ten</th>
            <th>gia</th>
            <th>so_luong</th>            
            <th>thanh_tien</th>            
        </tr>
        <?php
            foreach($arSanPham as $item){            
        ?>
            <tr>
                <td><?php echo $item["id_sp"]; ?></td>
                <td><?php echo $item["ten"]; ?></td>
                <td><?php echo number_format($item["gia"]); ?></td>
                <td><?php echo $item["so_luong"]; ?></td>
                <td><?php echo number_format($item["thanh_tien"]); ?></td>                
            </tr>
        <?php
            };
        ?>
    </table>
    <h2>d/</h2> 
    <?php
        foreach($arSanPham as $key => $item){
            $tien_giam =0;
            if($item["so_luong"]>=30){
                $tien_giam = $item["thanh_tien"]*0.1;
            }elseif($item["so_luong"]>=10){
                $tien_giam = $item["thanh_tien"]*0.05;
            };
                // $thanh_tien = $item["thanh_tien"] - $tien_giam;
                // $arSanPham[$key]["thanh_tien"]=$thanh_tien;
                $arSanPham[$key]["thanh_tien"]-=$tien_giam;
        }

    ?>
    <table border = "1px" style="border-collapse:collapse;text-align:center" >
        <tr>
            <th>ten</th>
            <th>thanh_tien</th>            
        </tr>
        <?php
            foreach($arSanPham as $item){            
        ?>
            <tr>
                <td><?php echo $item["ten"]; ?></td>
                <td><?php echo number_format($item["thanh_tien"]); ?></td>                
            </tr>
        <?php
            };
        ?>
    </table>
    <h2>e/</h2> 
    <?php
        $dem = 0;
        foreach ($arSanPham as $item){
            if($item["gia"]>=25000){
                $dem++;
            }
        }
        echo "Số sản phẩm có giá từ 25.000 trở lên: $dem";
    ?>

</body>
</html>