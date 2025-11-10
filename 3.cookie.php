 <!DOCTYPE html> 
<?php 
//LAB EXERCISE 03 
/* Design a form to input student name and Phone number.  
Write a PHP script to create a cookie with name as username with  
student name as value that automatically expires after 60 minutes.*/ 
 
$cookie_name = "bca_5"; 
$cookie_value = "bca_student"; 
setcookie($cookie_name, $cookie_value, time() + 1800, "/"); // 3600 is 60 minutes 
 
if(!isset($_COOKIE[$cookie_name])) { 
    echo "Cookie named '" . $cookie_name . "' is not set!"; 
} else { 
    echo "Cookie '" . $cookie_name . "' is set!<br>"; 
    echo "Value is: " . $_COOKIE[$cookie_name]; 
} 
?>