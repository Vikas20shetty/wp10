<?php
$bname   = $_POST["bookID"]   ?? "";
$btitle  = $_POST["bookTitle"]?? "";
$bprice  = $_POST["bookPrice"]?? "";
$bcopies = $_POST["bookCopies"]?? "";

if(empty($bname) || empty($btitle) || empty($bprice) || empty($bcopies)) 
    echo "Fields cannot be empty";

elseif(!is_numeric($bprice)) 
    echo "Price cannot be anything else than digits";

elseif($bprice <= 0 || $bcopies <= 0) 
    echo "Price and Copies cannot be negative";

else 
    echo "Form data is validated";

?>
