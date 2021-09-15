<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div id="wrapper">
        <h2>Mua hoa</h2>

        <form action="javascript:void(0)" method="POST" id="formBuyFL">
            <div class="form_row">
                <label class="form_label">Id hoa:</label>
                <input type="text" name="id_flower" id="id_flower" value="" class="form_input">
            </div>
            <div class="form_row">
                <label class="form_label">Tên hoa:</label>
                <input type="text" name="name_flower" id="name_flower" value="" class="form_input">
            </div>
            <div class="form_row">
                <label class="form_label">Số lượng:</label>
                <input type="number" name="quantity" id="quantity" value="" class="form_input">
            </div>
            <div class="form_row">
                <label class="form_label">Giá:</label>
                <input type="number" name="price" id="price" value="" class="form_input">
            </div>
            <div class="form_row">
                <input type="submit" value="Mua hoa" name="submit" class="form_submit" onclick="getInfo()">
            </div>

        </form>

        <div id="ArbuyFL">
            <?php
            if (!isset($_SESSION['ArbuyFL'])) {
                echo "<span style='text-decoration:underline;margin-left: 80px;'>Giỏ hàng rỗng</span>";
            }
            ?>
        </div>
    </div>
    <script src="./jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="./jquery.validate.min.js" type="text/javascript"></script>
    <script src="./code.js" type="text/javascript"></script>


</body>

</html>