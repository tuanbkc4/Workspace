<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Bài 3</title>   
    <link rel="stylesheet" href="styleBT3.css">
</head>
<body>
    <div id="wrapper">
        <h2>Hình tròn</h2>
        <?php
            $valueDT="";
            $valueBK="";
            $warning="";
            if(isset($_POST["submit"])){
                $dienTich= $_POST["dientich"];
                $banKinh = $_POST["bankinh"];
                $warning="";
                
                if(is_numeric($dienTich) && $dienTich >0 && $banKinh =="" ){
                    $valueBK = round(sqrt($dienTich/PI()),2);
                }elseif(is_numeric($banKinh) && $banKinh >0 && $dienTich ==""){                    
                    $valueDT = round(pow($banKinh,2)*PI(),2);
                } else{
                    $warning="Vui lòng nhập lại!!! <p><i style='color:red'>Bạn đã để trống hoặc nhập cả diện tích và bán kính và dữ liệu nhập không phải là số dương)</i></p>";
                }  
            }
        ?>
        <form action="" method="POST" >
            <div class="form_row">
                <label for="name" class="form_label">Diện tích:</label>
                <input type="text" name="dientich" id="name" value=""  class="form_input">         
            </div>
            <div class="form_row">
                <label for="name" class="form_label">Bán kính</label>
                <input type="text" name="bankinh" id="name" value=""  class="form_input">         
            </div>   
            <div class="form_row">
                <input type="submit" value="submit" name="submit" class="form_submit">
            </div>
            <?php
                if($valueDT != ""){
                    echo "<br/> Diện tích của hình tròn là: <b>$valueDT</b> ";
                }elseif($valueBK != ""){
                    echo "<br/>Bán kính của hình tròn là: <b>$valueBK</b> ";
                }else{
                    echo $warning;
                }
            ?>
        </form>
    </div>
</body>
</html>