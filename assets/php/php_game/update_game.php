<?php

include "../../../config.php";
$id = $_POST['id'];
$game_name = $_POST['game_name'];



$result = mysqli_query($link, "update game set game_name ='$game_name'  where id = '$id'");


?>
