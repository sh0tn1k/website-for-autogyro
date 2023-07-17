<?php
$jsonArray = [];
$FileArray = [];
if (file_exists(__DIR__ . "/admin/" . "global.json")){
	$file = file_get_contents(__DIR__ . '/admin/global.json');
	$FileArray = json_decode($file, true);
}
?>
<!DOCTYPE html>
<html lang="ru" xml:lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="google" content="translate" />
  <meta http-equiv="Content-Language" content="ru" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Узнайте о последних событиях в мире автожиров на сайте Автожиры - Ижевск" name="description" />
  <meta name="robots" content="all"/>
  <meta name="Author" content="autogyro-izhevsk.com" /> 
  <meta name="Copyright" content="autogyro-izhevsk.com" /> 
  <meta name="Address" content="Россия, Ижевск" />
  <meta name="yandex-verification" content="37b2f1ce91193a69" />
  <meta name="google-site-verification" content="OSAvtZfrEuTwmlwACOO0NgQSslnvwytA9ejmu1XzDj4" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Автожиры - Ижевск" />
  <meta property="og:description" content="'Автожиры - Ижевск' - производитель автожиров. Собственное производство автожиров в Ижевске. Автожиры в наличии и на заказ. При заказе автожира мы организуем доставку" />
  <meta property="og:image" content="http://autogyro-izhevsk.com/assets/img/gr12.jpg" />
  <meta property="og:url" content="http://autogyro-izhevsk.com" />
  <meta property="og:site_name" content="Автожиры - Ижевск" />

  <title>Новости об автожирах</title>

  <!-- Иконки -->
  <link rel="shortcut icon" href="http://autogyro-izhevsk.com/assets/img/favicon.ico" type="image/x-icon">

  <!-- Google Шрифты -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Файлы -->
  <link href="http://autogyro-izhevsk.com/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Доп CSS Файлы -->
  <link href="http://autogyro-izhevsk.com/assets/css/style.css?ver=2" rel="stylesheet">
  <script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{
			"@type": "ListItem",
			"position": 1,
			"name": "Новости",
			"item": "http://autogyro-izhevsk.com/news"
		}
	]
}
</script>
</head>
<body>
    <div class="wrr">
	<!-- Шапка -->
	<header class="fixed-top" id="header">
		<div class="container d-flex align-items-center">
			<h1 class="logo me-auto"><a href="http://autogyro-izhevsk.com/">Автожиры <span>-</span> Ижевск</a></h1>
			<nav class="navbar order-last order-lg-0" id="navbar">
				<ul>
					<li class="dropdown">
						<a href=""><span>Модели автожиров</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li>
								<a href="http://autogyro-izhevsk.com/tango">Танго+</a>
							</li>
							<li>
								<a href="http://autogyro-izhevsk.com/trevel">Танго Тревел</a>
							</li><!--<hr>
							<li>
								<a href="">Авионика</a>
							</li>-->
						</ul>
					</li>
					<li>
						<a href="http://autogyro-izhevsk.com/services">Запчасти</a>
					</li>
					<li class="dropdown">
						<a href="http://autogyro-izhevsk.com/about"><span>О Компании</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li>
								<a href="http://autogyro-izhevsk.com/news">Новости</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://autogyro-izhevsk.com/faq">FAQ</a>
					</li>
					<li>
						<a href="http://autogyro-izhevsk.com/contact">Контакты</a>
					</li>
					<li id="call">
					    <a href="tel:+79124448858" style="noopener;"><i class="bi bi-telephone-fill" style="color: #e74c3c;margin-right:10px;"></i>8 (912) 444-88-58</a>
					</li>
				</ul><i class="bi bi-list mobile-nav-toggle" id="menu"></i>
			</nav>
		</div>
	</header>

	<!-- Основная часть сайта -->
  <main style="flex: 1 1 auto !important;">
    <!-- ======= Раздел новости ======= -->
	<?php if (file_exists(__DIR__ . "/admin/" . "global.json")): ?>
    <section id="blog" class="blog mt-5">
      <div class="container" data-aos="fade-up">
        <div class="section-title mt-5">
					<h2>Наши новости</h2>
				</div>

        <div class="row">

          <div class="col-lg-8 entries">
            <?php if (file_exists(__DIR__ . "/admin/" . "global.json")): ?>
            <?php for($i = count($FileArray)-1; $i >= 0; $i--): ?>
              <?php
                $json = file_get_contents(__DIR__ . "/admin/" . $FileArray[$i]);
                $jsonArray = json_decode($json, true);
              ?>
            <article class="entry" id="<?php echo $i?>">
              <div class="entry-img">
                  <img data="<?php echo $jsonArray["img"]?>" alt="<?php echo $jsonArray["Название"]?>" title="<?php echo $jsonArray["Название"]?>" src="" class="img-fluid">
              </div>

              <h2 class="entry-title"><?php echo $jsonArray["Название"]?></h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01"><?php echo $jsonArray["Дата"]?></time></li>
                </ul>
              </div>

              <div class="entry-content">
                <p><?php echo str_replace(array("\r\n", "\r", "\n"), '<br>', $jsonArray["ПолноеОписание"]);?></p>
              </div>
            </article>
            <?php endfor;?>
            <?php endif; ?>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Все новости</h3>
              <div class="sidebar-item recent-posts">
                <?php for($i = count($FileArray)-1; $i >= 0; $i--): ?>
                  <?php
                    $json = file_get_contents(__DIR__ . "/admin/" . $FileArray[$i]);
                    $jsonArray = json_decode($json, true);
                  ?>
                  <div class="post-item clearfix">
                    <img class="img-fluid" data="<?php echo $jsonArray["img"]?>" src="" alt="">
                    <h4><a href="#<?php echo $i?>"><?php echo $jsonArray["Название"]?></a></h4>
                    <time datetime="2020-01-01"><?php echo $jsonArray["Дата"]?></time>
                  </div>
                <?php endfor;?>	
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php endif ?>

	<?php if (!file_exists(__DIR__ . "/admin/" . "global.json")): ?>
		<section class="services text-center" style="margin-top: 220px;">
			<div class="container" data-aos="">
				<div class="text-center">
					<h1 style="font-size: 100px;">Новостей нет ((</h1>
                    <p style="font-size: 20px;">На данный момент новостей нет</p>
                    <a href="http://autogyro-izhevsk.com/" class="btn btn-outline-danger btn-lg mt-3">На главную</a>
				</div>
			</div>
		</section>
	<?php endif ?>

  </main>

	<!-- ======= Нижняя часть сайта (Footer) ======= -->
	<?php require "footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </div>

	<!-- JavaScript Файлы -->
	<script src="http://autogyro-izhevsk.com/assets/vendor/aos/aos.js"></script>
  <script src="http://autogyro-izhevsk.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://autogyro-izhevsk.com/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="http://autogyro-izhevsk.com/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://autogyro-izhevsk.com/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="http://autogyro-izhevsk.com/assets/vendor/waypoints/noframework.waypoints.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Доп JavaScript Файлы -->
  <script src="assets/js/main.js"></script>
	<script src="assets/js/lazy.js?ver=2"></script>
	<script>
		$("#menu").on("click", function () {
			$("#call").hide();
		});
	</script>
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-34MJ624SRC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-34MJ624SRC');
</script>
	
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   var z = null;m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90248871, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90248871" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>