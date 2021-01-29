<?php
session_start();
if(!isset($_SESSION['key']))
{
    ?>
    <script>
    
       location.replace('index.php');
    </script>
    <?php 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'>
</script>
	<style>
	body {
	    font: 400 15px/1.8 Lato, sans-serif;
	   	background-color: #000000;
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
    background-color: #000000;
    
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
	#yearnav{
		padding-left: 43.5%;
		padding-top: 15px;
	}
	.intro{
	  width:100%;
	}
	.pic{
	  width:100%;
	  object-fit: contain;
	}
	.thumbnail {
    padding: 38px 0 15px 0;
    border: none;
    border-radius: 0;
    background-color: #000000;
	height:500px;
	width:400px;
	}

	.thumbnail img {
	    width: 100%;
	    height: 100%;
	    margin-bottom: 10px;
	}
	.thumbnail p strong{
		color: white;
	}
	
	footer {
	    background-color: #000000;
	    color: #e8eaf6;
	    padding: 32px;
	    border-top: 1px solid white;
	}	

	footer p {
	    color: #e8eaf6;
	    
	}
	#logout{
		color:white;
	}
	
	@media only screen and (max-width: 800px){
		#yearnav{
			padding-left: 39%;
		}			
		.navbar{
			font-size: 62%;
		}
	}
	@media only screen and (max-width: 450px){
		#yearnav{
			padding-left: 30%;
		}			
		.yhd{
			font-size: 150%;
		}
		#bhd{
			font-size: 160%;
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
		        <button class="btn" style="margin-top: 8px;border-radius: 20px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-user"></i>
				<span style="letter-spacing: 2px">Welcome <?php echo $_SESSION['usernamed']?>!</span></button>
                <button id="logout"type="button" class= " btn " style="margin-top: 8px;border-radius: 20px;
				background-color:white;color:red;"><a href="logout.php">Logout?</a></button>
		        
		      </ul>
		    </div>
		  </div>
	</nav> 




<div class='intro'>
	<img src='https://i.imgur.com/TqQ6Wku.jpg' class="pic" />
</div>

<h1 class="text-center" id="bhd" style="color: white;font-family: Montserrat, sans-serif;letter-spacing: 2px;">CSE/IT</h1>

<ul class="nav nav-tabs" id="yearnav">
  <li class="active"><a data-toggle="tab" href="#dl1">I</a></li>
  <li><a data-toggle="tab" href="#dl2">II</a></li>
  <li><a data-toggle="tab" href="#dl3">III</a></li>
  <li><a data-toggle="tab" href="#dl4">IV</a></li>
</ul>

<div class="tab-content">
  <div id="dl1" class="tab-pane fade in active">
  	<div class="container-fluid text-center">
  	  <h2 class="yhd" style="color: white;text-decoration: underline;font-family: Montserrat, sans-serif;letter-spacing: 2px;">First Year</h2>
	  <div class="row text-center">
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="Paris">
	        <p><strong>Let Us C</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="New York">
	        <p><strong>New York</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="San Francisco">
	        <p><strong>San Francisco</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>	
	      </div>
	    </div>
	  </div>
    </div>
  </div>
  <div id="dl2" class="tab-pane fade">
    <div class="container-fluid text-center">
      <h2  class="yhd" style="color: white;text-decoration: underline;font-family: Montserrat, sans-serif;letter-spacing: 2px;">Second Year</h2>
	  <div class="row text-center">
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="images/coa.jpg" alt="Paris">
	        <p><strong>COA</strong></p>
	        <a href="books/COA.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="images/dstl.webp" alt="New York">
	        <p><strong>DSTL</strong></p>
			<a href="BOOKS/DSTL.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="images/ds.jpg" alt="San Francisco">
	        <p><strong>Data Structures</strong></p>
	        <a href="BOOKS/DS.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	  </div>
    </div>
  </div>
  <div id="dl3" class="tab-pane fade">
    <div class="container-fluid text-center">
    	<h2  class="yhd" style="color: white;text-decoration: underline;font-family: Montserrat, sans-serif;letter-spacing: 2px;">Third Year</h2>
	  <div class="row text-center">
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="Paris">
	        <p><strong>Chemistry</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="New York">
	        <p><strong>New York</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="San Francisco">
	        <p><strong>San Francisco</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	  </div>
    </div>
  </div>
  <div id="dl4" class="tab-pane fade">
    <div class="container-fluid text-center">
    	<h2  class="yhd" style="color: white;text-decoration: underline;font-family: Montserrat, sans-serif;letter-spacing: 2px;">Final Year</h2>
	  <div class="row text-center">
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="Paris">
	        <p><strong>coa</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="New York">
	        <p><strong>New York</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="thumbnail">
	        <img src="https://i.imgur.com/4wiTGEo.jpg" alt="San Francisco">
	        <p><strong>San Francisco</strong></p>
	        <a href="#"><button type="button" class="btn btn-primary btn-lg">DOWNLOAD</button></a>
	      </div>
	    </div>
	  </div>
    </div>
  </div>
</div>
<footer class="text-center" style="margin-top: 20px">
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
<?php
$_SESSION['log']=true;
?>