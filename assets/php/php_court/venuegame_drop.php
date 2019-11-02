
<?php
include '../../../config.php';




    
$result = mysqli_query($link, "SELECT * FROM venue_game ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id'];      
$obj->venuegame_name =  $row['vg_name'];

    

  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
