<?php

include_once '../../../config.php';

$id =$_POST["id"];

$sql =mysqli_query($link,"DELETE FROM venue WHERE id= '$id' ");

?>