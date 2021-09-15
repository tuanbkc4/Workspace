<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Bài 5</title>   
    <link rel="stylesheet" href="styleBT5.css">
</head>
<body>
    <div id="wrapper">
        <h2>Upload ảnh</h2>
        <?php  
            $notification = "";
            if(isset($_POST["submit"])){    
                 $check_file =empty($_FILES["file"]["name"][0]);
                if(!$check_file){
                    $count_file = count($_FILES["file"]["name"]);
                    for($i =0;$i < $count_file; $i++){
                        $name = $_FILES["file"]["name"][$i];
                        $tmp_name = $_FILES["file"]["tmp_name"][$i];
                        $tmp = explode('.',$name);
                        $extension_file = end($tmp);
                        $newName = "HinhAnh-".time().$i.rand(1,100).'.'.$extension_file;
                        $path_upload = $_SERVER["DOCUMENT_ROOT"]. "/hocphp/D3/BT5/hinhanh/" . $newName;
                        move_uploaded_file($tmp_name, $path_upload);
                    }
                }else{
                    $notification = "Bạn vui lòng chọn hình ảnh!!!";
                } 
            }
            
        ?>
        <form action="" method="POST" enctype="multipart/form-data">            
            <div class="form_row">
                <label class="form_label">Hình ảnh</label>
                <input type="file" name="file[]"  value=""  class="form_input" multiple>         
            </div>   
            <?php
                echo "<span style='color:red;margin-left:8px;font-style:italic;'>$notification</span>";
            ?>
            <div class="form_row">
                <input type="submit" value="up ảnh" name="submit" class="form_submit">
            </div>
            <?php
                
            ?>
        </form>
    </div>
</body>
</html>