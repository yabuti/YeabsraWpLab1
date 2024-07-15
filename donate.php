<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $donationType = $_POST['donationType'];
    $amount = $_POST['amount'];

    // Validate form data
    if (empty($name) || empty($email) || empty($address) || empty($donationType) || empty($amount)) {
        echo "<script>alert('All fields are required.'); window.location='donate.html';</script>";
    } else {
        // Database connection
        $servername = "localhost";
        $username = "root"; // Your MySQL username
        $password = ""; // Your MySQL password
        $dbname = "finall"; // Your MySQL database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $sql = "INSERT INTO donation (name, email, address, donationType, amount) VALUES ('$name', '$email', '$address', '$donationType', '$amount')";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Thank you for your donation!'); window.location='home.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
}
?>
