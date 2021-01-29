<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	    font-family: Montserrat, sans-serif;
	}
	.navbar {
	    font-family: Montserrat, sans-serif;
	}
	.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
    background-color: #141414;
    
	}
	.navbar li a, .navbar .navbar-brand {
	    color: #d5d5d5 !important;
	}
	.navbar-nav li a:hover {
	    color: #fff !important;
	}
	.navbar-nav li.active a {
	    color: #fff !important;
	    background-color:#29292c !important;
	}
	.navbar-default .navbar-toggle {
	    border-color: transparent;
	}
	  .navbar-header{
	    color: #ffccbc;
	  }
	.navbar-nav li a:hover {
	    color: #1abc9c !important;
	}
	.navbar-brand{
		font-size: 200%;
	}
	.open .dropdown-toggle {
    color: #fff ;
    background-color: #37474f !important;
	}

	.dropdown-menu li a {
	    color: #000 !important;
	    letter-spacing: 3px;
	    font-family: 'Flamenco', cursive;
	}

	.dropdown-menu li a:hover {
	    background-color: #37474f !important;
	}

	.modal-header, h4, .close {
	    background-color: #37474f;
	    color: #fff !important;
	    text-align: center;
	    font-size: 30px;
	}

	.modal-header, .modal-body {
	    padding: 40px 50px;
	}
	.icon{
		padding-right: 20px;
	}

	.nav-tabs li a {
	    color: #777;
	}
	section{
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		background: #112d42;
	}
	section::before{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 50%;
		height: 100%;
		background: #03a9f4;
	}
	section .container{
		position: relative;
		min-width: 80.4%;
		min-height: 550px;
		display: flex;
		z-index: 1000;
	}
	section .container .contactinfo{
		position: absolute;
		top:40px;
		width:350px;
		height: calc(100% - 80px);
		background: #0f3959;
		z-index: 1;
		padding:40px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		box-shadow: 0 20px 20px rgba(0,0,0,0.2);
	}
	section .container .contactinfo h2{
		color: #fff;
		font-size: 24px;
		font-weight: 500;
	}
	section .container .contactinfo .info{
		position: relative;
		margin:20px 0;
	}
	section .container .contactinfo .info li{
		position: relative;
		list-style: none;
		display: flex;
		margin:20px 0;
		cursor: pointer;
		align-items: flex-start;
	}
	section .container .contactinfo .info li span:nth-child(1){
		width:30px;
		min-width: 30px;
	}
	section .container .contactinfo .info li span:nth-child(1) i{
		max-width: 100%;
		font-size: 20px;
		filter: invert(1);
		opacity: 0.5;
	}
	section .container .contactinfo .info li span:nth-child(2){
		color: #fff;
		margin-left: 10px;
		font-weight: 300;
		opacity: 0.5;
	}
	section .container .contactinfo .info li:hover span:nth-child(1) i,
	section .container .contactinfo .info li:hover span:nth-child(2){
		opacity: 1;
	}
	section .container .contactinfo .sci{
		position: relative;
		display: flex;
	}
	section .container .contactinfo .sci li{
		list-style: none;
		margin-right: 15px;
	}
	section .container .contactinfo .sci a{
		text-decoration: none;
	}
	section .container .contactinfo .sci li a i{

		color: #fff;
		opacity: 0.5;
		font-size: 28px;
	}
	section .container .contactinfo .sci li:hover a i{
		opacity: 1;
	}
	section .container .contactForm{
		position: absolute;
		padding:70px 50px;
		background: #fff;
		width:calc(100% - 150px);
		margin-left: 150px;
		padding-left: 250px;
		height: 100%;
		box-shadow: 0 50px 50px rgba(0,0,0,0.5);
	}
	section .container .contactForm h2{
		color: #0f3959;
		font-size: 24px;
		font-weight: 500;
	}
	section .container .contactForm .formBox{
		position: relative;
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		padding-top: 30px;
	}
	section .container .contactForm .formBox .inputBox{
		position: relative;
		margin: 0 0 35px 0;
	}
	section .container .contactForm .formBox .inputBox.w50{
		width:47%;
	}
	section .container .contactForm .formBox .inputBox.w100{
		width:100%;
	}
	section .container .contactForm .formBox .inputBox textarea,
	section .container .contactForm .formBox .inputBox input{
		width: 100% !important;
		resize: none;
		padding: 5px 0;
		font-size: 18px;
		font-weight: 300;
		color:#333;
		border:none;
		border-bottom: 1px solid #777;
		outline: none;
	}
	section .container .contactForm .formBox .inputBox textarea{
		min-height: 120px;
	}
	section .container .contactForm .formBox .inputBox span{
		position: absolute;
		left:0;
		padding: 5px 0;
		font-size: 18px;
		font-weight: 300;
		color: #333;
		transition: 0.5s;
		pointer-events: none;
	}
	section .container .contactForm .formBox .inputBox textarea:focus ~ span,
	section .container .contactForm .formBox .inputBox input:focus ~ span,
	section .container .contactForm .formBox .inputBox textarea:valid ~ span,
	section .container .contactForm .formBox .inputBox input:valid ~ span{
		transform: translateY(-20px);
		font-size: 12px;
		font-weight: 400px;
		letter-spacing: 1px;
		color: #ff568c;
	}
	section .container .contactForm .formBox .inputBox input[type="submit"]{
		position: relative;
		cursor: pointer;
		background: #0f3959;
		color: #fff;
		border:none;
		max-width:150px;
		padding: 12px;
	}
	section .container .contactForm .formBox .inputBox input[type="submit"]:hover{
		background:#ff568c;
	}
	footer {
	    background-color: #000000;
	    color: #e8eaf6;
	    padding: 32px;
	    border-top: 1px solid black;
	}	

	footer p {
	    color: #e8eaf6;	    
	}
	@media only screen and (max-width: 450px){
		section .container .contactinfo{
			
			display: none;
		}
		section .container .contactForm{
			margin: 0px;

			width:90%;
			padding-left: 30px;
		}
		section .container .contactForm .formBox .inputBox.w50{
			width:100%;
			min-height: 0px;
		}
		section .container .contactForm .formBox{
			padding-top: 10px;
		}
	}
	@media only screen and (max-width: 380px){
		section .container .contactinfo{
			
			display: none;
		}
		section .container .contactForm{
			margin: 0px;

			width:90%;
			padding-left: 30px;
		}
		section .container .contactForm .formBox .inputBox.w50{
			width:100%;
			min-height: 10px;
		}
		section .container .contactForm .formBox{
			padding-top: 0px;
		}
		section .container .contactForm .formBox .inputBox{
			position: relative;
			margin: 0 0 15px 0;
		}
	}

