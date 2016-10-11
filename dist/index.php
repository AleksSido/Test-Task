<!-- The file is styled according to BEM methodology with one exception, that there are no special classes for block and elements positioning. But appropriate css rules on elements and blocks positioning are marked with appropriate comment *positioning* in scss and css files. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Task</title>
	<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400|Lato|Open+Sans|Roboto|Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/style.min.css">
</head>
<body>
	<!-- HEADER -->	
	<header class="header header_default-theme">
		<div class="header__wrapper">
			<!-- icons of social networks -->
			<div class="social-icons">
				<!-- facebook -->
				<div class="social-icons-item">
					<a class="social-icons-item__link social-icons-item__link_default-theme" href="#">
						<svg class="social-icons-item__svg" xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20">
							<defs>
							    <style>
							      .cls-1 {
							        fill: #80b412;
							        fill-rule: evenodd;
							      }
							    </style>
							</defs>
							<path class="cls-1" d="M173.439,50.88l0.442-3.554h-3.39V45.057a1.45,1.45,0,0,1,1.7-1.73H174V40.147a23.28,23.28,0,0,0-2.641-.14c-2.614,0-4.4,1.657-4.4,4.7v2.621H164V50.88h2.956V60h3.535V50.88h2.948Z" transform="translate(-164 -40)"/>
						</svg>
					</a>
				</div>
				<!-- twitter -->
				<div class="social-icons-item">
					<a class="social-icons-item__link social-icons-item__link_default-theme" href="#">
						<svg class="social-icons-item__svg" xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
						  <defs>
						    <style>
						      .cls-1 {
						        fill: #80b412;
						        fill-rule: evenodd;
						      }
						    </style>
						  </defs>
						  <path class="cls-1" d="M223,44.662a6.9,6.9,0,0,1-2,.556,3.535,3.535,0,0,0,1.534-1.955,6.925,6.925,0,0,1-2.214.858,3.466,3.466,0,0,0-2.547-1.116,3.51,3.51,0,0,0-3.487,3.533,3.55,3.55,0,0,0,.09.8,9.856,9.856,0,0,1-7.189-3.692,3.569,3.569,0,0,0,1.079,4.717,3.436,3.436,0,0,1-1.579-.442v0.044a3.524,3.524,0,0,0,2.8,3.465,3.454,3.454,0,0,1-.919.125,3.417,3.417,0,0,1-.656-0.064,3.5,3.5,0,0,0,3.258,2.454,6.941,6.941,0,0,1-4.332,1.513,7.023,7.023,0,0,1-.831-0.05A9.786,9.786,0,0,0,211.347,57a9.924,9.924,0,0,0,9.922-10.052c0-.153,0-0.305-0.009-0.458A7.169,7.169,0,0,0,223,44.662Z" transform="translate(-206 -43)"/>
						</svg>
					</a>
				</div>
				<!-- google+ -->
				<div class="social-icons-item">
					<a class="social-icons-item__link social-icons-item__link_default-theme" href="#">
						<svg class="social-icons-item__svg" xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18">
						  <defs>
						    <style>
						      .cls-1 {
						        fill: #80b412;
						        fill-rule: evenodd;
						      }
						    </style>
						  </defs>
						  <path class="cls-1" d="M259.14,41.859a3.025,3.025,0,0,1,.476.4,4.243,4.243,0,0,1,.5.681,4.63,4.63,0,0,1,.414.9,4.415,4.415,0,0,1,.148,1.21,3.68,3.68,0,0,1-.533,2.029,6.179,6.179,0,0,1-.532.68q-0.31.31-.662,0.634a3.253,3.253,0,0,0-.371.5,1.138,1.138,0,0,0-.2.668,0.91,0.91,0,0,0,.206.611,4.756,4.756,0,0,0,.34.4l0.763,0.657a7.9,7.9,0,0,1,1.245,1.349,3.573,3.573,0,0,1,.526,1.959,4.035,4.035,0,0,1-1.443,3.044A6.32,6.32,0,0,1,255.7,59a5.256,5.256,0,0,1-3.524-1.058A2.91,2.91,0,0,1,251,55.63a3.446,3.446,0,0,1,.383-1.462,3.383,3.383,0,0,1,1.342-1.414,6.8,6.8,0,0,1,2.293-.875,16.623,16.623,0,0,1,1.976-.207,5.143,5.143,0,0,1-.433-0.718,1.709,1.709,0,0,1-.221-0.892,1.4,1.4,0,0,1,.083-0.522l0.138-.406a6.119,6.119,0,0,1-.722.047,3.374,3.374,0,0,1-2.735-1.188,3.636,3.636,0,0,1-.985-2.524,4.409,4.409,0,0,1,1.4-3.159,4.821,4.821,0,0,1,1.99-1.084,9.222,9.222,0,0,1,1.917-.219h4.493l-1.387.852H259.14Zm0.868,13.6a2.37,2.37,0,0,0-.558-1.568,13.745,13.745,0,0,0-1.846-1.557,4.824,4.824,0,0,0-.5-0.022,5.627,5.627,0,0,0-.88.045,9.3,9.3,0,0,0-1.428.334c-0.114.047-.274,0.116-0.482,0.208a2.974,2.974,0,0,0-.633.426,2.47,2.47,0,0,0-.526.715,2.22,2.22,0,0,0-.246,1.084,2.467,2.467,0,0,0,1.072,2.052,4.481,4.481,0,0,0,2.79.831,3.726,3.726,0,0,0,2.425-.739A2.281,2.281,0,0,0,260.008,55.462Zm-3.132-6.927a2.055,2.055,0,0,0,1.478-.671,2.513,2.513,0,0,0,.367-0.924c0.032-.316.049-0.581,0.049-0.8a6.489,6.489,0,0,0-.68-2.818,3.118,3.118,0,0,0-.839-1.108,2.092,2.092,0,0,0-1.221-.427,1.943,1.943,0,0,0-1.519.774,3.009,3.009,0,0,0-.488,1.756,5.822,5.822,0,0,0,.713,2.668,3.6,3.6,0,0,0,.891,1.1A1.9,1.9,0,0,0,256.876,48.536ZM268,43.588h-2.357v-2.48H264.5v2.48h-2.357v1.2H264.5v2.479h1.143V44.79H268v-1.2Z" transform="translate(-251 -41)"/>
						</svg>
					</a>
				</div>
				<!-- youtube -->
				<div class="social-icons-item social-icons-item_last-item">
					<a class="social-icons-item__link social-icons-item__link_default-theme" href="#">
						<svg class="social-icons-item__svg" xmlns="http://www.w3.org/2000/svg" width="15" height="19" viewBox="0 0 15 19">
						  <defs>
						    <style>
						      .cls-1 {
						        fill: #80b412;
						        fill-rule: evenodd;
						      }
						    </style>
						  </defs>
						  <path class="cls-1" d="M302.928,40.01H301.9L301.208,42.8l-0.721-2.788h-1.07c0.214,0.657.438,1.319,0.652,1.978a18.209,18.209,0,0,1,.621,2.247v2.876h1.016V44.235Zm2.715,5.387V43.544a2.154,2.154,0,0,0-.285-1.247,1.322,1.322,0,0,0-2.135,0,2.13,2.13,0,0,0-.287,1.247V45.4a2.125,2.125,0,0,0,.287,1.245,1.323,1.323,0,0,0,2.135,0A2.15,2.15,0,0,0,305.643,45.4Zm-0.917.181c0,0.489-.141.734-0.436,0.734s-0.438-.245-0.438-0.734V43.352c0-.49.142-0.733,0.438-0.733s0.436,0.244.436,0.733v2.226Zm4.305,1.533V41.82h-0.916v4.044a0.809,0.809,0,0,1-.58.449,0.213,0.213,0,0,1-.214-0.224,2.368,2.368,0,0,1-.011-0.373V41.82H306.4V46a2.806,2.806,0,0,0,.082.787,0.561,0.561,0,0,0,.59.394,1.459,1.459,0,0,0,1.047-.651v0.578h0.916ZM312,53.532a17.544,17.544,0,0,1-.263,3.712,1.931,1.931,0,0,1-1.621,1.543,72.739,72.739,0,0,1-11.234,0,1.93,1.93,0,0,1-1.621-1.543A17.609,17.609,0,0,1,297,53.532a17.549,17.549,0,0,1,.265-3.712,1.925,1.925,0,0,1,1.62-1.541,72.44,72.44,0,0,1,11.234,0,1.927,1.927,0,0,1,1.621,1.541,17.613,17.613,0,0,1,.26,3.712m-7.982-1.84h-0.908v4a0.8,0.8,0,0,1-.573.443,0.212,0.212,0,0,1-.212-0.222,3.173,3.173,0,0,1-.008-0.369V51.693h-0.906v4.141a2.773,2.773,0,0,0,.08.779,0.555,0.555,0,0,0,.584.389,1.439,1.439,0,0,0,1.035-.643v0.571h0.908V51.693m5.052,2V53.21q0-.726.455-0.727c0.3,0,.451.243,0.451,0.727v0.484h-0.906m0.463-2.065a1.267,1.267,0,0,0-1.086.537,2.11,2.11,0,0,0-.28,1.234v1.834a2.1,2.1,0,0,0,.291,1.231,1.275,1.275,0,0,0,1.1.536,1.239,1.239,0,0,0,1.1-.567,1.415,1.415,0,0,0,.211-0.568c0.008-.1.02-0.307,0.02-0.612V55.116h-0.926c0,0.381-.011.59-0.019,0.642a0.4,0.4,0,0,1-.4.381c-0.311,0-.463-0.241-0.463-0.726V54.484h1.813V53.4a2.132,2.132,0,0,0-.281-1.234,1.239,1.239,0,0,0-1.069-.537M301.277,49.9h-3.161v0.99h1.066v6.038h1.008V50.891h1.087V49.9m4.882,6.237a0.635,0.635,0,0,1-.452-0.232V52.714a0.639,0.639,0,0,1,.452-0.231c0.261,0,.394.243,0.394,0.715v2.235c0,0.473-.133.706-0.394,0.706M305.707,49.9H304.8v7.028h0.907V56.422a1.221,1.221,0,0,0,.936.579,0.724,0.724,0,0,0,.725-0.588,4.412,4.412,0,0,0,.091-1.055V53.272a4.26,4.26,0,0,0-.091-1.053,0.724,0.724,0,0,0-.725-0.591,1.216,1.216,0,0,0-.936.568V49.9" transform="translate(-297 -40)"/>
						</svg>
					</a>
				</div>				
			</div><!-- icons of social networks -->
			<!-- site logo and title -->
			<div class="logo-and-title">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="148" height="38" viewBox="0 0 148 38">
				  <image width="148" height="38" xlink:href="data:img/png;base64,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"/>
				</svg>
				<h1 class="logo-and-title__heading1 logo-and-title__heading1_default-theme">Backyard Landscaping</h1>
			</div><!-- site logo and title -->
			<!-- menu collapse button -->
			<div class="menu-collapse-button">
				<span class="menu-collapse-button__bar menu-collapse-button__bar_default-theme"></span>
				<span class="menu-collapse-button__bar menu-collapse-button__bar_default-theme"></span>
				<span class="menu-collapse-button__bar menu-collapse-button__bar_default-theme"></span>
			</div>
			<!-- menu -->			
			<nav class="menu menu_default-theme">
				<ul class="menu__menu-list">
					<li class="menu__menu-item">
						<a class="menu__menu-link menu__menu-link_default-theme" href="#">HOME</a>
					</li>
					<li class="menu__menu-item">
						<a class="menu__menu-link menu__menu-link_default-theme" href="#about">ABOUT</a>
					</li>
					<li class="menu__menu-item">
						<a class="menu__menu-link menu__menu-link_default-theme" href="#news">NEWS</a>
					</li>
					<li class="menu__menu-item">
						<a class="menu__menu-link menu__menu-link_default-theme" href="#testimonials">TESTIMONIALS</a>
					</li>
					<li class="menu__menu-item">
						<a class="menu__menu-link menu__menu-link_default-theme" href="#contact">CONTACT US</a>
					</li>
				</ul>
			</nav><!-- menu -->
		</div>
	</header><!-- HEADER -->
	<!-- SLIDER -->
	<section class="slider">
		<!-- slider-wrapper -->
		<div class="slider-wrapper">
			<div class="slider-wrapper__slide">
				<img class="slider-wrapper__image" src="images/Backyard1.jpg" alt="">	
			</div>			
			<div class="slider-wrapper__slide">
				<img class="slider-wrapper__image" src="images/Backyard2.jpg" alt="">	
			</div>			
			<div class="slider-wrapper__slide">
				<img class="slider-wrapper__image" src="images/Backyard3.jpg" alt="">	
			</div>			
			<div class="slider-wrapper__slide">
				<img class="slider-wrapper__image" src="images/Backyard4.jpg" alt="">	
			</div>
			<!-- slider navigation -->
			<div class="slider-navigation" id="id-slider-navigation">
				<a href="#" class="slider-navigation__button slider-navigation__button_default-theme">1</a>
				<a href="#" class="slider-navigation__button slider-navigation__button_default-theme">2</a>
				<a href="#" class="slider-navigation__button slider-navigation__button_default-theme">3</a>
				<a href="#" class="slider-navigation__button slider-navigation__button_default-theme">4</a>
			</div><!-- slider navigation -->
			<!-- qualities -->
			<div class="qualities qualities_default-theme">
				<!-- Good service -->
				<div class="qualities-item">
					<div class="qualities-item__icon-wrapper qualities-item__icon-wrapper_default-theme">
						<svg class="qualities-item__svg qualities-item__svg-good-service" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 43 43">
						  <image id="Like-128" width="43" height="43" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAMAAADWg4HyAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABUFBMVEWAtBL///+AtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBIAAAAkoVdNAAAAbnRSTlMAAAEvqJ8SCfDJWUaSlNmsFrxevbudH4GybjpCDvIGD9CgMdtMe21JaPrGzNHNc7dlsaeidjyupoKDgGyjQaSXeWCzqXreB5xxoauq755npSdQTnSJmW9HrwINVPbCKe1Afbi5wCh4h7S+tpV3HA8RJykAAAABYktHRG9VCGGBAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4AgZCx8C6PBipQAAAcJJREFUOMuVlVdXwkAQhScRFCuiIqio2LCgooCCgg27qNh7r9j2/z+azGaTA1vQ+7K5OV+S2XtmJwCGdB34BZjTDOnmQq3OL5YoquECElW53NV4oTlinypTjYeQWo7VhWwdMVRfwhqgmG0w2cZyVqwmk/WWspK9NZso8XF7E6kF2dY/sW3I+vnM+JrbESUBPjOeDVK24w+ZdVKUdFXOLOShaHdPxb31hq3X9kEltn/AQolXF7CDQ5FIZGgY0ZFRYmtgLDoejkYnXJMOS9OMAfRMhYlQ07g5syXj6BMASSLTDM0MYBZtCiAtZedYZl60LoB5KZth9SbQZlXsAmMX0S4BLEvZFcbm0K4CrEnZ9Q2LdaPdVLFky8rMhW5byaYsdodlpmDnTdbOLA8QkKK7vVa9e2jdqsz2WQ6Fypkd/COzQ3reAPxo/So2zfpsFW1WxSZYn+XRFlTsUWmf5RU9eWyfCzer90SCJp0zROs9BTjrFrPnDnuBN4xev7y6bpNUy2VmKnPDoaMhNqMAbvGOzxoQd/Ey9P5Bc9jHp+Bz7iVpj5PXt/dUrFj88OVyn8Wv7x/RXBeNTGCDTy9nBU9ouv0v/AUUJWPcXyyGFgAAAABJRU5ErkJggg=="/>
						</svg>	
					</div>
					<h5 class="qualities-item__heading qualities-item__heading_default-theme qualities-item__heading_another-font-type">Good service</h5>
				</div>
				<!-- vertical line -->
				<div class="qualities-item-empty">
					<div class="qualities-item__vertical-line qualities-item__icon-wrapper_default-theme"></div>
				</div>
				<!-- High perfomance  -->
				<div class="qualities-item">
					<div class="qualities-item__icon-wrapper qualities-item__icon-wrapper_default-theme">
						<svg class="qualities-item__svg qualities-item__svg-high-perfomance" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 38 38">
						  <image id="Service-128" width="38" height="38" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAMAAACf4xmcAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB6VBMVEWAtBL///+AtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBKAtBIAAAAMfJN1AAAAoXRSTlMAAFvMjg5IZ0WQrQEEjeB3jLMCFMphT7EFwP1mrLBLgVqeTY+00+kXlLLL5BUuPpmu0RMM8IuW+90a1pX2zxkYVE6bth8Jw+fE2QY2Ekw8Csmg8THSa1HH4SryOA9sBwsIqPw5NchxEWgQbX1EeL1eI3Dc9c2vl27XIfhjNEfv21zzKLjVfoplLe4NcoksSgPO2lX0UB0mpl0w5VOA94W3WSFpavIAAAABYktHRKKw3d+MAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4AgZCx4Pj1ovWQAAAnhJREFUOMttlIlbTFEUwM8zZeiWUiJLKCaaSQrJUKIi6jHINi1TZGfEEMm+Zo/su/OfOudu774+9/vmzr3n/u7Z7wMAmBXJg/+N/NnROeDJQbu5iFgAIAQfBXNh0TzEYvCEkFgJ8phf6qhhqmwBScuBMKltIaqxSBP6V7EYcclSWmujyzSGlVYXT8tJsoLXGluJDmd0AVSRoJrXDAnybZXlVltdADHEmjW8kBRHutZytcJQEEdM1ClMeOvqebXecg02WJY1blDaNm5qklY2B/oMVt9Muy1Jxsq2YlQlaVtYH0mSLbxr3Q5tOyKIO/Xldst1dPJ+126169pTQ/PebmMksNtDO78V3bHPsxnVcbTsp23qgAs1l3teUMiDLDrUy7oOq/MjR48luo7npVWHmNyT3b5+Wg5EFDVI68zQsG4kYXN/4uQIn8S1LmXE9putUPcpttioqCgEmPAcSo6h04o6Y+S2pi51Vnt/zkok5TkU/Z+PB96rdre+iUBZRsd4wbEh21e4Jk2+qLeHL6ZdSoVwKXu5avSKr72/SpJBzPlKpQ1hoEGeXks43nfWYq4NTJMzlroeKrPOKoxhLKkeo8JuhKib1vsxHPeDSG9NIBbdvnP3Xij3HHYl3u+tUJiABypL0P+QsUduth/jxJOnIyrSZzipTp6/IKw9+EAAvJQWmiT26rW5/4b6edwpCUCBdOQt+zYVWHmH+H7KbZlpieUKQzXtoTcXE+4HJ/VBctlQTT+SpARc52CSXyv21ZnupTmfa/VpRmN9/iIfr2ev+lyMr5ayaDW/xWlDfftOYf6YQbE/XubnL/xtLo3+yf4tDfmlZ8pGOpr6Bxl8JkYj42OAAAAAAElFTkSuQmCC"/>
						</svg>
					</div>
					<h5 class="qualities-item__heading qualities-item__heading_default-theme">High perfomance</h5>
				</div>
				<!-- vertical line -->
				<div class="qualities-item-empty">
					<div class="qualities-item__vertical-line qualities-item__icon-wrapper_default-theme"></div>
				</div>
				<!-- Experience  -->
				<div class="qualities-item">
					<div class="qualities-item__icon-wrapper qualities-item__icon-wrapper_default-theme">
						<svg class="qualities-item__svg qualities-item__svg-experience" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.812 43.219">
						  <defs>
						    <style>
						      .cls-1 {
						        fill: #80b412;
						        fill-rule: evenodd;
						      }
						    </style>
						  </defs>
						  <path class="cls-1" d="M970.713,582.967l7.553,13.58,15.36,2.926-10.693,11.319,1.941,15.388L970.713,619.6l-14.161,6.585,1.941-15.388L947.8,599.473l15.361-2.926,7.552-13.58" transform="translate(-947.813 -582.969)"/>
						</svg>
					</div>
					<h5 class="qualities-item__heading qualities-item__heading_default-theme">Experience</h5>
				</div>
			</div><!-- qualities -->
		</div><!-- slider-wrapper -->		
	</section><!-- SLIDER -->
	<!-- ABOUT US -->
	<section class="about-us" id="about">
		<div class="about-us__wrapper">
			<div class="about-us__horizontal-line about-us__horizontal-line_default-theme"></div>
				<h2 class="about-us__heading">About Us</h2>
			<div class="about-us__horizontal-line about-us__horizontal-line_default-theme"></div>
			<!-- video -->
			<div class="video-wrapper">
				<iframe class="video-wrapper__iframe" src="https://www.youtube.com/embed/U4lFXtLF5Cs?list=PLpcSpRrAaOaqQMDlCzE_Y6IUUzaSfYocK" frameborder="0" allowfullscreen></iframe>
			</div><!-- video -->
			<!-- about-us description -->
			<div class="about-us-description">
				<p class="about-us-description__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce libero dui, pharetra vitae tempus id, interdum in elit. Fusce cursus interdum auctor. Proin et aliquam tellus, vel egestas sapien.</p>
				<ul class="about-us-description__list">
					<li class="about-us-description__list-item about-us-description__list-item_default-theme"><span class="about-us-description__number about-us-description__number_default-theme">1</span>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
					<li class="about-us-description__list-item about-us-description__list-item_default-theme"><span class="about-us-description__number about-us-description__number_default-theme">2</span>Deleniti fuga minus molestias omnis perferendis voluptatem.</li>
					<li class="about-us-description__list-item about-us-description__list-item_default-theme"><span class="about-us-description__number about-us-description__number_default-theme">3</span>Laboriosam maiores nisi nulla recusandae repellendus vero.</li>
					<li class="about-us-description__list-item about-us-description__list-item_default-theme"><span class="about-us-description__number about-us-description__number_default-theme">4</span>Corporis, eos impedit pariatur quaerat quod reprehenderit?</li>
					<li class="about-us-description__list-item about-us-description__list-item_default-theme"><span class="about-us-description__number about-us-description__number_default-theme">5</span>Dolore fuga illo iure quas quisquam voluptates.</li>
				</ul>
			</div><!-- about-us description -->
		</div>
	</section><!-- ABOUT US -->
	<!-- LATEST NEWS -->
	<section class="latest-news" id="news">
		<div class="latest-news__wrapper">
			<div class="latest-news__horizontal-line latest-news__horizontal-line_default-theme"></div>
			<h2 class="latest-news__heading latest-news__heading_default-theme">Latest News</h2>
			<div class="latest-news__horizontal-line latest-news__horizontal-line_default-theme"></div>
			<!-- last news post -->
			<article class="last-news-post last-news-post_default-theme">
				<div class="last-news-post__image-wrapper">
					<img src="images/livingroom-backyard.png" alt="" class="last-news-post__image">
				</div>
				<div class="last-news-post__text-wrapper">
					<h3 class="last-news-post__title last-news-post__title_default-theme">News Title</h3>
					<p class="last-news-post__data last-news-post__data_default-theme">posted 10.12.15</p>
					<p class="last-news-post__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias asperiores assumenda consequatur cum cumque delectus doloremque doloribus ducimus earum laboriosam laudantium nam necessitatibus nostrum praesentium quisquam ratione repellendus rerum sed tempore tenetur vel voluptate voluptatibus. Ab consectetur corporis delectus harum iusto laboriosam maxime molestiae odio quisquam quod quos sit temporibus, totam vel veniam veritatis?[...]</p>
					<!-- 'read more' button -->
					<a class="button-read-more button-read-more_default-theme last-news-post__button-read-more" href="#">Read More</a>
				</div>
				<div class="clear-fix"></div>
			</article><!-- last news post -->
			<!-- prelast news post -->
			<article class="prelast-news-post prelast-news-post_default-theme">
				<div class="prelast-news-post__text-wrapper">
					<h3 class="prelast-news-post__title prelast-news-post__title_default-theme">News Title</h3>
					<p class="prelast-news-post__data prelast-news-post__data_default-theme">posted 10.12.15</p>
					<p class="prelast-news-post__excerpt">Animi asperiores cupiditate distinctio ducimus id incidunt odit ratione veniam voluptates! Accusantium earum, eligendi molestias necessitatibus nisi provident quasi quisquam repellat repudiandae vero. Ad dolore, nobis porro quos totam vero vitae? A asperiores at culpa cumque, ducimus earum eius exercitationem facilis ipsa laudantium molestias odio omnis, optio recusandae repellat velit.[...]</p>
					<!-- 'read more' button -->
					<a class="button-read-more button-read-more_default-theme prelast-news-post__button-read-more" href="#">Read More</a>
				</div>
				<div class="prelast-news-post__image-wrapper">
					<img src="images/invitingbackyard.png" alt="" class="prelast-news-post__image">
				</div>
				<div class="clear-fix"></div>
			</article><!-- prelast news post -->
		</div>
	</section><!-- LATEST NEWS -->	
	<!-- TESTIMONIALS -->
	<section class="testimonials testimonials_default-theme" id="testimonials">
		<div class="testimonials__wrapper">
			<div class="testimonials__horizontal-line testimonials__horizontal-line_default-theme"></div>
			<h2 class="testimonials__heading testimonials__heading_default-theme">Testimonials</h2>
			<div class="testimonials__horizontal-line testimonials__horizontal-line_default-theme"></div>
		</div>
		<!-- testimonials slider -->
		<div class="testimonials-slider">
			<!-- copy of third testimonial -->
			<div class="testimonial testimonial_default-theme">
				<div class="testimonial__recommender-photo-wrapper">
					<img class="testimonial__photo" src="images/recommender3.png" alt="">
				</div>
				<div class="testimonial__text-wrapper">
					<p class="testimonial__text testimonial__text_default-theme">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?</p>
					<p class="testimonial__recommender testimonial__recommender_default-theme">- Lorem ipsum</p>
				</div>
			</div>
			<!-- first testimonial -->
			<div class="testimonial testimonial_default-theme">
				<div class="testimonial__recommender-photo-wrapper">
					<img class="testimonial__photo" src="images/recommender1.png" alt="">
				</div>
				<div class="testimonial__text-wrapper">
					<p class="testimonial__text testimonial__text_default-theme">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?</p>
					<p class="testimonial__recommender testimonial__recommender_default-theme">- Lorem ipsum</p>
				</div>
			</div>
			<!-- second testimonial -->
			<div class="testimonial testimonial_default-theme">
				<div class="testimonial__recommender-photo-wrapper">
					<img class="testimonial__photo" src="images/recommender2.png" alt="">
				</div>
				<div class="testimonial__text-wrapper">
					<p class="testimonial__text testimonial__text_default-theme">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?</p>
					<p class="testimonial__recommender testimonial__recommender_default-theme">- Lorem ipsum</p>
				</div>
			</div>
			<!-- third testimonial -->
			<div class="testimonial testimonial_default-theme">
				<div class="testimonial__recommender-photo-wrapper">
					<img class="testimonial__photo" src="images/recommender3.png" alt="">
				</div>
				<div class="testimonial__text-wrapper">
					<p class="testimonial__text testimonial__text_default-theme">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?</p>
					<p class="testimonial__recommender testimonial__recommender_default-theme">- Lorem ipsum</p>
				</div>
			</div>
			<!--  copy of first testimonial -->
			<div class="testimonial testimonial_default-theme">
				<div class="testimonial__recommender-photo-wrapper">
					<img class="testimonial__photo" src="images/recommender1.png" alt="">
				</div>
				<div class="testimonial__text-wrapper">
					<p class="testimonial__text testimonial__text_default-theme">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?</p>
					<p class="testimonial__recommender testimonial__recommender_default-theme">- Lorem ipsum</p>
				</div>
			</div>
		</div><!-- testimonials slider -->
		<!-- recommenders icons container -->
		<div class="recommenders-icons-container">
			<!-- first recommender's icon container -->
			<div class="recommender-icon-container">
			</div>
			<!-- second recommender's icon container -->
			<div class="recommender-icon-container recommender-icon-container-active_default-theme">
			</div>
			<!-- third recommender's icon container -->
			<div class="recommender-icon-container">
			</div>
		</div><!-- recommenders icons container -->
	</section><!-- TESTIMONIALS -->
	<!-- FOOTER -->
	<footer class="footer" id="contact">
		<div class="footer__wrapper">
			<!-- contacts container -->
			<div class="contacts-container">
				<h4 class="contacts-container__heading contacts-container__heading_default-theme">Contacts Us</h4>
				<address class="contacts-container__address contacts-container__address_default-theme">	Unit 8 Honywood Business Park<br>Honywood Road<br>Basildon, Essex, SS14 3HW</address>
				<p class="contacts-container__contacts contacts-container__contacts_default-theme">
				<a href="tel:01268272030 " class="contacts-container__tel-to-call contacts-container__tel-to-call_default-theme">Tel: 01268 272 030</a><br>Fax: 01268 272 040<br>Email: info@saigb.co.uk</p>
			</div><!-- contacts container -->
			<!-- find us container -->
			<div class="find-us">
				<h4 class="find-us__heading find-us__heading_default-theme">Find Us</h4>
				<iframe class="find-us__google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.9736570656414!2d0.4894907157729111!3d51.58704617964823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8c4120dddb2a3%3A0xecc370153cab40c8!2sHonywood+Business+Park%2C+Honywood+Rd%2C+Basildon+SS14+3HW%2C+UK!5e0!3m2!1sen!2sua!4v1472854544185" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div><!-- find us container -->
			<!-- write us container -->
			<div class="write-us">
				<h4 class="write-us__heading write-us__heading_default-theme">Write Us</h4>
				<form class="write-us__form" action="index.php">
					<input type="text" class="write-us__input-name write-us__input-name_default-theme" placeholder="Name"><br>
					<input type="email" class="write-us__input-email write-us__input-email_default-theme" placeholder="E-mail"><br>
					<textarea name="message" cols="30" rows="10" class="write-us__textarea write-us__textarea_default-theme" placeholder="Message"></textarea><br>
					<input type="submit" class="write-us__input-submit write-us__input-submit_default-theme" value="SUBMIT">
				</form>
			</div><!-- write us container -->
			<!-- copyright container -->
			<div class="copyright-container">
				<p class="copyright-container__copyright copyright-container__copyright_default-theme">Copyright &copy; 2015 SAI GB Ltd. <a class="copyright-container__copyright-link_default-theme" href="#">Privacy Policy and Terms &amp; Conditions</a></p>
			</div><!-- copyright container -->
		</div>	
	</footer><!-- FOOTER -->
	<script src="scripts/main.min.js"></script>
</body>
</html>