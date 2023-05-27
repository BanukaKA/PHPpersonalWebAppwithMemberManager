<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top transparent">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="https://www.banuambe.com/" target="newwindow">Banuka Ambegoda</a>
        </div> <!-- .navbar-header -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">LogIn</a></li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
    <main data-spy="scroll" data-target=".navbar" data-offset="50">
      <div class="jumbotron photo-cover text-inverse">
          <div class="col-md-6 text-center center">
            <h1>Banuka Ambegoda</h1>
            <p >Software engineer</p>
            <a href="#about">
            <span class="fui-triangle-down large"></span>
            </a>
          </div> <!-- .col-md-6 -->
        </div> <!-- .jumbotron -->
      <div id="about" class="jumbotron">
        <div class="container">
          <div class="row">
            <div class=" col-md-8 col-md-offset-2 text-center">
            <h2>About</h2>
              <hr>
            <p class="lead">
              Hi, my name's Banuka - I'm a Software engineer and .NET core developer
            </p>
            <p>
              I enjoy coding. 
              </p>
            <img src="https://media.licdn.com/dms/image/D5635AQE93g4XR8LViQ/profile-framedphoto-shrink_400_400/0/1679714023239?e=1683507600&v=beta&t=n-51QgnDKHdXDh9GP6_2EivMRnz_x5sLywc6N-40DEY" style="height: 5%; width 5%;"  alt="Banuka Ambegoda" class="center-block img-responsive img-circle"/>
            </div> <!-- .col-md-8 -->
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- #about -->  
      <div id="portfolio" class="jumbotron background-primary text-inverse">
        <div class="container">
          <div class="row">
            <h2 class="text-center">Portfolio</h2>
            <hr>
            <div class="col-xs-6 col-md-3">
              <a class="thumbnail h-100" page="NCPAC">
                  <img src="https://media.istockphoto.com/vectors/teamwork-united-people-vector-logo-vector-id1010865708?k=6&m=1010865708&s=170667a&w=0&h=nhH0YXGQ_nk6bSuozcvHcrVNRiAWqLCy-YrNWc-jyMg=">
                  <div class="thumbnail-overlay" page="NCPAC">
                    <span class="glyphicon glyphicon-info-sign text-inverse large center"></span>
                  </div>
              </a>
            </div> <!-- .col-md-3 -->
            <div class="col-xs-6 col-md-3">
              <a class="thumbnail" page="capstone">
                <img src="https://www.weekleychryslerdodgejeep.com/wp-content/uploads/2021/02/google-square-icon-colored.png">
                <div class="thumbnail-overlay" page="capstone">
                  <span class="glyphicon glyphicon-info-sign text-inverse large center"></span>
                </div>
              </a>
            </div> <!-- .col-md-3 -->
            <div class="col-xs-6 col-md-3">
              <a class="thumbnail" page="mobile">
              <img src="https://th.bing.com/th/id/R.3caf352b2d2efd88b5ac3cdc777e6116?rik=5tDLabbYd7mXjw&pid=ImgRaw&r=0">
                <div class="thumbnail-overlay" page="mobile">
                  <span class="glyphicon glyphicon-info-sign text-inverse large center"></span>
                </div>            
              </a>
            </div> <!-- .col-md-3 -->
            <div class="col-xs-6 col-md-3">
              <a class="thumbnail" page="moreP">
              <img src="https://th.bing.com/th/id/OIP.zG2MDwcS3_uxThgfrRXLBAHaHa?pid=ImgDet&rs=10">
                <div class="thumbnail-overlay" page="moreP">
                  <span class="glyphicon glyphicon-info-sign text-inverse large center"></span>
                </div>            
              </a>
            </div> <!-- .col-md-3 -->        
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- #portfolio -->
      <div id="contact" class="jumbotron">
        <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="">Contact Me</h2>
            <hr>
            <form action="mailto:banukaambegoda@gmail.com"  enctype="text/plain" method="post">
            <div class="form-group">
              <label for="InputEmail">Email address</label>
              <input type="email" class="form-control" id="InputEmail" placeholder="Email">
            </div> <!-- .form-group -->
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" class="form-control" rows="3"></textarea>
            </div> <!-- .form-group -->
            <input type="submit" name="submit" class="btn btn-inverse">
          </form>
          </div> <!-- .col-md-8 -->
        </div> <!-- .container -->
      </div> <!-- #contact -->

    <div class="text-center text-inverse navbar-inverse">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
                <h3>Location</h3>
                    <p>Welland</p>
            </div> <!-- .footer-col -->
            <div class="footer-col col-md-4">
                <h3>Connect With Me</h3>
                <ul class="list-inline">
                  <li>
                      <a class="medium" href="https://github.com/banukaka" target="newwindow"><span class="fui-github"></span></a>
                  </li>
                  <li>
                      <a class="medium" href="https://www.linkedin.com/in/banuka-ambegoda/" target="newwindow"><span class="fui-linkedin"></span></a>
                  </li>
                  <li>
                      <a class="medium" href="https://twitter.com/banukaka" target="newwindow"><span class="fui-twitter"></span></a></a>
                  </li>
                </ul>
            </div> <!-- .footer-col -->
            <div class="footer-col col-md-4">
                <h3>Hire Me</h3>
                <p>I'm available for interviews 24/7.</p>
            </div> <!-- .footer-col -->
          </div> <!-- .row -->
        </div> <!-- .container --> 
        <div class="background-secondary">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                Copyright © Skills Ontario 2023
              </div> <!-- .col-lg-12 -->
            </div> <!-- .row -->
          </div> <!-- .container  -->
        </div> <!-- .background-secondary -->
      </div> <!--  -->
    <div id="NCPAC" class="full-screen">
      <div class="container">
          <div class="col-md-6 text-center center">
          <div class="row">
          </div> <!-- .row -->           
            <p class="lead">NCPAC is a Community Sponsered Project of mine and my collegues.</p>
          <hr>
          <div class="row">
            <div class="col-md-3 col-md-offset-3">
              <a class="btn-inverse btn-block btn-lg" target="_blank" href="https://github.com/BanukaKA/NCPAC">View</a>
            </div> <!-- .col-md-6 -->
            <div class="col-md-3">
              <a class="btn-danger btn-lg close-window btn-block">Close</a>
            </div> <!-- .col-md-6 -->        
          </div> <!-- .row -->      
        </div> <!-- .col-md-6 -->
      </div> <!-- .container -->
    </div> <!-- .full-screen -->
    <div id="capstone" class="full-screen">
      <div class="container">
        <div class="col-md-6 text-center center">
          <div class="row">
          </div> <!-- .row -->       
          <p class="lead">
            View My Capstone Project
          </p>
          <p>
            I developed a clone of google.
          </p>
          <hr>
          <div class="row">
            <div class="col-md-3 col-md-offset-3">
              <a class="btn-inverse btn-block btn-lg" target="newwindow" href="https://github.com/BanukaKA/AdvancedSearchEngineWithPublicAPI">View</a>
            </div> <!-- .col-md-6 -->
            <div class="col-md-3">
              <a class="btn-danger btn-lg close-window btn-block">Close</a>
            </div> <!-- .col-md-6 -->        
          </div> <!-- .row -->      
        </div> <!-- .col-md-6 -->
      </div> <!-- .container -->
    </div> <!-- .full-screen -->
    <div id="mobile" class="full-screen">
      <div class="container">
        <div class="col-md-6 text-center center">
          <div class="row">
          </div> <!-- .row -->          
          <p class="lead">.NET Mobile Apps</p>
          <p>
          View my .NET MAUI Apps.</p>
          <hr>
          <div class="row">
            <div class="col-md-3 col-md-offset-3">
              <a class="btn-inverse btn-block btn-lg" target="_blank" href="https://github.com/BanukaKA/MAUIathleteApiClient">View</a>
            </div> <!-- .col-md-6 -->
            <div class="col-md-3">
              <a class="btn-danger btn-lg close-window btn-block">Close</a>
            </div> <!-- .col-md-6 -->        
          </div> <!-- .row -->
        </div> <!-- .col-md-6 -->
      </div> <!-- .container -->
    </div> <!-- .full-screen -->
    <div id="moreP" class="full-screen">
      <div class="container">
        <div class="col-md-6 text-center center">
          <div class="row">
          </div> <!-- .row -->
          <p class="lead">
            Furthur Projects
          </p>
          <hr>
          <div class="row">
            <div class="col-md-3 col-md-offset-3">
              <a class="btn-inverse btn-block btn-lg" target="_blank" href="https://banuambe.com/">View</a>
            </div> <!-- .col-md-6 -->
            <div class="col-md-3">
              <a class="btn-danger btn-lg close-window btn-block">Close</a>
            </div> <!-- .col-md-6 -->        
          </div> <!-- .row -->
        </div> <!-- .col-md-6 -->
      </div> <!-- .container -->
    </div> <!-- .full-screen -->
    </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="function.js"></script>
</body>
</html>