</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	 <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <span class="navbar-brand" id="hd">BLACKBOOK</span>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="loginned.php"><i class="fa fa-fw fa-home"></i> HOME</a></li>
		        <!-- <li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#">YEAR
		            <span class="caret"></span>
		          </a>
		          <ul class="dropdown-menu">
		            <li><a href="#">I YEAR</a></li>
		            <li><a href="#">II YEAR</a></li>
		            <li><a href="#">III YEAR</a></li>
		            <li><a href="#">IV YEAR</a></li>
		          </ul>
		        </li> -->
		        <li><a href="aboutus.php">ABOUT US</a></li>
		        <li><a href="contactus.php"><i class="fa fa-fw fa-envelope"></i> CONTACT US</a></li>
		       
		        
		      </ul>
		    </div>
		  </div>
	</nav> 
 


	<div class="modal fade" id="myModal" role="dialog">
	  <div class="modal-dialog">

	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#home">LOGIN</a></li>
			  <li><a data-toggle="tab" href="#menu1">SIGN UP</a></li>
			</ul>
	      </div>
	      <div class="modal-body">
	        <div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
			    <form role="form">
			          <div class="form-group">
			            <label for="email"><span class="glyphicon glyphicon-user"></span> E-Mail</label>
			            <input type="email" class="form-control" id="usrname" placeholder="Enter email">
			          </div>

			          <div class="form-group">
			            <label for="password">Password</label>
			            <input type="password" class="form-control" id="psw" placeholder="Enter Password">
			          </div>
			          
			          <button type="submit" class="btn btn-block">LOGIN
			            <span class="glyphicon glyphicon-ok"></span>
			          </button>
			        </form>
			  </div>

			  <div id="menu1" class="tab-pane fade">
			    <form role="form">
			    	<div class="form-group">
			            <label for="name">Name</label>
			            <input type="name" class="form-control" id="name" placeholder="Enter name">
			          </div>

			          <div class="form-group">
			            <label for="email"><span class="glyphicon glyphicon-user"></span> E-Mail</label>
			            <input type="email" class="form-control" id="usrname" placeholder="Enter email">
			          </div>

			          <div class="form-group">
			            <label for="password">Create Password</label>
			            <input type="password" class="form-control" id="psw" placeholder="Enter Password">
			          </div>
			          
			          <button type="submit" class="btn btn-block">CREATE ACCOUNT
			            <span class="glyphicon glyphicon-ok"></span>
			          </button>
			        </form>
			  </div>
			</div>
	        <!-- <center>
	        	<p style="margin-top: 20px">---------------or connect with---------------</p>
	        	<a href="#" class="icon"><i class='fab fa-facebook-square' style='font-size:36px'></i></a>
	        	<a href="#" class="icon"><i class='fab fa-google' style='font-size:36px;color: black;'></i></a>
	    	</center> -->
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
	          <span class="glyphicon glyphicon-remove"></span> Cancel
	        </button>
	       
	      </div>
	    </div>
	  </div>
	</div> 
	<section>
		<div class="container">
			<div class="contactinfo">
				<div>
					<h2>Contact Info</h2>
					<ul class="info">
						<li>
							<span><i class="fas fa-map-marked-alt"></i></span>		
							<span>2912 Meadowbrrok Road<br/>		
							    Los Angeles, CA<br>
		                        90017</span>
						</li>
						<li>
							<span><i class="far fa-envelope"></i></span>
							<span>loremipsum.com</span>
						</li>
						<li>
							<span><i class="fas fa-phone-alt"></i></span>
							<span>100100100</span>
						</li>
					</ul>
				</div>
				<ul class="sci">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
				
			</div>
			<div class="contactForm">
				<h2>Send a Message</h2>
				<div class="formBox">
					<div class="inputBox w50">
						<input type="text" name="" required>
						<span>First Name</span>
					</div>
					<div class="inputBox w50">
						<input type="text" name="" required>
						<span>Last Name</span>
					</div>
					<div class="inputBox w50">
						<input type="text" name="" required>
						<span>Email Address</span>
					</div>
					<div class="inputBox w50">
						<input type="text" name="" required>
						<span>Mobile Number</span>
					</div>
					<div class="inputBox w100">
						<textarea name="" required></textarea>
						<span>Write your message here...</span>
					</div>
					<div class="inputBox w100">
						<input type="submit" value="Send">
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="text-center">
	  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
	    <span class="glyphicon glyphicon-chevron-up"></span>
	  </a><br><br>
	  <p style="font-family: Montserrat, sans-serif;font-size: 200%;letter-spacing: 4px;color: #e8eaf6; ">BLACKBOOK</p>
	</footer>

	<script>
	$(document).ready(function(){
	    // Initialize Tooltip
	    $('[data-toggle="tooltip"]').tooltip();
	})
	</script>
	<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links in navbar + footer link
	  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

	  // Make sure this.hash has a value before overriding default behavior
	  if (this.hash !== "") {

	    // Prevent default anchor click behavior
	    event.preventDefault();

	    // Store hash
	    var hash = this.hash;

	    // Using jQuery's animate() method to add smooth page scroll
	    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
	    $('html, body').animate({
	      scrollTop: $(hash).offset().top
	    }, 900, function(){

	      // Add hash (#) to URL when done scrolling (default click behavior)
	      window.location.hash = hash;
	      });
	    } // End if
	  });
	})
	</script> 
</body>
</html>
