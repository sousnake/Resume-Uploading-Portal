<?php
include("config.php");

$query = mysql_query("SELECT * FROM project");
$array = array();

// look through query
while($row = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row;

  // OR just echo the data:
  //echo $row['username']; // etc

}

// debug:
print_r($array[0]['p_title']); // show all array data
//echo $array[0]['username'];
?>