
<?php
include '../../../config.php';




    
$result = mysqli_query($link, "SELECT * FROM slot_template ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id']; 
$obj->slot_no = $row['id']; 
$obj->slot_name=  $row['slot_name'];
$obj->slot_status=  $row['slot_status'];

    

  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
