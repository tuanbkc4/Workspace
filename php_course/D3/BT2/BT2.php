<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Bài 2</title>   
    <link rel="stylesheet" href="styleBT2.css">
</head>
<body>
    <div id="wrapper">
        <h2>In câu chào</h2>
        <?php
            $yourName="";
            if(isset($_GET["submit"])){
                $yourName= $_GET["name"];
            }
        ?>
        <form action="" method="GET" >
            <div class="form_row">
                <label for="name" class="form_label">Nhập tên:</label>
                <input type="text" name="name" id="name" value="<?php echo $yourName ?>" placeholder="Enter your name..." class="form_input">         
            </div>

            <?php
                if($yourName != ""){
                    echo "Câu chào: <b>Chào bạn $yourName</b>" ;
                }
            ?>   
            <div class="form_row">
                <input type="submit" value="In câu chào" name="submit" class="form_submit">
            </div>
        </form>
    </div>
</body>
</html>