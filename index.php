<!DOCTYPE html>
<html>
	<head>
		<title>My cookie book</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<!-- Stylesheets -->
		<link href="css/style.css" rel="stylesheet" >
	</head>
	<body>

		<header>
			<nav>  <!-- For navbar -->
			</nav>
		</header>
	
		<nav>
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#recipe">Winning Recipe</a></li>
				<li><a href="#map">Map</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>

		<section id="home" >
			<div class="tagline">
				<h1>Welcome on my <span class="lobster lg">cookie site</span></h1>
				<h2 class="headline">Let's share our love for cookies.</h2>
				<a href="#about" class="btn btn-light">Discover</a>
			</div>
		</section>

		<section id="about" class="page">
			<div class="section-desc">
				<h2 class="title">For the love of cookies</h2>
			</div>
			<div class="about-img">
				<img src="img/about/cookies.jpg" />
			</div>
			<div class="about-desc">
				<p>Topping toffee toffee jujubes I love candy I love marshmallow. Cake donut topping I love toffee I love dragée oat cake sweet roll. Pastry jelly-o candy canes I love gummi bears chocolate jelly beans pastry. Marzipan pastry pudding cake candy liquorice tiramisu chocolate cake ice cream. Apple pie I love carrot cake caramels icing biscuit dragée topping. Chupa chups carrot cake sweet marshmallow carrot cake danish cotton candy liquorice macaroon. Powder soufflé dragée. Candy canes cake wafer. Biscuit pie I love gingerbread pie cupcake gummi bears cookie. Chocolate cake cake pie sesame snaps ice cream cupcake. Croissant dragée I love I love fruitcake pudding. Chocolate cake cotton candy bear claw topping muffin. Marzipan cookie halvah icing lollipop donut tiramisu jelly-o.</p>

			</div>

		</section>

		<section id="gallery" class="page">
			<div class="section-desc">
				<h2 class="title">Gallery</h2>
				<p class="desc">Browse through our collection of recipes</p>
			</div>
			
			<!-- replace each gallery item with figure -->
			<figure>
				<img src="img/gallery/cinnamon-cookies.jpg" >
			</figure>
			<figure>
				<img src="img/gallery/ginger-cookies.jpg" >
			</figure>
			<figure>
				<img src="img/gallery/maple-cookies.jpg" >
			</figure>
			<figure>
				<img src="img/gallery/meringue-cookies.jpg" >
			</figure>
			<figure>
				<img src="img/gallery/peanut-butter-chocolate-acorns.jpg" >
			</figure>
			<figure>
				<img src="img/gallery/pecan-cookies.png">
			</figure>
			<figure>
				<img src="img/gallery/pumpkin-brookies.jpg">
			</figure>
			<figure>
				<img src="img/gallery/snickerdoodles.jpg">
			</figure>	
		</section>

		<section id="recipe" class="page">
			<div class="content">
				<div class="section-desc">
					<h2 class="title">Our Winning recipe</h2>
					<p>Cupcake ipsum dolor. Sit amet I love I love wafer. Pudding sesame snaps sweet roll I love sugar plum icing macaroon.</p>
				</div>
				<article>
					Cupcake ipsum dolor sit amet. Chocolate lollipop lollipop dessert chocolate cake topping. Dragée gummi bears cheesecake jelly-o powder. Donut chocolate cake lemon drops. Gingerbread gingerbread cotton candy pie pastry gummies. Liquorice chocolate cake pastry sweet gummi bears brownie cheesecake. Gingerbread fruitcake lemon drops marshmallow wafer pastry muffin croissant candy canes. Chocolate bar macaroon gummies jujubes gingerbread. Muffin donut candy canes bear claw sweet roll pastry dragée. Jelly beans fruitcake oat cake sugar plum chupa chups. Dessert ice cream danish pudding chupa chups powder danish jelly beans. Chocolate cake candy canes marshmallow gummi bears gummies muffin. Biscuit cotton candy oat cake fruitcake halvah dragée chocolate cake cotton candy powder.

					Lemon drops chocolate cake macaroon bear claw cake gummies dragée bear claw. Carrot cake gingerbread halvah gummi bears danish donut cookie. Cake tootsie roll halvah muffin gingerbread jujubes caramels sweet roll pastry. Sesame snaps cake liquorice brownie cookie apple pie. Croissant powder croissant gingerbread toffee. Carrot cake jelly beans croissant croissant toffee. Chocolate bar bear claw ice cream jujubes marshmallow gummies tiramisu. Soufflé lollipop apple pie sweet roll cake halvah. Cookie bear claw tootsie roll dessert. Biscuit marshmallow marshmallow topping danish brownie icing candy canes brownie. Brownie macaroon sugar plum. Donut cotton candy powder sweet roll jelly.

				</article>
			</div>
		</section>

		<section id="map" class="page">
			<div class="section-desc">
				<h2 class="title">Location</h2>
				<p>Here is where you can find thte best cookies in town.<br>Hover over a marker to get the bakery name.</p>
			</div>
			<div id="map-area">
			</div>
		</section>

		<section id="contact" class="page">
			<div class="section-desc">
				<h2 class="title">Contact Us</h2>
				<p class="desc">Hala at us!!! We will be glad to hear from you.</p>
			</div>
			<div class="contact-form">
				<form>
					<label>Name</label>
					<input type="text" name="name">
					<label>Email</label>
					<input type="text" name="email">
					<label>Message</label>
					<textarea name="message" rows="3"></textarea>
					<input type="submit" name="submit" value="Send"/>
				</form>
			</div>
		</section>

		<footer>
			<small>Designed with <i class="fa fa-heart"></i> by Marie</small>
			<ul class="social">
				<li><a href="https://twitter.com/marieinnov"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://za.linkedin.com/in/mariembenoun"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://www.instagram.com/emylovj/"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</footer>

		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/init.js"></script>
		<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMAZw2tnTRPOOZMPEC3gv2ZYW_M-LL-Bk&callback=initMap"></script>

   		<script>
   			$(document).ready(function(){
   				initMap();
   			});
   			
   		</script>

	</body>
</html>