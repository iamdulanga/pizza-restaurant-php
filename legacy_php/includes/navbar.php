<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = basename($_SERVER['PHP_SELF']);
$cart_count = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $c_item) {
        $cart_count += $c_item['quantity'] ?? 1;
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicious</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>"><a href="products.php" class="nav-link">Menu</a></li>
        <li class="nav-item <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>"><a href="services.php" class="nav-link">Services</a></li>
        <li class="nav-item <?php echo ($current_page == 'blog.php' || $current_page == 'blog-single.php') ? 'active' : ''; ?>"><a href="blog.php" class="nav-link">Blog</a></li>
        <li class="nav-item <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item <?php echo ($current_page == 'cart.php') ? 'active' : ''; ?>">
          <a href="cart.php" class="nav-link">
            <span class="icon-shopping-cart"></span> Cart
            <?php if ($cart_count > 0) { ?>
              <span class="badge badge-primary ml-1" style="border-radius: 50%; font-size: 11px; padding: 3px 6px;"><?php echo $cart_count; ?></span>
            <?php } ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
