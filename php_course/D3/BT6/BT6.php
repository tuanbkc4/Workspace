<?php
    ob_start();
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Bài 3</title>   
    <link rel="stylesheet" href="styleBT6.css">
</head>
<body>
    <div id="wrapper">
        <h2>Mua hoa</h2>
        <?php
            if(isset($_POST["submit"])){
                $idFlower = $_POST["id_flower"];
                $nameFlower = $_POST["name_flower"];
                $quantity = $_POST["quantity"];
                $price = $_POST["price"];
                if(!isset($_SESSION["buyFlower"][$idFlower])){
                    $_SESSION["buyFlower"][$idFlower] = array(
                        'nameFlower' => $nameFlower,
                        'quantity' => $quantity,
                        'price' => $price
                    );
                }else{
                    $_SESSION["buyFlower"][$idFlower]['quantity'] += $quantity;
                }
                header("location:basket.php");
            }
        ?>
        <form action="" method="POST" >
            <div class="form_row">
                <label class="form_label">Id hoa:</label>
                <input type="text" name="id_flower" id="name" value=""  class="form_input">         
            </div>
            <div class="form_row">
                <label class="form_label">Tên hoa:</label>
                <input type="text" name="name_flower" id="name" value=""  class="form_input">         
            </div> 
            <div class="form_row">
                <label class="form_label">Số lượng:</label>
                <input type="number" name="quantity" id="name" value=""  class="form_input">         
            </div>
            <div class="form_row">
                <label class="form_label">Giá</label>
                <input type="number" name="price" id="name" value=""  class="form_input">         
            </div>    
            <div class="form_row">
                <input type="submit" value="Mua hoa" name="submit" class="form_submit" >
            </div>
            <?php
                
            ?>
        </form>
    </div>
</body>
</html>
<?php 
    ob_end_flush();
?>