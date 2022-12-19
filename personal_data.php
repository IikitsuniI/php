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
  <?php require "db_utility/db_feedback/data_output.php" ?>
  <?php require "templates/header.php" ?>
  <div class="personal_data" id="personal_data">
    <div class="main_form">
      <h1>Cпасибо за сотрудничество!</h1>
      <h2>Предоставляем вам данные. </h2>
      <form method="post">
        <table>
          <tr>
            <td>Ваше Ф.И.О </td>
            <td><?=$user_info[0][1]?></td>
          </tr>
          <tr>
            <td>Ваш адрес</td>
            <td><?=$user_info[0][2]?></td>
          </tr>
          <tr>
            <td>Электронная почта</td>
            <td><?=$user_info[0][3]?></td>
          </tr>
          <tr>
            <td>Контактный телефон</td>
            <td><?=$user_info[0][4]?></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="js/animations.js"></script>
</body>
</html>