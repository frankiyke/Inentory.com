<?php
$imagesql = "SELECT * FROM cars WHERE email='$email'AND id='$id'";
$checkimage = mysqli_query($dbconn, $imagesql);
	$imagerow = mysqli_fetch_assoc($checkimage);
	$brand_name = $imagerow['brand_name'];
	$model = $imagerow['model'];
	$reg_number = $imagerow['reg_number'];
	$vin_number = $imagerow['vin_number'];
	$ctown = $imagerow['town'];
	$cprovince = $imagerow['province'];
	$engin_capacity = $imagerow['engin_capacity'];
	$picture1 = $imagerow['image1'];
	$picture2 = $imagerow['image2'];
	$picture3 = $imagerow['image3'];
	$picture4 = $imagerow['image4'];
	$picture5 = $imagerow['image5'];	
	$picture6 = $imagerow['image6'];
	$gas = $imagerow['gas'];
	$transmission = $imagerow['transmission'];
	$category = $imagerow['category'];
	$doors = $imagerow['doors'];
	$availability = $imagerow['availability']; 
	
	// For the first picture
	if ($picture1 == "")
	{
		$pic1 = "images/Car.png";
	}
	else
	{
		$pic1 = "userdata/car_images/".$picture1;
	}

	// For the Second picture
	if ($picture2 == "")
	{
		$pic2 = "images/Car.png";
	}
	else
	{
		$pic2 = "userdata/car_images/".$picture2;
	}
	
	// For the third picture
	if ($picture3 == "")
	{
		$pic3 = "images/Car.png";
	}
	else
	{
		$pic3 = "userdata/car_images/".$picture3;
	}
	
	// For the fourth picture
	if ($picture4 == "")
	{
		$pic4 = "images/Car.png";
	}
	else
	{
		$pic4 = "userdata/car_images/".$picture4;
	}
	
	// For the fifth picture
	if ($picture5 == "")
	{
		$pic5 = "images/Car.png";
	}
	else
	{
		$pic5 = "userdata/car_images/".$picture5;
	}
	
	// For the sixth picture
	if ($picture6 == "")
	{
		$pic6 = "images/Car.png";
	}
	else
	{
		$pic6 = "userdata/car_images/".$picture6;
	}
?>