<?php
if(isset($_POST['submit'])){
    $to = "dropyounow@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['bericht'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message);
    echo "gelukt!";
}

?>

<html>
<body>
<?php echo $_POST['firstname'];?>
<h1>Poep</h1>
</body>
</html>

