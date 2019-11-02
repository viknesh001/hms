
<?php
include '../../../config.php';


$vg_id_id=$_POST['vg_id'];

    
$result = mysqli_query($link, "SELECT * FROM vg_court where vg_id='$vg_id_id' ");
$array = array();
while ($row = mysqli_fetch_array($result)) 
{
   $obj=new stdClass(); 
 

$obj->id = $row['id'];      
$obj->court_name =  $row['court_name'];

    

  array_push($array,$obj); 

}
  

echo $json = json_encode($array); 


mysqli_close($link);

    
  
    




?>
