<?Php
include_once '../../../config.php';


$name=$_POST['name'];
$venuegame_id=$_POST['venuegame_drop'];



$sql=mysqli_query($link, "INSERT INTO vg_court(id,court_name,vg_id) VALUES ('','$name','$venuegame_id')");

?> 