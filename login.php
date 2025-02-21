<?php
// Start session
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kemet";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();

        // Directly compare passwords (no hashing)
        if ($pass === $row['password']) {
            // Set session variable for the logged-in user
            $_SESSION['username'] = $row['username'];
            $_SESSION['logged_in'] = true; 
            // Redirect to the home page
            echo "<script>
            window.location.href = 'home.html;
          </script>";
          exit();

        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect password. Please try again.'); window.location.href='login.html';</script>";
        }
    } else {
        // Username does not exist
        echo "<script>alert('Incorrect username. Please try again.'); window.location.href='login.html';</script>";
    }

    $stmt->close(); // Close the prepared statement
}

// Close the connection
$conn->close();
?>
