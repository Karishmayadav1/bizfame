<!DOCTYPE html>

<head>
	<?php
	include("header.php");
	?>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<style>
		@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

		#team {
			background: #eee !important;
		}

		.btn-primary:hover,
		.btn-primary:focus {
			background-color: #108d6f;
			border-color: #108d6f;
			box-shadow: none;
			outline: none;
		}

		.btn-primary {
			color: #fff;
			background-color: #007b5e;
			border-color: #007b5e;
		}

		section {
			padding: 60px 0;
		}

		section .section-title {
			text-align: center;
			color: #007b5e;
			margin-bottom: 50px;
			text-transform: uppercase;
		}

		#team .card {
			border: none;
			background: #ffffff;
		}

		.image-flip:hover .backside,
		.image-flip.hover .backside {
			-webkit-transform: rotateY(0deg);
			-moz-transform: rotateY(0deg);
			-o-transform: rotateY(0deg);
			-ms-transform: rotateY(0deg);
			transform: rotateY(0deg);
			border-radius: .25rem;
		}

		.image-flip:hover .frontside,
		.image-flip.hover .frontside {
			-webkit-transform: rotateY(180deg);
			-moz-transform: rotateY(180deg);
			-o-transform: rotateY(180deg);
			transform: rotateY(180deg);
		}

		.mainflip {
			-webkit-transition: 1s;
			-webkit-transform-style: preserve-3d;
			-ms-transition: 1s;
			-moz-transition: 1s;
			-moz-transform: perspective(1000px);
			-moz-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;
			transition: 1s;
			transform-style: preserve-3d;
			position: relative;
		}

		.frontside {
			position: relative;
			-webkit-transform: rotateY(0deg);
			-ms-transform: rotateY(0deg);

			.image-flip.hover .frontside {
				-webkit-transform: rotateY(180deg);
				-moz-transform: rotateY(180deg);
				-o-transform: rotateY(180deg);
				transform: rotateY(180deg);
			}

			.backside {
				position: absolute;
				top: 0;
				left: 0;
				background: white;
				-webkit-transform: rotateY(-180deg);
				-moz-transform: rotateY(-180deg);
				-o-transform: rotateY(-180deg);
				-ms-transform: rotateY(-180deg);
				transform: rotateY(-180deg);
				-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
				-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
				box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
			}

			.mainflip {
				-webkit-transition: 1s;
				-webkit-transform-style: preserve-3d;
				-ms-transition: 1s;
				-moz-transition: 1s;
				-moz-transform: perspective(1000px);
				-moz-transform-style: preserve-3d;
				-ms-transform-style: preserve-3d;
				transition: 1s;
				transform-style: preserve-3d;
				position: relative;
			}

			.frontside {
				position: relative;
				-webkit-transform: rotateY(0deg);
				-ms-transform: rotateY(0deg);
				backface-visibility: hidden;
				-webkit-transition: 1s;
				-webkit-transform-style: preserve-3d;
				-moz-transition: 1s;
				-moz-transform-style: preserve-3d;
				-o-transition: 1s;
				-o-transform-style: preserve-3d;
				-ms-transition: 1s;
				-ms-transform-style: preserve-3d;
				transition: 1s;
				transform-style: preserve-3d;
			}

			.frontside .card,
			.backside .card {
				min-height: 312px;
			}

			.backside .card a {
				font-size: 18px;
				font-size: 18px;
				color: #007b5e !important;
			}

			.frontside .card .card-title,
			.backside .card .card-title {
				color: #007b5e !important;
			}

			.frontside .card .card-body img {
				width: 120px;
				height: 120px;
				border-radius: 50%;
			}
	</style>
</head>





<body class="hidden-bar-wrapper">
	<div class="page-wrapper">
		<!-- <div class="preloader"></div> -->
		<?php
		include("head.php");
		?>
		<!-- End Main Header -->
		<section class="banner-section-three style-two pb-0">
			<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-21.png)"></div>
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-8 col-sm-12">
						<div class="inner-column pb-3 pb-md-5">
							<div class="pattern-layer-one" style="background-image: url(assets/images/main-slider/pattern-1.png)"></div>
							<div class="icon-layer" style="background-image: url(assets/images/icons/icon-2.png)"></div>
							<div class="icon-layer-two" style="background-image: url(assets/images/icons/icon-5.png)"></div>
							<h2 class="title1" title="Discover our in-demand courses"><strong> <br> Our Game Development Services</strong></h2>
						</div>
					</div>
					<!-- Images Column -->
					<div class="image-column col-lg-4 col-md-4 col-sm-12">
						<div class="inner-column mt-3 pb-3 text-center text-md-left">
							<div class="icon-layer-three" style="background-image: url(assets/images/icons/icon-3.png)"></div>
							<div class="icon-layer-four" style="background-image: url(assets/images/icons/icon-2.png)"></div>
							<div class="icon-layer-five" style="background-image: url(assets/images/icons/icon-4.png)"></div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Banner Section Three -->
		<section class="courses-page-section style-two">
			<!-- <div class="auto-container">
			<div class="sec-title centered">
				<h2 title="All Courses in Job Oriented Training">All Services</h2>
			</div>
		</div> -->
			<section class="instructor-section">
				<div class="background-layer" style="background-image:url(assets/images/background/1.png)"></div>
				<div class="background-layer-one" style="background-image:url(assets/images/background/pattern-1.png)"></div>
				<div class="background-layer-two" style="background-image:url(assets/images/background/pattern-2.png)"></div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="container">
							<div class="row">
								<div class="col-sm">
									<div class="instructor-column">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
											<h4 title="Project training">Mobile Game Development</h4>
											<p title="project training">
												I have several engagement models and you can choose one of the best-fit engagement models, based on your project requirements, and hire dedicated game developers for resource base, time and
												material base or for a fixed cost. The team of Bizfam have always with you in
												every way possible.
											</p>
											<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
											<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
										</div>
									</div>
								</div>
								<div class="col-sm">
									<div class="instructor-column">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
											<h4 title="Project training">Casual Game Development</h4>
											<p title="project training">
												you can hire game developers from Bizfam that
												consider casual gamers as important as hard-core ones. Our developers develop
												a casual game that focuses on gamers' entertainment more than anything else.
											</p>
											<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
											<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
										</div>
									</div>
								</div>
								<div class="col-sm">
									<div class="instructor-column ">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
											<h4 title="Project training">Web Game Development</h4>
											<p title="project training">
												we are one of the top web game development
												companies that can offer an outstanding user experience. we use the latest game
												development technologies for web game Development.

											</p>
											<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
											<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</section>
			<section class="instructor-section">
				<div class="background-layer" style="background-image:url(assets/images/background/1.png)"></div>
				<div class="background-layer-one" style="background-image:url(assets/images/background/pattern-1.png)"></div>
				<div class="background-layer-two" style="background-image:url(assets/images/background/pattern-2.png)"></div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="container">
							<div class="row">
								<div class="col-sm">
									<div class="instructor-column">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
											<h4 title="Project training">Custom Game Development</h4>
											<p title="project training">
												if you have an ‘out of the box’ game development
												idea, you will need assistance from game developers that are well qualified and
												experienced. Bizfam’s developers are some of them.
											</p>
											<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
											<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
										</div>
									</div>
								</div>
								<div class="col-sm">
									<div class="instructor-column">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
											<h4 title="Project training">. Character or Avatar Creation</h4>
											<p title="project training">
												You can hire dedicated game Artists from
												Bizfam that hold proficiency in creating 3D interactive avatars and characters
												that can create magic for your mobile, NFT and metaverse games based on your
												requirements.

											</p>
											<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
											<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
										</div>
									</div>
								</div>
								<div class="col-sm">
									<div class="instructor-column ">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
											<h4 title="Project training"> Concept Art</h4>
											<p title="project training">
												this is very important segment for game development. Hire
												game designers and Artists from Bizfam that can be always with you, whether
												you need character design, prop design, or Landscape design.
											</p>
											<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
											<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
										</div>
									</div>

								</div>
							</div>
						</div>


					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="instructor-column">
							<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
								<h4 title="Project training"> Cards and Casino Games Development</h4>
								<p title="project training">
									The casino game development process
									takes place in several stages and each stage holds its importance. To ensure the
									created game is entertaining, engaging as well as profitable, the casino game
									development process involves various technical specialists.


								</p>
								<!-- <a class="click-here" href="contact.php" title="Click Here For Apply">Click here for apply</a> -->
								<!-- <div class="image titlt" data-tilt="" data-tilt-max="4">
							<img src="assets/images/resource/instructor.png" alt="Resource Job Oriented Training" title="Resource Job Oriented Training">
						</div> -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="banner-section-three style-two pb-0">
				<div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-21.png)"></div>
				<div class="auto-container">
					<div class="row clearfix">
						<!-- Content Column -->
						<div class="content-column col-lg-8 col-md-8 col-sm-12">
							<div class="inner-column pb-3 pb-md-5">
								<div class="pattern-layer-one" style="background-image: url(assets/images/main-slider/pattern-1.png)"></div>
								<div class="icon-layer" style="background-image: url(assets/images/icons/icon-2.png)"></div>
								<div class="icon-layer-two" style="background-image: url(assets/images/icons/icon-5.png)"></div>
								<h2 class="title1" title="Discover our in-demand courses"><strong> The Game<br> Development Technology We Cover</strong></h2>
							</div>
						</div>
						<!-- Images Column -->
						<div class="image-column col-lg-4 col-md-4 col-sm-12">
							<div class="inner-column mt-3 pb-3 text-center text-md-left">
								<div class="icon-layer-three" style="background-image: url(assets/images/icons/icon-3.png)"></div>
								<div class="icon-layer-four" style="background-image: url(assets/images/icons/icon-2.png)"></div>
								<div class="icon-layer-five" style="background-image: url(assets/images/icons/icon-4.png)"></div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- technologiesdsnvdbfngdngfm.g -->
			<section id="team" class="pb-5">
				<div class="container">
					<!-- <h5 class="section-title h1">OUR TEAM</h5> -->
					<div class="row">
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip">
								<div class="mainflip flip-0">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p> --
                                    <h4 class="card-title">2D/3D Game Development</h4>
                                    <p class="card-text" style="color:red;">We want to offer a fantastic 2D gaming experience and an immersive 3D gaming 
