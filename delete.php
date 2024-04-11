<?php
// Include the config file to establish a database connection
include 'config.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if password is provided
    if (!empty($_POST['password'])) {
        $password = $_POST['password']; // Password provided by the user

        // Sanitize and escape the password input to prevent SQL injection
        $password = $mysqli->real_escape_string($password);

        // Perform a query to check if the password matches
        $sql = "SELECT id FROM users WHERE password = '$password'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // Password is correct, proceed with deletion
            $sql_delete = "DELETE FROM users WHERE password = '$password'";
            if ($mysqli->query($sql_delete) === TRUE) {
                // Record deleted successfully, redirect to index.php
                session_destroy();
                session_regenerate_id(true);
                header("Location: index.php?success=$successMessage"); // Redirect with message
                exit;
            } else {
                echo "Error deleting record: " . $mysqli->error;
            }
        } else {
            // Password is incorrect
            echo "Incorrect password. Deletion failed.";
        }
    } else {
        // Password not provided
        echo "Please provide your password to confirm deletion.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Record</title>
  <style>
    .heading {
  text-align: center;
  padding-bottom: 2rem;
  text-shadow: var(--text-shadow);
  text-transform: uppercase;
  color: var(--black);
  font-size: 3rem;
  letter-spacing: 0.4rem;
}
:root {
  --green: #16a085;
  --black: #444;
  --light-color: #777;
  --box-shadow: 0.5rem 0.5rem 0 rgba(22, 160, 133, 0.2);
  --text-shadow: 0.4rem 0.4rem 0 rgba(0, 0, 0, 0.1);
  --border: 0.2rem solid var(--green);
}

.heading span {
  text-transform: uppercase;
  color: var(--green);
}
.btn {
  display: inline-block;
  margin-top: 1rem;
  padding: 0.5rem;
  
  border: var(--border);
  border-radius: 0.5rem;
  box-shadow: var(--box-shadow);
  color: var(--green);
  cursor: pointer;
  font-size: 1.7 rem;
}

form{
    position:relative;
    left:23rem;
    border: var(--border);
  box-shadow: var(--box-shadow);
  text-align: center;
  width:50vw;
  padding:10px;
  
}

label{
    font-weight: bold;
    padding: 10px;
    font-size: large;
    color:var(---light-color);
}
  </style>
</head>
<body>
    <h1 class="heading">ACCOUNT DELETIon<span> CONFIRMATION</span></h1>
  <form method="post" onsubmit="return confirmDelete()">
    <label for="password">Enter your password to confirm deletion:</label><br>
    <input type="password" id="password" name="password"><br>
    <input class ="btn" type="submit" value="Delete">
  </form>

  <script>
    function confirmDelete() {
      if (confirm("Are you sure you want to delete your account?")) {
        // Form submission happens here
        return true; // Allow form submission
      } else {
        return false; // Prevent form submission
      }
    }

  </script>
</body>
</html>