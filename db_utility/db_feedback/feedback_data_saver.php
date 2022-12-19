<?php
  $connect = new mysqli('localhost', 'c95372tz_php', '1Fgtkmcby1', 'c95372tz_php');
  $full_name = filter_var(trim($_POST['full_name']),
  FILTER_SANITIZE_STRING);
  $address = filter_var(trim($_POST['address']),
  FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']),
  FILTER_SANITIZE_STRING);
  $tel = filter_var(trim($_POST['tel']),
  FILTER_SANITIZE_STRING);

  
  $connect->query("INSERT INTO `personal_info` (`full_name`, `address`, `email`,`tel`)
  VALUES('$full_name', '$address', '$email', '$tel')");

  $connect->close();
  header("Location:/personal_data.php");
?>