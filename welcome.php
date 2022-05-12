co<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="Styles.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/lobster:n4:default;source-sans-pro:n2,n7,n9:default.js" type="text/javascript"></script>
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body background="images/230.jpg">
	<header>
  <img src="images/Asset 3.png" alt="Manoj Arts" width="300" height="234" border="0"/>
<nav>
  <p><a href="index.php" class="navHome">Home</a> <a href="aboutus.html" class="navAbout">About Us </a> <a href="index.php?page=products" class = "navPort">Artworks</a> <a href="register.php" class="navSignUp">Sign Up</a> <a href="login.php" class="navLogin">Sign In</a> <a href="contact.html" class="navContact">Custom Order</a></p>
</nav>
</header>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Manojarts.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
	<section class="sectionLeft">
  <h1>Passionate about painting, designing, portraiture and illustrations.</h1>
</section>

<section class="sectionRight">
  <h2>Manoj's passion for designing, illustration and paintings,</h2>
  
   

  <p>Welcome to Manoj Arts, where you can not merely see his passion for art and designing but also his presentation of realism, imagination, culture and tradition through artworks of different media. </p>
  <p>Through his artwork, he expresses his interpretation of nature, celebrities, human emotions and modern lifestyles like fashion designing and sneaker paintings. Each piece takes us on a unique and personal journey, inspired to cultivate curiosity, pay attention to dreams, and appreciate a magical world within and around us. He enjoys coming up with innovative, new, and refreshing ideas and executing them in new approaches. For the past <a href="portfolio.html"> 5 years</a>  &nbsp; he has been doing lot of remarkable illustrations, wall paintings, sketches and designs. Doing my art to make the world a more beautiful place and moreover to represent traditions &amp; culture of my country in the US through paintings, designing and illustrations. So let's talk. Let's create. Let's make the world a more beautiful place.</p>
	<p>If you'd like to commission an illustration, have a question, or just want to say hi, you can contact me at:</p>
	<a href="mailto:manozz909@gmail.com">manozz909@gmail.com</a>
</section>

<footer>
  <div class="footerOuter">
			<div class="container">
			  <div class="row-fluid">

					<div class="span6">
						<div class="titleHeader clearfix">
							<h3>Useful Links</h3>
						</div>

						
						<div class="usefulLinks">
							<div class="row-fluid">
				<div class="span3">
						<div class="titleHeader clearfix">
							<h3>Contact Info</h3>
						</div>

						<div class="contactInfo">
								<li>
									<button class="btn btn-small">
										<i class="icon-volume-up"></i>
									</button>
									Call Us: <a class="invarseColor" href="#">8572345922</a>
								</li>
								<li>
									<button class="btn btn-small">
										<i class="icon-envelope-alt"></i>
									</button>
									<a class="invarseColor" href="#">manozz909@gmail.com</a>
								</li>
								<li>
									<button class="btn btn-small">
										<i class="icon-map-marker"></i>
									</button>
									1000 Massachusetts Ave. Boston, MA
								</li>
						</div>

				  </div><!--end span3--><!--end span3-->

				</div><!--end row-fluid-->

			</div><!--end container-->
  </div><!--end footerOuter--></footer>
		<!--end footer-->
</body>
</html>
