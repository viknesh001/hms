<?Php
include_once '../../../config.php';

$slot_no=$_POST['slot_no'];
$slot_status=$_POST['slot_status'];

date_default_timezone_set('Asia/Calcutta');
$created_date = date('Y-m-d H:i:s');

$fromdate = date("Y-m-d", strtotime($_POST['fromdate']));
$todate = date("Y-m-d", strtotime($_POST['todate']));


$venue_id=$_POST['venue_id'];
$vg_id=$_POST['vg_id'];
$court_id=$_POST['court_id'];
$price_id=$_POST['price_id'];


$result = mysqli_query($link, "SELECT * FROM venue_game where id='$venue_id' ");
$row = mysqli_fetch_array($result);
$game_id = $row['game_id'];





$date_from = strtotime($_POST['fromdate']);
if($_POST['todate'] == ''){
    $date_to = strtotime($_POST['fromdate']);
}
else{
    $date_to = strtotime($_POST['todate']);
}

$date_array=array();
for ($i=$date_from; $i<=$date_to; $i+=86400){  
    $date1 = date("Y-m-d", $i);
     array_push($date_array,$date1);
}



$result1 = mysqli_query($link, "SELECT * FROM slot WHERE date  IN ( '" . implode($date_array, "', '") . "' ) AND court_id='$court_id'");
  $rowcount=mysqli_num_rows($result1);

if($rowcount==0)
{


            for ($i=$date_from; $i<=$date_to; $i+=86400){  
                $date1 = date("Y-m-d", $i);

                 $sql=mysqli_query($link, "INSERT INTO slot(id,date,slot_1,slot_2,slot_3,slot_4,slot_5,slot_6,slot_7,slot_8,slot_9,slot_10,slot_11,slot_12,slot_13,slot_14,slot_15,slot_16,slot_17,slot_18,slot_19,slot_20,slot_21,slot_22,slot_23,slot_24,venue_id,vg_id,court_id,game_id,pricecard_id,status,created_date) VALUES ('','$date1','".implode($slot_status, "', '")."','$venue_id','$vg_id','$court_id','$game_id','$price_id','active','$created_date')");

            }
    
}
else{
   
    echo "already exist";
    
}
    
    
    
    
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


//$slot_no=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24);//$_POST['slot_no'];
//$slot_no=$_POST['slot_no'];
//$slot_status=$_POST['slot_status'];
//
//date_default_timezone_set('Asia/Calcutta'); 

 //$date1=date("Y-m-d");


//  $time1 = date('H:i:s');

//$count = count($_POST["slot_no"]);
//
//for($i=0; $i < $count; $i++) 
//      {
//$slot_no1 = $slot_no[$i];
//$slot_status1 = $slot_status[$i];
//
//}


// $sql=mysqli_query($link, "INSERT INTO slot(id,date,slot_1,slot_2,slot_3,slot_4,slot_5,slot_6,slot_7,slot_8,slot_9,slot_10,slot_11,slot_12,slot_13,slot_14,slot_15,slot_16,slot_17,slot_18,slot_19,slot_20,slot_21,slot_22,slot_23,slot_24) VALUES ('','$date1','".implode($slot_status, "', '")."')");
//$last_id = $link->insert_id;
    
   

//update slot set game_name ='$game_name',game_price ='$game_price',game_image ='$image_name',game_schedule='$game_schedule',location_id='$location' where id = '$id'
//    


?> 