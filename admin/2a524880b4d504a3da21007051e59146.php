<?php
    $jsonArray = [];
    $FileArray = [];
    
    // чтение файла global.json и запись его содержимого в массив FileArray[]
    if(file_exists('global.json')){
        $file = file_get_contents('global.json');
        $FileArray = json_decode($file, true);
    }
    
    if (file_exists('global.json') && empty($FileArray)){
        unlink('global.json');
    }
    
    // удаление новости (Удаляется файл где хранится новость и перезаписывается global.json)
    if (isset($_POST['del'])){
        $key = $_POST['id_news'];
        $ii = $_POST['id_for_FileArray'];
        $im = $_POST['id_img'];
        unlink($key);
        unlink("/home/auto114025/autogyro-izhevsk.com/docs" . $im);
        unlink('global.json');
    
        array_splice($FileArray, $ii, 1);
        file_put_contents('global.json', json_encode($FileArray, JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE));
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Панель администратора</title>
  <meta name="robots" content="none">

  <!-- Favicons -->
	<link href="../assets/img/favicon.png" rel="icon">
	<link href="../assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Файлы -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Доп CSS Файлы -->
  <link href="../assets/css/admin.css" rel="stylesheet">
</head>

<body>

  <!-- Шапка -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin/2a524880b4d504a3da21007051e59146.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color: #e74c3c;">Админ панель</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-dark"></i>
    </div>
  </header>

  <!-- Боковая панель -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark" href="/admin/2a524880b4d504a3da21007051e59146.php">
          <i class="bi bi-newspaper text-dark"></i>
          <span>Все новости на сайте</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="/admin/76ea0bebb3c22822b4f0dd9c9fd021c5.php">
          <i class="bi bi-pencil-square text-dark"></i>
          <span>Добавить новость</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-dark" href="/admin/login">
          <i class="bi bi-newspaper text-dark"></i>
          <span>Выход</span>
        </a>
      </li>
    </ul>
  </aside>

  <!-- Основная часть -->
  <main id="main" class="main">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><?php echo date('l, jS F, Y');?></li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title text-dark">Все новости на сайте начаная со старых (<?=count($FileArray)?>)</h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Краткое описание</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Кнопка</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i = 0; $i < count($FileArray); $i++): ?>
                    <?php if(file_exists($FileArray[$i])): ?>
                    <?php 
                      $json = file_get_contents($FileArray[$i]);
                      $jsonArray = json_decode($json, true);
                    ?>
                    <tr>
                      <form action="" method="post">
                      <th scope="row"><?php echo $i + 1?><input type="hidden" name="id_news" value="<?php echo $jsonArray["Дата"] . " " . $jsonArray["Название"] . ".json"?>"></th>
                      <td><?php echo $jsonArray["Название"]?><input type="hidden" name="id_for_FileArray" value="<?php echo $i?>"></td>
                      <td><?php echo $jsonArray["КраткоеОписание"]?></td><input type="hidden" name="id_img" value="<?php echo $jsonArray["img"]?>"></td>
                      <td><?php echo $jsonArray["Дата"]?></td>
                      <!-- кнопка удаление новости -->
                      <td class="text-center"><button name="del" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>
                      </form>
                    </tr>
                    <?php endif?>
                  <?php endfor; ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- JavaScript Файлы -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- Доп JavaScript Файлы -->
  <script src="../assets/js/admin.js"></script>

</body>

</html>