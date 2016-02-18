#!/usr/bin/php
<?php

$db = new mysqli("localhost","root","MistyMountain24","it202");
/*
      In here we can access the DB if it worked
*/

if($db->connect_errno > 0)
{
  echo _FILE_._LINE_." ERROR: ".$db->connect_error.PHP_EOL;
  exit(-1);
}

$query = "select * from Student;";

$results = $db->query($query);

print_r($results);

while($row = $results->fetch_assoc())
{
  print_r($row);
}

echo "We are connected to the DATABASE".PHP_EOL;

$db->close();

?>