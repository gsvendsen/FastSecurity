<?php

declare(strict_types=1);
require __DIR__.'/functions.php';

session_start();

if(!isset($_SESSION['lang'])){
  $_SESSION['lang'] = 'en';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>FastSecurity</title>
	<link href="/resources/logo_black.svg" rel="icon">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/slide-show.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
	<link href="css/history.css" rel="stylesheet" type="text/css">
	<link href="css/article.css" rel="stylesheet" type="text/css">
	<link href="css/autonomous.css" rel="stylesheet" type="text/css">
	<link href="css/comfort.css" rel="stylesheet" type="text/css">
	<link href="css/statistics.css" rel="stylesheet" type="text/css">
	<link href="css/engineering.css" rel="stylesheet" type="text/css">
	<link href="css/smartphone.css" rel="stylesheet" type="text/css">
	<link href="css/merch.css" rel="stylesheet" type="text/css">
	<link href="css/product.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="mobile-container">
		<a class="logo-container" href=""><img alt="logo" class="logotype" src="resources/logo_white.svg"></a>
	</div>
	<div class="navbar hidden">
		<div class="hamburger-menu">
			<div class="bar"></div>
		</div>
	</div>
	<div class="desktop-menu">
		<a class="logo-container" href=""><img alt="logo" class="logotype desktop-logo" src="resources/logo_white.svg"></a>
		<ul class="menu-list">
			<li class="menu-item">
				<a class="nav-link translate" href="#" data-translate="menu home"><?= translate2('menu', 'home') ?>
				</a>
			</li>
			<li class="menu-item">
				<a class="nav-link translate" href="#" data-translate="menu specs"><?= translate2('menu', 'specs') ?>
				</a>
			</li>
			<li class="menu-item">
				<a class="nav-link translate" href="#" data-translate="menu safety"><?= translate2('menu', 'safety') ?>
				</a>
			</li>
			<li class="menu-item">
				<a class="nav-link translate" href="#" data-translate="menu product-folder"><?= translate2('menu', 'product-folder') ?></a>
			</li>
			<li class="menu-item">
				<a class="nav-link translate" href="#" data-translate="menu contact"><?= translate2('menu', 'contact') ?>
				</a>
			</li>
			<li class="flag-container">
				<a class="lang-option en" href="#"><img class="flag lang-option en" src="resources/Flag_UK.svg"></a> <a class="lang-option sv" href="#"><img class="flag lang-option sv" src="resources/Flag_SWE.svg"></a>
			</li>
		</ul>
	</div><!-- MOBILE MENU -->
	<div class="menu">
		<ul>
         <li class="menu-item selected">
				<a class="translate" href="#" data-translate="menu home"><?= translate2('menu', 'home') ?>
				</a>
			</li>
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu specs"><?= translate2('menu', 'specs') ?>
				</a>
			</li>
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu safety"><?= translate2('menu', 'safety') ?>
				</a>
			</li>
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu product-folder"><?= translate2('menu', 'product-folder') ?></a>
			</li>
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu contact"><?= translate2('menu', 'contact') ?>
				</a>
			</li>
			<li>
				<a class="lang-option" href="/?lang=en"><img class="flag" src="resources/Flag_UK.svg"></a> <a class="lang-option" href="/?lang=sv"><img class="flag" src="resources/Flag_SWE.svg"></a>
			</li>
		</ul>
	</div><!-- / MOBILE MENU -->
	<!-- HERO -->
	<div class="hero">
		<div class="title-container">
			<h1 class="hero-header translate" data-translate="hero header"><?= translate2('hero','header') ?>
			</h1>
			<p class="hero-sub translate" data-translate="hero description"><?= translate2('hero','description') ?>
			</p>
		</div>
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button name="register-button" type="submit">
			</button>
		</form><svg class="down-arrow" height="29" viewbox="0 0 26 29" width="26" xmlns="http://www.w3.org/2000/svg">
		<path d="M13.3961 1V27.3342" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
		<path d="M24.7922 15.9381L13.3962 27.3342" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
		<path d="M2 15.9381L13.3961 27.3342" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg>
	</div><!-- /HERO -->
	<!-- HISTORY -->
	<div class="history">
		<div>
			<h3 class="history-header translate" data-translate="history header"><?=translate2('history', 'header') ?>
			</h3>
			<p class="history-text translate" data-translate="history content1"><?= translate2('history', 'content1') ?>
			</p>
			<p class="history-text translate" data-translate="history content2"><?= translate2('history', 'content2') ?>
			</p>
		</div><!--/history-content-->
		<div>
			<button class="button history-button" name="history-button" type="button">Our history <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div>
	</div><!--/history-->
	<!-- SLIDESHOW -->
	<div class="viewport-container">
		<div class="image-slider">
			<div class="slide-container">
				<div class="slide">
					<div class="slide-show-photo"><img class="photo" src="https://dwv100zweqd2m.cloudfront.net/uploads/user/avatar/1261/Square_Profile_Shot.jpg"></div>
					<div class="slide-show-text">
						<div class="text-container">
							<h1 class="quote">“The FS1 is an incredible vehicle! All of the components are crafted to perfection.”</h1>
							<p class="quote-name">Mathilde Thatsum</p>
							<p class="quote-source">CEO, Electric Solutions</p>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="slide-show-photo"><img class="photo" src="https://stelena.se/wp-content/uploads/2018/02/Maria-Nemeth-Headshot-1-Square.jpeg"></div>
					<div class="slide-show-text">
						<div class="text-container">
							<h1 class="quote">"Oh my this bike is brilliant!"</h1>
							<p class="quote-name">Margaret Thatcher</p>
							<p class="quote-source">CEO, Hybrid Technology</p>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="slide-show-photo"><img class="photo" src="https://static1.squarespace.com/static/50f79c6fe4b00d3480c9bbf0/5b2a97c4f950b7e4204d64a4/5b4e3bb0aa4a9964ca2c7804/1531853792642/Headshot_20180510_Angel+Rosario_Richard_Waine_Lancaster_PA_0080+%28square+500px%29.jpg"></div>
					<div class="slide-show-text">
						<div class="text-container">
							<h1 class="quote">"The FS01 is a revolutionary piece of transport for the best."</h1>
							<p class="quote-name">Adam Savage</p>
							<p class="quote-source">President, France</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slide-show-controller">
				<div class="left-arrow">
					<svg class="arrow" height="26" viewbox="0 0 30 26" width="30" xmlns="http://www.w3.org/2000/svg">
					<path d="M28.3342 13.3961L1.99999 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M13.3961 24.7922L2 13.3962" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M13.3961 2L2 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path></svg>
				</div>
				<div class="button-container">
					<div class="slide-button selected-button"></div>
					<div class="slide-button"></div>
					<div class="slide-button"></div>
				</div>
				<div class="right-arrow">
					<svg class="arrow" height="26" viewbox="0 0 29 26" width="29" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 13.3961L27.3342 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M15.9381 2L27.3342 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M15.9381 24.7922L27.3342 13.3962" stroke="black" stroke-linecap="round" stroke-width="1.5"></path></svg>
				</div>
			</div>
		</div>
	</div><!-- /SLIDESHOW -->
	<!-- AUTONOMOUS SECTION -->
	<div class="autonomous">
		<div class="autonomous-text-section">
			<div class="header-section pink-margin">
				<h3 class="article-header translate" data-translate="autonomous header"><?=translate2('autonomous', 'header') ?>
				</h3>
				<p class="article-text translate" data-translate="autonomous content1"><?=translate2('autonomous', 'content1') ?></p>
				<p class="article-text translate" data-translate="autonomous content2"><?=translate2('autonomous', 'content2') ?></p>
			</div>
			<div class="subheader-section">
				<h5 class="article-subheader translate" data-translate="break header"><?= translate2('break', 'header') ?></h5>
				<p class="article-text after-line translate" data-translate="break content"><?= translate2('break', 'content') ?></p>
			</div>
		</div>
		<div class="autonomous-image"></div>
	</div><!--/autonomous-->
	<!-- COMFORT SECTION -->
	<div class="comfort">
		<div class="comfort-image"></div>
		<div class="comfort-text">
			<div class="text-container">
				<h3 class="article-header">Maximum Comfort</h3>
				<p class="article-text">The FS1 is engineered to perfection with the finest materials in mind, creating a fantastic experience combined with the luxurious comfort of leather seats. All of the materials are carefully selected from the interior carpet to the strings in the seat. The comforting cushion embedded in the seat measures shape and stability. All of this to give you the most satisfying experience of this century.</p>
			</div>
		</div>
	</div><!--/comfort-->
	<!-- cta -->
	<div class="CTA margin-after">
		<div class="cta-section">
			<h3 class="article-header  translate" data-translate="cta header"><?= translate2('cta', 'header') ?>
			</h3>
			<p class="cta-text translate" data-translate="cta description"><?= translate2('cta', 'description') ?>
			</p>
		</div>
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button class="register-button" name="button" type="submit"><svg height="21" viewbox="0 0 23 21" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 10L21 10" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 1.79199L21.108 10.3959" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 19L21.108 10.3961" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg></button>
		</form>
	</div><!--/cta-->
	<!-- STATS -->
	<div class="statistics">
		<div class="stats-box">
			<p class="stats-text">more than</p>
			<p class="stats-info">300 hours</p>
			<p class="stats-text">battery charge life</p>
		</div>
		<div class="stats-box">
			<p class="stats-text">less than</p>
			<p class="stats-info">5 hours</p>
			<p class="stats-text">charge time</p>
		</div>
		<div class="stats-box">
			<p class="stats-text">charging</p>
			<p class="stats-info">5 minutes</p>
			<p class="stats-text">gives 1 hours driving</p>
		</div>
	</div><!-- ENGINEERING -->
	<div class="engineering">
	<div class="eng-header">
		<p class="article-pre">SPECIFICATIONS</p>
		<p class="article-bold">Engineered with perfection in mind.</p>
		<p class="article-subbold">The FS1 is engineered to perfection with the finest materials in mind, creating a fantastic experience combined with the luxorious comfort of leather seats.</p>
	</div><img class="engineering-image right" src="resources/desktop/range.jpg">
	<p class="article-subheader">ACCELERATION AND SPEED</p>
	<div class="engineering-article">
		<div class="text-section">
			<p class="article-text">The FS1 is engineered to perfection with the finest materials in mind, creating a fantastic experience combined with the luxorious comfort of leather seats.</p>
			<div class="read-more desktop">
				<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
			</div>
		</div>
		<div class="stat-section">
			<div class="stats">
				<p class="stats-text">up to</p>
				<p class="stats-info">360 km / h</p>
				<p class="stats-text">with</p>
				<p class="stats-info">600hp</p>
				<p class="stats-text">with turbo charge</p>
			</div>
			<div class="image-section">
				<img alt="Graph of acceleration" class="stat-image" src="resources/graph.png">
				<p class="stats-text">Graph on the acceleration – FS1</p>
			</div>
		</div>
		<div class="read-more mobile">
			<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
		</div>
	</div><img class="engineering-image left" src="resources/desktop/Delorean_Vinkel.jpg">
	<p class="article-subheader">WEIGHT</p>

  <div class="engineering-article">
		<div class="text-section">
			<p class="article-text">The FS1 is as light as a heavy motorcycle safetely can be. With an astounding weight of 180 kilograms, sliding through curves is as natural as it gets.</p>
			<div class="read-more desktop">
				<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
			</div>
		</div>
		<div class="stat-section">
			<div class="stats">
				<p class="stats-text">FS1 weighs</p>
				<p class="stats-info">180 kg</p>
				<p class="stats-text">with a</p>
				<p class="stats-info">200 kWh</p>
				<p class="stats-text">ion battery</p>
			</div>
		</div>
		<div class="read-more mobile">
			<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
		</div>
	</div><img class="engineering-image right" src="resources/desktop/image_range-left-aligned.jpg">
	<p class="article-subheader">RANGE</p>

  <div class="engineering-article">
		<div class="text-section">
			<p class="article-text">With lithium ion battery packs, The FS1 has a range up to 970 km per charge, depending on speed, acceleration, weather and terrain.</p>
			<div class="read-more desktop">
				<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
			</div>
		</div>
		<div class="stat-section">
			<div class="stats">
				<p class="stats-text">with an ion</p>
				<p class="stats-info">200 kWh</p>
				<p class="stats-text">and a range of</p>
				<p class="stats-info">970 km</p>
			</div>
		</div>
		<div class="read-more mobile">
			<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
		</div>
	</div>

  <!-- CTA -->
  <div class="CTA margin-after indented">
		<div class="cta-section">
			<h3 class="article-header translate" data-translate="cta header"><?= translate2('cta', 'header') ?>
			</h3>
			<p class="cta-text translate" data-translate="cta description"><?= translate2('cta', 'description') ?>
			</p>
		</div>
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button class="register-button" name="button" type="submit"><svg height="21" viewbox="0 0 23 21" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 10L21 10" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 1.79199L21.108 10.3959" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 19L21.108 10.3961" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg></button>
		</form>
	</div><!--/CTA-->

  <div class="multi-headers padded">
		<div class="subheader">
			<p class="article-subheader">REGENERATIVE BRAKES</p>
		</div>
		<div class="subheader">
			<p class="desktop article-subheader">ELECTRIC DRIVE-TRAIN MOTOR</p>
		</div>
	</div>
	<div class="engineering-article padded">
		<div class="text-section no-border">
			<p class="article-text">The regenerative brakes in the FS1 converts the kinetic energy which is usually lost when applying the brakes into a form of energy which can be either used immediately or stored until needed.</p>
			<div class="read-more desktop">
				<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
				<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
			</div>
		</div>
		<p class="mobile article-subheader">ELECTRIC DRIVE-TRAIN MOTOR</p>
		<div class="text-section no-border">
			<p class="article-text">The regenerative brakes in the FS1 converts the kinetic energy which is usually lost when applying the brakes into a form of energy which can be either used immediately or stored until needed.</p>
		</div>
		<div class="read-more mobile">
			<a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg></a>
		</div>
	</div><img class="engineering-image left" src="resources/desktop/image_align-left.jpg"></div><!-- /ENGINEERING -->

  <!--SMARTPHONE-->
	<div class="smartphone">
		<div class="smartphone-content">
			<div class="smartphone-article">
				<h3 class="article-header translate" data-translate="phone header"><?= translate2('phone', 'header') ?>
				</h3>
				<p class="article-text after-line  translate" data-translate="phone content"><?= translate2('phone', 'content') ?>
				</p>
			</div><button class="button phone-button" name="phone-button" type="button">Read more <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div>
		<div class="smartphone-image"></div>
	</div><!--/smartphone-->

  <!--MERCH-->
	<div class="product no-reverse">
		<div class="merch-image"></div>
		<div class="product-text">
			<h3 class="article-header">Shop our merch</h3>
			<p class="article-text">If you want to complete your FS1 look, our handcrafted merchandise is a must have. We offer you a smartwatch with embedded auto-sync technology connected to your FS1. An exclusive handbag in the same soft surface leather as the FS1 interior, and much more.</p><button class="button" name="button">Download <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div>
	</div>

  <!-- PRODUCT FOLDER -->
	<div class="product">
		<div class="product-text">
			<h3 class="article-header">Check out our product folder</h3>
			<p class="article-text">If you want to complete your FS1 look, our handcrafted merchandise is a must have. We offer you a smartwatch with embedded auto-sync technology connected to your FS1. An exclusive handbag in the same soft surface leather as the FS1 interior, and much more.</p><button class="button" name="button">Download <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div>
		<div class="product-image"></div>
	</div><!-- PRODUCT END -->
	<!-- EMAIL FOOTER -->
	<div class="CTA last">
		<div class="cta-section">
         <h3 class="article-header white  translate" data-translate="cta header"><?= translate2('cta', 'header') ?>
			</h3>
			<p class="cta-text white translate" data-translate="cta description"><?= translate2('cta', 'description') ?>
			</p>
		</div>
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button class="register-button" name="button" type="submit"><svg height="21" viewbox="0 0 23 21" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 10L21 10" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 1.79199L21.108 10.3959" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 19L21.108 10.3961" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg></button>
		</form>
	</div><!--/cta last-->
	<div class="footer">
		<div class="contact">
			<img alt="logo" class="footer-logotype desktop" src="resources/logo_white.svg">
			<div class="footer-lists">
				<div class="menu-col">
					<ul>
						<li class="menu-item">
							<a href="#">Home</a>
						</li>
						<li class="menu-item">
							<a href="#">Merchandise</a>
						</li>
						<li class="menu-item">
							<a href="#">Comfort</a>
						</li>
						<li class="menu-item">
							<a href="#">Safety</a>
						</li>
					</ul>
				</div>
				<div class="menu-col">
					<ul>
						<li class="menu-item">
							<a href="#">Specifications</a>
						</li>
						<li class="menu-item">
							<a href="#">Connect</a>
						</li>
						<li class="menu-item">
							<a href="#">Policy</a>
						</li>
						<li class="menu-item">
							<a href="#">Your Data</a>
						</li>
						<li class="menu-item">
							<a href="#">Product Folder</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="company-info">
				<img alt="logo" class="footer-logotype mobile" src="resources/logo_white.svg">
				<p>FastSecurity, Inc.</p>
				<p>Bråtaviks 12</p>
				<p>439 53 - Åsa, Sweden</p>
			</div>
		</div><!--/contact-->
	</div>
	<script src="js/script.js">
	</script>
	<script src="js/slide-show.js">
	</script>
	<script src="js/lang.js">
	</script>
</body>
</html>
