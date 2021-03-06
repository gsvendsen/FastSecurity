<?php

declare(strict_types=1);
require __DIR__.'/lang/functions.php';

session_start();

// Sets language session to english by default
if(!isset($_SESSION['lang'])){
  $_SESSION['lang'] = 'en';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Fast Security</title>
	<link href="/resources/svg/logo_black.svg" rel="icon">
	<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

    <!-- Logo container for mobile -->
	<div class="mobile-container">
		<a class="logo-container" href=""><img alt="logo" class="logotype" src="resources/svg/logo_white.svg"></a>
	</div><!-- /mobile-container -->
    <!-- Navbar for mobile/tablet -->
	<div class="navbar hidden">
		<div class="hamburger-menu">
			<div class="bar"></div>
		</div><!-- /hamburger-menu -->
	</div><!-- /navbar -->

    <!-- Navmenu for desktop -->
	<div class="desktop-menu">
		<a class="logo-container" href=""><img alt="logo" class="logotype desktop-logo" src="resources/svg/logo_white.svg"></a>
		<ul class="menu-list">
			<li class="menu-item no-select">
				<a class="nav-link translate" href="#" data-translate="menu home"><?= translate('menu', 'home') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item no-select">
				<a class="nav-link translate" href="#" data-translate="menu specs"><?= translate('menu', 'specs') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item no-select">
				<a class="nav-link translate" href="#" data-translate="menu safety"><?= translate('menu', 'safety') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item no-select">
                <a class="nav-link translate product-folder"  href="#productfolder" data-translate="menu product-folder"><?= translate('menu', 'product-folder') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item no-select">
				<a class="nav-link translate" href="#" data-translate="menu contact"><?= translate('menu', 'contact') ?></a>
			</li><!-- /menu-item -->
			<li class="flag-container">
				<img class="flag lang-option en" src="resources/svg/Flag_UK.svg">
                <img class="flag lang-option sv" src="resources/svg/Flag_SWE.svg">
			</li>
		</ul><!-- /menu-list -->
	</div><!-- /desktop-menu -->

    <!-- Navmenu for mobile -->
	<div class="menu">
		<ul>
         <li class="menu-item selected">
				<a class="translate" href="#" data-translate="menu home"><?= translate('menu', 'home') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu specs"><?= translate('menu', 'specs') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu safety"><?= translate('menu', 'safety') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item">
				<a class="translate product-folder"  href="resources/download/FS1_ProductFolder.pdf" download data-translate="menu product-folder"><?= translate('menu', 'product-folder') ?></a>
			</li><!-- /menu-item -->
			<li class="menu-item">
				<a class="translate" href="#" data-translate="menu contact"><?= translate('menu', 'contact') ?></a>
			</li><!-- /menu-item -->
			<li>
			    <img class="flag lang-option en" src="resources/svg/Flag_UK.svg"></a><img class="flag lang-option sv" src="resources/svg/Flag_SWE.svg"></a>
			</li>
		</ul><!-- /menu-list -->
	</div><!-- /mobile-menu -->

	<!-- Hero -->
	<div class="hero">
		<div class="title-container">
			<h1 class="hero-header white translate" data-translate="hero header"><?= translate('hero','header') ?></h1>
			<p class="hero-sub white translate" data-translate="hero description"><?= translate('hero','description') ?></p>
		</div><!-- /title-container -->
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button name="register-button" type="submit" class="translate" data-translate="hero register"><?= translate('hero', 'register') ?>
			</button>
		</form>
        <svg class="down-arrow" height="29" viewbox="0 0 26 29" width="26" xmlns="http://www.w3.org/2000/svg">
    		<path d="M13.3961 1V27.3342" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
    		<path d="M24.7922 15.9381L13.3962 27.3342" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
    		<path d="M2 15.9381L13.3961 27.3342" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
        </svg><!-- /down-arrow -->
	</div><!-- /hero -->

	<!-- History section -->
	<div class="history">
		<div>
			<h3 class="history-header translate" data-translate="history header"><?=translate('history', 'header') ?>
			</h3>
			<p class="history-text translate" data-translate="history content1"><?= translate('history', 'content1') ?>
			</p>
			<p class="history-text translate" data-translate="history content2"><?= translate('history', 'content2') ?>
			</p>
		</div>
		<div>
			<button class="button history-button" name="history-button" type="button">Our history <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div>
	</div><!--/history-->

	<!-- Slideshow section -->
	<div class="viewport-container">
		<div class="image-slider">
			<div class="slide-container">
				<div class="slide">
					<div class="slide-show-photo"><img class="photo" src="resources/desktop/testperson_1.jpg"></div>
					<div class="slide-show-text">
						<div class="text-container">
							<h1 class="quote">“The FS1 is an incredible vehicle! All of the components are crafted to perfection.”</h1>
							<p class="quote-name">Mathilde Thatsum</p>
							<p class="quote-source">CEO, Electric Solutions</p>
						</div><!-- /text-container -->
					</div><!-- /slide-show-text -->
				</div><!-- /slide -->
				<div class="slide">
					<div class="slide-show-photo"><img class="photo" src="resources/desktop/testperson_2.jpg"></div>
					<div class="slide-show-text">
						<div class="text-container">
							<h1 class="quote">“I have never before experienced such a feeling whilst riding.”</h1>
							<p class="quote-name">Kevin McKinsley</p>
							<p class="quote-source">Head of Sales SFY</p>
						</div><!-- /text-container -->
					</div><!-- /slide-show-text -->
				</div><!-- /slide -->
				<div class="slide">
					<div class="slide-show-photo"><img class="photo" src="resources/desktop/testperson_3.jpg"></div>
					<div class="slide-show-text">
						<div class="text-container">
							<h1 class="quote">“If you’re looking for the complete motorcycle experience this is the way to go.“</h1>
							<p class="quote-name">Amy Cunningham</p>
							<p class="quote-source">Partner at Swaine & Moore</p>
						</div><!-- /text-container -->
					</div><!-- /slide-show-text -->
				</div><!-- /slide -->
			</div><!-- /slide-container -->
			<div class="slide-show-controller">
				<div class="left-arrow">
					<svg class="arrow" height="26" viewbox="0 0 30 26" width="30" xmlns="http://www.w3.org/2000/svg">
					<path d="M28.3342 13.3961L1.99999 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M13.3961 24.7922L2 13.3962" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M13.3961 2L2 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path></svg>
				</div><!-- /left-arrow -->
				<div class="button-container">
					<div class="slide-button selected-button"></div>
					<div class="slide-button"></div>
					<div class="slide-button"></div>
				</div><!-- /button-container -->
				<div class="right-arrow">
					<svg class="arrow" height="26" viewbox="0 0 29 26" width="29" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 13.3961L27.3342 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M15.9381 2L27.3342 13.3961" stroke="black" stroke-linecap="round" stroke-width="1.5"></path>
					<path d="M15.9381 24.7922L27.3342 13.3962" stroke="black" stroke-linecap="round" stroke-width="1.5"></path></svg>
				</div><!-- /right-arrow -->
			</div><!-- /slide-show-controller -->
		</div><!-- /image-slider -->
	</div><!-- /viewport-container -->

	<!-- Autonomous section -->
	<div class="autonomous">
		<div class="autonomous-text-section">
			<div class="header-section pink-margin">
				<h3 class="article-header translate" data-translate="autonomous header"><?=translate('autonomous', 'header') ?></h3>
				<p class="article-text translate" data-translate="autonomous content1"><?=translate('autonomous', 'content1') ?></p>
				<p class="article-text translate" data-translate="autonomous content2"><?=translate('autonomous', 'content2') ?></p>
			</div><!-- header-section -->
			<div class="subheader-section">
				<h5 class="article-subheader translate" data-translate="break header"><?= translate('break', 'header') ?></h5>
				<p class="article-text after-line translate" data-translate="break content"><?= translate('break', 'content') ?></p>
			</div><!-- /subheader-section -->
		</div><!-- /autonomous-text-section -->
		<div class="autonomous-image"></div>
	</div><!--/autonomous-->

	<!-- Comfort section -->
	<div class="comfort">
		<div class="comfort-image"></div>
		<div class="comfort-text">
			<div class="text-container">
				<h3 class="article-header translate" data-translate="comfort header"><?= translate('comfort', 'header')?></h3>
				<p class="article-text translate" data-translate="comfort content"><?= translate('comfort', 'content')?></p>
			</div><!-- /text-container -->
		</div><!-- /comfort-text -->
	</div><!--/comfort-->

	<!-- Call to action email box -->
	<div class="cta margin-after">
		<div class="cta-section">
			<h3 class="article-header  translate" data-translate="cta header"><?= translate('cta', 'header') ?></h3>
			<p class="cta-text translate" data-translate="cta description"><?= translate('cta', 'description') ?></p>
		</div><!-- /cta-section -->
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button class="register-button" name="button" type="submit"><svg height="21" viewbox="0 0 23 21" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 10L21 10" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 1.79199L21.108 10.3959" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 19L21.108 10.3961" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg></button>
		</form>
	</div><!--/cta-->

	<!-- Statistics section -->
	<div class="statistics">
		<div class="stats-box">
			<p class="stats-text translate" data-translate="stats hours1"><?= translate('stats', 'hours1') ?></p>
			<p class="stats-info translate" data-translate="stats hours2"><?= translate('stats', 'hours2') ?></p>
			<p class="stats-text translate" data-translate="stats hours3"><?= translate('stats', 'hours3') ?></p>
		</div><!-- /stats-box -->
		<div class="stats-box">
			<p class="stats-text translate" data-translate="stats charge1"><?= translate('stats', 'charge1') ?></p>
			<p class="stats-info translate" data-translate="stats charge2"><?= translate('stats', 'charge2') ?></p>
			<p class="stats-text translate" data-translate="stats charge3"><?= translate('stats', 'charge3') ?></p>
		</div><!-- /stats-box -->
		<div class="stats-box">
			<p class="stats-text translate" data-translate="stats drive1"><?= translate('stats', 'drive1') ?></p>
			<p class="stats-info translate" data-translate="stats drive2"><?= translate('stats', 'drive2') ?></p>
			<p class="stats-text translate" data-translate="stats drive3"><?= translate('stats', 'drive3') ?></p>
		</div><!-- /stats-box -->
	</div><!-- /statistics -->

  <!-- Engineering section -->
  <div class="engineering">
      <div class="eng-header">
          <p class="article-pre translate" data-translate="specifications preheader"><?= translate('specifications', 'preheader') ?></p>
          <p class="article-bold translate" data-translate="specifications header"><?= translate('specifications', 'header') ?></p>
          <p class="article-subbold translate" data-translate="specifications sub"><?= translate('specifications', 'sub') ?></p>
      </div> <!-- /eng-header -->
      <img class="engineering-image right" src="resources/desktop/range.jpg">
      <p class="article-subheader translate" data-translate="acceleration header"><?= translate('acceleration', 'header') ?></p>
      <div class="engineering-article">
          <div class="text-section">
              <p class="article-text translate" data-translate="acceleration text"><?= translate('acceleration', 'text') ?></p>
              <div class="read-more desktop">
                  <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
                  </a>
              </div><!-- /read-more -->
          </div><!-- /text-section -->
          <div class="stat-section">
              <div class="stats">
                  <p class="stats-text translate" data-translate="acceleration stat1"><?= translate('acceleration', 'stat1') ?></p>
                  <p class="stats-info translate" data-translate="acceleration stat2"><?= translate('acceleration', 'stat2') ?></p>
                  <p class="stats-text translate" data-translate="acceleration stat3"><?= translate('acceleration', 'stat3') ?></p>
                  <p class="stats-info translate" data-translate="acceleration stat4"><?= translate('acceleration', 'stat4') ?></p>
                  <p class="stats-text translate" data-translate="acceleration stat5"><?= translate('acceleration', 'stat5') ?></p>
              </div><!-- /stats -->
              <div class="image-section">
                  <img alt="Graph of acceleration" class="stat-image" src="resources/desktop/graph.png">
                  <p class="stats-text translate" data-translate="acceleration graph"><?= translate('acceleration', 'graph') ?></p>
              </div><!-- /image-section -->
          </div><!-- /stat-section -->
          <div class="read-more mobile">
              <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
              </a>
          </div><!-- /read-more -->
      </div><!-- /engineering-article -->
      <img class="engineering-image left" src="resources/desktop/Delorean_Vinkel.jpg">
      <p class="article-subheader translate" data-translate="weight header"><?= translate('weight', 'header') ?></p>
      <div class="engineering-article">
          <div class="text-section">
              <p class="article-text translate" data-translate="weight text"><?= translate('weight', 'text') ?></p>
              <div class="read-more desktop">
                  <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
                  </a>
              </div><!-- /read-more -->
          </div><!-- /text-section -->
          <div class="stat-section">
              <div class="stats">
                  <p class="stats-text translate" data-translate="weight stat1"><?= translate('weight', 'stat1') ?></p>
                  <p class="stats-info translate" data-translate="weight stat2"><?= translate('weight', 'stat2') ?></p>
                  <p class="stats-text translate" data-translate="weight stat3"><?= translate('weight', 'stat3') ?></p>
                  <p class="stats-info translate" data-translate="weight stat4"><?= translate('weight', 'stat4') ?></p>
                  <p class="stats-text translate" data-translate="weight stat5"><?= translate('weight', 'stat5') ?></p>
              </div><!-- /stats -->
          </div><!-- /stat-section -->
          <div class="read-more mobile">
              <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
              </a>
          </div><!-- /read-more -->
      </div><!-- /engineering-article -->
      <img class="engineering-image right" src="resources/desktop/image_range-left-aligned.jpg">
      <p class="article-subheader translate" data-translate="range header"><?= translate('range', 'header') ?></p>
      <div class="engineering-article">
          <div class="text-section">
              <p class="article-text translate" data-translate="range text"><?= translate('range', 'text') ?></p>
              <div class="read-more desktop">
                  <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
                  </a>
              </div><!-- /read-more -->
          </div><!-- /text-section -->
          <div class="stat-section">
              <div class="stats">
                  <p class="stats-text translate" data-translate="range stat1"><?= translate('range', 'stat1') ?></p>
                  <p class="stats-info translate" data-translate="range stat2"><?= translate('range', 'stat2') ?></p>
                  <p class="stats-text translate" data-translate="range stat3"><?= translate('range', 'stat3') ?></p>
                  <p class="stats-info translate" data-translate="range stat4"><?= translate('range', 'stat4') ?></p>
              </div><!-- /stats -->
          </div><!-- /stat-section -->
          <div class="read-more mobile">
              <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
              </a>
          </div><!-- /read-more -->
      </div><!-- /engineering-article -->
      <!-- Call to action email box -->
      <div class="cta margin-after indented">
          <div class="cta-section">
              <h3 class="article-header translate" data-translate="cta header"><?= translate('cta', 'header') ?></h3>
              <p class="cta-text translate" data-translate="cta description"><?= translate('cta', 'description') ?></p>
          </div><!-- /cta-section -->
          <form class="email-sign-up">
              <input class="email-input" name="email" placeholder="E-mail" type="text"> <button class="register-button" name="button" type="submit"><svg height="21" viewbox="0 0 23 21" width="23" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 10L21 10" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M12.5042 1.79199L21.108 10.3959" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M12.5042 19L21.108 10.3961" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg></button>
          </form>
      </div><!--/cta-->
          <!-- Engineering continuation -->
      <div class="multi-headers padded">
          <div class="subheader">
              <p class="article-subheader translate" data-translate="regenerative header1"><?= translate('regenerative', 'header1') ?></p>
          </div><!-- /subheader -->
          <div class="subheader">
              <p class="desktop article-subheader translate" data-translate="regenerative header2"><?= translate('regenerative', 'header2') ?></p>
          </div><!-- /subheader -->
      </div><!-- /multi-headers -->
      <div class="engineering-article padded">
          <div class="text-section no-border">
              <p class="article-text translate" data-translate="regenerative text1"><?= translate('regenerative', 'text1') ?></p>
              <div class="read-more desktop">
                  <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                      <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
                  </a>
              </div><!-- /read-more -->
          </div><!-- /text-section -->
          <p class="mobile article-subheader translate" data-translate="regenerative header2"><?= translate('regenerative', 'header2') ?></p>
          <div class="text-section no-border">
              <p class="article-text translate" data-translate="regenerative text2"><?= translate('regenerative', 'text2') ?></p>
          </div><!-- /text-section -->
          <div class="read-more mobile">
              <a href="#">Read more <svg height="13" viewbox="0 0 23 13" width="23" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path>
                  <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-linecap="round" stroke-width="1.5"></path></svg>
              </a>
          </div><!-- /read-more -->
      </div><!-- /engineering-article -->
  </div><!-- /engineering  -->
  <img class="engineering-image left" src="resources/desktop/image_align-left.jpg"></div>

    <!-- Smartphone app section -->
	<div class="smartphone">
		<div class="smartphone-content">
			<div class="smartphone-article">
				<h3 class="article-header translate" data-translate="phone header"><?= translate('phone', 'header') ?></h3>
				<p class="article-text translate" data-translate="phone content1"><?= translate('phone', 'content1') ?>
                <p class="article-text after-line  translate" data-translate="phone content2"><?= translate('phone', 'content2') ?></p>
			</div><!-- /smartphone-article -->
            <button class="button phone-button" name="phone-button" type="button">Read more <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div><!-- /smartphone-content -->
		<div class="smartphone-image"></div>
	</div><!--/smartphone-->

    <!-- Merchandise section -->
	<div class="product no-reverse">
		<div class="merch-image"></div>
		<div class="product-text">
			<h3 class="article-header translate" data-translate="merch header"><?= translate('merch', 'header') ?></h3>
			<p class="article-text translate" data-translate="merch text"><?= translate('merch', 'text') ?></p><button class="button" name="button">Download <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button>
		</div><!-- /product-text -->
	</div><!-- /merchandise -->

    <!-- Product Folder section -->
	<div class="product" id="productfolder">
		<div class="product-text">
            <h3 class="article-header translate" data-translate="product header"><?= translate('product', 'header') ?></h3>
			<p class="article-text translate" data-translate="product text"><?= translate('product', 'text') ?></p><a class="product-folder" href="resources/download/FS1_ProductFolder.pdf" download><button class="button" name="button">Download <svg class="button-arrow" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"></path>
			<path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"></path></svg></button></a>
		</div><!-- /product-text -->
		<div class="product-image"></div>
	</div><!-- /product -->

    <!-- Call to action email footer -->
	<div class="cta last">
		<div class="cta-section">
         <h3 class="article-header white  translate" data-translate="cta header"><?= translate('cta', 'header') ?>
			</h3>
			<p class="cta-text white translate" data-translate="cta description"><?= translate('cta', 'description') ?>
			</p>
		</div><!-- /cta-section -->
		<form class="email-sign-up">
			<input class="email-input" name="email" placeholder="E-mail" type="text"> <button class="register-button" name="button" type="submit"><svg height="21" viewbox="0 0 23 21" width="23" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 10L21 10" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 1.79199L21.108 10.3959" stroke="white" stroke-linecap="round" stroke-width="1.5"></path>
			<path d="M12.5042 19L21.108 10.3961" stroke="white" stroke-linecap="round" stroke-width="1.5"></path></svg></button>
		</form>
	</div><!--/cta last-->

    <!-- Footer -->
	<div class="footer">
		<div class="contact">
			<img alt="logo" class="footer-logotype desktop" src="resources/svg/logo_white.svg">
			<div class="footer-lists">
				<div class="menu-col">
					<ul>
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu home"><?= translate('menu', 'home') ?>
                          </a>
                         </li><!-- /menu-item -->
                         <li class="menu-item no-select">
                           <a class="translate" href="#" data-translate="menu merchandise"><?= translate('menu', 'merchandise') ?></a>
                         </li><!-- /menu-item -->
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu comfort"><?= translate('menu', 'comfort') ?></a>
                        </li><!-- /menu-item -->
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu safety"><?= translate('menu', 'safety') ?></a>
                        </li><!-- /menu-item -->
					</ul>
				</div><!-- /menu-col -->
				<div class="menu-col">
					<ul>
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu specifications"><?= translate('menu', 'specifications') ?></a>
                        </li><!-- /menu-item -->
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu connect"><?= translate('menu', 'connect') ?></a>
                        </li><!-- /menu-item -->
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu policy"><?= translate('menu', 'policy') ?>
                          </a>
                        </li><!-- /menu-item -->
                        <li class="menu-item no-select">
                          <a class="translate" href="#" data-translate="menu data"><?= translate('menu', 'data') ?></a>
                        </li><!-- /menu-item -->
                        <li class="menu-item no-select">
                          <a class="translate product-folder"  href="#productfolder" data-translate="menu product-folder"><?= translate('menu', 'product-folder') ?></a>
                        </li><!-- /menu-item -->
					</ul>
				</div><!-- /menu-col -->
			</div><!-- /footer-lists -->
			<div class="company-info white">
				<img alt="logo" class="footer-logotype mobile" src="resources/svg/logo_white.svg">
				<p>FastSecurity, Inc.</p>
				<p>Bråtaviksvägen 12</p>
				<p>439 53 - Åsa, Sweden</p>
			</div><!-- /company-info -->
		</div><!--/contact-->
	</div><!-- /footer -->

    <!-- JavaScript scripts -->
	<script src="js/script.js">
	</script>
	<script src="js/slide-show.js">
	</script>
	<script src="js/lang.js">
	</script>
</body>
</html>
