<!doctype html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8">    
	<title>Addin Holiday</title>
	<link rel="shortcut icon" type="image/png" href= "favicon.png"> 
</head>

<body>
  	<?php 

$title = $_GET['holidayTitle'];
 $category=$_GET['holidayCategory'];
 $location=$_GET['holidayLocation'];
 $price=$_GET['holidayPrice'];
 $duration=$_GET['holidayDuration'];
 $description=$_GET['holidayDescription'];
 
	
	if ($category == "Luxury") {
 		$catID="c1";
	}
	if ($category == "Tour") {
 		$catID="c2";
	}
	if ($category == "Safari") {
 		$catID="c3";
	}
	if ($category == "Golf") {
 		$catID="c4";
	}
	if ($category == "Weddings") {
 		$catID="c5";
	}
	if ($category == "Walking") {
 		$catID="c6";
	}
	if ($category == "Opera") {
 		$catID="c7";
	}
	
	if ($location == "Milaidhoo Island") {
 		$locationID="l1";
	}
	if ($location == "Rangali Island") {
 		$locationID="l2";
	}
	if ($location == "Zanzibar") {
 		$locationID="l3";
	}
	if ($location == "Boston") {
 		$locationID="l4";
	}
	if ($location == "San Francisco") {
 		$locationID="l5";
	}
	if ($location == "Nairobi") {
 		$locationID="l6";
	}
	if ($location == "Algarve") {
 		$locationID="l7";
	}
	if ($location == "New York") {
 		$locationID="l8";
	}
	if ($location == "Sorrento") {
 		$locationID="l9";
	}
	if ($location == "Verona") {
 		$locationID="l10";
	}
	
	
	echo "<pre>\n";
		print_r($_REQUEST);
		echo "</pre>\n";
	

 
 include 'database_conn.php';
 $sql = "INSERT INTO LCG_holidays (holidayTitle, holidayDescription,holidayDuration, locationID, catID, holidayPrice)
VALUES ('$title', '$description', '$duration', '$locationID', '$catID', '$price')";
$query = $dbConn->query($sql);
if($query === false) {
	echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
	exit;
  }
  else {
     
	echo "New Holiday Added";
     }
  
  $dbConn->close();
  	?>

</body>
</html>