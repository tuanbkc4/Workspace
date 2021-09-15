<?php
    $chuoi = "http://vinaenter.edu.vn/lap-trinh-php-tu-az-online.html";
    // echo $chuoi;
    $arr=explode(".",$chuoi);
    unset($arr[count($arr)-1]);
    $chuoiNew=implode(".",$arr);
    $arrNew=explode("-",$chuoiNew);
    foreach ($arrNew as $item){
        if($item=="php"){
            $getPhpString = $item;
        }elseif($item=="online"){
            $getOnlineString = $item;
        }
    }
    echo $getPhpString."<br/>";
    echo $getOnlineString;
    echo "<hr/>";
    echo "Sô dấu - từ chuỗi url trên là: ".(count($arrNew)-1);

?>