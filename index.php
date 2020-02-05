<?php
	include './config/session.php';
	include './config/db.php';
	include './layout/header.php';
?>

<!-- Carousel section -->
<section id="carousel">
	<div id="demo" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
		</ul>
		
		<!-- The slideshow -->
		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="./assets/images/carousel/FIFA1.jpg" class="carousel-item-img d-block w-100" alt="Los Angeles">
			</div>
			
			<div class="carousel-item">
				<img src="./assets/images/carousel/HarryPotter.jpg" class="carousel-item-img d-block w-100" alt="Chicago">
			</div>
			<div class="carousel-item">
				<img src="./assets/images/carousel/DC1.jpg" class="carousel-item-img d-block w-100" alt="New York">
			</div>
			<div class="carousel-item">
				<img src="./assets/images/carousel/Marvel2.jpg" class="carousel-item-img d-block w-100" alt="New York">
			</div>
		</div>
		
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</section>

<section id="topics">
	<div class="container">
		<h1>Topics</h1>
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="card topics-card" data-aos="fade-up">
					<img src="./assets/images/topics/Harry.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">HARRY POTTER</h5>
						<p class="card-text">The Boy Who Lived Big Screen Adventures</p>
					</div>
					<div class="card-action text-center">
						<a href="HarryPotterInstruction.php" class="btn btn-primary">Click To Play</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="card topics-card" data-aos="fade-up">
					<img src="./assets/images/topics/Marvel.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">MARVEL UNIVERSE</h5>
						<p class="card-text">This topic is Marvel-ous.</p>
					</div>
					<div class="card-action text-center">
						<a href="MarvelInstruction.php" class="btn btn-primary">Click To Play</a>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="card topics-card text-center" data-aos="fade-up">
					<img src="./assets/images/topics/DC.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">DC COMICS</h5>
						<p class="card-text">Find Out Who is under that Mask</p>
					</div>
					<div class="card-action">
						<a href="DCInstruction.php" class="btn btn-primary">Click To Play</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	include './layout/footer.php';
?>