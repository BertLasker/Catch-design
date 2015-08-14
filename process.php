<?php
$myemail = 'bertlasker52@gmail.com';
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Uw bericht is ontvangen. Bedankt! Hier is wat u verstuurd heeft:</span><br><br>";
echo "<stong>Naam:</strong> ".$name."<br>";	
echo "<stong>Email:</strong> ".$email."<br>";	
echo "<stong>Bericht:</strong> ".$message."<br>";


$to = $myemail;
$email_subject = "Contact formulier onderwerp: $name";
$email_body = "Je hebt een nieuw bericht ontvangen. ".
" Hier zijn de details:\n Naam: $name \n ".
"Email: $email\n Bericht \n $message";
$headers = "Van: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}?>