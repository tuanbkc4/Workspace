<?php
$index = $_POST['index'];
$arLink = array(
    "https://www.youtube.com/embed/1VbufbrV1Cg",
    "https://www.youtube.com/embed/Zbx9zxZNFGE",
    "https://www.youtube.com/embed/L2ltn1zSfDY",
    "https://www.youtube.com/embed/AuUwqgy80H0",
    "https://www.youtube.com/embed/-i5iAa2H1Bs",
);
?>

<iframe width="670" height="377" src="<?php echo $arLink[$index];?>" frameborder="0" allowfullscreen></iframe>
