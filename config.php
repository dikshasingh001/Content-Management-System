<?php
$mysqli = new mysqli("localhost","root","","bharatinterntask1");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
