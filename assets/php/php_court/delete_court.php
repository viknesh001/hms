<?php

include_once '../../../config.php';

$id =$_POST["id"];

$sql =mysqli_query($link,"DELETE FROM vg_court WHERE id= '$id' ");

?>