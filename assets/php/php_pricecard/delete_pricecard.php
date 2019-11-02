<?php

include_once '../../../config.php';

$id =$_POST["id"];

$sql =mysqli_query($link,"DELETE FROM pricecard WHERE id= '$id' ");

?>