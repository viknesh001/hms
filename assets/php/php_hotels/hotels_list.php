
<?php
include '../../../config.php';




    
$result = mysqli_query($link, "SELECT *,h.id as h_id FROM `hotels` as h  JOIN  location as l ON h.location_id=l.id ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['h_id']; 
    $obj->name =  $row['hotel_name'];
    $obj->image =  $row['hotel_image'];
    
  
         $obj->Address =  $row['address'];
  
     $area_id =  $row['area_id'];
   $result1 = mysqli_query($link, "SELECT * FROM areas where id='$area_id' ");
if ($row1 = mysqli_fetch_assoc($result1)) 
{ 
    
    $obj->area_name =  $row1['area_name'];
} 
    
    $obj->location_name= $row['location_name'];
     
 
 /*          $location_id= $row['location_id'];
    
    $result2 = mysqli_query($link, "SELECT * FROM location where id='$location_id' ");
if ($row2 = mysqli_fetch_array($result2)) 
{ 
    
    $obj->location_name =  $row2['location_name'];
}
  */
  
  $obj->room_type =  $row['room_type'];
    $obj->rating =  $row['rating'];
      
    



  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
