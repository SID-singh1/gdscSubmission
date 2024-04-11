<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serenity Seeker</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--header starts-->

    <header class="header">
      <a href="#" class="logo"
        ><i class="fas fa-heartbeat"></i>Serenity Seeker</a>
        <nav class="navbar">
          <a href="../index.php#home">Home</a>
          <a href="../index.php#services">Services</a>
          <a href="../index.php#about">Insight</a>
          <a href="../index.php#doctors">Doctors</a>
          <a href="../index.php#book">Book</a>
          <a href="../index.php#review">Review</a>
        </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <section class="book" id="book">
      <h1 class="heading">Book <span>Now</span></h1>

      <div class="row">
        <div class="image">
          <img src="../images/review.svg" />
        </div>
        <?php
        session_start();
require_once "../config.php"; // Include database connection file
if(isset($_GET['success'])) {
    echo "<script>alert('yo');</script>";
  unset($_SESSION['username']);
    $username = '';
    $age = '';
    $number = '';
} else if(isset($_SESSION['username'])) {
    // User is logged in, prefill the form fields
    $username = $_SESSION['username'];

    // Prepare a select statement to fetch user data
    $sql = "SELECT age, mobileNumber FROM users WHERE username = ?";
    
    if($stmt = $mysqli->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("s", $username);
        
        // Execute the statement
        $stmt->execute();
        
        // Bind result variables
        $stmt->bind_result($age, $number);
        
        // Fetch the result
        $stmt->fetch();
        
        // Close the statement
        $stmt->close();
    }
} else {
  $username = '';
  $age = '';
  $number = '';
}

?>
        
        <form id="reviewForm" action="" method="post">
          <h3>Write your review</h3>
          <input type="text" name="username" placeholder="Your name" class="box" value="<?php echo $username; ?>" />
    <input type="number" name="age" placeholder="Your age" class="box" value="<?php echo $age; ?>" />
    <input type="number" name="number" placeholder="Your number" class="box" value="<?php echo $number; ?>" />
          <input type="date" class="box" required />
          <div class="rating">
            <input type="radio" id="star5" name="rating" value="5" required />
            <label for="star5" title="5 stars">5 stars</label>
            <input type="radio" id="star4" name="rating" value="4" required />
            <label for="star4" title="4 stars">4 stars</label>
            <input type="radio" id="star3" name="rating" value="3" required />
            <label for="star3" title="3 stars">3 stars</label>
            <input type="radio" id="star2" name="rating" value="2" required />
            <label for="star2" title="2 stars">2 stars</label>
            <input type="radio" id="star1" name="rating" value="1" required />
            <label for="star1" title="1 star">1 star</label>
          </div>
          <textarea placeholder="Write your review here" class="box" required></textarea>
          <input
            type="submit"
            value="Submit Review"
            class="btn"
            onclick="if(!this.form.checkValidity()) return false; alert('Review submitted successfully')"
          />
        </form>
        
      </div>
    </section>

    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box">
          <h3>Quick links</h3>
          <a href="../index.php#home"><i class="fas fa-chevron-right"></i>Home</a>
          <a href="../index.php#services"><i class="fas fa-chevron-right"></i>Services</a>
          <a href="../index.php#about"><i class="fas fa-chevron-right"></i>Insight</a>
          <a href="../index.php#doctors"><i class="fas fa-chevron-right"></i>Doctors</a>
          <a href="../index.php#book"><i class="fas fa-chevron-right"></i>Book</a>
          <a href="../index.php#review"><i class="fas fa-chevron-right"></i>Review</a>
        </div>
        <div class="box">
          <h3>Our services</h3>
          <a href="../Quiz/quiz.html"><i class="fas fa-chevron-right"></i>Quick Diagnosis</a>
          <a href="../Guide/index.php"><i class="fas fa-chevron-right"></i>DIY Guide </a>
          <a href="../Support/index.php"><i class="fas fa-chevron-right"></i>Support forums</a>
          <a href="../QNA/qna.html"><i class="fas fa-chevron-right"></i>Qna with doctor</a>
        </div>
        <div class="box">
          <h3>Contact us</h3>
          <a href="#"><i class="fas fa-phone"></i>+91 000 000 0000</a>
          <a href="#"><i class="fas fa-phone"></i>+91 999 999 9999</a>
          <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
          <a href="#"><i class="fas fa-envelope"></i>def@gmail.com</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>Tamil Nadu,India</a>
        </div>
        <div class="box">
          <h3>Follow us</h3>
          <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"><i class="fab fa-twitter"></i>Instagram</a>
          <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
      </div>
    </section>
    <script>
      document.getElementById("reviewForm").addEventListener("submit", function(event) {
        if (this.checkValidity()) {
          event.preventDefault();
          window.location.href = "../index.php";
        }
      });
    </script>
    
  </body>
</html>
