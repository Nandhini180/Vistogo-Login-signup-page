<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="stylet.css" />
    <title>Website | VistoGo</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <a href="logout.php">Logout</a>
    <nav>
        <div class="nav__logo"><a href="#">VistoGo</a></div>
        <ul class="nav__links">
            <li><a href="#">Home</a>
                <ul class="dropdown">
                    <li><a href="#">Main</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ</a>
                        <ul class="sub-dropdown">
                            <li><a href="#">General</a></li>
                            <li><a href="#">Travel Tips</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Blog</a>
                <ul class="dropdown">
                    <li><a href="#">Latest Posts</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">Travel Tips</a>
                        <ul class="sub-dropdown">
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Packing Guide</a></li>
                            <li><a href="#">Budget Travel</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Offers</a>
                <ul class="dropdown">
                    <li><a href="#">Special Discounts</a></li>
                    <li><a href="#">Holiday Packages</a></li>
                    <li><a href="#">Last Minute Deals</a></li>
                </ul>
            </li>
            <li><a href="#">Services</a>
                <ul class="dropdown">
                    <li><a href="#">Hotel Booking</a></li>
                    <li><a href="#">Flight Booking</a>
                        <ul class="sub-dropdown">
                            <li><a href="#">Domestic</a></li>
                            <li><a href="#">International</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Car Rentals</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="login.php" class="btn-login">Login</a></li>
            <li><a href="signup.php" class="btn-signup">Signup</a></li>
        </ul>
    </nav>

    <header>
      <div class="section__container">
        <div class="header__content">
          <h1>WORLD EXPLORATION</h1>
          <p>
            
Explore the world, one unforgettable journey at a time! 
From hidden gems to iconic landmarks, let every trip be a story worth telling. 
Whether you seek adventure, relaxation, or cultural wonders, the world is waiting for you. 
Discover breathtaking destinations, unique experiences, and seamless travel planning. 
Pack your bags, chase your dreams, and make memories that last a lifetime..!
          </p>
          <button>Read more</button>
        </div>
      </div>
    </header>

    <section class="journey__container">
      <div class="section__container">
        <h2 class="section__title">Start Your Journey</h2>
        <p class="section__subtitle">The most searched countries in January</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="country-1.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Santorini, Greece</span>
            </div>
          </div>
          <div class="country__card">
            <img src="country-2.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Vernazza, Italy</span>
            </div>
          </div>
          <div class="country__card">
            <img src="country-3.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>San Francisco</span>
            </div>
          </div>
          <div class="country__card">
            <img src="country-4.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>navagio, Greece</span>
            </div>
          </div>
          <div class="country__card">
            <img src="country-5.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Ao Nang, Thailand</span>
            </div>
          </div>
          <div class="country__card">
            <img src="country-6.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Phi Phi Island, Thailand</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="banner__container">
      <div class="section__container">
        <div class="banner__content">
          <h2>Discount 20-40% Off</h2>
          <p>
            Travel the world on a budget with our unbeatable discounted travel
            deals. Whether you're looking for a last-minute escape or planning
            ahead, we've got you covered with incredible discounts on flights,
            hotels, and packages. Don't wait, book now and experience the
            adventure of a lifetime without breaking the bank.
          </p>
          <button>See More</button>
        </div>
      </div>
    </section>

    <section class="display__container">
      <div class="section__container">
        <h2 class="section__title">Why Choose Us</h2>
        <p class="section__subtitle">
          The gladdest moment in human life, is a departure into unknown lands.
        </p>
        <div class="display__grid">
          <div class="display__card grid-1">
            <img src="Pi7_Tool_grid-4.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-earth-line"></i>
            <h4>Passionate Travel</h4>
            <p>Fuel your passion for adventure and discover new horizons</p>
          </div>
          <div class="display__card">
            <img src="grid-5.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <img src="grid-7.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-road-map-line"></i>
            <h4>Beautiful Places</h4>
            <p>Uncover the world's most breathtakingly beautiful places</p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="section__container">
        <h4>VistoGo</h4>
        <div class="social__icons">
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-linkedin-fill"></i></span>
        </div>
        <p>
          Travel makes one modest. You see what a tiny place you occupy in the
          world.
        </p>
      </div>
    </footer>
  </body>
</html>    

  