<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Vollkorn&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap');
  </style>
  <link rel="shortcut icon" type="image/jpeg" href="/img/logo.jpeg">
  <link rel="stylesheet" href="/css/style.css">
  <title > News </title> 
</head>
<body>
  <?php require "db_utility/db_news/data_output.php" ?>
  <div class="block_news">
  <?php require "templates/header.php" ?>
    <h2> Новости</h2>
    <div class="news">
      <?php foreach ($news_info as $news) {
        ?>
      <div class="news_info">
        <p class="title"><?=$news[1]?></p>
        <p class="content"><?=$news[2]?></p>
        <p class="date"><?=$news[3]?></p>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>
</body>
</html>