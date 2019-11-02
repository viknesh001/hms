<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotels </title>
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
    
        <link rel="stylesheet" type="text/css" href="assets/plugins/data-tables/css/datatables.min.css"/>
<!--    <script type="text/javascript" src="assets/plugins/data-tables/js/datatables.min.js"></script>-->
    
<!--        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->


    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- prism css -->
    <link rel="stylesheet" href="assets/plugins/prism/css/prism.min.css">
       <!-- data tables css -->
    <link rel="stylesheet" href="assets/plugins/data-tables/css/datatables.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

    
    
<!--             <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">-->
<!--    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>-->
 
    
    

        <link rel="stylesheet" href="assets/plugins/sweetalert/css/sweetalert.css">
              <script type="text/javascript" src="assets/plugins/sweetalert/js/sweetalert-dev.js"></script>
        <script type="text/javascript" src="assets/plugins/sweetalert/js/sweetalert.min.js"></script>
 
    
    

    <style>
        .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(assets/images/gif/Preloader.gif) center no-repeat #fff;
            }
        
        .dataTables_filter, .dataTables_info { display: none; }
    
 .selected{
     background-color:beige;
 }
        
      tr td {
border: solid 1px #b7e5fe;
} 
 .pcoded-content{  padding:0px !important;}
    
   .td_img {
          width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
  }
        
        
        
        
 
    
    
  </style>  
    

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="fas fa-gamepad"></i>
                        
                    </div>
                    <span class="b-title">HMS</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
<!--
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
-->
                   
            
                    
                    <li class="nav-game "><a href="hotels" class="nav-link"><span class="pcoded-micon"><i class="fas fa-table-tennis"></i></span><span class="pcoded-mtext">Hotels</span></a></li>
                    
        <!--                    
                    <li  class="nav-venue "><a href="venue.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-location-arrow"></i></span><span class="pcoded-mtext">Venue</span></a></li>
                    
                    
                                          
                    <li  class="nav-venuegame "><a href="#" class="nav-link"><span class="pcoded-micon"><i class="fas fa-address-card"></i></span><span class="pcoded-mtext">Venue & Game</span></a></li>
         
                  <li  class="nav-court "><a href="court.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-box"></i></span><span class="pcoded-mtext">Court</span></a></li> 
                    
                       <li  class="nav-timeslot "><a href="timeslot.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-calendar-times"></i></span><span class="pcoded-mtext">Time Slot</span></a></li>
                    
                           <li  class="nav-pricecard "><a href="pricecard.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-money-bill-alt"></i></span><span class="pcoded-mtext">Price card</span></a></li>
                    
                    -->
                    
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="fas fa-gamepad"></i>
                   </div>
                   <span class="b-title">Hotels</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                
         
            </ul>
            <ul class="navbar-nav ml-auto">
              
           
                <li>
                    <div class="dropdown drp-user">
<!--
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
-->
                        
                        <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image" data-toggle="dropdown" style="width:50px;">
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ chat user list ] start -->

    <!-- [ chat user list ] end -->

    <!-- [ chat message ] start -->
  
    <!-- [ chat message ] end -->

    <!-- [ Main Content ] start -->
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
<!--                                            <h5>Fixed Layout</h5>-->
<!--                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="displaytable"></label>-->
                                          
                                        
                                           
                                          
                                          
                                            
                                            
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
                        <th>id</th>
			             <th>Hotle Names</th>
                        <th>Hotel Image</th>
                        <th>Address </th>
                        <th>Area </th>
                        <th>Location</th>
                         <th>Room Type</th>
                           <th>Rating</th>
                         
			      
            
                    </tr>
                   </thead>
                    <tbody id="tableBody">
                    </tbody>                   
                                                    
                                                    
                  </table>     
               
            
            

 </div>
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                  
                                    
                                    
                                    
                                </div>
                                <!-- [ fixed-layout ] end -->
                            </div>
                            
             
                            
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    
<!--   ADD FUNCTION -->
    
<div id="myModal1" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" >
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">ADD </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
<!--                                                            <p>Woohoo, you're reading this text in a modal!</p>-->
                                                            
                                                            
             <form id="forms">
          
                <div class="form-group">
                    <label>VenueGame Name</label>    
                    <input type="text" class="form-control form-control_1" id="venuegame_name">
                      <div id="gamename_validate" class="validation"></div>
                </div> 
                 
                <div class="form-group">
                    <label class="Location">Venue</label>    
                    <select class="form-control form-control_1" id="venue_drop"></select>
                    <div id="venue_drop_validate" class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="Location">Game</label>    
                    <select class="form-control form-control_1" id="game_drop"></select>
                    <div id="game_drop_validate" class="validation"></div>
                </div>
                 
                    <label for="imageview">Upload  venuegameImage<br>
                <input type="file" id="imageview" onchange="readURL(this);" style="display:none;"><img id="image_preview" src="assets/images/1.png" style="width: 125px;height: 125px;"/></label>
                <div id="imageview_validate" class="validation"></div>
                
            </form>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" onclick="create();"  >Save Venue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
  
    
    
    <!--   EDIT FUNCTION -->
    
