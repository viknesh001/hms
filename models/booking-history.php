<?php
include("config/db-config.php");
class BookingHistory {
    function doGetBookingHistory()
    {
        $con=mysqli_connect("localhost","root","","hms");
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $sql="select * from hcg_booking WHERE customer_id='2' "; //login session id
        $result=mysqli_query($con,$sql);
        $resulst = mysqli_fetch_all($result,MYSQLI_ASSOC);        
        return $resulst;
    }
}

?>