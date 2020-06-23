<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact Form';
		$to = 'info@kmbuildinggroup.co.uk';
		$subject = 'Message from Contact Form';

		$body ="From: $name\n\n E-Mail: $email\n\n Message:\n\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <meta name="KM Building & Construction" content="">
	  <meta name="description" content=" KM Building & construction LTD">
	  <meta name="keywords" content="KM, construction, building, London, builder, contractor, builders, extensions, house extensions, building company">
	  <meta name="author" content="Deyan Bozhilov">
	  <link rel="icon" href="./img/title-img.png">
	  <title>KM Building & Construction | Contact</title>
	  <link href='http://fonts.googleapis.com/css?family=Khand%3A400%2C400italic%2C700%2C700italic%7CPT+Sans%3A400%2C400italic%2C700%2C700italic&#038;subset=latin&#038;ver=4.4.10' rel="stylesheet" type='text/css' />
	  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' rel="stylesheet" type='text/css' />
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	  <link href="./css/style.css" rel="stylesheet">
  </head>
  <body>

		<!-- NAVBAR
		================================================== -->

		<body>
		  <nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
							<a class="navbar-brand" rel="home" href="index.html" title="Home">
			            <img style="max-width:50px; margin-top: -15px;" src="img/nav-img1.png">
			            </a>
		      </div>
		      <div id="navbar" class="collapse navbar-collapse">
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="index.html">Home</a></li>
		          <li><a href="services.html">Services</a></li>
		          <li><a href="testimonials.html">Testimonials</a></li>
		          <li class="active"><a href="index.php">Contact</a></li>
		        </ul>
		      </div>
		      <!--/.nav-collapse -->
		    </div>
		  </nav>

		  <section id="info2">
		    <div class="container">
		      <div class="info-left"><br>
		        <h2>Call Us / Email Us :</h2>

		          <p>Our customer care representatives will always be on the other end of your call. Feel free to call or email us for assistance or in case of an emergency any time of the day or night, Monday to Sunday.<br>
		            <br><strong>Enquiries/ Need a proposal/ Careers : </strong><br><br><span>(+44)07427640466 / (+44)02036331718<br><br>  info@kmbuildinggroup.co.uk</span></p>

		      </div>
		    </div>
		  </section>
			<br>


			<div id="contact-email">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<form class="form-horizontal" role="form" method="post" action="index.php">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
								<?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message" placeholder="Write us a message ..."><?php echo htmlspecialchars($_POST['message']);?></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>



		  <div class="container">
		    <h2 id="map-dir">Where can you find us?</h2>
		    <div class="iframe-container">
		      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d318364.8464253624!2d-0.21713736718752064!3d51.435655000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a963f2e86291%3A0xba942beb3a88c976!2sKM+Building+%26+Construction!5e0!3m2!1sen!2suk!4v1507900529366"
							        width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
		      </iframe>
		    </div>
		  </div>


	<div class="container">
    <br>
    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>

    </footer>
  </div>
  <div class="container">
    <div class="icons">
      <a class="social-media" href="https://www.instagram.com/km_building_group/?hl=en"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
      <a class="social-media" href="https://www.facebook.com/kmgroupbuildingservices/"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
      <a class="social-media" href="https://www.linkedin.com/company-beta/11209001/"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
    </div>
  </div><br>

  <footer class="copy">
    <p>&copy; 2017 KM Building & Construction</p>
  </footer>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script>
	//go back to top

	if ($('.pull-right').length) {
		var scrollTrigger = 100, // px
			backToTop = function() {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.pull-right').addClass('show');
				} else {
					$('.pull-right').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function() {
			backToTop();
		});
		$('.pull-right').on('click', function(e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
	</script>
	<script>
	//scroll reveal

	window.sr = ScrollReveal();
	sr.reveal('.info-left', {
	  duration: 1000,
	  origin: 'top',
	  distance: '100px'
	});
	</script>

  </body>
</html>
