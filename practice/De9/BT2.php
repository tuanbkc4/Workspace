<?php
    $string = "Trung tâm đào tạo lập trình VinaEnter Edu";
    echo "a, in mỗi từ trên một dòng <br/>";
    $arrStr = explode(" ", $string);
    // echo '<pre>';print_r($arrStr);echo '</pre>';
    foreach ($arrStr as $item) {
        echo $item.'<br/>';
    }
    echo "b, Đếm số từ có trong chuỗi đã cho<br/>";
        echo "Chuỗi đã cho có ".str_word_count($string)." từ <br>";
    echo "c, In ra chuỗi đảo ngược của chuỗi đã nhập <br/>";
        $stringRev=strrev($string);
        echo $stringRev;
    
?>
	