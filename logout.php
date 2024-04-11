<?php
// Start the session
session_start();

// Check if user is logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // Clear all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Display a message
    $message = "You have been successfully logged out.";
} else {
    // If user is not logged in, redirect to index.php
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <!-- Display confirmation message -->
    <script>
        if(confirm("<?php echo $message; ?>")) {
            // Redirect to index.php after confirmation
            window.location.href = "index.php";
        } else {
            // Redirect to index.php if confirmation is not accepted
            window.location.href = "index.php";
        }
    </script>
</body>
</html>
