
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['text'];
$formcontent="From: $name \n E-mail: $email \n Message: $message";
$recipient = "mstorne@gmail.com";
$subject = "Contact Form";
$autorespond = "Hi $name , \n
    Thanks for reaching out! I' ll get back to you as soon as possible. \n  
    Best regards, \n
    Marko Nestorovic";
$mailheader = "From: Marko Nestorovic<noreply@markonestorovic.com> \r\n" . 
'Reply-To: '.$email."\r\n" ;
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
mail($email, "Auto Reply Subject", $autorespond , $mailheader);
echo "<script type='text/javascript'>alert('Your message has been successfully sent.'); window.location.href = '/index.html';</script>";
?>



