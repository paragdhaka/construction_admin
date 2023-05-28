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

    // If any data already exists, update the data in the table
    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE `pricetable` SET ";
        
        if (!empty($bricks)) {
            $sql .= "price_bricks='$bricks',";
        }
        
        if (!empty($sand)) {
            $sql .= " price_send='$sand',";
        }
        
        if (!empty($rode)) {
            $sql .= " price_rode='$rode',";
        }
        
        if (!empty($ciment)) {
            $sql .= " price_ciment='$ciment',";
        }
        
        if (!empty($stone)) {
            $sql .= " price_stone='$stone',";
        }
        
        if (!empty($otherp1)) {
            $sql .= " others_price_1='$otherp1',";
        }
        
        if (!empty($otherp2)) {
            $sql .= " others_price_2='$otherp2',";
        }
        
        if (!empty($otherp3)) {
            $sql .= " others_price_3='$otherp3',";
        }

		$image1= '';
		$image2= '';
		$image3= '';
		$image4= '';
		$image5= '';
		$image6= '';
		$image7= '';
		$image8= '';
		// Upload images
		  $target_dir = "uploads/";
		
	    if (isset($_FILES["picture1"]))
		{
			$path_parts1 = pathinfo($_FILES["picture1"]["name"]);
			$extension1 = $path_parts1['extension'];
			$image1= 'Image1.'.$extension1;
			
			$target_file1 = $target_dir.$image1 ;
           move_uploaded_file($_FILES["picture1"]["tmp_name"], $target_file1);
		}
			
	    if (isset($_FILES["picture2"]))
		{
			$path_parts2 = pathinfo($_FILES["picture2"]["name"]);
			$extension2 = $path_parts2['extension'];
			$image2= 'Image2.'.$extension2;
			
			$target_file2 = $target_dir.$image2 ;
			move_uploaded_file($_FILES["picture2"]["tmp_name"], $target_file2);
		
		}
		
		
		
		  if (isset($_FILES["bricks"]))
		{
			$path_parts3 = pathinfo($_FILES["bricks"]["name"]);
			$extension3 = $path_parts3['extension'];
			$image3= 'bricks.'.$extension3;
			
			$target_file3 = $target_dir.$image3 ;
			move_uploaded_file($_FILES["bricks"]["tmp_name"], $target_file3);
		
		}
		  if (isset($_FILES["sand"]))
		{
			$path_parts4 = pathinfo($_FILES["sand"]["name"]);
			$extension4 = $path_parts4['extension'];
			$image4= 'sand.'.$extension4;
			
			$target_file4 = $target_dir.$image4 ;
			move_uploaded_file($_FILES["sand"]["tmp_name"], $target_file4);
		
		}
		  if (isset($_FILES["ciment"]))
		{
			$path_parts5 = pathinfo($_FILES["ciment"]["name"]);
			$extension5 = $path_parts5['extension'];
			$image5= 'ciment.'.$extension5;
			
			$target_file5 = $target_dir.$image5 ;
			move_uploaded_file($_FILES["ciment"]["tmp_name"], $target_file5);
		
		}
		  if (isset($_FILES["rod"]))
		{
			$path_parts6 = pathinfo($_FILES["rod"]["name"]);
			$extension6 = $path_parts6['extension'];
			$image6= 'rod.'.$extension6;
			
			$target_file6 = $target_dir.$image6 ;
			move_uploaded_file($_FILES["rod"]["tmp_name"], $target_file6);
		
		}
		  if (isset($_FILES["stone"]))
		{
			$path_parts7 = pathinfo($_FILES["stone"]["name"]);
			$extension7 = $path_parts7['extension'];
			$image7= 'stone.'.$extension7;
			
			$target_file7 = $target_dir.$image7 ;
			move_uploaded_file($_FILES["stone"]["tmp_name"], $target_file7);
		
		}
		  if (isset($_FILES["concrit"]))
		{
			$path_parts8 = pathinfo($_FILES["concrit"]["name"]);
			$extension8 = $path_parts8['extension'];
			$image8= 'concrit.'.$extension8;
			
			$target_file8 = $target_dir.$image8 ;
			move_uploaded_file($_FILES["concrit"]["tmp_name"], $target_file8);
		
		}
									
									
        // remove the trailing comma
        $sql = rtrim($sql, ",");
        
		$result = mysqli_query($conn, $sql);
        
        if ($result) {
						
			echo $sql = "UPDATE `pricetable` SET
								`price_bricks` = '$bricks',
								`price_send` = '$bricks',
								`price_rode` = '$rode',
								`price_ciment` = '$ciment',
								`price_stone` = '$stone',
								`others_price_1`= '$otherp1',
								`others_price_2` = '$otherp2',
								`others_price_3` = '$otherp3',
								`image1` = '$image1',
								`image2` = '$image2',
								`bricks_pic` = '$image3',
								`sand_pic` = '$image4',
								`ciment_pic` = '$image5',
								`rod_pic` = '$image6',
								`stone_pic` = '$image7',
								`concrit_pic` = '$image8'";
								
		$result =  mysqli_query($conn, $sql);
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } /* else {
        // Insert the data into the database
		
        $sql = "INSERT INTO `pricetable`(price_bricks,price_send,price_rode,price_ciment,price_stone,ot hers_price_1,others_price_2,others_price_3,image1,image2) VALUES('$bricks','$sand','$rode','$ciment','$stone','$otherp1','$otherp2','$otherp3','$image1','$image2')";
		
			
		$result =  mysqli_query($conn, $sql);
		
	
        if ($result) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } */

    // Close the connection
    mysqli_close($conn);
}




