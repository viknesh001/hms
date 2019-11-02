<?Php
include_once '../../../config.php';


$name=$_POST['name'];
$venue_id=$_POST['venue_drop'];
$game_id=$_POST['game_drop'];
$image=$_POST['image'];


$sql=mysqli_query($link, "INSERT INTO venue_game(id,vg_name,venue_id,game_id,vg_image) VALUES ('','$name','$venue_id','$game_id','$image')");

?> 