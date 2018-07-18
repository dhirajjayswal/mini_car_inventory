<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Model</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container top-margin styling">
  <form method="post">
    <div class="col-md-4">
      <div class="form-group">
    <input type="text" class="form-control" id="model" placeholder="Enter Model Name">
  </div>
    </div>
     <div class="col-md-4">
    <div class="form-group">
      <select class="form-control" id="manufacturer" name="manufacturer">
        <option value="" selected disabled>Select Manufacture Company</option>
        <?php $result = mysqli_query($con,"SELECT * FROM `car_manufacture`");
    
          while ($row = mysqli_fetch_array($result))
        {
          echo "<option>".$row['manufacture_cmpny']."</option>";
        }
          ?>
      </select>
    </div>
  </div>
    <div class="col-md-2">
      <div class="form-group">
    <input type="text" class="form-control" id="qty" placeholder="Enter Quantity">
  </div>
    </div>
    <div class="col-md-2">
      <input type="submit" class="btn btn-primary" onclick="sub()">
    </div>
  </div>
  </form>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
  function sub(){
  var model = $("#model").val();
  var manu_cmpny = $("#manufacturer").val();
  var qty = $("#qty").val();
    $.ajax({
      url: 'car.php',
      type: 'post',
      data: {manu_cmpny: manu_cmpny,model:model,qty:qty},                      
      success: function(data)        
      {
       alert(data);
       
      } 
    });
  }

</script>
</body>
</html>