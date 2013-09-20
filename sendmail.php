<?php  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: kontakt.php"); exit;  
}  
$name = $_POST["contact_name"];  
$email_address = $_POST["contact_email"];  
$message = $_POST["contact_message"];   
if (empty ($name))  
    $error = "Morate unijeti vaše ime.";  
elseif (empty ($email_address))   
    $error = "Morate unijeti vašu mail adresu.";   
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))  
    $error = "Morate unijeti ispravnu mail adresu.";   
elseif (empty ($message))  
    $error = "Morate napisati poruku.";  
if (isset($error)) {  
    header("Location: kontakt.php?e=".urlencode($error)); exit;  
}
$email_content = "Ime: $name\n";  
$email_content .= "Email: $email_address\n";  
$email_content .= "Poruka:\n\n$message";   
mail ("marko.idzan@markoidzan.from.hr", "New Contact Message", $email_content);  
header("Location: kontakt.php?s=".urlencode("Thank you for your message.")); exit;  
?>  