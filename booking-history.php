<?php
include("models/booking-history.php");
$bookinghistory = new BookingHistory();
$listings       = $bookinghistory->doGetBookingHistory();
//print $result;
//header('location:views/booking_history.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Signin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <!-- <div class="b-bg">
                    <i class="fas fa-gamepad"></i>
                    
                </div> -->
                <span class="b-title">HCG</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-game "><a href="#" class="nav-link"><span class="pcoded-micon"><i class="fas fa-table-tennis"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>                     
                <li  class="nav-venue "><a href="booking-history.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-location-arrow"></i></span><span class="pcoded-mtext">History</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="pcoded-main-container">        
    <div class="se-pre-con"></div>        
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!-- [ fixed-layout ] start -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
				<div class="card-header-right" style="display: flex;padding: 8px;" >
							<input type="search"  id="searchbox" class="form-control form-control-sm" placeholder="Search" >
						<div class="btn-group card-option">
							<button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="feather icon-more-horizontal"></i>
							</button>
							<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
								<li class="dropdown-item full-card"><a href="javascript:"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
								
								<li class="dropdown-item reload-card"><a href="javascript:"><i class="feather icon-refresh-cw"></i> reload</a></li>
							
							</ul>
						</div>
					</div>
				</div>
				<div class="card-block">  
                    <div class="table-responsive">
                            <table  id="displaytable" class="display table nowrap  dataTable" style="width:100%">
                                <thead style="background-color: #00a7f84d;" >
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Hotel Image</th>
                                        <th>Location</th>
                                        <th>Area</th>
                                        <th>Date</th>
                                        <th>No of Persons</th>
                                        <th>Wallet</th>
                                        <th>Discounts</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                        <tbody id="tableBody">
                                            <?php foreach($listings as $lists) { ?>
                                            <tr>
                                            
                                            <td style="width:25%"><?php echo $lists['hotel_id']; ?></td>
                                            <td>
                                            <img src="images/<?php echo $lists['image'];?>" style="width:70%"/>
                                            </td>
                                            <td><?php echo ucfirst($lists['location']); ?></td>
                                            <td><?php echo ucfirst($lists['area']); ?></td>
                                            <td><?php echo date("d-m-Y",strtotime($lists['from_date'])); ?></td>
                                            <td><?php echo $lists['rooms_count']; ?></td>
                                            <td style="text-align:right;">
                                                <?php if ($lists['wallet'] > 0) { ?>
                                                <?php echo $lists['wallet']; ?>
                                                <?php } else { ?>
                                                <?php echo "--"; ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align:right;"><?php echo $lists['discount_amount']; ?></td>
                                            <td style="text-align:right;"><?php echo $lists['total_amount']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>					
                                        </table>
                                        </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
