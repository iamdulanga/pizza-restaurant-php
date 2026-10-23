<?php
session_start();

// Handle adding to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'] ?? 'Product';
    $product_price = floatval($_POST['product_price'] ?? 0);
    $product_image = $_POST['product_image'] ?? '';
    $product_quantity = max(1, intval($_POST['product_quantity'] ?? 1));

    if (! isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $product_quantity;
    } else {
        $_SESSION['cart'][$product_id] = [
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'image' => $product_image,
            'quantity' => $product_quantity,
        ];
    }

    header('Location: cart.php');
    exit();
}

// Handle remove item
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    if (isset($_SESSION['cart'][$remove_id])) {
        unset($_SESSION['cart'][$remove_id]);
    }
    header('Location: cart.php');
    exit();
}

$page_title = 'Pizza - Shopping Cart';
include 'includes/header.php';
include 'includes/navbar.php';

$cart = $_SESSION['cart'] ?? [];
$total_amount = 0;
foreach ($cart as $item) {
    $total_amount += $item['price'] * $item['quantity'];
}
?>

<section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">
  <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Shopping Cart</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <?php if (empty($cart)) { ?>
          <div class="text-center py-5">
            <h3 class="mb-4">Your cart is currently empty</h3>
            <p class="mb-4">Looks like you haven't added any delicious pizzas yet!</p>
            <a href="products.php" class="btn btn-primary py-3 px-5">Explore Our Menu</a>
          </div>
        <?php } else { ?>
          <div class="cart-list table-responsive">
            <table class="table text-center table-bordered">
              <thead class="thead-primary">
                <tr class="text-center">
                  <th>Product</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($cart as $item_id => $item) { ?>
                  <?php $subtotal = $item['price'] * $item['quantity']; ?>
                  <tr class="text-center align-middle">
                    <td class="image-prod">
                      <?php if (! empty($item['image'])) { ?>
                        <img src="assets/images/<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                      <?php } else { ?>
                        <span class="flaticon-pizza-1" style="font-size: 40px;"></span>
                      <?php } ?>
                    </td>
                    <td class="product-name">
                      <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                    </td>
                    <td class="price">$<?php echo number_format($item['price'], 2); ?></td>
                    <td class="quantity">
                      <span><?php echo (int) $item['quantity']; ?></span>
                    </td>
                    <td class="total">$<?php echo number_format($subtotal, 2); ?></td>
                    <td class="product-remove">
                      <a href="cart.php?remove=<?php echo urlencode($item_id); ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Remove this item?');">
                        <span class="ion-ios-close"></span> Remove
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <div class="row justify-content-end mt-4">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
              <div class="cart-total mb-3 p-4" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 8px;">
                <h3 class="mb-3">Cart Totals</h3>
                <p class="d-flex justify-content-between">
                  <span>Subtotal</span>
                  <span>$<?php echo number_format($total_amount, 2); ?></span>
                </p>
                <p class="d-flex justify-content-between">
                  <span>Delivery</span>
                  <span>$0.00</span>
                </p>
                <hr>
                <p class="d-flex justify-content-between font-weight-bold">
                  <span>Total</span>
                  <span class="text-primary">$<?php echo number_format($total_amount, 2); ?></span>
                </p>
                <div class="mt-4">
                  <a href="#" class="btn btn-primary btn-block py-3">Proceed to Checkout</a>
                  <a href="products.php" class="btn btn-outline-white btn-block mt-2">Continue Shopping</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
