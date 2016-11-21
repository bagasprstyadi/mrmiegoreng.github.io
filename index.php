<?php 
session_start(); 

 ?>


<!DOCTYPE html>

<html>

	<head>
		<title> UTS PPW</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>        
        <script type="text/javascript" src="js/jquery.js"></script>
     	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     	<link type="text/css" rel="stylesheet" href="css/style.css">
	</head>
	<div id="home"></div>
	<body class="red darken-2">
		<div class="navbar-fixed">
			<nav>
	   			<div class="nav-wrapper blue lighten-1">
	   				<ul id="nav-mobile" href="#" class="left hide-on-med-and-down">
	   					<li><a href="#"><i class="material-icons">book</i></a></li>
	   				</ul>
	      			<ul id="nav-mobile" class="right hide-on-med-and-down">
	      				<li><a href="index.html"></a></li>
	      				<li class="logout"><a href="#home">Home</a></li>
	        			<li class="logout"><a href="#aboutus">About Us</a></li>
	        			<li class="logout"><a href="index.html">Login</a></li>
	      			</ul>
	      		</div>
	  		</nav>
	  	</div>
  		<div class="parallax-container">
		    <div class="parallax">
		   	 	<img src="images/parallax2.jpg" style="opacity: 0.8">
		   	 	<div class="centered-title white-text text-darken-3">W & B</div>
		   	 	<div class="centered-subline white-text text-darken-4">Easy, Fast, and Cheap</div>
		    </div>
		</div>
		<div id ="aboutus" class="section yellow darken-2">
		    <div class="row container">
		        <h2 class="white-text header">W & B</h2>
		        <p class="wbdesc grey-text text-lighten-4">W & B is an online helper for personal library purpose. W & B was made in 21 November 2016. We want a easy way where everybody can rent and buy books online without any hardtime.</p>
		    </div>
		</div>
		<div class="parallax-container">
		    <div class="parallax">
		   	 	<img src="images/parallax3.jpg" style="opacity: 0.8">
		   	 	<div class="centered-subline second white-text text-darken-4">“A reader lives a thousand lives before he dies. The man who never reads lives only one.” </div>
		   	 	<div class="centered-subline desc white-text text-darken-4">― George R.R. Martin, A Dance with Dragons</div>
		    </div>
		</div>
		
		<footer class="page-footer red darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">W & B Library</h5>
                <p class="grey-text text-lighten-4">Tugas PPW.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Supports</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sumber</a></li>  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Created by Bagas Prasetya Adi & Wilda Septiani
            </div>
          </div>
      </footer>
	</body>
</html>