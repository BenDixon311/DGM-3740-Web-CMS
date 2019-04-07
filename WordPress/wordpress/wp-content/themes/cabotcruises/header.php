<!doctype html>
<html lang="en">
<head>
	

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<meta charset="utf-8">
<title>Cabot Cruises: <?php wp_title(); ?></title>
	<script
		  src="https://code.jquery.com/jquery-3.3.1.min.js"
		  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		  crossorigin="anonymous"></script>
	<link href = "<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
	

	


</head>

<body>
	
	
	<!-- PAGE HEADER -->
	
	<header>
		
	
		
		<div class="header-left">
			<br>
			
	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" srcset = "<?php echo get_template_directory_uri(); ?>/images/logo1x.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2x.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3x.png 3x" alt="Cabot Cruises Logo">
		
		
		</div>
		
		
		<div class="header-right"> <!-- STYLE THIS! -->
			<a href="tel:1-801-222-3333">1-801-222-3333</a>
		
		</div>
	</header>
	
	<!-- PAGE NAV -->
	 
	<div class="navwrap">
    <ul class="topnav" id="myTopnav">
      
				<?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>
		
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
       </a>
      <div class="search">
		<form method = "get" action="">
          <input type="search" name="s" id="search" placeholder="Search...">
          <button class="mySearch" type="submit"><i class="fas fa-search fa-2x"></i></button>
		</form>
       </div>
    </div>
 </div>
		
	<!-- MAIN CONTENT -->
	<main>