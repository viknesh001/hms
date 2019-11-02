<?php
    require_once('..\db.php');    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking Confirmation</h4>
      </div>
      <div class="modal-body">
      <form action="<?php echo $baseurl;?>/booking?create" method="POST">
        <div class="form-group">
            <label for="fromdate">From Date:</label>
            <input type="date" class="form-control" name="fromdate"/>
        </div>
        <div class="form-group">
            <label for="todate">to Date:</label>
            <input type="date" class="form-control" name="todate"/>
        </div>
        <div class="form-group">
        <label for="email">Rooms Count:</label>
            <select class="form-control" name="rooms_count">
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
            </select>
        </div>  
        <div class="text-center">       
            <button type="submit" class="btn btn-success">Confirm</button>
        </div> 
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
<script>

</script>
</body>
</html>
