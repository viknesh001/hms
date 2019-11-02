
<?php
include '../../../config.php';




    
$result = mysqli_query($link, "SELECT * FROM venue_game ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id']; 
    $obj->name =  $row['vg_name'];
    $obj->image =  $row['vg_image'];
    
       $venue_id= $row['venue_id'];
    
    $result1 = mysqli_query($link, "SELECT * FROM venue where id='$venue_id' ");
if ($row1 = mysqli_fetch_array($result1)) 
{ 
    
    $obj->venue_name =  $row1['venue_name'];
}
    
           $game_id= $row['game_id'];
    
    $result2 = mysqli_query($link, "SELECT * FROM game where id='$game_id' ");
if ($row2 = mysqli_fetch_array($result2)) 
{ 
    
    $obj->game_name =  $row2['game_name'];
}
  
  
  $obj->venue_id =  $row['venue_id'];
    $obj->game_id =  $row['game_id'];
    



  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
