<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accessories Catalog</title>
  <link rel="stylesheet" href="resources/css/catalog.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
  <div class="navbar">
    <a href="index.php"><img src="./resources/assets/logo.png" class="logo"></a>
    <nav>
      <ul id="menuList">
        <li><a href="index.php">Home</a></li>
        <li><a href="catalog.php">Catalog</a></li>
        <?php
        if (isset($_SESSION["loginAdmin"])) {
          echo "<li><a href='admin/products/'>Dashboard</a></li>";
        } else if (!isset($_SESSION["loginUser"]) && !isset($_SESSION["loginAdmin"])) {
          echo "<li><a href='auth.php'>Login</a></li>";
        }
        if (isset($_SESSION["loginUser"]) || isset($_SESSION["loginAdmin"])) {
          echo "<li><a href='payment/'>Cart</a></li>";
          echo "<li><a href='riwayat.php'>Riwayat</a></li>";
          echo "<li><a href='profile.php'>Profile</a></li>";
          echo "<li><a href='logout.php'>Logout</a></li>";
        }
        ?>
        <li>
          <label>
            <input type="checkbox" class="checkbox" id="modegelap3">
            <span class="check"></span>
          </label>
        </li>
      </ul>
    </nav>
  </div>

  <div class="container">
    <div class="categories">
      <div class="small-container">
        <div class="row row-2">
          <h2>Accessories</h2>
          <select name="Sort" id="">
            <option value="default">Default</option>
            <option value="name-asc">Name Ascending</option>
            <option value="name-dsc">Name Descending</option>
            <option value="price-asc">Price Ascending</option>
            <option value="price-dsc">Price Descending</option>
          </select>
        </div>

        <div class="row">
          <div class="col-4">
            <img src="resources/img/IMG_11132022_093808.jpg">
            <h4>PlayStation 5 DualSense Wireless Controller</h4>
            <p>Rp729.000</p>
          </div>
          <div class="col-4">
            <img src="resources/img/IMG_11132022_093815.jpg">
            <h4>PlayStation PULSE 3D Wireless Headset - Midnight Black</h4>
            <p>Rp1.699.000</p>
          </div>
          <div class="col-4">
          <img src="resources/img/IMG_11132022_093824.jpg">
            <h4>PlayStation PULSE 3D Wireless Headset - Midnight Black</h4>
            <p>Rp1.729.000</p>
          </div>
          <div class="col-4">
            <img src="resources/img/IMG_11132022_094804.jpg">
            <h4>Dualshock 4 Wireless Controller - Glacier White</h4>
            <p>Rp1.029.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-logo">Copyright © Fazri Gading 2022</div>
    <div class="footer-list">
      <ul>
        <li>2009106031</li>
        <li>Informatika A 20</li>
        <li>Machine Learning Developer</li>
      </ul>
    </div>
  </footer>

  <script src="resources/js/catalog.js"></script>
</body>

</html>