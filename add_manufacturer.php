<!DOCTYPE html>
<html>
<head>
	<title>Add Manufacturer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container row top-margin">
		<div class="col-md-6 col-md-offset-4 styling">
	<form method="post">
  <div class="form-group">
    <label for="name">Manufacturer Name</label>
    <input type="text" class="form-control" name="manufctr_name" id="name" placeholder="Enter Manufacturer Name">
  </div>
  <input type="submit" class="btn btn-primary" onclick="sub()">
</form>
<h1 id="p"></h1>
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
	function sub(){
	var manufacturer = $("#name").val();
	  $.ajax({
      url: 'car.php',
      type: 'post',
      data: {manufacturer: manufacturer},                      
       success: function(data)        
      {
       alert(data);
      } 
    });
	}

</script>
</body>
</html>