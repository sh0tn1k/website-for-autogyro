<?php
$jsonArray = [];
$FileArray = [];
$count = 0;
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="'Автожиры - Ижевск' - производитель автожиров. Собственное производство автожиров в Ижевске. Автожиры в наличии и на заказ. При заказе автожира мы организуем доставку" name="description" />
  <meta content="купить автожир, Автожиры Ижевск, автожир купить, запчасти автожир, гироплан, купить гироплан, цена автожир, цена гироплан, стоимость автожира, стоимость гироплана, самолёт, самолёт купить, самолёт цена" name="keywords" />
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
  
  <title>Автожиры Ижевск - официальный сайт</title>

  <!-- Иконки сайта -->
  <link rel="shortcut icon" href="http://autogyro-izhevsk.com/assets/img/favicon.ico" type="image/x-icon">

  <!-- Google Шрифты -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Файлы -->
  <link href="http://autogyro-izhevsk.com/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/bootstrap/css/bootstrap.min.css?ver=32" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://autogyro-izhevsk.com/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Доп CSS Файлы -->
  <link href="http://autogyro-izhevsk.com/assets/css/style.css?ver=23" rel="stylesheet">
  <script type="application/ld+json">{"@context": "https://schema.org","@type": "Organization","url": "http://autogyro-izhevsk.com/","contactPoint": [{"@type": "ContactPoint","telephone": "7 (912) 444-88-58","contactType": "Контактный номер"}],"logo": "http://autogyro-izhevsk.com/assets/img/logo.jpg"}</script>
