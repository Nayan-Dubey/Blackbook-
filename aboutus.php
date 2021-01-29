<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet"> 
    <title>About Us</title>
    <style>
            
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
      }
      section {
        padding: 60px 0;
      }
      a,
      a:hover,
      a:focus,
      a:active {
        text-decoration: none;
        outline: none;
      }
      ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }
      
      .site-heading h2 {
        display: block;
        font-weight: 700;
        margin-bottom: 10px;
        text-transform: uppercase;
      }
      
      .site-heading h2 span {
        color: #ff5a6e;
      }
      
      .site-heading h4 {
        display: inline-block;
        padding-bottom: 20px;
        position: relative;
        text-transform: capitalize;
        z-index: 1;
      }
      
      .site-heading h4::before {
        background: #ff5a6e none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 2px;
        left: 50%;
        margin-left: -25px;
        position: absolute;
        width: 50px;
      }
      
      .site-heading h2 span {
        color: #c9e71b;
      }
      
      .site-heading {
        margin-bottom: 60px;
        overflow: hidden;
        margin-top: -5px;
      }
      
      .team-area .single-item {
        margin-bottom: 30px;
      }
      
      .team-area .item .thumb {
        position: relative;
        overflow: hidden;
        z-index: 1;
      }
      
      .team-area .item .thumb::after {
        background: #232323 none repeat scroll 0 0;
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: all 0.35s ease-in-out;
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        width: 100%;
      }
      
      .team-area .team-items .item:hover .thumb::after {
        opacity: 0.7;
      }
      
      .team-area .item .thumb .overlay {
        top: -100%;
        left: 0;
        padding: 20px;
        position: absolute;
        text-align: center;
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        width: 100%;
        z-index: 1;
      }
      
      .team-area .item:hover .thumb .overlay {
        top: 50%;
        transform: translate(-50%, -50%);
        left: 50%;
      }
      
      .team-area .item .thumb .overlay p {
        color: #ffffff;
      }
      
      .team-area .item .thumb .overlay h4 {
        color: #ffffff;
        display: inline-block;
        position: relative;
        text-transform: uppercase;
      }
      
      .team-area .item .thumb img {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
      }
      
      .team-area .item:hover .thumb img {
        opacity: 0.6;
      }
      
      .team-area .item .thumb .social li {
        display: inline-block;
      }
      
      .team-area .item .thumb .social li a {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        color: #ffffff;
        display: inline-block;
        height: 40px;
        line-height: 40px;
        margin: 0 2px;
        text-align: center;
        width: 40px;
        font-size: larger;
      }
      .team-area .item .thumb .social li a:hover{
        color: aqua;
        font-size: x-large;
      }
      
      .team-area .info {
        background: #ffffff none repeat scroll 0 0;
        -moz-box-shadow: 0 0 10px #cccccc;
        -webkit-box-shadow: 0 0 10px #cccccc;
        -o-box-shadow: 0 0 10px #cccccc;
        box-shadow: 0 0 10px #cccccc;
        padding: 40px 20px 20px;
        position: relative;
        text-align: center;
        z-index: 9;
      }
      
      .team-area .info .message {
        height: 50px;
        line-height: 40px;
        margin-left: -25px;
        margin-top: -25px;
        position: absolute;
        text-align: center;
        top: 0;
        width: 50px;
      }
      
      .team-area .info .message a {
        background: #fff none repeat scroll 0 0;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        -moz-box-shadow: 0 0 10px #cccccc;
        -webkit-box-shadow: 0 0 10px #cccccc;
        -o-box-shadow: 0 0 10px #cccccc;
        box-shadow: 0 0 10px #cccccc;
        box-sizing: border-box;
        color: #ff5a6e;
        display: inline-block;
        font-size: 20px;
        height: 50px;
        line-height: 50px;
        width: 50px;
      }
      
      .team-area .info .message a i {
        font-weight: 500;
      }
      
      .team-area .info h4 {
        font-weight: 600;
        margin-bottom: 5px;
        text-transform: capitalize;
      }
      
      .team-area .info span {
        color: #ff5a6e;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        text-transform: uppercase;
      }
      
      body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    @media only screen and (max-width: 1000px){

    }
      
    </style>
</head>
<body>
    <center><h1 style="letter-spacing: 4px;font-family: 'Goldman', cursive;margin-top: 30px;">BLACKBOOK</h1></center>
    <section id="team" class="team-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-heading text-center">
              <h2>Our <span>Team</span></h2>
              <h4>Meet our awesome and expert team members</h4>
            </div>
          </div>
        </div>
        <div class="row team-items">
          <div class="col-md-6 single-item">
            <div class="item">
              <div class="thumb">
                <img class="img-fluid" src="image.jpg" alt="Thumb">
                <div class="overlay">
                  <h4>Nayan Dubey</h4>
                 <!--  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p> -->
                  <div class="social">
                    <ul>
                   
                      <li>   
                        <a href="https://www.facebook.com/bigcass.ahmed/" class="fa fa-facebook"> </a>   
                        </li>  
                        <li>  
                        <a href="https://twitter.com/home?lang=en" class="fa fa-twitter"> </a>  
                        </li>  
                        
                        <li>  
                        <a href="https://www.linkedin.com/in/nayan-dubey-433b651a5/" class="fa fa-linkedin"> </a>  
                        </li>  
                        <li>  
                        <a href="https://www.instagram.com/_itz_nayan/?hl=en" class="fa fa-instagram"> </a>  
                        </li>  
                        
                        
                         
                        
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info">
                <span class="message">
                  <a href="#"><i class="fa fa-envelope-open"></i></a>
                </span>
                <h4>Nayan Dubey</h4>
                <span>Backend Developer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 single-item">
            <div class="item">
              <div class="thumb">
                <img class="img-fluid" src="https://i.ibb.co/JC4skS0/team-animate.jpg" alt="Thumb">
                <div class="overlay">
                  <h4>Hemant Singh</h4>
                  <!-- <p>
                    kING.
                  </p> -->
                  <div class="social">
                    <ul>
                      <li>   
                        <a href="#" class="fa fa-facebook"> </a>   
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-twitter"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-pinterest"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-linkedin"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-instagram"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-youtube"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-google"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-snapchat-ghost"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-skype"> </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info">
                <span class="message">
                  <a href="#"><i class="fa fa-envelope-open"></i></a>
                </span>
                <h4>Hemant Singh</h4>
                <span>Frontend Developer</span>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <img class="img-fluid" src="https://i.ibb.co/JC4skS0/team-animate.jpg" alt="Thumb">
                <div class="overlay">
                  <h4>Lorem Ipsum</h4>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </p>
                  <div class="social">
                    <ul>
                      <li>   
                        <a href="#" class="fa fa-facebook"> </a>   
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-twitter"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-pinterest"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-linkedin"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-instagram"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-youtube"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-google"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-snapchat-ghost"> </a>  
                        </li>  
                        <li>  
                        <a href="#" class="fa fa-skype"> </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info">
                <span class="message">
                  <a href="#"><i class="fas fa-envelope-open"></i></a>
                </span>
                <h4>Lorem Ipsum</h4>
                <span>Web designer</span>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
</body>

</html>