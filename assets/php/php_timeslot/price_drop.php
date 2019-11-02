
<?php
include '../../../config.php';


$result = mysqli_query($link, "SELECT * FROM pricecard ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id'];      
$obj->price_name =  $row['pricecard_name'];

    

  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
