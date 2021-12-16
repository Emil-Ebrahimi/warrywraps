<?php
$to = "dropyounow@gmail.com";
$txt = "Hello world!";
$headers = "From: $email" . "\r\n" .
"CC: somebodyelse@example.com";

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['emailInfo'];
    $bericht = $_POST['comments']
    mail($to,$bericht,$firstname,$lastname,$headers);
    echo "gelukt!";
    
     }
?>