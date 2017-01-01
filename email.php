<?php
if($_POST){
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $message = $_POST['contactMessage'];

//send email
    mail("rakholiabrijesh@gmail.com", "Hello " .$email, $message);
}
?>