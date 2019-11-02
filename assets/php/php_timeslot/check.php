
<?php
include '../../../config.php';


$court_id=3;
//$date1=array('2018-12-27','2018-12-29');

$date_from = strtotime('2018-12-27');

    $date_to = strtotime('2018-12-29');


$date_array=array();
for ($i=$date_from; $i<=$date_to; $i+=86400){  
    $date1 = date("Y-m-d", $i);
     array_push($date_array,$date1);
}
print_r($date_array);

$result = mysqli_query($link, "SELECT * FROM slot WHERE date  IN ( '" . implode($date_array, "', '") . "' ) AND court_id='$court_id'");
 echo $rowcount=mysqli_num_rows($result);

    
  
    




?>