experience through our game development. The game developers at Bizfam hold years 
of experience and expertise for both 2D and 3D games development.
</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> 
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">2D/3D Game Development</h4>
												<p class="card-text" style="color:black;">We want to offer a fantastic 2D gaming experience and an immersive 3D gaming
													experience through our game development. The game developers at Bizfam hold years
													of experience and expertise for both 2D and 3D games development.
													.</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p> --
                                    <h4 class="card-title">HTML Game Development</h4>
                                    <p class="card-text" style="color:red;">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">HTML Game Development</h4>
												<p class="card-text" style="color:black;">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p> --
                                    <h4 class="card-title">Unity 3D Game Development</h4>
                                    <p class="card-text" style="color:red;">We are master for Unity 3D game development. Our experienced game developers are
from a top most game development companies and they can create mind-blowing threedimensional games through unity 3D game development.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">Unity 3D Game Development</h4>
												<p class="card-text" style="color:black;">We are master for Unity 3D game development. Our experienced game developers are
													from a top most game development companies and they can create mind-blowing threedimensional games through unity 3D game development.</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p> --
                                    <h4 class="card-title">Unreal Engine Game Development</h4>
                                    <p class="card-text" style="color:red;">You can find a 3D cinematic gaming experience through unreal engine game 
development. Whether you have a game development idea that involves storytelling, 
facial animation, photogrammetry, character design, VR features, or anything other than 
this, our Bizfam game developers know very well, how to execute them with Unreal 
engine game development.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">Unreal Engine Game Development</h4>
												<p class="card-text" style="color:black;">You can find a 3D cinematic gaming experience through unreal engine game
													development. Whether you have a game development idea that involves storytelling,
													facial animation, photogrammetry, character design, VR features, or anything other than
													this, our Bizfam game developers know very well, how to execute them with Unreal .</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p> --
                                    <h4 class="card-title">AR Game Development</h4>
                                    <p class="card-text" style="color:red;">Today AR game development is the perfect choice for a gaming application. As we know 
