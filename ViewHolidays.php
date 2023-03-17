<!doctype html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0D6E8B">
	<title>Holidays</title>
    <link rel="shortcut icon" type="image/png" href= "favicon.png"> 
    <link href="Style.css" rel= "stylesheet"> 
</head> 
<body>
<div class="gridContainer2">

<header><h1>View Holidays</h1></header>
<main>
        <!-- Hamburger Menu  -->
        <div class="menu-wrap">
               <input type="checkbox" class="toggler">
               <div class="hamburger"><div></div></div>
               <div class="menu">
               <div>
                   <div>
                       <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="ViewHolidays.php">View Holidays</a></li>
                           <li><a href="admin.html">Admin</a></li>
                           <li><a href="credits.html">Credits</a></li>
                           <li><a href="Wireframes.pdf">Wireframes</a></li>
         
                       </ul>
                   </div>
               </div>
            </div>
            </div>

<?php
include 'database_conn.php';

$sql = "SELECT holidayTitle, holidayDescription, holidayDuration, locationName, country, catDesc, holidayPrice FROM LCG_holidays
        INNER JOIN LCG_category ON LCG_category.catID = LCG_holidays.catID
        INNER JOIN LCG_location ON LCG_location.locationID = LCG_holidays.locationID
        ORDER BY holidayTitle";
$queryResult = $dbConn->query($sql);

if($queryResult === false) {
    echo "<p>Query failed: ".$dbConn->error."</p>\n</main></body></html>";
    exit;
}
else{
    while($rowObj = $queryResult->fetch_object()){
        echo"<div><br><br><span class='holidayTitle'>{$rowObj->holidayTitle}</span><br> &nbsp;&nbsp;<span class='theRest'>{$rowObj->holidayDescription}, Duration: {$rowObj->holidayDuration} days, Location: {$rowObj->locationName}, Country: {$rowObj->country}, Category: {$rowObj->catDesc}, Price: {$rowObj->holidayPrice} &#x20AC;\n</span></div><br>";
    }
}
$queryResult->close();
$dbConn->close();
?>

</main>

<footer><p> &#169; Mitoi Cristian</p></footer>

</div>
 </body>
 </html>
