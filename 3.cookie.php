<!DOCTYPE html> 
<?php 
 
$cookie_name = "bca_5"; 
$cookie_value = "bca_student"; 
setcookie($cookie_name, $cookie_value, time() + 1800, "/"); 
 
if(!isset($_COOKIE[$cookie_name]))
{ 
    echo "Cookie named '" . $cookie_name . "' is not set!"; 
} 

else 
 
{ 
    echo "Cookie '" . $cookie_name . "' is set!<br>"; 
    echo "Value is: " . $_COOKIE[$cookie_name]; 
} 
?>
