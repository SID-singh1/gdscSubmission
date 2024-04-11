<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serenity Seeker</title>
    <link rel="stylesheet" href="style.css" />
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
    <style>
        .user-dropdown {
            position: relative;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            padding: 3px;
            border: 0;
            box-shadow: 0;
            font-size: 1.5rem;
            color: var(--green);
            border: var(--border);
  border-radius: 0.5rem;
        }
        .dropdown:hover {
          position: relative;
            display: inline-block;
            padding: 0;
            border: 0;
            border: var(--border);
            transform: scale(1.1);
            padding: 3px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .username {
            background-color: #ddd;
        }

    </style>
  </head>
  <body>
    <!--header starts-->

    <header class="header">
      <a href="#" class="logo"
        ><i class="fas fa-heartbeat"></i>Serenity Seeker</a
      >

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">Insight</a>
        <a href="#doctors">doctors</a>
        <a href="#book">book</a>
        <a href="#review">review</a>
      </nav> 


      <div class="user-dropdown">
        <?php
        session_start();
        if (isset($_GET['success'])) {
          // Account deleted successfully, display a message or remove the dropdown
          echo  "<script>alert('account deleted successfully');</script>";
          echo '<button class="signIn" onclick="redirectToSignIn()">Sign In / Sign Up</button>';
          // OR
          // echo ''; // Remove user dropdown element (optional)
        } else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
          // If user is logged in, display their username with dropdown menu
          echo '<div class="dropdown">';
          echo '<span class="username">' . $_SESSION["username"] . '<i class="fas fa-caret-down"></i></span>';
          echo '<div class="dropdown-content">';
          echo '<a href="#" onclick="confirmLogout()">Logout</a>';
          echo '<a href="#" onclick="confirmDelete()">Delete Data</a>';
          echo '</div>';
          echo '</div>';
        } else {
          // If user is not logged in, display sign in / sign up button
          echo '<button class="signIn" onclick="redirectToSignIn()">Sign In / Sign Up</button>';
        }
        ?>
    </div>
    </header>

    <!--Header section ends-->
    <!-- home section starts -->

    <section class="home" id="home">
      <div class="row">
        <div class="image">
          <img src="images/Home-img.svg" alt="" />
        </div>

        <div class="content">
          <h3>Stay safe,Stay Healthy</h3>
          <p>
            Welcome to Serenity Seeker, where your mental well-being matters
            most.Whether you're experiencing anxiety, depression, or stress,
            know that you're not alone. Take the first step towards a brighter
            tomorrow by exploring our resources, seeking professional guidance,
            and discovering strategies for self-care. Your mental health
            matters, and we're here to help you find the serenity you deserve.
          </p>
          <!-- <a href="#footer" class="btn">Contact us<span class="fas fa-chevron-right"></span></a> -->
        </div>
      </div>
    </section>

    <!-- home section ends -->

    <!--icon starts here-->

    <section class="icon-container">
      <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>doctors at work</p>
      </div>
      <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
      </div>
      <div class="icons">
        <i class="fa-solid fa-handshake"></i>
        <h3>500+</h3>
        <p>colaborative partners</p>
      </div>
    </section>
    <!--icon ends here-->

    <!-- service sections starts-->
    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-notes-medical"></i>
          <h3>Quick Diagnosis</h3>
          <p>
            Quick Diagnosis quizzes are efficient tools for identifying
            potential mental health concerns like anxiety, depression, ADHD, and
            others. These assessments offer streamlined evaluations, guiding
            individuals towards appropriate support and resources for managing
            their well-being effectively.
          </p>
          <a href="./Quiz/quiz.html" class="btn"
            >Learn more <span class="fas fa-chevron-right"></span
          ></a>
        </div>
        <div class="box">
          <i class="fas fa-user-md"></i>
          <h3>DIY guide to deal with problems</h3>
          <p>
            A DIY healing guide provides practical techniques for addressing
            mental health challenges independently. From anxiety and depression
            to ADHD and more, these guides offer tailored strategies, fostering
            self-awareness and resilience for improved well-being.
          </p>
          <a href="./Guide/index.html" class="btn"
            >Learn more <span class="fas fa-chevron-right"></span
          ></a>
        </div>
        <div class="box">
          <i class="fa-regular fa-thumbs-up"></i>
          <h3>Support forums</h3>
          <p>
            Connect with others facing similar mental health challenges. Find
            understanding, share experiences, and access support groups via our
            social media links. Remember, you're not alone. Together, we can
            navigate this journey toward healing and resilience
            <br>
            <br>
            <br>
          </p>
          <a href="./Support/index.html" class="btn"
            >Learn more <span class="fas fa-chevron-right"></span
          ></a>
        </div>
        <div class="box">
          <i class="fa-solid fa-question"></i>          <h3>QNA with Doctor</h3>
          <p>
       Drop a question and let our doctors help you!
          </p>
          <a href="./QNA/qna.html" class="btn"
            >Learn more <span class="fas fa-chevron-right"></span
          ></a>
        </div>
      </div>
    </section>
    <!-- service section ends -->

    <!-- About section starts -->
    <section class="about" id="about">
      <h1 class="heading">
        Daily Insights:<span> Expert Advice from Our Doctors</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/Doctors-bro.svg" alt="" />
        </div>

        <div class="content">
          <h3>We take care of your healthy life</h3>
          <p>
            Welcome to our daily advice section, where our team of dedicated
            doctors offers valuable insights and guidance to support your mental
            well-being journey. Each day, our experts share practical tips,
            thoughtful reflections, and evidence-based strategies to help you
            navigate life's challenges and cultivate greater resilience and
            positivity. Whether you're seeking encouragement, coping strategies,
            or simply a daily dose of inspiration, our doctors are here to
            provide the support and guidance you need to thrive mentally and
            emotionally
          </p>
          <a href="./insight/index_in.html" class="btn"
            >Check it out!<span class="fas fa-chevron-right"></span
          ></a>
        </div>
      </div>
    </section>
    <!-- About section ends -->

    <!-- doctor section starts -->

    <section class="doctors" id="doctors">
      <h1 class="heading">Our <span>Doctors</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/doc1.jpg" />
          <h3>Doctor Aria</h3>
          <span>Psychiatrist</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/doc2.jpg" />
          <h3>Doctor Katara</h3>
          <span>Psychologist</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/doc3.jpeg" />
          <h3>Doctor William</h3>
          <span>Psychologist</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/doc4.jpeg" />
          <h3>Doctor Tyrone</h3>
          <span>Psychologist</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/doc5.jpeg" />
          <h3>Doctor Bill</h3>
          <span>Psychiatrist</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/doc6.jpg" />
          <h3>Doctor Rishi</h3>
          <span>Psychiatrist</span>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>
      <a
        style="padding: 10px; font-weight: bold"
        href="./more_doctor/index_doc.html"
        class="btn"
        >See all Doctors<span class="fas fa-chevron-right"></span
      ></a>
    </section>

    <!-- doctor sectione ends -->

    <!-- book section starts -->
