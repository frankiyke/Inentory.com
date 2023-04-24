<?php 
include ("inc/connect.php");
session_start();
if (isset($_SESSION["user_login"])){
$email = $_SESSION["user_login"];
}
else{
	$email = "";	
	//header ("Location: login.php");
}
include ("inc/pictures.php");
$imagesql = "SELECT * FROM userinfo WHERE email='$email'";
$checkimage = mysqli_query($dbconn, $imagesql);
	$imagerow = mysqli_fetch_array($checkimage, MYSQLI_ASSOC);
	$profilephoto = $imagerow['profileimage'];
	$name = $imagerow['firstname'];
	$email = $imagerow['email'];
	if ($profilephoto == "")
	{
		$profileimage = "images/default.jpg";
	}
	else
	{
		$profileimage = "userdata/profileimages/".$profilephoto;
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>D'Neiro Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="icon" type="image/gif" href="images/logo.png">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
			
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
		 <a class="navbar-brand absolute" href="index.php"><img src="./images/logo.png" height="95" /> D'Neiro Store</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
			<?php
			if (!$email) {
			echo
				'<li class="nav-item">
					<a class="nav-link active"><span style= "color: Red";>Sales</span></a>
				  </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="viewproducts.php">Products</a>
                  <a class="dropdown-item" href="product-search.php">Search Products</a>
				  <a class="dropdown-item" href="saleproduct.php">Sale Product</a>
                </div>

              </li>
              			  
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.php">Admin Login</a> 
              </li>
			  
            </ul>
            
          </div>
        </div>
      </nav>
			</header>';
			}
			
					
		else{
			echo '<li class="nav-item">
					<a class="nav-link active"><span style= "color: green";>ADMIN</span></a>
				  </li>
				<li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listing</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="addproduct.php">Add Product</a>
                  <a class="dropdown-item" href="editproduct.php">Manage Products</a>
                  <a class="dropdown-item" href="saleproduct.php">Sale Products</a>
				  <a class="dropdown-item" href="viewproducts.php">Preview products</a>
				  <a class="dropdown-item" href="deleteimages.php">Delete Images</a>
				  <a class="dropdown-item" href="soldproducts.php">View Sold Products</a>
				  <a class="dropdown-item" href="accountsettings.php">Account Settings </a>
				  <a class="dropdown-item" href="contact.php">Contact</a>
				  <a class="dropdown-item" href="logout.php"> Logout </a>
                </div>

              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              
			</ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="logout.php"> Logout </a>';
				?>
              </li>
			  
            </ul>
            
          </div>
        </div><a href="accountsettings.php"><?php echo " <img src='$profileimage' width='60' /> <br />$name"; ?></a><br />
        		
      </nav>
			</header>
		<?php }?>	