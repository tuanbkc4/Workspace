<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Bài 2</title>
    <style>
        td,th { 
            padding: 4px 8px;
        }
    </style>
</head>
<body>
    <h2>a/</h2>    
    <?php
        $arPost = array(
            array("id_post" => 1,"title" => "VinaEnter CS1","created_at" => "10/02/2012","picture" => "anh-1.png","count_number" => 234),
            array("id_post" => 2,"title" => "VinaEnter CS2","created_at" => "10/02/2012","picture" => "anh-2.png","count_number" => 735),
            array("id_post" => 3,"title" => "VinaEnter CS3","created_at" => "11/02/2012","picture" => "anh-3.png","count_number" => 357),
            array("id_post" => 4,"title" => "VinaEnter CS4","created_at" => "12/02/2012","picture" => "anh-4.png","count_number" => 642)
        );
        
        echo "<pre>";
            print_r($arPost);
        echo "</pre>";
    ?>
    <h3>a1/</h3>
    <?php
        foreach ($arPost as $key => $item){
            if($item["id_post"]%2==0){
                echo "<pre>";
                    print_r($arPost[$key]);
                echo "</pre>";
            }
        }
    ?>
    <h3>a2/</h3>
    <table border = "1px" style="border-collapse:collapse;text-align:center;">
        <tr>
            <th>id_post</th>
            <th>title</th>
            <th>created_at</th>
            <th>picture</th>
            <th>count_number</th>
        </tr>
        <?php
            foreach($arPost as $key => $item){

            
        ?>
            <tr>
            <td><?php echo $item["id_post"]?></td>
            <td><?php echo $item["title"]?></td>
            <td><?php echo $item["created_at"]?></td>
            <td><?php echo $item["picture"]?></td>
            <td><?php echo $item["count_number"]?></td>            
            </tr>
        <?php
            };
        ?>
    </table>
    <h3>a3/</h3>
    <?php
        
        foreach($arPost as $key => $item){
            $arrCountNumber[] = $item["count_number"];
        };
        $maxCN=max($arrCountNumber);
        $minCN=min($arrCountNumber);
        foreach ($arPost as $item){
            if($item["count_number"]==$maxCN){
                echo "Tiêu đề: ".$item['title'].",". " Ngày đăng: ".$item['created_at'];
            };
        };
    ?>
    <h3>a4/</h3>
    <?php
        foreach ($arPost as $key => $item){
            if($item["count_number"]==$minCN){
                unset($arPost[$key]);
            };
        };
        echo "<pre>";
            print_r($arPost);
        echo "</pre>";
    ?>
    <h3>a5/</h3>
    <?php
        $arPost[]=array("id_post" => 5,"title" => "VinaEnter CS5","created_at" => "13/02/2012","picture" => "anh-5.png","count_number" => 122);
        echo "<pre>";
            print_r($arPost);
        echo "</pre>";
    ?>
</body>
</html>