<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\js\bootstrap.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <title>ESSKAY FOODS | Quality. Tradition. Excellence.</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="page-style">
        <img src="assets/pattern1.png" alt="pattern">
    </div>
    <section class="single-page">
        <div class="single-page-container">
            <div class="single-page-view container">
                <div class="single-back"><a href="shop.php"><i class="bi bi-arrow-left"></i>Back</a></div>
                <div class="single-page-view-flex row">
                    <div class="single-view-items col-md-6">
                        <img src="assets/product1.jpg" alt="products" class="fade-in">
                    </div>
                    <div class="single-view-items pro-details col-md-6">
                        <div class="single-product-cat">
                            <p class="fade-in">Cat-name</p>
                        </div>
                        <div class="single-product-heading">
                            <h1 class="fade-in">Narasu's Besh Besh Dhall Rice Powder</h1>
                        </div>
                        <div class="single-product-stock">
                            <p class="fade-in">In Stock</p>
                            <span class="fade-in">Out of Stock</span>
                        </div>
                        <div class="single-product-price">
                            <p class="fade-in"><i class="bi bi-currency-rupee"></i>20.00</p>
                        </div>
                        <div class="quatity">
                            <div class="quatity-items fade-in">Quatity</div>
                            <div class="quatity-items grams fade-in">100g</div>
                            <div class="quatity-items grams fade-in">250g</div>
                            <div class="quatity-items grams fade-in">500g</div>
                        </div>
                        <div class="single-product-btn">
                            <div class="counter fade-in">
                                <button class="fade-in">-</button>
                                <input type="text" value="0">
                                <button class="fade-in">+</button>
                            </div>
                            <div class="addtocart fade-in">
                                <a href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="related-products">
        <div class="related-header container-lg">
            <h4>Related Products</h4>
        </div>
        <div class="related-card-wrapper container">
            <div class="card" style="width: 15rem;">
                <img src="assets/product2.jpg" class="card-img-top" alt="related-pro">
                <div class="card-body related-card-details">
                    <h6>Narasu’s Anandham</h6>
                    <p><i class="bi bi-currency-rupee"></i>40.00</p>
                </div>
            </div>

            <div class="card" style="width: 15rem;">
                <img src="assets/product2.jpg" class="card-img-top" alt="related-pro">
                <div class="card-body related-card-details">
                    <h6>Narasu’s Anandham</h6>
                    <p><i class="bi bi-currency-rupee"></i>40.00</p>
                </div>
            </div>

            <div class="card" style="width: 15rem;">
                <img src="assets/product2.jpg" class="card-img-top" alt="related-pro">
                <div class="card-body related-card-details">
                    <h6>Narasu’s Anandham</h6>
                    <p><i class="bi bi-currency-rupee"></i>40.00</p>
                </div>
            </div>

            <div class="card" style="width: 15rem;">
                <img src="assets/product2.jpg" class="card-img-top" alt="related-pro">
                <div class="card-body related-card-details">
                    <h6>Narasu’s Anandham</h6>
                    <p><i class="bi bi-currency-rupee"></i>40.00</p>
                </div>
            </div>

            <div class="card" style="width: 15rem;">
                <img src="assets/product2.jpg" class="card-img-top" alt="related-pro">
                <div class="card-body related-card-details">
                    <h6>Narasu’s Anandham</h6>
                    <p><i class="bi bi-currency-rupee"></i>40.00</p>
                </div>
            </div>

            
        </div>
    </div>

    <?php
    include 'footer.php'
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>