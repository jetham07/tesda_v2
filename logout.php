<?php
session_start();
require_once('config/config.php');
$status = $_GET['logout'];
$id = $_SESSION['id'];

if($status){
  $is_active = 0;
  $conn1 = new mysqli(HOST,UN,PASS,DB) or die('Connection failed');
  $query1 = $conn1->prepare("UPDATE users set is_active = ?  where id = ?");
  $query1->bind_param("ss",$status,$id);
  if($query1->execute()){
      session_unset();
      session_destroy();
    // move the login page
    header("Location: login");
  }
}



