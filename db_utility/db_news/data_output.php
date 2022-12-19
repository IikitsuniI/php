<?php 
  $connect = new mysqli('localhost', 'root', '2000', 'users');
  $news_info = mysqli_query($connect, "SELECT * FROM `news`");
  $news_info = mysqli_query($connect, "SELECT * FROM `news` ORDER BY id DESC LIMIT 3");
  $news_info = mysqli_fetch_all($news_info);
?>