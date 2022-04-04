<!DOCTYPE html>
<html lang="en">
   <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

       <title> Bicyclean + </title>
       <style media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat:wght@800&display=swap');

         body {
           padding: 0;
	         margin: 0;
        }
        .container {
	         position: relative;
	         margin-top: 100px;
        }
        nav {
	         position: fixed;
	         z-index: 10;
	         left: 0;
	         right: 0;
	         top: 0;
	         font-family: 'Montserrat', sans-serif;
	         padding: 0 5%;
	         height: 100px;
	         background-color: #FFEBCD;
        }
        nav .logo {
	         float: left;
	         width: 40%;
	         height: 100%;
	         display: flex;
	         align-items: center;
	         font-size: 30px;
	         color: #372c2e;
           letter-spacing: 3px;
           text-transform: capitalize;
        }
        nav .logo img{
          margin-top: 3px;
          width: 70px;
          height: 60px;
          padding-right:0px;
        }

        nav li button{
          background-color: #3A3845;
          border: none;
          border-radius: 5px;
          color: white;
          padding: 10px 15px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          font-family: 'Lato', sans-serif;
        }
        nav li button:hover{
          background-color: #b0aeb3;
        }
        nav .links {
	         float: right;
	         padding: 0;
	         margin: 0;
	         width: 60%;
	         height: 100%;
	         display: flex;
	         justify-content: flex-end;
	         align-items: center;
           font-family: 'Lato', sans-serif;

        }
        nav .links li {
	         list-style: none;
        }
        nav .links a {
	         display: block;
	         padding: 3em;
	         font-size: 16px;
	         color: #372c2e;
	         text-decoration: none;
        }

        #nav-toggle {
	         position: absolute;
	         top: -100px;
        }
        nav .icon-burger {
	         display: none;
	         position: absolute;
	         right: 5%;
	         top: 50%;
	         transform: translateY(-50%);
        }
        nav .icon-burger .line {
	         width: 30px;
	         height: 5px;
	         background-color: #372c2e;
	         margin: 5px;
	         border-radius: 3px;
	         transition: all .3s ease-in-out;
        }
        @media screen and (max-width: 768px) {
          nav .logo {
		          float: none;
		          width: auto;
		          justify-content: center;
	        }
	        nav .links {
		          float: none;
		          position: fixed;
		          z-index: 9;
		          left: 0;
		          right: 0;
		          top: 100px;
		          bottom: 100%;
		          width: auto;
		          height: auto;
		          flex-direction: column;
		          justify-content: space-evenly;
		          background-color: #FFEBCD;
		          overflow: hidden;
		          box-sizing: border-box;
		          transition: all .5s ease-in-out;
	        }
	         nav .links a {
		           font-size: 18px;
	        }
	        nav :checked ~ .links {
		          bottom: 0;
	        }
	        nav .icon-burger {
		          display: block;
	        }
	        nav :checked ~ .icon-burger .line:nth-child(1) {
		          transform: translateY(10px) rotate(225deg);
	        }
	        nav :checked ~ .icon-burger .line:nth-child(3) {
		          transform: translateY(-10px) rotate(-225deg);
	        }
	        nav :checked ~ .icon-burger .line:nth-child(2) {
		          opacity: 0;
	         }
        }
        /*body */
        body {
          font-family: 'Montserrat', sans-serif;
        }
        .image{
          width: 100%;
          height: auto;
          position: relative;
        }
        .float_but{
	         position: absolute;
	         top: 560px;
	         left: 150px;
	         width:200px;
	         height:30px;
           background-color:#27282B;
	         color:#FFF;
	         border-radius:10px;
           border-bottom: 10px;
           text-align: center;
           padding: 10px 5px;;
           text-decoration: none;
           font-family: 'Montserrat', sans-serif;
           font-size:20px;
           margin-top: 10px;
         }
         .float_but:hover{
           background-color: #b0aeb3;
         }

        /* footer */

        footer .container{
        	max-width: 1170px;
        	margin:auto;
        }
        footer .row{
        	display: flex;
        	flex-wrap: wrap;
        }
        footer ul{
        	list-style: none;
        }
        .footer{
        	background-color: #FFEBCD;
          padding: 40px 0 5px 0;
          font-family: 'Titan One', cursive;
        }
        .footer-col{
           width: 30%;
           padding: 0 15px;
        }
        .footer-col h4{
        	font-size: 20px;
        	color: #372c2e;
        	text-transform: capitalize;
        	margin-bottom: 35px;
        	position: relative;
          letter-spacing: 2px;
          font-weight: 400;
        }
        .footer-col h4::before{
        	content: '';
        	position: absolute;
        	left:0;
        	bottom: -10px;
        	background-color: #1e2227;
        	height: 2px;
        	box-sizing: border-box;
        	width: 50px;
        }
        .footer-col ul li:not(:last-child){
        	margin-bottom: 10px;
        }
        .footer-col ul li a{
        	font-size: 16px;
        	color: #372c2e;
        	text-decoration: none;
        	display: block;
        	transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
        	color: #372c2e;
        	padding-left: 8px;
        }
        .footer-col .social-links a{
        	display: inline-block;
        	height: 50px;
        	width: 50px;
          font-size: 1.3em;
        	background-color:	#FFF8DC;
        	margin:0 10px 10px 0;
        	text-align: center;
        	line-height: 50px;
        	border-radius: 50%;
        	color: #372c2e;
        	transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
        	color: white;
        	background-color: #b0aeb3;
        }
        .footer-bot{
          font-family: 'Lato', sans-serif;
          font-style: italic;
          color:  #372c2e;
          position: relative;
          text-align: center;
          opacity: 0.9;
          padding-top: 50px;
          width: 100%;
        }

        /*responsive*/
        @media(max-width: 700px){
          .footer-col{
            width: 70%;
            margin-bottom: 20px;
        }
        }
        @media(max-width: 500px){
          .footer-col{
            width: 75%;
        }
        }
		.body-content{
			height: 100vh;
			background: url("view/styles/Bicyclean.png");
		}
       </style>
   </head>
   <nav>
	    <input id="nav-toggle" type="checkbox">
	     <div class="logo"><img src="view/styles/bc+.png" alt="wheel"> BICYCLEAN+ </div>
	      <ul class="links">
		        <li><a href="#home">Home</a></li>
		    <li><a href="view/about_us.php">About Us</a></li>
				<?php
				ob_start();
				include('../ReservationSystem/view/admin_signup.php');
				ob_end_clean();
				?>
		        <li> <a href="view/admin_login.php"><button type="button" name="login">Admin Login</button></a></li>
	        </ul>
	         <label for="nav-toggle" class="icon-burger">
		           <div class="line"></div>
		           <div class="line"></div>
		           <div class="line"></div>
	          </label>
    </nav>

    <body>
		<?php
		ob_start();
		include('reserve.php');
		ob_end_clean();
		?>

	  <div class="body-content">
	  	<a href="view/reservation_page.php" class="float_but"> Reserve Now! </a>
	  </div>

    </body>

    <footer class="footer">
    	 <div class="container">
    	 	<div class="row">
    	 		<div class="footer-col">
    	 			<h4>Our Company</h4>
    	 			<ul>
    	 				<li><a href="#">Home</a></li>
    	 				<li><a href="view/about_us.php">About Us</a></li>
    	 			</ul>
    	 		</div>
    	 		<div class="footer-col">
    	 			<h4>follow us</h4>
    	 			<div class="social-links">
    	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
    	 				<a href="#"><i class="fab fa-twitter"></i></a>
    	 				<a href="#"><i class="fab fa-instagram"></i></a>
    	 				<a href="#"><i class="fab fa-youtube"></i></a>
    	 			</div>
    	 		</div>
          <div class="footer-bot">
            <p>@2022 For Educational Purpose Only. Created by ANJB+, Powered by Anjo Babies LEZGAW! </p>
          </div>
    	 	</div>
    	 </div>
    </footer>

</html>