<section class="book" id="book">
      <h1 class="heading">Book <span>Now</span></h1>

      <div class="row">
        <div class="image">
          <img src="images/book.svg" />
        </div>
        <?php
require_once "config.php"; // Include database connection file
if(isset($_GET['success'])) {
  unset($_SESSION['username']);
    $username = '';
    $age = '';
    $number = '';
    $email = '';
} else if(isset($_SESSION['username'])) {
    // User is logged in, prefill the form fields
    $username = $_SESSION['username'];
    // echo "<script>alert('Welcome back, " . $username . "! You are now logged in.');</script>";

    // Prepare a select statement to fetch user data
    $sql = "SELECT age, mobileNumber, email FROM users WHERE username = ?";
    
    if($stmt = $mysqli->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("s", $username);
        
        // Execute the statement
        $stmt->execute();
        
        // Bind result variables
        $stmt->bind_result($age, $number, $email);
        
        // Fetch the result
        $stmt->fetch();
        
        // Close the statement
        $stmt->close();
    }
} else {
    // User is not logged in, set default values for form fields
    $username = '';
    $age = '';
    $number = '';
    $email = '';
}
?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Your name" class="box" value="<?php echo $username; ?>" />
    <input type="number" name="age" placeholder="Your age" class="box" value="<?php echo $age; ?>" />
    <input type="number" name="number" placeholder="Your number" class="box" value="<?php echo $number; ?>" />
    <input type="email" name="email" placeholder="Email" class="box" value="<?php echo $email; ?>" />
    <input type="date" name="appointment_date" class="box" />
    <input type="submit" value="Book now" class="btn" onclick="alert('Appointment booked successfully')" />
