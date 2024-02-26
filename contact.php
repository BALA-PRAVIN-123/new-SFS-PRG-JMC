<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the data (for demonstration purposes, just displaying it)
    echo " <br> <br> <br> <br> <br> <br> <br>";
    echo "<center><h2>Thank you for your message, $name!</h2></center> ";
    echo "<center><p>We will get back to you soon at $email.</p></center> ";
    echo "<center><p>Your message:<br>
    <br> $message...</p></center> <br><br>";
    echo "<center><button><a href='index.html'>Home</a></button></center>";
}
?>
