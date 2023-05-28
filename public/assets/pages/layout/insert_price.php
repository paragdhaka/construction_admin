





<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nazrul4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if data already exists in the pricetable
$sql = "SELECT * FROM pricetable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<script>alert('Data already exists in the pricetable.');</script>";
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Prepare and bind the SQL statement
        ////$stmt = $conn->prepare("INSERT INTO pricetable (price_bricks, price_send, price_rode, price_ciment, price_stone, others_price_1, others_price_2, others_price_3, image1, image2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       //// $stmt->bind_param("iiiiisssss", $price_bricks, $price_send, $price_rode, $price_ciment, $price_stone, $others_price_1, $others_price_2, $others_price_3, $image1, $image2);

        // Set parameter values
        $price_bricks = $_POST['price_bricks'];
        $price_send = $_POST['price_send'];
        $price_rode = $_POST['price_rode'];
        $price_ciment = $_POST['price_ciment'];
        $price_stone = $_POST['price_stone'];
        $others_price_1 = $_POST['others_price_1'];
        $others_price_2 = $_POST['others_price_2'];
        $others_price_3 = $_POST['others_price_3'];
      //  $image1 = $_FILES['image1']['name'];
        //$image2 = $_FILES['image2']['name'];

        // Upload images
        $target_dir = "uploads/";
		
		$path_parts1 = pathinfo($_FILES["image1"]["name"]);
		$extension1 = $path_parts1['extension'];
		$image1= 'Image1.'.$extension1;
		
		$path_parts2 = pathinfo($_FILES["image2"]["name"]);
		$extension2 = $path_parts2['extension'];
		$image2= 'Image2.'.$extension2;
		
		
		
		
		
		$path_parts3 = pathinfo($_FILES["bricks"]["name"]);
		$extension3 = $path_parts3['extension'];
		$image3= 'bricks.'.$extension3;
		
		$path_parts4 = pathinfo($_FILES["sand"]["name"]);
		$extension4 = $path_parts4['extension'];
		$image4= 'sand.'.$extension4;
		
		$path_parts5 = pathinfo($_FILES["ciment"]["name"]);
		$extension5 = $path_parts5['extension'];
		$image5= 'ciment.'.$extension5;
		
		$path_parts6 = pathinfo($_FILES["rod"]["name"]);
		$extension6 = $path_parts6['extension'];
		$image6= 'rod.'.$extension6;
		
		$path_parts7 = pathinfo($_FILES["stone"]["name"]);
		$extension7 = $path_parts7['extension'];
		$image7= 'stone.'.$extension7;
		
		$path_parts8 = pathinfo($_FILES["concrit"]["name"]);
		$extension8 = $path_parts8['extension'];
		$image8= 'concrit.'.$extension8;
		
		
		
		
        $target_file1 = $target_dir.$image1 ;
        $target_file2 = $target_dir.$image2;
		
		
		$target_file3 = $target_dir.$image3;
		$target_file4 = $target_dir.$image4;
		$target_file5 = $target_dir.$image5;
		$target_file6 = $target_dir.$image6;
		$target_file7 = $target_dir.$image7;
		$target_file8 = $target_dir.$image8;
		
		
		
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
		
		
        move_uploaded_file($_FILES["bricks"]["tmp_name"], $target_file3);
        move_uploaded_file($_FILES["sand"]["tmp_name"], $target_file4);
        move_uploaded_file($_FILES["ciment"]["tmp_name"], $target_file5);
        move_uploaded_file($_FILES["rod"]["tmp_name"], $target_file6);
        move_uploaded_file($_FILES["stone"]["tmp_name"], $target_file7);
        move_uploaded_file($_FILES["concrit"]["tmp_name"], $target_file8);

		$sql = "INSERT INTO `pricetable` (price_bricks,price_send,price_rode,price_ciment,price_stone,others_price_1,others_price_2,others_price_3,image1,image2,bricks_pic,sand_pic,ciment_pic,rod_pic,stone_pic,concrit_pic) VALUES('$price_bricks','$price_send','$price_rode','$price_ciment','$price_stone','$others_price_1','$others_price_2','$others_price_3','$image1','$image2','$image3','$image4','$image5','$image6','$image7','$image8')";
		
		$result =  mysqli_query($conn, $sql);

        // Execute the SQL statement
        if ($result) {
            echo "New record created successfully";
        } else {
            echo "Error: " ;
        }
    }
}

// Close connection
$conn->close();
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
                <td>বাঁশ:</td>
                <td><input type="file" name="image1"></td>
				</tr>
				<tr>
					<td>স্টিল প্লেট:</td>
					<td><input type="file" name="image2"></td>
				</tr>
				
				
				
				
				
				<tr>
					<td>ইট:</td>
					<td><input type="file" name="bricks"></td>
				</tr>
				<tr>
					<td>বালু:</td>
					<td><input type="file" name="sand"></td>
				</tr>
				<tr>
					<td>সিমেন্ট:</td>
					<td><input type="file" name="ciment"></td>
				</tr>
				<tr>
					<td>রড:</td>
					<td><input type="file" name="rod"></td>
				</tr>
				<tr>
					<td>পাথর সাপ্লাই:</td>
					<td><input type="file" name="stone"></td>
				</tr>
				<tr>
					<td>সকংক্রিট ব্লক:</td>
					<td><input type="file" name="concrit"></td>
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
