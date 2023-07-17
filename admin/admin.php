<?php 
if (isset($_POST['submit'])){
    if($_POST['password'] == 'delta123') {
        header('Location: /admin/2a524880b4d504a3da21007051e59146.php');
    }
}
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <meta name="robots" content="none">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/favicon.png" rel="apple-touch-icon">
    
    <!-- CSS Файлы -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="text-center container" style="margin-top: 180px;">
  <main class="form-signin">
<div class="container col-xl-7 col-xxl-5 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-12 mx-auto col-lg-12">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post">
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
            <label for="floatingPassword">Пароль</label>
          </div>
          <button class="w-100 btn btn-lg btn-danger" name="submit" type="submit">Войти</button>
          <hr class="my-4">
          <small class="text-muted"><a href="/">autogyro-izhevsk.com</a> | Админ панель</small>
        </form>
      </div>
    </div>
  </div>
</main>
  </body>
</html>
