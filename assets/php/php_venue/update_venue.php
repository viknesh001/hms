<?php

include "../../../config.php";
$id = $_POST['id'];
$venue_name = $_POST['venue_name'];



$result = mysqli_query($link, "update venue set venue_name ='$venue_name'  where id = '$id'");


?>
