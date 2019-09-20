<?php session_start(); ?>
<?php

$id= $_REQUEST['id'];

if (isset($_SESSION["items"])) {
    array_push($_SESSION['items'],$id);
}
else{
    $_SESSION["items"]=array();
    array_push($_SESSION['items'],$id);
}


?>

<a href="checkout.php">check out</a>