<?php
    $today = date("m.d.y");
    $jsonArray = [];
    $FileArray = [];
    
    // чтение файла global.json и запись его содержимого в массив FileArray[]
    if(file_exists('global.json')){
        $file = file_get_contents('global.json');
        $FileArray = json_decode($file, true);
    }
    
    // запись новости в файл json
    if (isset($_POST['submit'])){
        $name_news = htmlspecialchars($_POST['name']);
        $kdic_news = htmlspecialchars($_POST['kdis']);
        $dic_news = $_POST['dis'];
        if(isset($_FILES['img'])){
            $img_file_name = $_FILES['img']['name'];
            $img_file_size = $_FILES['img']['size'];
            $img_file_type = $_FILES['img']['type'];
            $img_file_tmp = $_FILES['img']['tmp_name'];
            //$img_file_exp = strtolower(end(explode('.', $img_file_name = $_FILES['img']['name'])));
        
            $expensions = array("jpeg", "jpg", "png", "webp");
        
            move_uploaded_file($img_file_tmp, "../assets/img/newsImg/".$img_file_name);
            $file_path = "/assets/img/newsImg/".$img_file_name;
        }
        $name_file = $today . " " . $name_news . ".json";
        $jsonArray = array("img" => $file_path, "Название" => $name_news, "КраткоеОписание" => $kdic_news, "ПолноеОписание" => $dic_news, "Дата" => $today);
        file_put_contents($name_file, json_encode($jsonArray, JSON_UNESCAPED_UNICODE));

        // запись в файл global.json
        $FileArray[] = $name_file;
        file_put_contents('global.json', json_encode($FileArray, JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE));
        header('Location: 2a524880b4d504a3da21007051e59146.php');
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
        <div class="col-lg-7">
        <div class="card">
		<div class="card-body">
			<h5 class="card-title">Добавление новости</h5>
        <form action="" class="needs-validation" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col-12">
              <label class="form-label">Название новости</label>
              <input type="text" class="form-control" name="name" placeholder="Название новости" required>
            </div>

            <div class="col-12">
              <label class="form-label">Краткое описание</label>
              <input type="text" class="form-control" name="kdis" placeholder="Краткое описание">
            </div>

            <div class="col-12">
              <label class="form-label">Полное описание</label>
              <textarea type="text" class="form-control" name="dis" placeholder="Полное описание" required></textarea>
              <div id="passwordHelpBlock" class="form-text">
                HTML теги которые можно использовать: <br>
                &lt;a href="Место для ссылки"&gt;Текст&lt;/a&gt; - можно вставить ссылку на какой-то веб ресурс<br>
                &lt;strong&gt;Текст&lt;/strong&gt; - делает текст толще -> <strong>Текст</strong>
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">Загрузка картинки для новости</label>
              <input type="file" class="form-control" name="img">
            </div>
          </div>

          <hr class="my-4">

          <button class="btn btn-dark mb-5" type="submit" name="submit">Создать новость</button>
        </form>
		</div>
	</div>
</div>

      </div>
    </section>

  </main>

  <!-- JavaScript Файлы -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Доп JavaScript Файлы -->
  <script src="../assets/js/admin.js"></script>

</body>

</html>