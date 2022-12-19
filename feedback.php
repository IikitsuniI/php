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
  <?php require "templates/header.php" ?>
<div class="feedback_form" id="feedback_form">
  <div class="main_form">
    <h1>Оставьте ваши контактные данные, пожалуйста.</h1>
    <form action="db_utility/db_feedback/feedback_data_saver.php" method="post">

        <div class="div_full_name div_shift_text">
          <input class="input_shift_text" type="text" name="full_name" id="full_name"
          required>
            <label>Ваше Ф.И.О *</label>
            <span class="focus-border"> </span>
        </div>

        <div class="div_addres div_shift_text">
          <input class="input_shift_text" type="text" class="form-control" name="address" id="address"
          > <br>
          <label>Ваш адрес</label>
          <span class="focus-border"> </span>
        </div>

        <div class="div_email div_shift_text">
          <input class="input_shift_text" type="email" class="form-control" name="email" id="email"
          > <br>
          <label>Электронная почта</label>
          <span class="focus-border"> </span>
        </div>

        <div class="div_tel div_shift_text">
          <input class="input_shift_text" type="tel" class="form-control" name="tel" id="tel"
          > <br>
          <label>Контактный телефон *</label>
          <span class="focus-border"> </span>
        </div>

      <button class="btn_send" id="btn_send" type="submit"> ОСТАВИТЬ ЗАЯВКУ</button>
    </form>
  </div>
</div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="js/animations.js"></script>
</body>
</html>