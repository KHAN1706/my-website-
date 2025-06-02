<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $message = $_POST["message"];
    
    // Save data to a text file (Replace with DB if needed)
    $file = fopen("responses.txt", "a");
    fwrite($file, "Name: $name, Email: $email, Contact: $contact, Message: $message\n");
    fclose($file);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
}
?>
