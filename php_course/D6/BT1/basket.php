<?php
    session_start();
    $id = $_GET['id'];
    $name = $_GET['name'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];

    if(!isset($_SESSION['ArbuyFL'][$id])) {
        $_SESSION['ArbuyFL'][$id] = array(
                                        'name' => $name,
                                        'quantity' => $quantity,
                                        'price' => $price
                                    );
    } else {
        $_SESSION['ArbuyFL'][$id]['quantity'] += $quantity;
    };
    // session_destroy();
?>
<table border="1px solid #000">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
    </tr>
    <?php
        $total = 0;
        foreach ($_SESSION['ArbuyFL'] as $item) {
            $tongtien = $item['price'] * $item['quantity'];
            $total += $tongtien;

            ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo number_format($item['price']); ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo number_format($tongtien); ?></td>
                </tr>
            <?php        
        };
    ?>
    <tr>
        <td align="right !important" colspan="4">
            <?php
                echo "<b>Thành tiền: </b>". $total;
            ?>
        </td>
    </tr>
</table>