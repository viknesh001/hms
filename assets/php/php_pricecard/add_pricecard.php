<?Php
include_once '../../../config.php';


$name=$_POST['name'];
$amount=$_POST['amount'];
$cgst=$_POST['cgst'];
$sgst=$_POST['sgst'];
$servicetax=$_POST['servicetax'];
$venue_id=$_POST['venue_id'];



$sql=mysqli_query($link, "INSERT INTO pricecard(id,pricecard_name,amount,cgst,sgst,servicetax,venue_id) VALUES ('','$name','$amount','$cgst','$sgst','$servicetax','$venue_id')");

?> 