</form>


      </div>
    </section>

    <!-- book section ends -->

    <!--Review starts-->
    <section class="review" id="review">
      <h1 class="heading">client's <span>review</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/pic1.jpeg" />
          <h3>Melissa</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="text">
            This website has been a lifeline for me. It facilitated easy access
            to empathetic mental health professionals who provided invaluable
            support and guidance. Through their expertise, I've gained a deeper
            understanding of my mental health and learned coping strategies. I
            highly recommend this platform to anyone in need
          </p>
        </div>
        <div class="box">
          <img src="images/pic2.jpeg" />
          <h3>John</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p class="text">
            Navigating mental health can be daunting, but this website makes it
            manageable. The seamless process of connecting with caring doctors
            and receiving tailored advice has been a game-changer for me. I've
            felt supported every step of the way and am grateful for the
            resources it offers
          </p>
        </div>
        <div class="box">
          <img src="images/pic3.jpeg" />
          <h3>Clementine</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p class="text">
            I can't overstate the positive impact this website has had on my
            mental well-being. From the ease of contacting knowledgeable doctors
            to the insightful advice provided, every aspect has been exemplary.
            It's a safe space where I feel understood and supported, making my
            mental health journey more manageable
          </p>
        </div>
      </div>
      <a
        style="padding: 10px; font-weight: bold"
        href="./more_review/index_rev1.html"
        class="btn"
        >See more reviews<span class="fas fa-chevron-right"></span
      ></a>
      <a
        style="padding: 10px; margin-left: 20px; font-weight: bold"
        href="./Write_review/index_rev.php"
        class="btn"
        >Write your own review<span class="fas fa-chevron-right"></span
      ></a>
    </section>
    <!--Review ends-->

    <!-- footer starts -->
    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box">
          <h3>Quick links</h3>
          <a href="#home"><i class="fas fa-chevron-right"></i>Home</a>
          <a href="#services"><i class="fas fa-chevron-right"></i>Services</a>
          <a href="#about"><i class="fas fa-chevron-right"></i>Insight</a>
          <a href="#doctors"><i class="fas fa-chevron-right"></i>Doctors</a>
          <a href="#book"><i class="fas fa-chevron-right"></i>Book</a>
          <a href="#review"><i class="fas fa-chevron-right"></i>Review</a>
        </div>
        <div class="box">
          <h3>Our services</h3>
          <a href="./Quiz/quiz.html"><i class="fas fa-chevron-right"></i>Quick Diagnosis</a>
          <a href="./Guide/index.html"><i class="fas fa-chevron-right"></i>DIY Guide </a>
          <a href="./Support/index.html"><i class="fas fa-chevron-right"></i>Support forums</a>
          <a href="./QNA/qna.html"><i class="fas fa-chevron-right"></i>Qna with doctor</a>
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
    <!-- footers ends -->
    <script>
    function confirmLogout() {
        if (confirm("Are you sure you want to logout?")) {
            // Redirect to logout.php
            window.location.href = "logout.php";
        }
    }
    function confirmDelete() {
        if (confirm("Are you sure you want to delete your data?")) {
            // Redirect to delete.php
            window.location.href = "delete.php";
        }
    }
      // document.addEventListener("DOMContentLoaded", function() {
      //     const urlParams = new URLSearchParams(window.location.search);
      //     const loginStatus = urlParams.get('login');
  
      //     if (loginStatus === 'success') {
      //         alert('Login successful!');
      //     }
      // });
  </script>
    <script src="./script.js"></script>
  </body>
</html>
