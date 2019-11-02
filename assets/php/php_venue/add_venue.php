<?Php
include_once '../../../config.php';


$venue_name=$_POST['venue_name'];


$sql=mysqli_query($link, "INSERT INTO venue(id,venue_name) VALUES ('','$venue_name')");

?> 