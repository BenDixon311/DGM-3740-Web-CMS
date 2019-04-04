<!doctype html>
<html lang="en">
<head>
	

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<meta charset="utf-8">
<title>Cabot Cruises: <?php echo $title; ?></title>
	<link href = "css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>

	


</head>

<body>
	
	
	<!-- PAGE HEADER -->
	
	<header>
		
	
		
		<div class="header-left">
			<br>
			
	<img src="images/logo.png" srcset = "images/logo1x.png 1x, images/logo2x.png 2x, images/logo3x.png 3x" alt="Cabot Cruises Logo">
		
		
		</div>
		
		
		<div class="header-right"> <!-- STYLE THIS! -->
			<a href="tel:1-801-222-3333">1-801-222-3333</a>
		
		</div>
	</header>
	
	<!-- PAGE NAV -->
	 
	<div class="navwrap">
    <ul class="topnav" id="myTopnav">
       <li><a class="menuItem" onclick="toggleActive(this, event)" href="./index.php">HOME</a></li>
       <li><a class="menuItem" onclick="toggleActive(this, event)" href="./cruises.php">CRUISES</a></li>
       <li><a class="menuItem" onclick="toggleActive(this, event)" href="./book.php">BOOK</a></li>
       <div class="dropdown">
          <button class="dropbtn">AGENTS
             &nbsp;	&darr;
          </button>
          <div class="dropdown-content">
             <li><a class="menuItem" onclick="toggleActive(this, event)" href="./agent1.php">Julia Stevens</a></li>
             <li><a class="menuItem" onclick="toggleActive(this, event)" href="./agent2.php">Steve Jobs</a></li>
          </div>
       </div>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
       </a>
      <div class="search">
          <input type="search" name="search" id="search" placeholder="Search...">
          <button class="mySearch"><i class="fas fa-search fa-2x"></i></button>
       </div>
    </div>
 </div>
		
	<!-- MAIN CONTENT -->
	<main>