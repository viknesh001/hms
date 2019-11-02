
<?php
include '../../../config.php';




    
$result = mysqli_query($link, "SELECT * FROM pricecard ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id']; 
//$obj->court_name =  $row['court_name'];
   
    
               $venue_id= $row['venue_id'];

            $result1 = mysqli_query($link, "SELECT * FROM venue where id='$venue_id' ");
             $row1 = mysqli_fetch_array($result1); 

    $obj->venue_id =  $row1['id'];
 
    
    
    
    $obj->pricecard_name =  $row['pricecard_name'];
    $obj->amount =  $row['amount'];
     $obj->cgst =  $row['cgst'];
     $obj->sgst =  $row['sgst'];
     $obj->servicetax =  $row['servicetax'];
    
    
    
       $obj->venue_name =  $row1['venue_name'];

    



  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
