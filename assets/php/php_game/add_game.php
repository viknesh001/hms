<?Php
include_once '../../../config.php';


$game_name=$_POST['game_name'];


$sql=mysqli_query($link, "INSERT INTO game(id,game_name) VALUES ('','$game_name')");

?> 