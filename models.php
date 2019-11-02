<?php
class Model {
	
	public function getlogin()
    {
		
	  if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
		  
		 include("../config/db-config.php");
	     $username = mysqli_real_escape_string($con,$_REQUEST['username']);
		 $password = mysqli_real_escape_string($con,$_REQUEST['password']);  
		 
		
		 
		$result = mysqli_query($con, "SELECT * FROM register WHERE user_name = '" . $username. "' AND password = '" . $password. "' ");
		
		
        $rowcount=mysqli_num_rows($result);
        
		print_r($rowcount);
		
		if($rowcount > 0)
        {
			//return "hotels.php";
		}
		else{
			
		}
		   
	   }
	   
    }
}

$models = new Model();
$models->getlogin($_REQUEST);

?>