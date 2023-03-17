<?php
   $dbConn = new mysqli('localhost', 'unn_w20010102', 'Vinevantul1', 'unn_w20010102');

   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>


