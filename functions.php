<?php
function pdo_connect_mysql() {
    // Update the details below with  MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'manojarts_db';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header
function template_header($title) {
	$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Manoj Arts</title>
		<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
		<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/lobster:n4:default;source-sans-pro:n2,n7,n9:default.js" type="text/javascript"></script>	
		<link href="shoppingcart.css" rel="stylesheet" type="text/css">
		<link href="styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
	
        <header>
		<img src="images/Asset 3.png" width="300" height="234" alt=""/>
				
				<div id="google_translate_element">
				<p>Select Language</p>
	<script type="text/javascript">
	function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		}
		</script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</div>
				<div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
						<span>$num_items_in_cart</span>
					</a>
                </div>
                <nav>
                    <a href="index.php" class="navHome">Home</a>
					<a href="aboutus.html" class="navAbout">About Us </a> 
                    <a href="index.php?page=products" class = "navPort">Artworks</a>
					<a href="register.php" class="navSignUp">Sign Up</a> 
					<a href="login.php" class="navLogin">Sign In</a> 
					<a href="contact.html" class="navContact">Custom Order</a></p>
					</nav>
					<a href="index.php?page=cart" class = "link-icons"></a>
                
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
		<p class="top"><a href="#top">Go to Top</a></p>
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
								<div class="span6">
										<li><a href="aboutus.html"><i class="icon-caret-right"></i> About Us</a></li>
										<li><a href="index.php?page=products"><i class="icon-caret-right"></i> Portfolio</a></li>
										<li><a href="index.php?page=cart"><i class="icon-caret-right"></i>Cart</a></li>
										<li><a href="contact.html"><i class="icon-caret-right"></i> Order Custom Portraits</a></li>
								
								</div>
							</div>
						</div>
					</div><!--end span6-->
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
        
    </body>
</html>
EOT;
}
?>