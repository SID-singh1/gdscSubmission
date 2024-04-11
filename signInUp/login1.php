<?php
session_start();

require_once "../config.php"; // Include database connection file

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = trim($_POST["usernameOrEmail"]);
    $password = trim($_POST["password"]);

    // Validate username or email
    if(empty($usernameOrEmail)){
        echo "Please enter username or email.";
        exit;
    }

    // Validate password
    if(empty($password)){
        echo "Please enter your password.";
        exit;
    }

    // Prepare a select statement
    $sql = "SELECT id, username, email, password FROM users WHERE username = ? OR email = ?";

    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ss", $param_usernameOrEmail, $param_usernameOrEmail);

        // Set parameters
        $param_usernameOrEmail = $usernameOrEmail;

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Store result
            $stmt->store_result();

            // Check if username/email exists, if yes then verify password
            if($stmt->num_rows == 1){
                // Bind result variables
                $stmt->bind_result($id, $username, $email, $db_password);
                if($stmt->fetch()){
                    if($password === $db_password){
                        // Password is correct, start a new session
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;

                        // Redirect user to index.html
                        echo "<script>alert('Sign in successful. Welcome, " . $_SESSION["username"] . "');</script>";
                        header("location: ../index.php?login=success");
                    } else{
                        // Display an error message if password is not valid
                        echo "<script>alert('Invaild password');</script>";
                    }
                }
            } else{
                // Display an error message if username/email doesn't exist
                echo "No account found with that username or email";
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>