<?php 
  $connect = new mysqli('localhost', 'c95372tz_php', '1Fgtkmcby1', 'c95372tz_php');
  $user_info = mysqli_query($connect, "SELECT * FROM `personal_info` WHERE id=(SELECT MAX(id) FROM `personal_info`)");
  $user_info = mysqli_fetch_all($user_info);
?>