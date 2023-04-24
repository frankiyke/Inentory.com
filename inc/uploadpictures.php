<?php
//Product image uploading
	$id = $_GET['id'];
	if (isset($_FILES['proimage'])) {
		if (((@$_FILES["proimage"]["type"]=="image/jpeg" ) || (@$_FILES["proimage"]["type"]=="image/png" ) || (@$_FILES["proimage"]["type"]=="image/jpg") || (@$_FILES["proimage"]["type"]=="image/gif"))&& (@$_FILES["proimage"]["size"] < 1048576))//this means 1MB
		{
			@mkdir("userdata/product_images/");
			
			if (file_exists("userdata/product_images/".@$_FILES["proimage"]["name"]))
			{
				$errorpic0 = @$_FILES["proimage"]["name"]." Already Exists, Please delete from product_image folder if you wish to re-upload this image.";
			}
			else
			{
					move_uploaded_file(@$_FILES["proimage"]["tmp_name"],"userdata/product_images/".@$_FILES["proimage"]["name"]);
					$proimage_name = @$_FILES["proimage"]["name"];
					$productpic = "UPDATE products SET proimage='$proimage_name' WHERE id ='$id'";
					mysqli_query($dbconn, $productpic);
					$saved = "Picture uploaded successfully";
					header( "Refresh:1; url=updateproduct.php?id=$id", true, 303);
					
			}
		}
			else
			{
				$errorpic1 = "Sorry Unable to upload file, either your Image is larger than 1MB or you Uploaded none Image File!";
			}
		}
?>
