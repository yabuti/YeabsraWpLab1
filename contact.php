<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $message = $_POST['message'];

    // Insert data into database
    $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
// Validate phone number and email
if (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo '<script>alert("Please enter a valid 10-digit phone number.");</script>';
    echo '<script>window.location.href = "contact.php";</script>';
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/@gmail.com$/", $email)) {
    echo '<script>alert("Please enter a valid Gmail address.");</script>';
    echo '<script>window.location.href = "contact.html";</script>';
    exit();
}
    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("thank you for contact us!");</script>';
        echo '<script>window.location.href = "home.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>