<?php
session_start();
?>
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
	<style>
	body {
	    font: 400 15px/1.8 Lato, sans-serif;
	   	background-color: #000000;
	}

	.navbar {
	    font-family: Montserrat, sans-serif;
	}
	.toast {
		color:;
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
<?php
$con=mysqli_connect('localhost','root');
if($con)
{
if(isset($_POST['submit']))
{mysqli_select_db($con,'signup');
$username=mysqli_real_escape_string($con,$_POST['username']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$cpass=mysqli_real_escape_string($con,$_POST['cpassword']);

$userquery="select * from registration where username='$username'";

$rquery=mysqli_query($con,$userquery);
$usercount=mysqli_num_rows($rquery);
if($usercount>0)
{
?>
<script>

	alert('Username already exists');
</script>
<?php

}
else
{
	$emailquery="select * from registration where email='$email' ";

$equery=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($equery);
$token=bin2hex(random_bytes(15));
if($emailcount>0)
{
	
	?>
	<script>
	
		alert('Email already exists!');
	</script>
	<?php
}
else{
		if($pass===$cpass)
		{$query="INSERT INTO registration(username,email,passwords,confirmpass,token,status) 
		VALUES ('$username','$email','$pass','$cpass','$token','inactive')";
			$iquery=mysqli_query($con,$query);
			if($iquery)
			{
				$to_email=$email;
$subject="Email Activation";
$body="Hi ,$username.Click here to activate your account http://localhost/Book%20Project/activate.php?token=$token";
$headers="FROM: itsnayandubey";
if(mail($to_email,$subject,$body,$headers))
{
   
	
	?>
	<script>
	alert("Account activation link sent your email ");
	</script>
	<?php
}
else
{
    echo "failure!";
}
			}
			?>
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><b>Congratulations!</b</strong> You have successfully registered.
  </div>
</div>
 

<?php
		}
		else
		{
			?>
			<script>
			
				alert('Password did not match!');
			</script>
			<?php
		}
	}
	}
}






}
else
{?>
<script>
			
				alert('Connection failed!');
</script>
<?php


}
?>

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
		        <li><a href="#"><i class="fa fa-fw fa-home"></i> HOME</a></li>
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
				<span style="letter-spacing: 2px">LOGIN/SIGNUP</span></button>
		        
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
		    <form role="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
		          <div class="form-group">
		            <label for="email"><span class="glyphicon glyphicon-user"></span>Email</label>
		            <input type="email" name="email"class="form-control" id="usrname" placeholder="Enter email">
		          </div>

		          <div class="form-group">
		            <label for="password">Password</label>
		            <input type="password" name="passworded"class="form-control" id="psw" placeholder="Enter Password">
		          </div>
		          
		          <button type="submit" name="login"class="btn btn-primary">LOGIN
		            </span>
		          </button>
		        </form>
		  </div>

		  <div id="menu1" class="tab-pane fade">
		    <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"role="form">
		    	<div class="form-group">
		            <label for="name">UserName</label>
		            <input type="name" class="form-control" name="username" id="name" placeholder="Enter name" required>
		          </div>

		          <div class="form-group">
		            <label for="email"><span class="glyphicon glyphicon-user"></span> E-Mail</label>
		            <input type="email" class="form-control" id="usrname" name="email" placeholder="Enter email"  required>
		          </div>

		          <div class="form-group">
		            <label for="password">Create Password</label>
		            <input type="password" class="form-control" id="psw"name="password" placeholder="Enter Password" required>
		          </div>
				  <div class="form-group">
		            <label for="password">Confirm Password</label>
		            <input type="password" name="cpassword" class="form-control" id="psw" placeholder="Enter Password" required>
		          </div>
		          <button type="submit"name="submit" class="btn btn-primary">CREATE ACCOUNT
		            </span>
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
			<button type="button" class="btn btn-lg btn-primary" data-bs-toggle="popover" title="Popover title"
			 data-bs-content="And here's some amazing content. It's very engaging. Right?">DOWNLOAD</button>
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
$con=mysqli_connect('localhost','root');

if(isset($_POST['login']))
{mysqli_select_db($con,'signup');
	$email=$_POST['email'];
	$password=$_POST['passworded'];

	$emailquery="select * from registration where email='$email' and status='active'";
    $curstatus="select * from registration where status='inactive' and email='$email'";

$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);

$squery=mysqli_query($con,$curstatus);	

$curstatuscount=mysqli_num_rows($squery);	

	
	

if($emailcount)
{
  $email_pass=mysqli_fetch_assoc($query);
  $db_pass=$email_pass['passwords'];

  
$_SESSION['usernamed']=$email_pass['username'];
$_SESSION['key']=false;
  if($password==$db_pass)
  
  { 
	
	$keys = rand(10,1000000);

	$_SESSION['key']=true;
	?>
	<script>
	alert("loggined");
	
	location.replace("loginned.php");
	</script>
	<?php
   }
   else
   {
	?>
	<script>
	
		alert("Wrong password!");
	</script>
	<?php
   }
  
}

else
{ if ($curstatuscount)
	{
		?>
	<script>
	
		alert("Please first activate your account!");
	</script>
	<?php
	}
	else{
	echo "please register first";
	}
}
}

?>