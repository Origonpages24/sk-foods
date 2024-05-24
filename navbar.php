</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-lg">
    <a class="navbar-brand me-auto" href="index.php"><img src="assets/logo.png" alt="logo"></a>
    <button class="navbar-toggler" style="border:none; outline:none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <img src="assets/menu.png" alt="menu">
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="assets/logo.png" alt="logo"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-left flex-grow-1 pe-3" style="padding-left: 20px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="shop.php">Coffee<span class="badge text-bg-success">0</span></a></li>
              <li><a class="dropdown-item" href="shop.php">Pappadam<span class="badge text-bg-success">0</span></a></li>
              <li><a class="dropdown-item" href="shop.php">Vadam<span class="badge text-bg-success">0</span></a></li>
              <li><a class="dropdown-item" href="shop.php">Karuvadam<span class="badge text-bg-success">0</span></a></li>
              <li><a class="dropdown-item" href="shop.php">Kondattam<span class="badge text-bg-success">0</span></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        
      </div>
    </div>
    <div class="cart-menu">
            <a href="cart.php"><i class="bi bi-bag-heart"></i>Cart </a>
            <div class="cart-count">0</div>
        </div>
  </div>
</nav>