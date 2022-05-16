<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include 'links/links.php'; ?>
    <style><?php include 'css/styles.css'; ?></style>
</head>
<body>
  <header>
    <div class="container">
      <a href="index.html">
        <img src="https://cdn.freecodecamp.org/testable-projects-fcc/images/product-landing-page-logo.png" alt="original trombones logo" class="company-logo">
      </a>
      <nav class="nav-top">
        <ul>
          <li><a href="#features">Hello, <?php echo  $_SESSION['name'] ?></a></li>
          <!-- <li><a href="#features">Features</a></li>
          <li><a href="#how_it_works">How It Works</a></li>
          <li><a href="#pricing">Pricing</a></li> -->
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="form-section">
      <h1>Handcrafted, home-made masterpieces</h1>
      <form action="#">
        <input type="email" name="email" placeholder="Enter your email address" required>
        <br>
        <button type="submit">Get Started</button>
      </form>
    </div>

    <div id="features" class="features-section">
      <div class="main-container">
        <div class="feature">
          <i class="fa-solid fa-fire-flame-curved icon"></i>
          <div class="feature-text">
            <h2>Premium Materials</h2>
            <p>Our trombones use the shiniest brass which is sourced locally. This will increase the longevity of your purchase.</p>
          </div>
        </div>
        <div class="feature">
          <i class="fa-solid fa-truck icon"></i>
          <div class="feature-text">
            <h2>Fast Shipping</h2>
            <p>We make sure you recieve your trombone as soon as we have finished making it. We also provide free returns if you are not satisfied.</p>
          </div>
        </div>
        <div class="feature">
          <i class="fa-solid fa-battery-full icon"></i>
          <div class="feature-text">
            <h2>Quality Assurance</h2>
            <p>For every purchase you make, we will ensure there are no damages or faults and we will check and test the pitch of your instrument.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="how_it_works" class="how_it_work-section">
      <div class="main-container">
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/y8Yv4pnO7qc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div id="pricing" class="pricing-section">
      <div class="main-container">
        <div class="card">
          <div class="card-title">Tenor Trombone</div>
          <h2>$600</h2>
          <p>Lorem ipsum.</p>
          <p>Lorem ipsum.</p>
          <p>Lorem ipsum dolor.</p>
          <p>Lorem ipsum.</p>
          <button>Select</button>
        </div>
        <div class="card">
          <div class="card-title">Bass Trombone</div>
          <h2>$900</h2>
          <p>Lorem ipsum.</p>
          <p>Lorem ipsum.</p>
          <p>Lorem ipsum dolor.</p>
          <p>Lorem ipsum.</p>
          <button>Select</button>
        </div>
        <div class="card">
          <div class="card-title">Valve Trombone</div>
          <h2>$1200</h2>
          <p>Plays similar to a Trumpet</p>
          <p>Great for Jazz Bands</p>
          <p>Lorem ipsum dolor.</p>
          <p>Lorem ipsum.</p>
          <button>Select</button>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <nav class="nav-bottom">
        <ul>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <p><small>Copyright 2016, Original Trombones</small></p>
    </div>
  </footer>
</body>
</html>