<?php

include('./includes/connect.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bazingo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <!-- Top Announcement Section -->
  <div class="announcement-bar">
  Stay Warm This Winter!   Exclusive Deals Up to 50% Off  Free Delivery!
    <a href="./pages/product.php" class="shop-now1">Shop Now</a>
  </div>

  <!-- Navbar -->
  <div class="navbar">
    <div class="sub-navbar">
      <!-- Logo -->
      <div class="logo"><a href="#"><img src="images/logo2.png" alt=""></a>
    </div>

      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" class="search-input" placeholder="Search the products" />
       <a href="./pages/product.php"> <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span></a>
      </div>

      <!-- Navbar Icons -->
      <div class="navbar-icons">
        <div class="navbar-icon">
          <img src="images/flag.png" alt="Flag">
        </div>
        <div class="navbar-icon user">
        <?php if (isset($_SESSION['user_name'])): ?>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
        <form action="logout.php" method="post" style="display:inline;">
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    <?php else: ?>
        <a href="./pages/login.html"><img src="images/user (1).png" alt="User Icon"></a>
    <?php endif; ?>

        </div>
        
        <div class="navbar-icon">
        <a href="./cart.php">
          <img src="images/shopping-cart.png" alt="">
        </a>
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
            <li><a href="./pages/product.php">Smartphones</a></li>
            <li><a href="./pages/product.php">Laptops</a></li>
            <li><a href="./pages/product.php">Accessories</a></li>
          </ul>
        </div>
        <div class="dropdown-column">
          <h3>Clothing</h3>
          <ul>
            <li><a href="./pages/product.php">Men</a></li>
            <li><a href="./pages/product.php">Women</a></li>
            <li><a href="./pages/product.php">Kids</a></li>
          </ul>
        </div>
        <div class="dropdown-column">
          <h3>Home Appliances</h3>
          <ul>
            <li><a href="./pages/product.php">Kitchen</a></li>
            <li><a href="./pages/product.php">Laundry</a></li>
            <li><a href="./pages/product.php">Decor</a></li>
          </ul>
          
        </div>
      </div>
    </div>

    <!-- Main Navigation Links -->
   <a href="#"> <span class="nav-item">Home</span></a>
    <a href="./pages/product.php"><span class="nav-item">Products</span></a>
    <a href="./pages/about.html"><span class="nav-item">About us</span></a>
    <a href="./pages/product.php"><span class="nav-item">Trending</span></a>
    <a href="./pages/contact.html"><span class="nav-item">Contact us</span></a>
  </div>

  <!-- HERO SECTION -->
  <div class="hero-section">
    <div class="slider">
      <div class="slide">
        <img src="./images/o-banner1.png" alt="Slide 1">
      </div>
      <div class="slide">
        <img src="./images/img2.jpg" alt="Slide 2">
      </div>
      <div class="slide">
        <img src="./images/img3.jpg" alt="Slide 3">
      </div>
    </div>
    <div class="dots">
      <span class="dot" data-slide="0"></span>
      <span class="dot" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
    </div>
  </div>

  <!-- Features Section -->
<div class="features-section">
  <div class="feature-item">
    <img src="images/van.png" alt="Free Shipping">
    <div class="feature-content">
      <h4>Free Shipping</h4>
      <p>On all orders over $200</p>
    </div>
  </div>
  <div class="feature-item">
    <img src="images/customer-service.png" alt="Dedicated Support">
    <div class="feature-content">
      <h4>Dedicated Support</h4>
      <p>Quick response 24/7</p>
    </div>
  </div>
  <div class="feature-item">
    <img src="images/money.png" alt="Money Back Guarantee">
    <div class="feature-content">
      <h4>Money Back Guarantee</h4>
      <p>Worry-free shopping</p>
    </div>
  </div>
</div>

<!-- Categories Section -->
<h1 class="category">Categories</h1>
<div class="categories-section">
  <div class="category-item">
    <img src="images/1.png" alt="T-Shirts">
    <div class="category-content">
      <h4>T-Shirts</h4>
      <a href="./images/avatar6.jpg">View all</a>
    </div>
  </div>
  <div class="category-item">
    <img src="images/2.jpg" alt="Mugs">
    <div class="category-content">
      <h4>Mugs</h4>
      <a href="./pages/product.php">View all</a>
    </div>
  </div>
  <div class="category-item">
    <img src="images/2.jpg" alt="Hats">
    <div class="category-content">
      <h4>Hats</h4>
      <a href="./pages/product.php">View all</a>
    </div>
  </div>
  <div class="category-item">
    <img src="images/1.png" alt="Hoodies">
    <div class="category-content">
      <h4>Hoodies</h4>
      <a href="./pages/product.php">View all</a>
    </div>
  </div>
  <div class="category-item">
    <img src="images/2.jpg" alt="Badges">
    <div class="category-content">
      <h4>Badges</h4>
      <a href="./pages/product.php">View all</a>
    </div>
  </div>
  <div class="category-item">
    <img src="images/1.png" alt="Phone Cases">
    <div class="category-content">
      <h4>Phone Cases</h4>
      <a href="./pages/product.php">View all</a>
    </div>
  </div>
</div>



    <!-- Seasonal Sale Section -->
     <h1>Special Offer</h1>
<div class="seasonal-sale-section">
  <div class="seasonal-sale-item">
    <img src="images/specialoffer-1.png" alt="Spring Collection">
    <div class="seasonal-sale-content">
      <p class="discount-text">20% OFF THE ALL ORDER</p>
      <h3>Spring Collection</h3>
      <a href="./pages/product.php" class="shop-now-btn">Shop Now</a>
    </div>
  </div>

  <div class="seasonal-sale-item">
    <img src="./images/img3.jpg" alt="Winter Collection">
    <div class="seasonal-sale-content">
      <p class="discount-text">20% OFF THE ALL ORDER</p>
      <h3>Winter Collection</h3>
      <a href="./pages/product.php" class="shop-now-btn">Shop Now</a>
    </div>
  </div>
</div>

<!-- BRANDS CAROUSAL -->

<div class="logo-carousel">
  <div class="carousel-wrapper">
    <!-- Add 10 logo images here -->
    <img src="./images/BBON Moda Feminina.png" alt="Logo 1">
    <img src="./images/BIMICCI.png" alt="Logo 2">
    <img src="./images/Chuck Taylor Script.png" alt="Logo 3">
    <img src="./images/Curtsy.png" alt="Logo 4">
    <img src="./images/Desa Deri.png" alt="Logo 5">
    <img src="./images/Gobi Cashmere Clothing 2024.png" alt="Logo 6">
    <img src="./images/Jaguar New 2025 Wordmark.png" alt="Logo 7">
    <img src="./images/Miss Dior.png" alt="Logo 8">
    <img src="./images/Tramarossa.png" alt="Logo 10">
    <!-- Duplicate logos for smooth infinite scrolling -->
    <img src="./images/BBON Moda Feminina.png" alt="Logo 1">
    <img src="./images/BIMICCI.png" alt="Logo 2">
    <img src="./images/Chuck Taylor Script.png" alt="Logo 3">
    <img src="./images/Curtsy.png" alt="Logo 4">
    <img src="./images/Desa Deri.png" alt="Logo 5">
    <img src="./images/Gobi Cashmere Clothing 2024.png" alt="Logo 6">
    <img src="./images/Jaguar New 2025 Wordmark.png" alt="Logo 7">
    <img src="./images/Miss Dior.png" alt="Logo 8">
    <img src="./images/Tramarossa.png" alt="Logo 10">
  </div>
</div>


  <!-- TRENDING PRODUCTS SECTION -->

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
    $productCount = count($products);
    $centerClass = $productCount <= 4 ? ' is-centered' : '';
?>

<div class="trending-section<?php echo $centerClass; ?>">
    <h1 class="trending-title">Trending Products</h1>
    <div class="trending-wrapper">
        <button class="arrow left-arrow" type="button" aria-label="Previous products">&#8249;</button>
        <div class="trending-container">

<?php
    foreach ($products as $row) {
        $productTitle = $row['product_title'];
        $productPrice = $row['product_price'];
        $productImage = $row['product_image_one'];
?>

        <div class="card">
            <div class="image-container">
                <img src="./admin/product_images/<?php echo htmlspecialchars($productImage); ?>" alt="<?php echo htmlspecialchars($productTitle); ?>">
                <div class="hover-icons">
                    <a href="./cart.php"><img src="./assets/images/shopping-cart.png" alt="Add to cart"></a>
                    <a href="./pages/login.html"><img src="./assets/images/wishlist.png" alt="Add to wishlist"></a>
                    <a href="./pages/product.php"><img src="./assets/images/magnifying-glass.png" alt="View product"></a>
                </div>
            </div>
            <p class="product-name"><?php echo htmlspecialchars($productTitle); ?></p>
            <p class="price">$<?php echo number_format($productPrice, 2); ?></p>
            <div class="rating">
                <img src="images/star.png" alt="Star">
                <img src="images/star.png" alt="Star">
                <img src="images/star.png" alt="Star">
                <img src="images/star.png" alt="Star">
                <img src="images/rating.png" alt="Empty Star">
                <span>(99)</span>
            </div>
        </div>

<?php
    }
?>

        </div>
        <button class="arrow right-arrow" type="button" aria-label="Next products">&#8250;</button>
    </div>
</div>

<?php
} else {
    echo '<p class="no-products-msg">No products found in database. Add products from the admin panel.</p>';
}
?>

<?php
// Close the database connection
mysqli_close($con);
?>



<!-- Black Friday Popup -->
<div id="black-friday-popup" class="popup">
  <div class="popup-content">
    <h2>BLACK FRIDAY</h2>
    <p><strong>US $0.89</strong> on 1 item</p>
    <p>Extra 10% off</p>
    <a href="./pages/product.php" class="shop-now">Shop Now</a>
    <button class="popup-close">&times;</button>
  </div>
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
        <a href="https://x.com"><img src="images/twitter.png" alt="Twitter Icon"></a>
    <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook Icon"></a>
    <a href="https://linkedin.com/"><img src="images/linkedin.png" alt="LinkedIn Icon"></a>
    <a href="https://www.youtube.com/"><img src="images/youtube.png" alt="YouTube Icon"></a>
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

  <script src="./pages/script.js"></script>
</body>
</html>
