<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Bài 4</title>   
    <link rel="stylesheet" href="styleBT4.css">
</head>
<body>
    <div id="wrapper">
        <h2>Thay thế chuỗi</h2>
        <?php
                $oldString="Học trò trong Quảng ra thì - Thấy cô gái Huế bước đi không đành!";
                $textOrigin = "";
                $textReplace = "";
                $newString = "";
            if(isset($_POST['submit'])){
                $oldString = $_POST['old_string'];                
                $textOrigin = $_POST['text_origin'];
                $textReplace = $_POST['text_replace'];
                $newString = str_replace($textOrigin, $textReplace, $oldString);
            }
            
        ?>
        <form action="" method="POST" >            
            <div>
                <label for="" class="label_oldString">Đoạn văn gốc:</label>
                <textarea class="old_string" name="old_string" rows="3" cols="80"><?php echo $oldString ?></textarea>
            
            <div class="form_row">
                <label for="" class="form_label">Từ gốc:</label>
                <input type="text" name="text_origin" value="<?php echo $textOrigin ?>"  class="form_input"> 
                <label for="" class="form_label">Thay thế bằng: </label>
                <input type="text" name="text_replace" value="<?php echo $textReplace ?>"  class="form_input">           
            </div>   
            <div>
                <label for="" class="label_newString" >Chuỗi sau khi đã thay thế</label>
                <textarea class="new_string" name="new_string" rows="3" cols="80"><?php echo $newString ?></textarea> 
            </div> 
            <div class="form_row">
                <input type="submit" value="Thay thế" name="submit" class="form_submit">
            </div>
            
        </form>
    </div>
</body>
</html>