<?php 
    require_once('db.class.php');

	class Booking {
        public function index() {
            $request = $_GET;
            $input = $_POST;
            
            if(isset($request['create'])) {
                $this->create_booking($input);
            }
        }

		public function booking_list() {

        }

        public function create_booking($input) {            
            $conn = new mysqli( 'localhost','root', '', 'hms' );          

            $hotel = $input['hotel'];
            $location = $input['location'];
            $area = $input['area'];
            $customer = $_SESSION['customer_id'];
            $fromdate = $input['fromdate'];
            $todate = $input['todate'];
            $rooms_count = $input['rooms_count'];
            $amount = $input['amount'];

            $insert_query = "INSERT INTO `hms_booking`( `customer_id`, `hotel_id`, `from_date`, `to_date`, `location`, `area`, `rooms_count`, `total_amount`) VALUES (".$customer.",".$hotel.",'".$fromdate."','".$todate."',".$location.",".$area.",'".$rooms_count."',".$amount.")";

            if ($conn->query($insert_query) === TRUE) {
                $last_id = $conn->insert_id;
                $_SESSION['successmsg'] = 'Booking Created Successfully!!';
                header("Lcoation:views/booking-history.php");
            } else {
                $_SESSION['errormsg'] = 'Some Error has occured.Please try again later!!';
                header("Lcoation:views/hotel.php");
            }           
        }
	}
?>