<?php
if (isset($_POST['price_bricks'])) {
    $bricks = $_POST['price_bricks'];
    $sand = $_POST['price_send'];
    $rode = $_POST['price_rode'];
    $ciment = $_POST['price_ciment'];
    $stone = $_POST['price_stone'];
    $otherp1 = $_POST['others_price_1'];
    $otherp2 = $_POST['others_price_2'];
    $otherp3 = $_POST['others_price_3'];

    // Create connection
    $conn = mysqli_connect("localhost", "root", "", "nazrul4");
    mysqli_query($conn, 'SET CHARACTER SET utf8');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if any data already exists in the pricetable table
    $sql = "SELECT * FROM `pricetable` LIMIT 1";
    $result = mysqli_query($conn, $sql);

    // If any data already exists, show an alert message and exit
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Data already inserted in price table')</script>";
        mysqli_close($conn);
        exit;
    }

    // Insert the data into the database
    $sql = "INSERT INTO `pricetable`(price_bricks,price_send,price_rode,price_ciment,price_stone,others_price_1,others_price_2,others_price_3) VALUES('$bricks','$sand','$rode','$ciment','$stone','$otherp1','$otherp2','$otherp3')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="jquery.datetimepicker.min.css"> -->
    <title>TMS</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  </head>
  <br>


	  
  <br>
   <body>
    <section>
    <div class="container">
	 <div class="row clearfix">
	  <div class="row">
     <br>
      <!--Back Button start-->	 
	  <div class="col-lg-1">
         <a href="dashboard.php" class="btn btn-success btn-sm">Back</a>	    	
	  </div>
     <!--Back Button close-->
	   </section>
	   </br>
	  
	  <!--Regestration Section start-->
	  <section>
	 <div class="col-lg-12 col-md-12 mb-12">
	  <div class="card row align-items-center">
	   <div class="card-body">
        <div class="table-responsive">
	      <div class="col-lg-12 col-md-12 mb-12">
	      <div class="card row align-items-center">
	       <div class="card-body">
			   <h6 class="text-center textalign-center font-weight-bold deep-orange-lighter-hover align-items-center">Insert price</h6>
				<table class="table table-bordered  table-striped table-hover ">
				<form action="" method="POST" enctype="multipart/form-data">
				<tr>
				  <th class="text-left text-nowrap small">  bricks </th>
				  <td><input type="text" name="price_bricks" class="form-control" required></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">  sand </th>
				  <td><input type="text" name="price_send" class="form-control" required></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">  rode</th>
				  <td><input type="text" name="price_rode" class="form-control" required></td>
				</tr>
				
				<tr>
				  <th class="text-left text-nowrap small">  price ciment </th>
				  <td><input type="text" name="price_ciment" class="form-control" required></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">stone </th>
				  <td><input type="text" name="price_stone" class="form-control" required></td>
				</tr>
				</table>
				<table class="table table-bordered  table-striped table-hover ">
				<tr>
				  <th class=" text-left text-nowrap small">other price </th>
				</tr>
				<td class=""><input type="text" name="others_price_1" class="form-control" required></td
				<tr>
				  <th class="text-left text-nowrap small"> other price2
				<td><input type="text" name="others_price_2" class="form-control" required></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small"> other price 3</th>
				  <td><input type="text" name="others_price_3" class="form-control" required></td>
				</tr>
			 <tr> 
			  <th class="text-left"></th>
			  <td><input class="btn btn-success" type="submit" value="submit" </td>
			</tr>
			</form>
		</table>
	  </div>
	  </div>
	  </div>
	  </div>
	  </div>
	  </div>
	  </div>
	  </section>
	 <!--Regestration Section End-->

	   </div>
	  </div>
	 </div>
    <br><br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="jquery-3.4.1.min.js"></script>
	<script src="jquery-ui.min.js"></script>
	<script>
	$(document).ready( function(){
		$('#datepicker').datepicker({
			dateFormat: "dd-mm-yy",
			changeMonth: true,
			changeYear: true
		});
	})
	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
