
<?php
include 'funcaoEx4.php';

//
$soma=10;
echo $soma. "<br>";
echo $sub. "<br>";
echo $multi. "<br>";
echo $div. "<br>";

echo soma(3);

function soma($n1){
    return $n1 + $GLOBALS["soma"];
}
?>
