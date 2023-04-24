<?php
$checkimages = "SELECT * FROM product WHERE id='$id'";
$checkimage = mysqli_query($dbconn, $checkimages);
	$get = mysqli_fetch_assoc($checkimage);
				$id = $get['id'];
				$proname = $get['proname'];
				$protype = $get['protype'];
				$barcode = $get['barcode'];
				$quantity = $get['quantity'];
				$proimage = $get['proimage'];
				$price = $get['price'];
				$procode = $get['procode'];
				$description = $get['prodescription'];
	
	// For the first picture
	if ($proimage == "")
	{
		$pic1 = "images/Product.png";
	}
	else
	{
		$pic1 = "userdata/car_images/".$proimage;
	}
?>