<?php require "connact.php";
$dbconn = mysqli_connect($webhost, $dbuser, $dbpass,$dbname)or die("Couldnt connect to SQL Server");
    if(!$dbconn ) {
      die("Could not connect to database");
   }
?>