<?php


$foodimage = "../../img/vg_images";
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$fileData = pathinfo(basename($_FILES["userImage"]["name"]));

$fileName = uniqid() . '.' . $fileData['extension'];

$target_path = ( "".$foodimage."/" . $fileName);

while(file_exists($target_path))
{
   $fileName = uniqid() . '.' . $fileData['extension'];
   $target_path = ("".$foodimage."/" . $fileName);
}
if (move_uploaded_file($_FILES["userImage"]["tmp_name"], $target_path))
{
echo $fileName;
}
}
}
?>