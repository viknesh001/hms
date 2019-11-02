<?Php
include_once '../../../config.php';

$slot_no=$_POST['slot_no'];
$slot_status=$_POST['slot_status'];

date_default_timezone_set('Asia/Calcutta');
$created_date = date('Y-m-d H:i:s');

//$fromdate = date("Y-m-d", strtotime($_POST['fromdate']));
$fromdate ='2018-12-27';

$court_id=3;//$_POST['court_id'];






$result = mysqli_query($link, "SELECT * FROM slot WHERE date ='$fromdate'  AND court_id='$court_id'");
  $rowcount=mysqli_num_rows($result);

if($rowcount==1)
{

//echo "exist";
   
    
    $array = array();
    if ($row = mysqli_fetch_array($result)) 
{
 
        
        $obj=new stdClass(); 
        
        
        
//          $obj['showid'] = $row['show_id'];
       
        
        for($i=1;$i<=24;$i++)
        {
            
            $slot_no='slot_no_'.$i;
          //  $slot_name='slot_name_'.$i;
            $slot_status='slot_status_'.$i;
            $slot_color='slot_color_'.$i;
            $slot_css='slot_css_'.$i;
        
         if($row['slot_'.$i]=='A')
         {
            
           $obj->$slot_no=$i; 
           $obj->$slot_status=$row['slot_'.$i];
           $obj->$slot_color='color-green'; 
             
         }else if($row['slot_'.$i]=='U')
         {
             
             
         }else if($row['slot_'.$i]=='_')
         {
              
            
             
         }
            else if($row['slot_'.$i]=='B')
         {
             
             
         }  else if($row['slot_'.$i]=='P')
         {
             
             
         }
        

        
        
        
    }
        
        
        
        
        
        
        
        
        
        
        
  array_push($array,$obj);      
        
}
    
    
    echo $json = json_encode($array); 
    
    
    
    
    
}
else{
   
    echo "No Schedule exist";
    
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