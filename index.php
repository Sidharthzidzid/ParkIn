<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ParkIN</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="inex.css" />
    <script src="script.js" defer></script>
    <meta charset="UTF-8">
</head>
<body>
    <div id="preloader"></div>
    <div class="main-container">
      <div class="flex-row-f">
        <div class="nav-bar" data-aos="slide-left">
          <div class="frame">
            <div class="nav-tem"><span class="home">About us</span></div>
            <div class="nav-tem-1"> <a href="http://localhost/vpms/admin/dashboard.php"
                ><span class="home-4">Admin</span></a
              >
            </div>
            <div class="nav-tem-3">
              <a href="login.html"
                ><span class="home-4">Login</span></a
              >
            </div>
            <div class="nav-tem-5"><span class="home-6">Parking</span></div>
            <div class="nav-tem-7"><span class="home-8">Map</span></div>
            <div class="nav-tem-9"> <a href="logout.php"
                ><span class="home-4">Logout</span></a
              >
            </div>
          </div>
          <div class="nav-button">
            <span class="contact-us">Contact us</span>
          </div>
        </div>
        <div class="speed-alt-duotone"></div>
        <span class="parkin">ParkIN</span>
        <div
          class="hero-wrapper"
          data-aos="fade-up"
          data-aos-offset="300"
          data-aos-mirror="true"
          data-aos-once="false"
        >
          <div class="hero-wrapper-text">
            <div class="header-text">
            <div>  
    <?php if (isset($user)): ?>
        
        <h1 style="color: white;">Hello <?= htmlspecialchars($user["first_name"]) ?></h1>
  
      <?php else: ?>
          
          
      <?php endif; ?>
      </div>
              <div class="h-primary-text">
                <span class="parkin-b">ParkIN</span
                ><span class="line-break"> <br /></span
                ><span class="the-advanced-park">The advanced Park</span
                ><span class="space"> </span
                ><span class="assistant">assistant</span>
              </div>
              
              <span class="span-decorative-text"
                >Our state-of-the-art parking facility is designed to cater to
                your parking needs with ease, providing a seamless experience
                from entrance to exit.<br />Discover the ease and convenience of
                hassle-free parking with us.
              </span>
            </div>
            <button>
              <span class="lets-get-started">Let's get started!</span>
            </button>
          </div>
          <div class="hero-wrapper-image">
            <div class="hero-wrapper-image-center">
              <div
                class="web-development"
                data-aos="fade-left"
                data-aos-mirror="true"
                data-aos-once="false"
              ></div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-row-dcd">
        <div
          class="parkin-the-ultimate-parking-assistant"
          data-aos="fade-right"
          data-aos-mirror="true"
          data-aos-once="false"
        >
          <span class="parkin-the-ultimate-parking"
            >ParkIN: The Ultimate Parking </span
          ><span class="assistant-for-your-city">Assistant for Your City</span>
        </div>
        <div class="gif"
          data-aos="fade-left"
          data-aos-mirror="true"
          data-aos-duration="10000"
          data-aos-once="false"
        >
        </div>
        <div data-aos="flip-up" data-aos-mirror="true" data-aos-once="false">
          <span class="parkin-description"
            >ParkIN is a website that offers an advanced parking assistant
            service for drivers who want to find, reserve, and pay for parking
            spaces in their city. ParkIN uses state-of-the-art technology to
            provide a seamless and hassle-free parking experience from entrance
            to exit. ParkIN also helps drivers save money and time by finding
            the best parking deals and avoiding traffic congestion. ParkIN is
            the ultimate solution for anyone who wants to enjoy the convenience
            and comfort of parking within city limits.</span
          >
        </div>
      </div>
      <div data-aos="fade-in"
      data-aos-mirror="true"
      data-aos-duration="1000"
      data-aos-once="false"
      ><span class="services-we-offer">Services we offer</span></div>
      <div class="wrapper"
      data-aos="fade-out"
      data-aos-mirror="true"
      data-aos-once="false"
      data-aos-duration="9000"
      >
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="img-1.jpg" alt="img" draggable="false"></div>
            <h2>Blanche Pearson</h2>
            <span>Sales Manager</span>
          </li>
          <li class="card">
            <div class="img"><img src="img-2.jpg" alt="img" draggable="false"></div>
            <h2>Joenas Brauers</h2>
            <span>Web Developer</span>
          </li>
          <li class="card">
            <div class="img"><img src="img-3.jpg" alt="img" draggable="false"></div>
            <h2>Lariach French</h2>
            <span>Online Teacher</span>
          </li>
          <li class="card">
            <div class="img"><img src="img-4.jpg" alt="img" draggable="false"></div>
            <h2>James Khosravi</h2>
            <span>Freelancer</span>
          </li>
          <li class="card">
            <div class="img"><img src="img-5.jpg" alt="img" draggable="false"></div>
            <h2>Kristina Zasiadko</h2>
            <span>Bank Manager</span>
          </li>
          <li class="card">
            <div class="img"><img src="img-6.jpg" alt="img" draggable="false"></div>
            <h2>Donald Horton</h2>
            <span>App Designer</span>
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
      <div class="ellipse"></div>
          <div class="ellipse-24"></div>
          <div class="ellipse-25"></div>
          <div class="ellipse-26"></div>
          <div class="ellipse-27"></div>
        </div>
      </div>
      <div class="line"></div>
      <div class="flex-row-ceb"
      data-aos="fade-left"
                data-aos-mirror="true"
                data-aos-once="false">
        <span class="about-us">About us</span>
        <div class="rectangle-2a"></div>
      </div>
      <div class="flex-row-da">
        <div class="ellipse-2b"
        data-aos="fade-right"
                data-aos-mirror="true"
                data-aos-once="false"></div>
        <div class="ellipse-2c"
        data-aos="zoom-in"
                data-aos-mirror="true"
                data-aos-once="false"></div>
        <div class="ellipse-2d"
        data-aos="fade-left"
                data-aos-mirror="true"
                data-aos-once="false"></div>
      </div>
      <div class="flex-row-b">
        <div class="sidharth-v-nair"
        data-aos="fade-right"
                data-aos-mirror="true"
                data-aos-once="false">
          <span class="span-sidharth-v-nair">Sidharth V Nair<br /><br /></span
          ><span
            class="span-jkcs-rd-year-th-sem-computer-science-and-engineering-aj-institute-of-engineering-and-technology-mangaluru"
            >4JK21CS062<br />3rd Year 5th Sem<br />Computer Science and
            Engineering<br />A J Institute of Engineering and Technology,<br />Mangaluru.<br
          /></span>
        </div>
        <div class="akshatha-shetty"
        data-aos="zoom-in"
                data-aos-mirror="true"
                data-aos-once="false">
          <span class="span-akshatha-shetty">Akshatha Shetty<br /><br /></span
          ><span
            class="span-jkcs-rd-year-th-sem-computer-science-and-engineering-aj-institute-of-engineering-and-technology-mangaluru-2e"
            >4JK21CS062<br />3rd Year 5th Sem<br />Computer Science and
            Engineering<br />A J Institute of Engineering and Technology,<br />Mangaluru.<br
          /></span>
        </div>
        <div class="spoorthi-shet"
        data-aos="fade-left"
                data-aos-mirror="true"
                data-aos-once="false">
          <span class="span-spoorthi-shet">Spoorthi Shet<br /><br /></span
          ><span
            class="span-jkcs-rd-year-th-sem-computer-science-and-engineering-aj-institute-of-engineering-and-technology-mangaluru"
            >4JK21CS065<br />3rd Year 5th Sem<br />Computer Science and
            Engineering<br />A J Institute of Engineering and Technology,<br />Mangaluru.</span
          >
        </div>
      </div>
      <span class="feedback"> Feedback</span
      >      <form action="feedback.php" method="post">
          <span class="email"><label for="email">Email_Id</label></span
          ><br />
          <input
            type="email"
            id="email"
            name="email"
            placeholder="ParkIN@gmail.com"
            required
          /><br />
          <span class="comment"><label for="comment">Comment</label></span
          ><br />
          <textarea
            type="text"
            id="text"
            name="text"
            placeholder="Type your thoughts......"
            required
            ></textarea>
          <br /><br />
          <input type="submit" value="Submit" />
        </form>
        <div class="flex-row-ac">
          <div class="speed-alt-duotone-2c"></div>
          <span class="contact-us-2d">Contact us</span
          ><span class="parkin-2e">ParkIN</span>
        </div>
        <div class="flex-row-b">
          <span class="lorem-ipsum">
            Mangalore, AJIET, chowki Humbankatta ,karnataka</span
          ><span class="lorem-ipsum-2f"
            >ParkIN is a proud partner of the Smart City Initiative, a global
            network of cities that use technology to improve urban living. Learn
            more about how we are making parking smarter, safer, and
            greener.</span
          >
        </div>
        <span class="contact-details"
          >+918590895582<br />+916366348456<br />+918310673251</span
        >
        <div class="flex-row-c">
          <div class="group-30"></div>
          <div class="group-31"></div>
          <div class="group-32"></div>
          <div class="group-33"></div>
          <div class="group-34"></div>
        </div>
        <div class="line-34"></div>
        <span class="copyright"
          >© 2024 Copyright by parkin. All rights reserved.</span
        >
      </div>
      <div class="line-35"></div>
      <div class="line-36"></div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function () {
        loader.style.display = "none";
      });
    </script> 
</body>
</html>