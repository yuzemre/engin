<?php


$basket = array();
if(!empty($_COOKIE["basket"]))
{
    $basket = json_decode($_COOKIE["basket"], true);
}
$temp = array();
$temp["count"] = strip_tags($_POST["count"]);
$temp["item"] = strip_tags($_POST["item"]);
array_push($basket, $temp);

setcookie("basket", json_encode($basket), time() + 3600, "/");
$_COOKIE["basket"] = json_encode($basket);
echo "true";

?>