<div id="myModal2" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" >
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">UPDATE </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
<!--                                                            <p>Woohoo, you're reading this text in a modal!</p>-->
                                                            
                                                            
             <form id="forms">
                 
                    <input type="hidden"  class="form-control" id="id1">
          
                <div class="form-group">
                    <label>Venue Name</label>    
                    <input type="text" class="form-control form-control_1" id="venuegame_name1">
                      <div id="gamename1_validate1" class="validation"></div>
                </div> 
                 
                 
                                   <label class="Location">Venue</label>    
                    <select class="form-control form-control_1" id="venue_drop1"></select>
                    <div id="venue_drop_validate" class="validation"></div>
              
                       <div class="form-group">
                    <label class="Location">Game</label>    
                    <select class="form-control form-control_1" id="game_drop1"></select>
                    <div id="game_drop1_validate" class="validation"></div>
                </div>
                 
                 
                   <label for="imageview1">Upload Image<br>
                <input type="file" id="imageview1" onchange="readURL1(this);" style="display:none;"><img id="image_preview1" src="assets/images/1.png" style="width: 125px;height: 125px;"/></label>
                <div id="imageview_validate1" class="validation"></div>
                
             </form>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" onclick="update();"  >Update </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
    
    
    
    
    


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    

    <!-- prism Js -->
    <script src="assets/plugins/prism/js/prism.min.js"></script>
    
        <!-- datatable Js -->
    <script src="assets/plugins/data-tables/js/datatables.min.js"></script>
    <script src="assets/js/pages/tbl-datatable-custom.js"></script>
<!--        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
    
    <!-- sweet alert Js -->
<!--    <script src="assets/plugins/sweetalert/js/sweetalert.min.js"></script>-->
    <script src="assets/js/pages/ac-alert.js"></script>

    

    
    <script type="text/javascript">
    
        
  $(document).ready( function() {
     $('.nav-venuegame').addClass('active');
    
   view();


 
    $(".se-pre-con").fadeOut("slow");
});
        
            
function view(){
    $.ajax({
    type: "GET",
    dataType: "json",
    url: "assets/php/php_hotels/hotels_list.php",
    data: "",
    success: success,
    });
} 
    
        
        
        
        


  
        
        
        
  
 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     

        
    
function getIndex(){
var $rows = table.$('tr.selected');
if($rows.length){
   var test = table.rows('.selected').data();
            $('#myModal2').modal('show');
            $('#id1').val(test[0][0]);
           $('#venuegame_name1').val(test[0][1]);
    
     foodimage_update = test[0][2].substring(10, test[0][2].length - 17);
            var img=foodimage_update;
           //alert(img);
           // rideimage_update = rideimage_update.substring(19);
           foodimage_update = foodimage_update.replace(/^.*[\\\/]/, '')
            //alert(rideimage_update);
            $("#image_preview1").attr('src',img);
    
    
      $('#venue_drop1').val(test[0][5]);
      $('#game_drop1').val(test[0][6]);
   
   
   
    } else {
        
       // swal("", "Select a row to edit");
              swal({
              title: '',
              text: 'Select a row to Edit',
              timer: 2000,
              showCancelButton: false,
              showConfirmButton: false,
            });
        
    }   
}
        
        
 
         
        
        
        
        
        
        
        
        
        
        
        
        
    
    
        
        
        
        
        
         var table;   
  function tableInit()
 {
    table=$('#displaytable').DataTable( {
         select: {
            style:    'single',
        }, "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                
            }
        ],
         "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false 
    } );

 }  
        
        
        
          $('#displaytable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
             // $(this).css('background', 'white');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            // $(this).css('background', 'beige');
        }
    } );

        
        
$("#searchbox").on("keyup search input paste cut", function() {
   table.search(this.value).draw();
});  

      
        
function success(data){

   
    buildHtmlTable(data);
}
    
function buildHtmlTable(data){
    var columns = addAllColumnHeaders(data);
    for (var i = 0 ; i < data.length ; i++) 
    {
         var row$ = $('<tr/>');
         for (var colIndex = 0 ; colIndex < columns.length ; colIndex++) 
         {
             if(colIndex == 2){
            var cellValue1 = data[i][columns[colIndex]];
             if (cellValue1 == null) 
             { 
                 cellValue1 = ""; 
             }
            else{
                var cellValue="<img src='assets/img1/"+cellValue1+"' class='td_img'>";
            }
            }
             else{
            var cellValue = data[i][columns[colIndex]];
             if (cellValue == null) 
             { 
                 cellValue = ""; 
             }  
             }
             
             row$.append($('<td/>').html(cellValue));
         }
         $("#displaytable").append(row$);
     }
        tableInit();
    	$(".se-pre-con").fadeOut("slow");
}

function addAllColumnHeaders(data){
     var columnSet = [];
     var headerTr$ = $('<tr/>');
     for (var i = 0 ; i < data.length ; i++) 
     {
         var rowHash = data[i];
         for (var key in rowHash) {
             if ($.inArray(key, columnSet) == -1)
             {
                 columnSet.push(key);
                 headerTr$.append($('<th/>').html(key));
             }
         }
     }
     return columnSet;
}
    
    
   
        
        
        
    </script>
</body>
</html>
