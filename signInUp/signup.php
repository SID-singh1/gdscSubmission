<?php
require_once "../config.php"; // Include database connection file

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $age = trim($_POST["age"]);
    $number = trim($_POST["number"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validate username, age, number, email, and password here

    // Prepare an insert statement
    $sql = "INSERT INTO users (username, age, mobileNumber, email, password) VALUES (?, ?, ?, ?, ?)";

    if($stmt = $mysqli->prepare($sql)){ // Use $mysqli instead of $conn
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssss", $param_username, $param_age, $param_number, $param_email, $param_password);

        // Set parameters
        $param_username = $username;
        $param_age = $age;
        $param_number = $number;
        $param_email = $email;
        $param_password = $password; // Without hashing

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Display success alert
            echo "<script>alert('Sign up successful. You can now log in.');</script>";

            // Redirect to login page after a delay
            echo "<script>window.setTimeout(function(){ window.location.href = 'login1.html'; }, 3000);</script>";
        } else{
            echo "Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection (not necessary in this case)
    //$mysqli->close();
}
?>
