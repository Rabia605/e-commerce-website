<?php
include('./includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - Bazingo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="announcement-bar">
    Your cart is ready — complete your order when you're done shopping.
    <a href="./pages/product.php" class="shop-now1">Continue Shopping</a>
  </div>

  <div class="navbar">
    <div class="sub-navbar">
      <div class="logo"><a href="./index.php"><img src="images/logo2.png" alt="Bazingo"></a></div>
      <div class="search-bar">
        <input type="text" class="search-input" placeholder="Search the products" />
        <a href="./pages/product.php"><span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span></a>
      </div>
      <div class="navbar-icons">
        <div class="navbar-icon"><img src="images/flag.png" alt="Flag"></div>
        <div class="navbar-icon user">
          <?php if (isset($_SESSION['user_name'])): ?>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
          <?php else: ?>
            <a href="./pages/login.html"><img src="images/user (1).png" alt="User"></a>
          <?php endif; ?>
        </div>
        <div class="navbar-icon">
          <img src="images/shopping-cart.png" alt="Cart">
        </div>
      </div>
    </div>
  </div>

  <div class="products-section" style="text-align: center; min-height: 50vh;">
    <h1>Your Cart</h1>
    <p style="margin: 20px 0; color: #666;">Your cart is currently empty.</p>
    <a href="./pages/product.php" class="shop-now-btn">Browse Products</a>
  </div>
</body>
</html>
