<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="google-site-verification" content="Q9CeiVBTOFt2ZQXpUBkn49QukM88uxaySxkq1s2_z4E" />
    <link rel="shortcut icon" href="../favicon.png">
	<link rel="icon" type="image/png" href="../favicon.png" />
	
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <title>BlueRobotics Live Data</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style-br.css" rel="stylesheet">
	<link href="style-live.css" rel="stylesheet">
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-45744597-1', 'blue-robotics.com');
	  ga('send', 'pageview');

	</script>
  </head>

  <body class="oceanbackground">
  
	<div class="navbar navbar-inverse navbar-static-top" style="min-width:350px" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../images/br-logo-trans-blue-trans.png" class="img-br-logo"><span class="blue toplogo">Blue</span><span class="robotics toplogo">Robotics</span></a>
        </div>
        <!--<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#background">Background</a></li>            
            <li><a href="#technology">Technology</a></li>            
            <li><a href="#about">About</a></li>
			<li><a href="mailto:rusty@blue-robotics.com">Contact</a></li>                        
          </ul>
        </div>--><!--/.nav-collapse -->
      </div>
    </div>
	
	<!----------------------- START BODY ------------------------------>

<div class="container livecontainer img-rounded">
	<div class="col-md-12">
		<h1>Live Thruster-100 Test Data</h1>
	</div>
	<div class="col-md-12">
		<p>The Blue Robotics Thruster-100 is being tested at Blue Robotics' facility. This page is a live stream of the test data including thrust, RPM, power, and current.</p>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<iframe height="700" id="igraph" scrolling="no" seamless="seamless" src="https://plot.ly/~rjehangir/13/" width="100%"></iframe>
		</div>
		<div class="col-md-1"></div>
	</div>
	
</div>

<div class="container-fluid text-right">
	<p class="bgcredit">Photo &copy; <a href="http://www.elenakalisphoto.com">Elena Kalis</a></p>
</div>
	
	<!----------------------- END BODY ------------------------------>

<!--------------------- START FOOTER ---------------------------->
	
	<div class="footer">
		<div class="container">
			<div class="col-md-12">
				<img src="../images/br-logo-trans-blue-trans.png" class="center-block" style="width:100px;height:100px;margin:20px auto 20px auto;" />
			</div>
			<!--<br />
			<div class="row text-center">
				<a href="/">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#background">BACKGROUND</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#technology">TECHNOLOGY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;								
				<a href="#about">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="mailto:rusty@blue-robotics.com">CONTACT</a>
			</div>
			<br />-->
			<br />
			<div class="row text-center">
				Copyright &copy; 2014 - <strong>BlueRobotics</strong>
			</div>
			<br />
		</div>
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>
