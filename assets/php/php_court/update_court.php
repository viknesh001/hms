<?php

include "../../../config.php";
$id = $_POST['id'];
$name = $_POST['name'];
$venuegame_id = $_POST['venuegame_id'];





$result = mysqli_query($link, "update vg_court set court_name ='$name',vg_id='$venuegame_id'  where id = '$id'");


?>
