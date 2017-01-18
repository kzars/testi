<?php
$con = mysqli_connect("localhost","electic","3L3k71K","electic");
//tiek pārbaudīts vai datubāze darbojas
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>