<?php
/* Set e-mail recipient */
$myemail = "bertlasker52@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['inputName'], "Uw naam");
$email = check_input($_POST['inputEmail'], "Uw E-mail Adres");
$telephone = check_input($_POST['inputTelephone'], "Uw Telefoonnummer");
$subject = check_input($_POST['inputSubject'], "Onderwerp");
$message = check_input($_POST['inputMessage'], "Bericht");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Ongeldig e-mail adres");
}
/* Let's prepare the message for the e-mail */

$subject = "Bericht gestuurd via Catch-design.nl";

$message = "

Iemand heeft met behulp van het contact formulier een bericht gestuurd:

Naam: $name
Email: $email
Telefoon nummer: $telephone
Onderwerp: $subject

Bericht:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: ../bedankt.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<?php include 'header.php'; ?>

<p>Corrigeer de volgende fout (alle velden moeten zijn ingevuld):</p>
<strong><?php echo $myError; ?></strong>
<br><br><br>
<A HREF="javascript:javascript:history.go(-1)">Klik hier om naar de vorige pagina te gaan</A>


<?php include 'footer.php'; ?>
</html>
<?php
exit();
}
?>