<?php 
if(isset($_POST['submit'])){
    $to = "mcgerver@optonline.net"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $phonenumber = "Phone:" . $_POST['phone'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    ?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="images/favicon.ico" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>613 Lab</title>
  </head>

  <body>

    <header>
      <a href="index.html"><img class="logo" src="images/613lab-white.png" alt="613 Logo" /></a>
      <div class="col-sm-3 cta-button">
        <button class="btn btn-primary"><a href="apply.html">APPLY NOW</a></button>
      </div>

      <div class="ham" id="ham">
        <span class="ham_line ham_line1"></span>
        <span class="ham_line ham_line2"></span>
        <span class="ham_line ham_line3"></span>
      </div>

      <div class="menu_wrapper" id="menu_wrapper">
        <div class="menu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="apply.html">Apply</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
      </div>

      
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="apply.html">Apply</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <img class="header-img" src="images/contactimg.jpg" alt="contact header image" />
      <div class="col-sm-12">
        <h1>Contact Us</h1>
        <?php 
            echo "Thank you for your submission, " . $name . ", we will contact you shortly.";
            //('Location: thank_you.html'); //to redirect to another page.
            // You cannot use header and echo together. It's one or the other.
            }
        ?>
        <div class="apply-link">
          <a class="apply-link" href="apply.html">Go to Application Page >></a>
        </div>
      </div>

      <!-- 
      <form action="mail_handler.php" method="post">
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        Email: <input type="text" name="email"><br>
        Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      -->

    </main>

    <footer>
      <div class="col-sm-4 address">
        <p>949 Clark Ave W <br />
        Vaughan, Ontario L4J 8G6 <br />
        Canada</p>
      </div>
      <div class="col-sm-4 footer-logo">
        <a href="index.html"><img class="footerlogo" src="images/613lab1.png" /></a>
      </div>
      <div class="col-sm-4 social-media-links">
        <a href="https://www.facebook.com/TorontoAishPro" target="_blank"><img class="fbicon" src="images/facebook.png" /></a>
        <a href="https://www.linkedin.com/company/613lab/" target="_blank"><img class="linkedinicon" src="images/linkedin.png" /></a>
      </div>
      <br />
    </footer>

    <script type="text/javascript" src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