?>






	
<?php
// Create connection
$conn2 = mysqli_connect("localhost", "root", "", "nazrul4");
mysqli_query($conn2, 'SET CHARACTER SET utf8');

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}

// Select data from table
$sql2 = "SELECT * FROM `pricetable`";
$result2 = mysqli_query($conn2, $sql2);

// Check if any data exists in the table
if (mysqli_num_rows($result2) > 0) {
    // Fetch data from the first row
    $row2 = mysqli_fetch_assoc($result2);
    
    // Store the values in variables
    $bricks = $row2['price_bricks'];
    $sand = $row2['price_send'];
    $rode = $row2['price_rode'];
    $ciment = $row2['price_ciment'];
    $stone = $row2['price_stone'];
    $otherp1 = $row2['others_price_1'];
    $otherp2 = $row2['others_price_2'];
    $otherp3 = $row2['others_price_3'];
} else {
    // If no data exists, set default values
    $bricks = "";
    $sand = "";
    $rode = "";
    $ciment = "";
    $stone = "";
    $otherp1 = "";
    $otherp2 = "";
    $otherp3 = "";
}

// Close the connection
mysqli_close($conn2);
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
				  <th class="text-left text-nowrap small">  ইট  <b>Per Piece</b></th>

		
				  <td><input type="text" name="price_bricks" class="form-control" value="<?php echo $bricks; ?>"></td>
				  
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">  বালু   <b>CFT</b></th>
				  <td><input type="text" name="price_send" class="form-control" value="<?php echo $sand; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">  রড    <b>Ton</b></th>

				  <td><input type="text" name="price_rode" class="form-control" value="<?php echo $rode; ?>"></td>
				</tr>
				
				<tr>
				  <th class="text-left text-nowrap small">  সিমেন্ট <b> Bag</b></th>
				  <td><input type="text" name="price_ciment" class="form-control" value="<?php echo $ciment; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">পাথর  <b>Per Ton<b></th>
				  <td><input type="text" name="price_stone" class="form-control" value="<?php echo $stone; ?>"></td>
				</tr>
				
								<tr>
				  <th class="text-left text-nowrap small">Blocks </th>
				  <td><input type="text" name="others_price_1" class="form-control" value="<?php echo $otherp1; ?>"></td>
				</tr>
				
								<tr>
				  <th class="text-left text-nowrap small">Bamboo </th>
				  <td><input type="text" name="others_price_2" class="form-control" value="<?php echo $otherp2; ?>"></td>
				</tr>
				
			    <tr>
				  <th class="text-left text-nowrap small">Steel plate </th>
				  <td><input type="text" name="others_price_3" class="form-control" value="<?php echo $otherp3; ?>"></td>
				</tr>
				
				
				  <tr>
					<th class="text-left text-nowrap small">Bamboo pic Change </th>
					<td><input type="file" name="picture1" class="form-control" value="<?php echo $image1; ?>"></td>
				</tr>
						
				<tr>
				  <th class="text-left text-nowrap small">স্টিল প্লেট </th>
				  <td><input type="file" name="picture2" class="form-control" value="<?php echo $image2; ?>"></td>
				</tr>
				
				
				
				
				
				
				<tr>
				  <th class="text-left text-nowrap small">bricks_pic</th>
				  <td><input type="file" name="bricks" class="form-control" value="<?php echo $image3; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">sand_pic </th>
				  <td><input type="file" name="sand" class="form-control" value="<?php echo $image4; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">ciment_pic </th>
				  <td><input type="file" name="ciment" class="form-control" value="<?php echo $image5; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">rod_pic </th>
				  <td><input type="file" name="rod" class="form-control" value="<?php echo $image6; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">stone_pic</th>
				  <td><input type="file" name="stone" class="form-control" value="<?php echo $image7; ?>"></td>
				</tr>
				<tr>
				  <th class="text-left text-nowrap small">concrit_pic </th>
				  <td><input type="file" name="concrit" class="form-control" value="<?php echo $image8; ?>"></td>
				</tr>
				

			 <tr> 
			  <th class="text-left"></th>
			  <td><input class="btn btn-success" type="submit" value="Update" </td>
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
