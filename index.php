  <?php
  require_once 'panel/connection/connect.php';
  require_once 'panel/connection/variables.php';
$vars=[];
while ($var=mysqli_fetch_assoc($variables_index)){
	$vars[$var["title"]]=$var["value"];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/fonts.css">
	<link rel="stylesheet" href="styles/reset.css">
	<link rel="stylesheet" href="styles/style.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.6.0/dist/css/suggestions.min.css" type="text/css"
		rel="stylesheet" />
	<script type="text/javascript"
		src="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.6.0/dist/js/jquery.suggestions.min.js"></script>

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="Datedropper/datedropper.css" type="text/css">
	<script src="Datedropper/datedropper.js"></script>
	

	<title>Electrics</title>
</head>
<body>
	<div class="wrapper">
		<header class="header" data-aos="fade-down" data-aos-delay="1200">
			<div class="container">
				<div class="header__content">
					<a href="#" class="header__logo">
						<div class="header__logo_img"><img src="img/form/vk.svg" alt="">
						</div>
						<div class="header__logo_text">ЭлектроКар</div>
					</a>
					<div class="header__right">
						<div class="header__right_social">
							<a href="#" class="vk">
							<img src="img/form/vk_social.svg" alt="">

							</a>

							<a href="#" class="whatsapp">
							<img src="img/form/whatsapp.svg" alt="">
							</a>
							<a href="user_login/profile.php">
							<div class="button_login">
							<button class="btn_login"></button>
							
							</div>	
							</a>

						
						</div>

						<div class="header__right_call">
							<div class="header__right_phone"><a href="tel:89023992929">+7-902-399-29-29</a></div>
							<div onclick="$('html, body').stop().animate({scrollTop : $('#question-form').offset().top}, 1000);" class="header__right_btn"><span>Перезвонить вам?</span></div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main>
			<div class="titlemain">
				<div class="container">

					<div class="titlemain__wrapper">
						<div class="titlemain__img" data-aos="zoom-in" data-aos-delay="1200">
							<img src="img/form/car.svg" alt="">

						</div>

						<div class="titlemain__title" data-aos="fade-up" data-aos-delay="0">Выезд электрика в <?php echo $vars["city"];?> в течение одного часа</div>
						<div class="titlemain__subtitle" data-aos="fade-up" data-aos-delay="300">Услуги по электрике и электромонтажу, от замены лампочки до монтажа
							проводки “под ключ”</div>

						<div onclick="$('html, body').stop().animate({scrollTop : $('.form__wrapper').offset().top - 200}, 500);" class="titlemain__btn" data-aos="zoom-in" data-aos-delay="600">Оставить заявку</div>
						<a href="review.php"><div class="titlemain__btn"  data-aos="zoom-in" data-aos-delay="600">Отзывы</div></a>
						<div class="titlemain__icons">
							<div class="icons__item" data-aos="flip-down" data-aos-delay="900">
								<div class="icons__item_img"><img src="img/titlemain/icons/1.png" alt=""></div>
								<div class="icons__item_text">Оперативность</div>
							</div>

							<div class="icons__item" data-aos="flip-down" data-aos-delay="1000">
								<div class="icons__item_img"><img src="img/titlemain/icons/2.png" alt=""></div>
								<div class="icons__item_text">Бесплатные консультации</div>
							</div>

							<div class="icons__item" data-aos="flip-down" data-aos-delay="1100">
								<div class="icons__item_img"><img src="img/titlemain/icons/3.png" alt=""></div>
								<div class="icons__item_text">Закупка материала</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="container">

					<div class="form__wrapper">

						<div class="form__img" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#first-form">
							<img src="img/form/electrokar.svg" alt="">

						</div>

						<form class="first-form" id="first-form" data-aos="zoom-in" data-aos-delay="300">
							<script>
								function noDigits(event) {
									if ("1234567890".indexOf(event.key) != -1)
										event.preventDefault();
								}
							</script>

							<fieldset>
								<legend class="form__title"><span>Оформите выезд специалиста</span> для оценки работы и
									подробной консультации</legend>

								<div class="form_group">
									<input class="form_input" id="input-name" placeholder="Ваше имя*"
										onkeypress="noDigits(event)" type="text" name="name">
								</div>

								<div class="form_group">
									<input class="form_input mask-phone" id="input-phone"
										placeholder="Ваш номер телефона*" type="text" name="phone">
								</div>

								<div class="inputs">
									<div class="select">
										<div class="select__header">
											<span class="select__current">Ваша проблема</span>
											<div class="select__icon"></div>
										</div>
										<input type="hidden" name="problem" id="input-problem" value="">

										<div class="select__body">
										<?php

													while ($var=mysqli_fetch_assoc($select_reasons_reason)){
	   												echo'
											
											<div class="select__item">'.$var["value"].'</div>
											';}
											?>
											
										</div>

										<div class="select__overlay"></div>
									</div>

									<div class="form_group" >
										<input class="form_input form-date" id="input-date" data-format="d.m.Y"
											data-lang="ru" data-large-default="true" data-large-mode="true"
											placeholder="Дата" type="text" name="date" data-max-year="2100"
											data-min-year="2020">
										<script>jQuery('.form-date').dateDropper();</script>
									</div>
								</div>

								<div class="form_group">
									<input class="form_input address" placeholder="Адрес" id="form-address" type="text"
										name="address">
								</div>
								<script src="js/address.js"></script>

								<button class="form_btn"><span>Оформить заявку</span></button>

								<div class="form_politics">Нажимая на кнопку Вы соглашаетесь с условиями обработки
									данных и
									<span><a href="#popup" class="popup-link">политикой конфиденциальности</a></span>
								</div>

								<a href="#result1" class="popup-link result-link" id="res1"></a>
								<a href="#result2" class="popup-link result-link" id="res2"></a>
								<a href="#result3" class="popup-link result-link" id="res3"></a>
								<a href="#result4" class="popup-link result-link" id="res4"></a>
								<a href="#result5" class="popup-link result-link" id="res5"></a>
							</fieldset>
						</form>

					</div>

				</div>
			</div>

			<div class="section">
				<div class="container">
					<div class="section__title" data-aos="fade-down" data-aos-delay="0">Причины выбрать нас</div>
					<div class="reason">


							<?php

							while ($var=mysqli_fetch_assoc($variables_vibor_reasons)){
							?>

									
								<div class="reason__item" data-aos="fade-down" data-aos-delay="300">
									<div class="reason__img">
										<img src="<?php echo $var["image"];?>" alt="">
									</div>
									<div class="reason__title"><?php echo $var["title"];?></div>
									<div class="reason__text"><?php echo $var["text"];?></div>
								</div>
							<?php
								}
							?>

						<div class="reason__item" data-aos="fade-down" data-aos-delay="450">
							<div class="reason__img reason__img2">
								<img src="img/reasons/6.png" alt="">
							</div>
							<div class="reason__title">Закажите электрика уже сейчас!</div>
							<div class="reason__text">Позвоним в удобное время и обсудим тонкости работы.</div>

							<div onclick="$('html, body').stop().animate({scrollTop : $('.form__wrapper').offset().top}, 500);" class="reason__btn"><span>Оставить заявку</span></div>
						</div>

					</div>
				</div>
			</div>

			<div class="section why">
				<div class="container">
					<div class="section__title" data-aos="fade-down" data-aos-delay="0">Почему с нами удобно?</div>


					<div class="why__wrapper">

						<div class="why__image" data-aos="zoom-in" data-aos-delay="300"><img src="img/why/bg.svg" alt=""></div>

						<div class="why__item" data-aos="fade-left" data-aos-delay="150">
							<div class="why__img"><img src="img/why/1.png" alt=""></div>
							<div class="why__wrap">
								<div class="why__title">Оперативность</div>
								<div class="why__text">Оперативно выезжаем на место, указанное клиентом и устраняем
									проблему</div>
							</div>
						</div>

						<div class="why__item" data-aos="fade-left" data-aos-delay="150">
							<div class="why__img"><img src="img/why/2.png" alt=""></div>
							<div class="why__wrap">
								<div class="why__title">бесплатные консультации</div>
								<div class="why__text">Мы помогаем клиенту решить проблему по телефону, если есть такая
									возможность</div>
							</div>
						</div>

						<div class="why__item" data-aos="fade-left" data-aos-delay="150">
							<div class="why__img"><img src="img/why/3.png" alt=""></div>
							<div class="why__wrap">
								<div class="why__title">закупка материала</div>
								<div class="why__text">Мы сами закупаем необходимый материал и предоставляем Вам чек
								</div>
							</div>
						</div>
					</div>




				</div>
			</div>

			<div class="section">
				<div class="container">
					<div class="section__title" data-aos="fade-down" data-aos-delay="0">Виды популярных услуг</div>

					<div class="service">
						<div class="service__item" data-aos="fade-up" data-aos-delay="300">
							<div class="service__img"><img src="img/service/1.svg"></div>
							<div class="service__text">Установка и замена розеток</div>
						</div>

						<div class="service__item" data-aos="fade-up" data-aos-delay="450">
							<div class="service__img"><img src="img/service/2.svg"></div>
							<div class="service__text">Установка люстр, светильников</div>
						</div>

						<div class="service__item" data-aos="fade-up" data-aos-delay="600">
							<div class="service__img"><img src="img/service/3.svg"></div>
							<div class="service__text">Полная замена проводки</div>
						</div>

						<div class="service__item" data-aos="fade-up" data-aos-delay="750">
							<div class="service__img"><img src="img/service/4.svg"></div>
							<div class="service__text">Устранение короткого замыкания</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="container">
					<div class="section__title arrow" data-aos="fade-down" data-aos-delay="0">Вы можете уточнить нужную услугу</div>

					<div class="form__wrapper2">

						<div class="form__img" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#question-form"><img src="img/secondform/Frame.svg" alt=""></div>

						<form class="second-form" id="question-form" data-aos="zoom-in" data-aos-delay="300">
							<fieldset>
								<legend class="form__title">Остались вопросы?</legend>

								<h3 class="form__subtitle">Оставьте свой номер телефона и наш менеджер свяжется с Вами
								</h3>

								<div class="form_group">
									<input class="form_input mask-phone" id="input-phone2"
										placeholder="Ваш номер телефона" type="text" name="phone">
								</div>

								<button class="form_btn"><span>Заказать звонок</span></button>

								<div class="form_politics">Нажимая на кнопку Вы соглашаетесь с условиями обработки
									данных и
									<span><a href="#popup" class="popup-link">политикой конфиденциальности</a></span>
								</div>
							</fieldset>
						</form>

					</div>
				</div>
			</div>
		</main>

		<footer class="footer" data-aos="fade-down" data-aos-offset="0">
			<div class="container">
				<div class="footer__content">
					<a href="#" class="footer__logo">
						<div class="footer__logo_img">
							<img src="img/footer/footer_logo.svg" alt="">
						</div>
						<div class="footer__logo_text">ЭлектроКар</div>
					</a>

					<div class="footer__right">
						<div class="footer__right_social">
							<a href="#" class="vk">
								<img src="img/form/vk.svg" alt="">
							</a>

							<a href="#" class="whatsapp">
							<img src="img/form/whatsapp.svg" alt="">
							</a>
						</div>

						<div class="footer__right_phone"><a href="tel:89023992929">+7-902-399-29-29</a></div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- POPUPS -->
	<?php include "popup/popup.html"; ?>
	<script src="js/select.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>

	<script src="js/popup.js"></script>

	<script src="js/mail_send.js"> </script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init({
			duration: 150,
			once: true,
			offset: 100,
			easing: 'ease',
			anchorPlacement: 'bottom-bottom'
		});
	</script>
<script type="text/javascript" src="js/ya_metrika.js" ></script>
<noscript><div><img src="https://mc.yandex.ru/watch/87348160" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>

</html>
