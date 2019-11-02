<?php

include "../../../config.php";
$id = $_POST['id'];
$name = $_POST['name'];
$venue_id = $_POST['venue_id'];
$game_id = $_POST['game_id'];
$image = $_POST['image'];




$result = mysqli_query($link, "update venue_game set vg_name ='$name',venue_id='$venue_id',game_id='$game_id',vg_image='$image'  where id = '$id'");


?>
