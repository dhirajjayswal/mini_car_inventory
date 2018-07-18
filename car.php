<?php 

include "connection.php";

   @$manufacturer = $_POST["manufacturer"];
   @$manufact_cmp = $_POST["manu_cmpny"];
   @$model = $_POST["model"];
   @$qty = $_POST["qty"];
    // echo $_POST["manufacZturer"];exit();
if(isset($_POST["manufacturer"])){
   @$query =  "INSERT INTO `car_manufacture`( `manufacture_cmpny`) VALUES ('$manufacturer')";
   if(mysqli_query($con, $query))
   {
   	echo "Succeessfully Added Manufacturer";
   }else{echo "no";}
   
/* ELSEIF FOR ADDING MANUFACTURER AND MODEL INTO DB*/

}elseif (isset($_POST["manu_cmpny"]) && isset($_POST["model"]) && isset($_POST["qty"])){

	@$query1 =  "INSERT INTO `car_model`( manufac_cmp, model, qnty ) VALUES ('$manufact_cmp','$model','$qty')";
	if(mysqli_query($con, $query1))
   {
   	echo "Succeessfully Added Manufacturer";
   }else{echo "no";}
 }
 /* ELSEIF FOR UPDATING INVENTORY OR DELETING INVENTORY*/
 elseif(isset($_POST["id"]) && isset($_POST["qnty"])) {

   if($_POST["qnty"]>1) {
      $id = $_POST['id'];
      $quantity_before = $_POST["qnty"];
      $quantity_before = $quantity_before-1;

      $query2 =  "UPDATE `car_model` SET `qnty`= '$quantity_before' WHERE id=$id";
   }else{
       $id = $_POST['id'];
     $query2 = "DELETE FROM `car_model` WHERE id='$id'";
      }

   if(mysqli_query($con, $query2))
   {
      echo "Succeessfully Updated Inventory";
   }else {
      echo "no";
   }
 }



?>