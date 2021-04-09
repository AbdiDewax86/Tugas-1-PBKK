<?php
$servername = ".";
$connectionInfo = array( "Database"=>"bikestores", "UID"=>"sa", "PWD"=>"petungbab10");

// Create connection
$conn = sqlsrv_connect($servername, $connectionInfo);
// Check connection
if ($conn) {
  echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM sales.customers WHERE customer_id BETWEEN 681 AND 700";
$result = sqlsrv_query($conn, $sql);

if (sqlsrv_num_rows($result) > 0) {
  // output data of each row
  while($row = sqlsrv_fetch_array($result)) {
    echo "id: " . $row["customer_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
  }
} else {
  echo "0 results";
}

sqlsrv_close($conn);
?>