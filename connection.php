<?php
  $servername="localhost";
  $username="root";
  $password="admin";
  $db_name="realstate";
  $conn = new mysqli($servername, $username, $password, $db_name, 3306);
  if($conn->connect_error)
  {
    die("connection failed".conn->connect_error);
  }
  echo "";
 ?> 