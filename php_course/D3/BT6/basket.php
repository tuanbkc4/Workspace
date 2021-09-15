<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>basket</title>
    <style>
        th,td{
            padding: 4px 8px;
            border: 1px solid #000;
            
        }
        th{
            background-color: #00A19C;
        }
        table{
            margin: 50px auto;
            
        }
        table:hover{
            box-shadow: 0px 0px 10px #ccc;
        }
    </style>
</head>
<body>
    <table  style="border-collapse:collapse">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        <?php
            $total = 0;
            foreach ($_SESSION["buyFlower"] as $item ){            
                $intoMoney = $item['quantity'] * $item['price'];
                $total += $intoMoney; 
        ?>
            <tr>
                <td><?php echo $item['nameFlower']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $intoMoney; ?></td>
            </tr>
        <?php
            }
        ?>
        <tr>
            <td colspan="4" align="right"><?php echo "Thành tiền: ". $total ?></td>
        </tr>
    </table>
</body>
</html>