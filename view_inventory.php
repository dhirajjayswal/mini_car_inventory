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
	<div class="container top-margin border">
    <div class="text-center">
    <h2>Car Inventory System</h2>
  </div>
  <form method="post">
   <table id="mytable">
  <tr>
    <th>SR. NO.</th>
    <th>MANUFACTURER</th>
    <th>MODEL</th>
    <th>QUANTITY</th>
    <th>AVAILABILITY</th>
  </tr>
  
    <?php 
     $result = mysqli_query($con,"SELECT * FROM `car_model`");
    
          while ($row = mysqli_fetch_array($result))
        {
          echo "<tr class='result'>";
          echo "<td  class='qnty'><input readonly type='text' name ='id' class='qunti' value=".$row['id']."></td>";
          echo "<td  class='qnty'><input readonly type='text' name ='manufac_cmp' class='qunti' value=".$row['manufac_cmp']."></td>";
          echo "<td  class='qnty'><input readonly type='text' name ='model' class='qunti' value=".$row['model']."></td>";
          echo "<td  class='qnty'><input readonly type='text' name ='qnty' class='qunti' value=".$row['qnty']."></td>";
          echo "<td><input type='submit' class='btn btn-danger sold' value='Sold' onclick='inventory(".$row['id'].",".$row['qnty'].")'><td>";
          echo "</tr>";
        }
          
     ?>
</table>
</form>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>

function inventory(id,qnty) {
 var id= id;
 var qnty = qnty;

     $.ajax({
      url: 'car.php',
      type: 'post',
      data: {id: id,qnty:qnty},                      
      success: function(data)        
      {
       alert(data);
       
      } 
    });
}
</script>
<script>
</script>
</body>
</html>