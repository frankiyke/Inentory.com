<?php
$Biscuited = "SELECT * FROM products WHERE protype='Biscuit'";
$Biscuits = mysqli_query($dbconn, $Biscuited);
$Biscuit = mysqli_num_rows($Biscuits);

$bcream = "SELECT * FROM products WHERE protype='Body Cream'";
$bcreams = mysqli_query($dbconn, $bcream);
$Body_Cream = mysqli_num_rows($bcreams);

$Chocolated = "SELECT * FROM products WHERE protype='Chocolate'";
$Chocolates = mysqli_query($dbconn, $Chocolated);
$Chocolate = mysqli_num_rows($Chocolates);

$Cubed = "SELECT * FROM products WHERE protype='Cubes'";
$Cubes = mysqli_query($dbconn, $Cubed);
$Cube = mysqli_num_rows($Cubes);

$Detergented = "SELECT * FROM products WHERE protype='Detergent'";
$Detergents = mysqli_query($dbconn, $Detergented);
$Detergent = mysqli_num_rows($Detergents);

$Disinfectanted = "SELECT * FROM products WHERE protype='Disinfectant'";
$Disinfectants = mysqli_query($dbconn, $Disinfectanted);
$Disinfectant = mysqli_num_rows($Disinfectants);

$Diapered = "SELECT * FROM products WHERE protype='Diaper'";
$Diapers = mysqli_query($dbconn, $Diapered);
$Diaper = mysqli_num_rows($Diapers);

$Fruited = "SELECT * FROM products WHERE protype='Fruit'";
$Fruits = mysqli_query($dbconn, $Fruited);
$Fruit = mysqli_num_rows($Fruits);

$Drank = "SELECT * FROM products WHERE protype='Drink'";
$Drinks = mysqli_query($dbconn, $Drank);
$Drink = mysqli_num_rows($Drinks);

$Garr = "SELECT * FROM products WHERE protype='Garri'";
$Garris = mysqli_query($dbconn, $Garr);
$Garri = mysqli_num_rows($Garris);

$Grained = "SELECT * FROM products WHERE protype='Grains'";
$Grain = mysqli_query($dbconn, $Grained);
$Grains = mysqli_num_rows($Grain);

$HairCreamed = "SELECT * FROM products WHERE protype='Hair Cream'";
$HairCreams = mysqli_query($dbconn, $HairCreamed);
$HairCream = mysqli_num_rows($HairCreams);

$Juiced = "SELECT * FROM products WHERE protype='Juice'";
$Juices = mysqli_query($dbconn, $Juiced);
$Juice = mysqli_num_rows($Juices);

$KetchupSauce = "SELECT * FROM products WHERE protype='Ketchup Sauce'";
$KetchupSauces = mysqli_query($dbconn, $KetchupSauce);
$KetchupSauce = mysqli_num_rows($KetchupSauces);

$LiquidSoaped = "SELECT * FROM products WHERE protype='Liquid Soap'";
$LiquidSoaps = mysqli_query($dbconn, $LiquidSoaped);
$LiquidSoap = mysqli_num_rows($LiquidSoaps);

$Milked = "SELECT * FROM products WHERE protype='Milk'";
$Milks = mysqli_query($dbconn, $Milked);
$Milk = mysqli_num_rows($Milks);

$Minaraled = "SELECT * FROM products WHERE protype='Minaral'";
$Minarals = mysqli_query($dbconn, $Minaraled);
$Minaral = mysqli_num_rows($Minarals);

$Noodled = "SELECT * FROM products WHERE protype='Noodle'";
$Noodles = mysqli_query($dbconn, $Noodled);
$Noodle = mysqli_num_rows($Noodles);

$Oiled = "SELECT * FROM products WHERE protype='Oil'";
$Oils = mysqli_query($dbconn, $Oiled);
$Oil = mysqli_num_rows($Oils);