</head>
<body>
    <div class="wrr">
	<!-- Шапка -->
	<header class="fixed-top" id="header">
		<div class="container d-flex align-items-center">
			<h1 class="logo me-auto active"><a href="http://autogyro-izhevsk.com/">Автожиры <span>-</span> Ижевск</a></h1>
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
	<section id="hero" style="height: 600px;">
	    <div class="carousel slide carousel-fade" data-bs-interval="5000" data-bs-ride="carousel" id="heroCarousel">
		<ol class="carousel-indicators" id="hero-carousel-indicators" style="overflow: hidden !important; display: none !important;">
			<li class="" data-bs-slide-to="0" data-bs-target="#heroCarousel"></li>
			<li class="active" data-bs-slide-to="1" data-bs-target="#heroCarousel"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active text-center text-white" style="background-image: url(http://autogyro-izhevsk.com/assets/img/all2.webp)">
				<div class="carousel-container">
					<div class="container">
						<h2 class="animate__animated animate__fadeInDown">Автожиры - Ижевск</h2>
						<p class="animate__animated animate__fadeInUp">Российская компания, производящая автожиры, применяющиеся в<br>патрулировании, доставке легких грузов, сельскохозяйственных работах.</p>
						<a class="btn-get-started animate__animated animate__fadeInUp scrollto" style="border-radius:30px;" href="#model">ВЫБРАТЬ АВТОЖИР</a>
					</div>
				</div>
			</div>
			<!--<div class="carousel-item text-center text-white" style="background-image: url(http://autogyro-izhevsk.com/assets/img/slide/slide-3.jpg)">
				<div class="carousel-container">
					<div class="container">
						<h2 class="animate__animated animate__fadeInDown">Автожиры - Ижевск</h2>
						<p class="animate__animated animate__fadeInUp">Можно текст вставить</p>
						<a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="#avionics">ВЫБРАТЬ АВИОНИКУ</a>
					</div>
				</div>
			</div>
		</div><a class="carousel-control-prev" data-bs-slide="prev" href="#heroCarousel" role="button"><span aria-hidden="true" class="carousel-control-prev-icon bi bi-chevron-left"></span></a> <a class="carousel-control-next" data-bs-slide="next" href="#heroCarousel" role="button"><span aria-hidden="true" class="carousel-control-next-icon bi bi-chevron-right"></span></a>-->
	</div>
	</section>
	<!-- Основная часть сайта -->
	<main>
		<!-- ======= Раздел Что такое Гироплан ======= -->
		<section class="about-us mt-5 mb-5" id="about-us">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>Что такое автожир (гироплан)?</h2>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 order-md-2">
						<p>Конструктивные особенности и принцип действия гироплана схожи с планером, самолетом, дельталетом или мотодельтапланом. Подъемная сила обеспечивается встречным воздушным потоком, а роль крыльев исполняет несущий свободно вращающийся винт (ротор). Эта особенность обеспечивает горизонтальный полет автожира, за счет чего он держится на воздухе. Общий шаг винта регулируется производителем, при эксплуатации изменению не подлежит. <br> <a href="https://youtu.be/cLR-LnXjnP4" target="_blank">Подробнее об авторотации</a><br>
						<br>
						Поступательное движение осуществляется тянущим усилием маршевого двигателя гироплана, если он расположен спереди, и толкающим действием, когда мотор находится сзади. Чтобы запустить движение лопастей ротора, то есть для вращения винта требуется только воздушный поток, что и называется режимом авторотации. Сопротивление винта в воздухе раскручивает пропеллер, благодаря чему срабатывает аэродинамический принцип, запускающий авторотацию, и ротор начинает создавать подъёмную силу. <br> <a href="https://www.youtube.com/watch?v=Uph5_PBvFTs" target="_blank">Об устройстве автожира</a></p>
					</div>
					<div class="col-md-5 col-sm-12 order-md-1" style="margin-right: 40px;">
						<div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carouselExampleFade">
							<div class="carousel-inner">
								<div class="carousel-item active"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/1.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/2.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/3.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/4.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/5.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/6.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/7.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/8.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожир Танго производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/9.jpg" src=""></div>
								<div class="carousel-item"><img alt="Автожиры Танго Филин и Танго Тревел производства Автожиры - Ижевск" class="d-block w-100" data="http://autogyro-izhevsk.com/assets/img/что такое автожир/10.jpg" src=""></div>
							</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleFade" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleFade" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ======= Раздел моделей автожиров ======= -->
		<div id="model"></div>
		<section class="services section-bg">
			<div class="container mt-5" data-aos="fade-up">
				<div class="section-title">
					<h2>Выбери свой автожир!</h2>
				</div>
				<div class="row justify-content-center mt-4">
					        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-2 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
								<div class="card" style="border-radius:15px;border:none;">
									<div class="inner" itemscope itemtype="http://schema.org/ImageObject">
									    <img alt="Card" alt="Автожир Танго Тревел" title="Автожир Танго Тревел" class="card-img-top" id="tango_add" data="http://autogyro-izhevsk.com/assets/img/автожиры/smen_tango.jpg" src"">
									    <img alt="Card" alt="Автожир Танго+" title="Автожир Танго+" class="card-img-top"data="http://autogyro-izhevsk.com/assets/img/models/1.jpg" src="">
									</div>
									<div class="card-body text-center">
										<h4 class="card-title mb-3" style="font-size:20px;color:#e74c3c;font-weight:bolder;">Танго+</h4>
										<p class="card-text mb-3" style="font-weight:bold;font-size:14px;">Манёвренный и легкий в управлении. Открытая кабина и современная авионика позволяют в полной мере ощутить свободу полета. Вместительные багажные отсеки будут интересны для путешественников, рыбаков и охотников.</p><a class="btn btn-outline-danger" style="border-radius:30px;font-weight:bolder;border:2px solid #e74c3c;" href="http://autogyro-izhevsk.com/tango">Подробнее</a>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-2 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
								<div class="card" style="border-radius:15px;border:none;">
									<div class="inner"><img alt="Card" alt="Автожир Танго Тревел" title="Автожир Танго Тревел" class="card-img-top" id="trevel_add" data="http://autogyro-izhevsk.com/assets/img/автожиры/smen_trevel.jpg" src""><img alt="Card" alt="Автожир Танго Тревел" title="Автожир Танго Тревел" class="card-img-top" data="http://autogyro-izhevsk.com/assets/img/models/2.jpg" src""></div>
									<div class="card-body text-center">
										<h4 class="card-title mb-3" style="font-size:20px;color:#e74c3c;font-weight:bolder;">Танго Тревел</h4>
										<p class="card-text mb-3" style="font-weight:bold;font-size:14px;">Единственный на рынке универсальный гироплан имеющий возможность быстрой трансформации (не более 5-ти минут) зима/лето.<br>Более просторная кабина по сравнению с конкурентами. Дальность полета до 600 км.</p><a class="btn btn-outline-danger" style="border-radius:30px; border:2px solid #e74c3c;font-weight:bolder;" href="http://autogyro-izhevsk.com/trevel">Подробнее</a>
									</div>
								</div>
							</div>
				</div>
						<div id="avionics"></div>
			</div>
		</section>
		
		<!-- ======= Раздел Авионика ======= -->
		<!--<section class="services">
			<div class="container mt-2 mb-5" data-aos="fade-up">
				<div class="section-title">
					<h2>Наша Авионика</h2>
				</div>
				<div class="row justify-content-center mt-2">
				    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-2" data-aos="zoom-in" data-aos-delay="200">
						<div class="card">
							<div class="inner"><img alt="Авионика" title="Авоиника" class="card-img-top" data="http://autogyro-izhevsk.com/assets/img/GlA.jpg?ver=2" src=""></div>
							<div class="card-body text-center">
								<h4 class="card-title">Название Авионики</h4>
								<p class="card-text">Краткое описание</p>
								<a class="btn btn-outline-danger" href="">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		
		<!-- ======= Раздел новости ======= -->
		<?php if (file_exists(__DIR__ . "/admin/" . "global.json")):?>
			<section class="services">
			<div class="container mt-5" data-aos="fade-up">
				<div class="section-title">
					<h2>Наши новости</h2>
				</div>
				<div class="row justify-content-center mt-4">
				<?php for($i = count($FileArray)-1; $i >= 0; $i--): ?>
					<?php if($count < 3): ?>
					    <?php
                            $json = file_get_contents(__DIR__ . "/admin/" . $FileArray[$i]);
                            $jsonArray = json_decode($json, true);
							$count++;
                        ?>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
							<div class="card" style="border-radius:15px;border:none;">
								<div class="inner"><img alt="<?php echo $jsonArray["Название"]?>" title="<?php echo $jsonArray["Название"]?>" class="card-img-top" data="<?php echo $jsonArray["img"]?>" src=""></div>
								<div class="card-body">
									<small class="card-subtitle mb-5 text-muted"><?php echo $jsonArray["Дата"]?></small>
									<a href="/news#<?php echo $i ?>"><h6 class="card-title mt-2"><?php echo $jsonArray["Название"]?></h6></a>
									<p class="card-text"><?php echo $jsonArray["КраткоеОписание"]?></p>
								</div>
								<hr>
							</div>
						</div>
					<?php endif;?>	
				<?php endfor;?>	
			    </div>
			    <div class="text-center mt-5">
				    <a href="http://autogyro-izhevsk.com/news">Больше новостей</a>
			    </div>
		    </div>
		    </section>
		<?php endif; ?>
		
		<!-- ======= Форма обратной связи ======= -->
		<section class="contact" id="contact">
			<div class="container">
				<div class="section-title text-white">
					<h2>Связаться с нами</h2>
				</div>
				<div class="row mt-3 mb-5 justify-content-center" data-aos="fade-up">
					<div class="col-lg-10">
					    <div class="info-wrap bg-white" style="border-radius:35px;box-shadow: 0 2px 15px rgba(0, 0, 0, .1) !important;padding: 30px !important;">
							<div class="row">
								<div class="col-lg-6 info mt-4 mt-lg-0">
									<i class="bi bi-envelope"></i>
									<h4>Почта</h4>
									<p><a href="mailto:delta888081170@mail.ru" style="noopener">delta888081170@mail.ru</a></p>
								</div>
								<div class="col-lg-6 info mt-4 mt-lg-0">
									<i class="bi bi-phone"></i>
									<h4>Телефон</h4>
									<p><a href="tel:+79124448858" style="noopener">8 (912) 444-88-58</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
	<script src="http://autogyro-izhevsk.com/assets/js/main.js"></script>
	<script src="http://autogyro-izhevsk.com/assets/js/lazy.js?ver=2"></script>
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