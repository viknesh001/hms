<?php

include_once '../../../config.php';

$id =$_POST["id"];

$sql =mysqli_query($link,"DELETE FROM venue_game WHERE id= '$id' ");

?>