
<?php
include '../../../config.php';




    
$result = mysqli_query($link, "SELECT * FROM vg_court ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id']; 
//$obj->court_name =  $row['court_name'];
   
    
       $venuegame_id= $row['vg_id'];
    
    $result1 = mysqli_query($link, "SELECT * FROM venue_game where id='$venuegame_id' ");
     $row1 = mysqli_fetch_array($result1); 

    
    $obj->venuegame_name =  $row1['vg_name'];
    
    
    
    
    $obj->court_name =  $row['court_name'];
    
    
    $obj->venuegame_id =  $row1['id'];

    



  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
