<?php
$a = array(
    'a' => array("2", "8"),
    'd' => array("1", "2"),
    'f' => array("2", "3"),
);

foreach ($a as $items) {
    foreach ($items as $item) {
        $newArr[] = $item;
    }
}
$string = implode(',', $newArr);
echo $string;
echo 'BDTUAN';
