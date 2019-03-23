<?php  
	$title = "Home";
	include '_top.php';
?>
		<div class = "slider">
		
			<picture>
				<source srcset="images/slider1mobile.jpg" media="(max-width:600px)">
				<source srcset="images/slider1.jpg">
				<img srcset="images/slider1.jpg" alt="slider image">
			</picture>

			<picture>
				<source srcset="images/slider2mobile.jpg" media="(max-width:600px)">
				<source srcset="images/slider2.jpg">
				<img srcset="images/slider2.jpg" alt="slider image">
			</picture>

			<picture>
				<source srcset="images/slider3mobile.jpg" media="(max-width:600px)">
				<source srcset="images/slider3.jpg">
				<img srcset="images/slider3.jpg" alt="slider image">
			</picture>

			<picture>
				<source srcset="images/slider3mobile.jpg" media="(max-width:600px)">
				<source srcset="images/slider3.jpg">
				<img srcset="images/slider3.jpg" alt="slider image">
			</picture>

		</div>
		
		
		
		

		
		<div class="divider">
		<h1>MORE ABOUT US</h1>
		</div>
		
		<div class="aboutUs">
			
		<figure class="feature1">
		 <div class="featureDesc">
			<h2>Pets Allowed</h2>
		</div>
		<div class="date">
			<time datetime="2018-05-10 20:00">May 10, 2018</time>
		</div>
		</figure>

		<figure class="feature2">
			<div class="featureDesc">
			 <h2>Free Food</h2>
		 </div>
		 <div class="date">
			 <time datetime="2018-05-10 20:00">May 10, 2018</time>
		 </div>
		 </figure>

		 <figure class="feature3">
			<div class="featureDesc">
			 <h2>Lots of Gambling</h2>
		 </div>
		 <div class="date">
			 <time datetime="2018-05-10 20:00">May 10, 2018</time>
		 </div>
		 </figure>

		 <figure class="feature4">
			<div class="featureDesc">
			 <h2>Personal Cabins</h2>
		 </div>
		 <div class="date">
			 <time datetime="2018-05-10 20:00">May 10, 2018</time>
		 </div>
		 </figure>
		
		</div><!-- end aboutUs -->
		
		<br>
		<hr />
		
		
		
	<?php include 
	'_bot.php';
?>