that AR combines the digital and the real world to give the inception to the new world. 
So for the industry standards our game developers make sure to make the best ever 
gaming solutions that fit your requirements perfectly well.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">AR Game Development</h4>
												<p class="card-text" style="color:black;">Today AR game development is the perfect choice for a gaming application. As we know
													that AR combines the digital and the real world to give the inception to the new world.
													So for the industry standards our game developers make sure to make the best ever
													gaming solutions that fit your requirements perfectly well.</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p> --
                                    <h4 class="card-title">VR Game Development</h4>
                                    <p class="card-text" style="color:red;">You can hire our game developers that are proficient enough to convert the most crucial 
concept into a successful VR-based gaming solution, using their technical development 
expertise. Step into the virtual world with the help of Bizfam developers to offer an 
immersive user experience through the VR game development service.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">VR Game Development</h4>
												<p class="card-text" style="color:black;">You can hire our game developers that are proficient enough to convert the most crucial
													concept into a successful VR-based gaming solution, using their technical development
													expertise. Step into the virtual world with the help of Bizfam developers to offer an
													immersive user experience through the VR game development service.</p>
												<!-- <ul class="list-inline">
                                        <!-- <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li> --
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->



						<!-- bbnlbgn   b fgmbggkvkngk -->

						<!-- rfbvf dbev dkvm fkvbk -->






					</div>

					<div class="row">
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip">
								<div class="mainflip flip-0">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p> --
                                    <h4 class="card-title">2D/3D Game Development</h4>
                                    <p class="card-text" style="color:red;">We want to offer a fantastic 2D gaming experience and an immersive 3D gaming 
