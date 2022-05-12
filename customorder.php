<?php
error_reporting(0);
?>
<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
 
  $msg = "";
  // If submit button is clicked ...
  if (isset($_POST['submit'])) {
  $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$street = $_POST['street'];
	$unitnumber = $_POST['unitnumber'];
	$city = $_POST['city'];
	$post_code = $_POST['post_code'];
	$state = $_POST['state'];
	$artwork_type = $_POST['artwork_type'];
	$frame = $_POST['frame'];
	$frame_type = $_POST['frame_type'];
	$print_type = $_POST['print_type'];
	$comments = $_POST['comments'];
    $filename = $_FILES["picture_upload"]["name"];
    $tempname = $_FILES["picture_upload"]["tmp_name"];    
        $folder = "images/".$filename;
    $db = mysqli_connect("localhost", "root", "", "manojarts_db");
        // Get all the submitted data from the form
        $sql = "INSERT INTO Art_order(firstName, lastName, email, phone, street, unitnumber,city, post_code, state, artwork_type, frame, frame_type, print_type, filename, comments) values('$firstName','$lastName','$email','$phone','$street','$unitnumber','$city','$post_code','$state','$artwork_type','$frame', '$frame_type','$print_type','$filename','$comments')";
        // Execute query
        $f=mysqli_query($db, $sql);
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Order sent successfully";
        }else{
            $msg = "Failed to upload image";
      }
    
$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'manozz909@gmail.com';   // SMTP username 
$mail->Password = 'rhermvwxhvjfqtdt';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
$mail->setFrom('manozz909@gmail.com', 'Manoj Arts'); 
$mail->addAddress('manozz909@gmail.com'); 
// Set email format to HTML 
$mail->isHTML(true); 
// Mail subject 
$mail->Subject = 'Order Detail'; 
$mail-> addAttachment($filename);
	  
/* Mail body content 
$bodyContent .= '<p> First Name: '.$firstName.'</p>'; 
$bodyContent .= '<p> Last Name: '.$lastName.'</p>'; 
$bodyContent .= '<p> Email: '.$email.'</p>'; 
$bodyContent .= '<p> Phone: '.$phone.'</p>'; 
$bodyContent .= '<p> Street: '.$firstName.'</p>'; 
$bodyContent .= '<p> Unit Number: '.$unitnumber.'</p>'; 
$bodyContent .= '<p> City: '.$city.'</p>'; 
$bodyContent .= '<p> Postal Code: '.$post_code.'</p>'; 
$bodyContent .= '<p> Art Type: '.$artwork_type.'</p>'; 
$bodyContent .= '<p> Frame: '.$frame.'</p>'; 
$bodyContent .= '<p> Frame Type: '.$frame_type.'</p>'; 
$bodyContent .= '<p> Comments: '.$comments.'</p>'; 
*/
	  
//Mail body content	 
	  $bodyContent .='<html><body>';
	  $bodyContent .= '<table rules="all" style="border-color: #666;" cellpadding="20">';
$bodyContent .= "<tr style='background:/Applications/XAMPP/xamppfiles/htdocs/capstone/images/43.jpg;'><td><strong> First Name: </strong> </td><td>".$firstName."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Last Name:</strong> </td><td>" .$lastName."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Email: </strong> </td><td>" .$email."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Phone: </strong> </td><td>" .$phone."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Street: </strong> </td><td>" .$firstName."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Unit Number: </strong> </td><td>".$unitnumber."</td></tr>"; 
$bodyContent .= "<tr><td><strong> City: </strong> </td><td>" .$city."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Postal Code: </strong> </td><td>" .$post_code."</td></tr>"; 
$bodyContent .= "<tr><td><strong> State: </strong> </td><td>" .$state."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Art Type: </strong> </td><td>" .$artwork_type."</td></tr>"; 
$bodyContent .= "<tr><td><strong>Frame: </strong> </td><td>".$frame."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Frame Type: </strong> </td><td>".$frame_type."</td></tr>"; 
$bodyContent .= "<tr><td><strong> Comments: </strong> </td><td>".$comments."</td></tr>"; 
//End of changed email content	  
	  
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
	
   // Changed code here
	echo 'Your order has been placed. We will contact you shortly.'; 
	header('Location: index.php?page=placeorder');
    exit;
}   
  }
?>