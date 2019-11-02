<?php

include "../../../config.php";


$id = $_POST['id'];
$name=$_POST['name'];
$amount=$_POST['amount'];
$cgst=$_POST['cgst'];
$sgst=$_POST['sgst'];
$servicetax=$_POST['servicetax'];
$venue_id=$_POST['venue_id'];





$result = mysqli_query($link, "update pricecard set pricecard_name ='$name',amount='$amount',cgst='$cgst',sgst='$sgst',servicetax='$servicetax',venue_id='$venue_id'  where id = '$id'");


?>
