<?php
// $a = array(
//     'a' => array("2", "8"),
//     'd' => array("1", "2"),
//     'f' => array("2", "3"),
// );

// foreach ($a as $items) {
//     foreach ($items as $item) {
//         $newArr[] = $item;
//     }
// }
// $string = implode(',', $newArr);
// echo $string;
// echo 'BDTUAN';
?>

<?php
    $a = "2021-09-02_06:00 ~ 07:00";
    $b = explode("_",$a);
    $c = end($b);
    $d = explode("~",$c);
    echo $d[0];
    echo $d[1];
?>
