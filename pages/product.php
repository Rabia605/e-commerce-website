<?php
include('../includes/connect.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Document</title>
</head>

<body>

  <!-- Top Announcement Section -->
  <div class="announcement-bar">
    Stay Warm This Winter! Exclusive Deals Up to 50% Off Free Delivery!
    <a href="#" class="shop-now1">Shop Now</a>
  </div>

  <!-- Navbar -->
  <div class="navbar">
    <div class="sub-navbar">
      <!-- Logo -->
      <div class="logo"><a href="../index.php"><img src="../images/logo2.png" alt=""></a></div>

      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" class="search-input" placeholder="Search the products" />
        <a href="../index.php"><span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span></a>
      </div>

      <!-- Navbar Icons -->
      <div class="navbar-icons">
        <div class="navbar-icon"></div>
        <div class="navbar-icon">
          <img src="../images/flag.png" alt="Flag">
        </div>
        <div class="navbar-icon user">
          <a href="./login.html"><img src="../images/user (1).png" alt=""></a>
        </div>
        <div class="navbar-icon">
          <img src="../images/shopping-cart.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Categories and Main Navigation Bar -->
  <div class="nav-bar">
    <!-- Dropdown Categories Section -->
    <div class="dropdown">
      <span class="dropdown-toggle">Categories <i class="fa-solid fa-angle-down"></i></span>
      <div class="dropdown-menu">
        <div class="dropdown-column">
          <h3>Electronics</h3>
          <ul>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
        </div>
        <div class="dropdown-column">
          <h3>Clothing</h3>
          <ul>
            <li><a href="#">Men</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Kids</a></li>
          </ul>
        </div>
        <div class="dropdown-column">
          <h3>Home Appliances</h3>
          <ul>
            <li><a href="#">Kitchen</a></li>
            <li><a href="#">Laundry</a></li>
            <li><a href="#">Decor</a></li>
          </ul>

        </div>
      </div>
    </div>

    <!-- Main Navigation Links -->
    <a href="../index.php"> <span class="nav-item">Home</span></a>
    <a href="#"><span class="nav-item">Products</span></a>
    <a href="./about.html"><span class="nav-item">About us</span></a>
    <a href="./product.php"><span class="nav-item">Trending</span></a>
    <a href="./contact.html"><span class="nav-item">Contact us</span></a>
  </div>






  <!-- MAIN TOP -->
  <div class="container">
    <div class="main-section">
      <div class="overlay">
        <h1 class="main-text">Women Fashion</h1>
        <p class="sub-text">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
        <a href="#" class="shop-now">Shop Now</a>
      </div>
    </div>

    <div class="offer-sections">
      <div class="offer c1">
        <div class="offer-content">
          <h2>Special Offer</h2>
          <p>Save 20%</p>
          <a href="#" class="shop-now">Shop Now</a>
        </div>
      </div>
      <div class="offer c2">
        <div class="offer-content">
          <h2>Special Offer</h2>
          <p>Save 20%</p>
          <a href="#" class="shop-now">Shop Now</a>
        </div>
      </div>
    </div>
  </div>



  <!-- PRODUCTUS  -->


  <?php
  $query = "SELECT * FROM products WHERE status = 'true' ORDER BY product_id DESC";
  $result = mysqli_query($con, $query);
  $products = [];

  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      $products[] = $row;
    }
  }

  if (count($products) > 0) {
  ?>

    <div class="products-section">
      <h1 style="text-align: center; margin-bottom: 30px;">All Products</h1>
      <div class="card-container">

        <?php
        foreach ($products as $row) {
          $productTitle = $row['product_title'];
          $productPrice = $row['product_price'];
          $productImage = $row['product_image_one'];
        ?>

          <div class="card">
            <div class="image-container">
              <img src="../admin/product_images/<?php echo htmlspecialchars($productImage); ?>" alt="<?php echo htmlspecialchars($productTitle); ?>" />
              <div class="hover-icons">
                <img src="../images/shopping-cart.png" alt="Add to Cart">
                <img src="../images/wishlist.png" alt="Add to Wishlist">
                <img src="../images/shopping-cart.png" alt="Compare">
                <img src="../images/user (1).png" alt="View Details">
              </div>
            </div>
            <p class="product-name"><?php echo $productTitle; ?></p>
            <p class="price">$<?php echo number_format($productPrice, 2); ?></p>
            <div class="rating">
              <img src="../images/star.png" alt="Star">
              <img src="../images/star.png" alt="Star">
              <img src="../images/star.png" alt="Star">
              <img src="../images/star.png" alt="Star">
              <img src="../images/rating.png" alt="Empty Star">
              <span>(99)</span>
            </div>
          </div>
      <?php

        }
      } else {
        echo "No active products found!";
      }
      ?>

      </div>
    </div>

    <?php
    mysqli_close($con);
    ?>

    </div>




    <!-- Footer -->
    <footer class="footer">
      <div class="footer-container">
        <!-- Left section (E Shop text and description) -->
        <div class="footer-left">
          <h2>Bazingo</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin rutrum massa. Vestibulum porttitor, metus sed pretium elementum, nisi nibh sodales quam, non lobortis neque felis id mauris.</p>
        </div>

        <!-- Useful Pages Section -->
        <div class="footer-links">
          <h3>Useful Pages</h3>
          <ul>
            <li><a href="#"><span>&#9656;</span> Login & Register</a></li>
            <li><a href="#"><span>&#9656;</span> Product</a></li>
            <li><a href="#"><span>&#9656;</span> About</a></li>
            <li><a href="#"><span>&#9656;</span> Contact</a></li>
            <li><a href="#"><span>&#9656;</span> My Account</a></li>
            <li><a href="#"><span>&#9656;</span> Trending</a></li>
          </ul>
        </div>

        <!-- Quick Links Section -->
        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#"><span>&#9656;</span> Login & Register</a></li>
            <li><a href="#"><span>&#9656;</span> Product</a></li>
            <li><a href="#"><span>&#9656;</span> About</a></li>
            <li><a href="#"><span>&#9656;</span> Contact</a></li>
            <li><a href="#"><span>&#9656;</span> My Account</a></li>
            <li><a href="#"><span>&#9656;</span> Trending</a></li>
          </ul>
        </div>

        <!-- Contact Information Section -->
        <div class="footer-contact">
          <h3>Get in Touch</h3>
          <p><i class="fa fa-map-marker"></i> Bazingo, Sadar, Rawalpindi, Pakistan</p>
          <p><i class="fa fa-envelope"></i> <a href="mailto:email@example.com">email@bazingo.com</a></p>
          <p><i class="fa fa-phone"></i> <a href="tel:+1234567890">+123-456-7890</a></p>
          <div class="social-icons">
            <a href="https://x.com"><img src="../assets/images/twitter.png" alt="Twitter Icon"></a>
            <a href="https://www.facebook.com/"><img src="../assets/images/facebook.png" alt="Facebook Icon"></a>
            <a href="https://linkedin.com/"><img src="../assets/images/linkedin.png" alt="LinkedIn Icon"></a>
            <a href="https://www.youtube.com/"><img src="../assets/images/youtube.png" alt="YouTube Icon"></a>
          </div>
        </div>
      </div>





      <!-- Footer Bottom (Secured by & Payment Logos) -->
      <div class="footer-bottom">
        <div class="copyright">
          <p>&copy; 2024 Bazingo. All Rights Reserved.</p>
        </div>
      </div>
    </footer>


</body>

</html>