$Perfumed = "SELECT * FROM products WHERE protype='Perfume'";
$Perfumes = mysqli_query($dbconn, $Perfumed);
$Perfume = mysqli_num_rows($Perfumes);

$Rumed = "SELECT * FROM products WHERE protype='Rum'";
$Rums = mysqli_query($dbconn, $Rumed);
$Rum = mysqli_num_rows($Rums);

$Salted = "SELECT * FROM products WHERE protype='Salt'";
$Salts = mysqli_query($dbconn, $Salted);
$Salt = mysqli_num_rows($Salts);

$Semoed = "SELECT * FROM products WHERE protype='Semo'";
$Semos = mysqli_query($dbconn, $Semoed);
$Semo = mysqli_num_rows($Semos);

$Soaped = "SELECT * FROM products WHERE protype='Soap'";
$Soaps = mysqli_query($dbconn, $Soaped);
$Soap = mysqli_num_rows($Soaps);

$Spagettied = "SELECT * FROM products WHERE protype='Spagetti'";
$Spagettis = mysqli_query($dbconn, $Spagettied);
$Spagetti = mysqli_num_rows($Spagettis);

$Spicesed = "SELECT * FROM products WHERE protype='Spice'";
$Spices = mysqli_query($dbconn, $Spicesed);
$Spice = mysqli_num_rows($Spices);

$Sugered = "SELECT * FROM products WHERE protype='Suger'";
$Sugers = mysqli_query($dbconn, $Sugered);
$Suger = mysqli_num_rows($Sugers);

$Sweeted = "SELECT * FROM products WHERE protype='Sweet'";
$Sweets = mysqli_query($dbconn, $Sweeted);
$Sweet = mysqli_num_rows($Sweets);

$TinBeaned = "SELECT * FROM products WHERE protype='Tin Beans'";
$TinBean = mysqli_query($dbconn, $TinBeaned);
$TinBeans = mysqli_num_rows($TinBean);

$TinFished = "SELECT * FROM products WHERE protype='Tin Fish'";
$TinFishs = mysqli_query($dbconn, $TinFished);
$TinFish = mysqli_num_rows($TinFishs);

$TinTomatoed = "SELECT * FROM products WHERE protype='Tin Tomatoes'";
$TinTomatoe = mysqli_query($dbconn, $TinTomatoed);
$TinTomatoes = mysqli_num_rows($TinTomatoe);

$Tissued = "SELECT * FROM products WHERE protype='Tissue'";
$Tissues = mysqli_query($dbconn, $Tissued);
$Tissue = mysqli_num_rows($Tissues);

$Toothpasted = "SELECT * FROM products WHERE protype='Toothpaste'";
$Toothpastes = mysqli_query($dbconn, $Toothpasted);
$Toothpaste = mysqli_num_rows($Toothpastes);

$Tubaed = "SELECT * FROM products WHERE protype='Tuba'";
$Tubas = mysqli_query($dbconn, $Tubaed);
$Tuba = mysqli_num_rows($Tubas);

$Watered = "SELECT * FROM products WHERE protype='Water'";
$Waters = mysqli_query($dbconn, $Watered);
$Water = mysqli_num_rows($Waters);

$Wined = "SELECT * FROM products WHERE protype='Wine'";
$Wines = mysqli_query($dbconn, $Wined);
$Wine = mysqli_num_rows($Wines);

$Wiskyed = "SELECT * FROM products WHERE protype='Wisky'";
$Wiskys = mysqli_query($dbconn, $Wiskyed);
$Wisky = mysqli_num_rows($Wiskys);

$Yogurted = "SELECT * FROM products WHERE protype='Yogurt'";
$Yogurts = mysqli_query($dbconn, $Yogurted);
$Yogurt = mysqli_num_rows($Yogurts);

$othered = "SELECT * FROM products WHERE protype='Others'";
$other = mysqli_query($dbconn, $othered);
$Others = mysqli_num_rows($other);

?>