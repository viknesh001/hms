<?php

include_once '../../../config.php';

$id =$_POST["id"];

$sql =mysqli_query($link,"DELETE FROM game WHERE id= '$id' ");

?>