experience through our game development. The game developers at Bizfam hold years 
of experience and expertise for both 2D and 3D games development.
</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> 
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<!-- <h4 class="card-title">2D/3D Game Development</h4>
                                    <p class="card-text" style="color:black;">We want to offer a fantastic 2D gaming experience and an immersive 3D gaming 
										experience through our game development. The game developers at Bizfam hold years 
										of experience and expertise for both 2D and 3D games development.
										.</p> -->
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p> --
                                    <h4 class="card-title">HTML Game Development</h4>
                                    <p class="card-text" style="color:red;">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<!-- <h4 class="card-title">HTML Game Development</h4>
                                    <p class="card-text" style="color:black;">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p> -->
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p> --
                                    <h4 class="card-title">Unity 3D Game Development</h4>
                                    <p class="card-text" style="color:red;">We are master for Unity 3D game development. Our experienced game developers are
from a top most game development companies and they can create mind-blowing threedimensional games through unity 3D game development.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<!-- <h4 class="card-title">Unity 3D Game Development</h4>
                                    <p class="card-text" style="color:black;">We are master for Unity 3D game development. Our experienced game developers are
																											from a top most game development companies and they can create mind-blowing threedimensional games through unity 3D game development.</p> -->
												<!-- <ul class="list-inline">
																																					<li class="list-inline-item">
																																						<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
																																							<i class="fa fa-facebook"></i>
																																						</a>
																																					</li>
																																					<li class="list-inline-item">
																																						<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
																																							<i class="fa fa-twitter"></i>
																																						</a>
																																					</li>
																																					<li class="list-inline-item">
																																						<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
																																							<i class="fa fa-skype"></i>
																																						</a>
																																					</li>
																																					<li class="list-inline-item">
																																						<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
																																							<i class="fa fa-google"></i>
																																						</a>
																																					</li>
																																				</ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
																																			<div class="card-body text-center">
																																				<!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p> --
																																				<h4 class="card-title">Unreal Engine Game Development</h4>
																																				<p class="card-text" style="color:red;">You can find a 3D cinematic gaming experience through unreal engine game 
																											development. Whether you have a game development idea that involves storytelling, 
																											facial animation, photogrammetry, character design, VR features, or anything other than 
																											this, our Bizfam game developers know very well, how to execute them with Unreal 
																											engine game development.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">NFT Game Development</h4>
												<p class="card-text" style="color:black;">You can hire NFT game developers for game development service and take the gaming
													experience to next level, offering game developers a chance to explore the unexplored
													advantages of NFT uses for their gaming equipment, from gaming avatars to high-end
													virtual gadgets.
												</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p> --
                                    <h4 class="card-title">AR Game Development</h4>
                                    <p class="card-text" style="color:red;">Today AR game development is the perfect choice for a gaming application. As we know 
that AR combines the digital and the real world to give the inception to the new world. 
So for the industry standards our game developers make sure to make the best ever 
gaming solutions that fit your requirements perfectly well.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">Metaverse Game Development</h4>
												<p class="card-text" style="color:black;">Hire game developers that not just offer the 3D metaverse game development service
													but also offer the immersive gaming experience generating some of the most promising
													gaming environments</p>
												<!-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->
						<!-- Team member -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<!-- <div class="card">
                                <div class="card-body text-center">
                                    <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p> --
                                    <h4 class="card-title">VR Game Development</h4>
                                    <p class="card-text" style="color:red;">You can hire our game developers that are proficient enough to convert the most crucial 
concept into a successful VR-based gaming solution, using their technical development 
expertise. Step into the virtual world with the help of Bizfam developers to offer an 
immersive user experience through the VR game development service.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div> -->
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title">Blockchain Game Development</h4>
												<p class="card-text" style="color:black;">Blockchain gaming is the future of the game industry. And it is only possible with a
													profitable alliance with the help of a reliable blockchain game development company.
													Bizfam is the leading blockchain game development company that provides all-inclusive
													blockchain gaming solutions at one stop.
												</p>
												<!-- <ul class="list-inline">
                                        <!-- <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li> --
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ./Team member -->


					</div>
			</section>
		</section>
		<!-- End Courses Page Section -->
		<!-- Main Footer -->
		<?php
		include("footer.php");
		?>

	</div>
	</div>
	</div>
	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<?php
	include("js.php");
	?>

	<!-- <script>
      function open_modal(name) {
        $('#modalform').modal('show');
      }
    </script>
	<script>
	 function show_static(obj){
			$('#txt_course').val($(obj).data('static'));
	} 
    </script> -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>