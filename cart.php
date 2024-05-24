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
        include 'navbar.php'
    ?>
     <section class="cart container-lg">
     <div class="cart-backward"><a href="shop.php"><i class="bi bi-arrow-left"></i>Back</a></div>
            <h1 class="cart-title">Your Cart</h1>
        <div class="cart-container container-lg row">
            <div class="cart-table col-md-8">
            <table class="table ">
                <tr>
                    <td><img src="assets/product1.jpg" alt="product"></td>
                    <td><div class="cart-pro-details">
                        <h6>Narasu’s Anandham Coffee Blended with chicory.</h6>
                        <span>Coffee / 100g</span>
                        <div class="cart-counter">
                            <button>-</button>
                            <input type="text" value="0">
                            <button>+</button>
                        </div>
                    </div></td>
                    <td>
                        <div class="table-btns">
                            <button><i class="bi bi-trash3"></i></button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="assets/product1.jpg" alt="product"></td>
                    <td><div class="cart-pro-details">
                        <h6>Narasu’s Anandham Coffee Blended with chicory.</h6>
                        <span>Coffee / 100g</span>
                        <div class="cart-counter">
                            <button>-</button>
                            <input type="text" value="0">
                            <button>+</button>
                        </div>
                    </div></td>
                    <td>
                        <div class="table-btns">
                            <button><i class="bi bi-trash3"></i></button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="assets/product1.jpg" alt="product"></td>
                    <td><div class="cart-pro-details">
                        <h6>Narasu’s Anandham Coffee Blended with chicory.</h6>
                        <span>Coffee / 100g</span>
                        <div class="cart-counter">
                            <button>-</button>
                            <input type="text" value="0">
                            <button>+</button>
                        </div>
                    </div></td>
                    <td>
                        <div class="table-btns">
                            <button><i class="bi bi-trash3"></i></button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="assets/product1.jpg" alt="product"></td>
                    <td><div class="cart-pro-details">
                        <h6>Narasu’s Anandham Coffee Blended with chicory.</h6>
                        <span>Coffee / 100g</span>
                        <div class="cart-counter">
                            <button>-</button>
                            <input type="text" value="0">
                            <button>+</button>
                        </div>
                    </div></td>
                    <td>
                        <div class="table-btns">
                            <button><i class="bi bi-trash3"></i></button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="assets/product1.jpg" alt="product"></td>
                    <td><div class="cart-pro-details">
                        <h6>Narasu’s Anandham Coffee Blended with chicory.</h6>
                        <span>Coffee / 100g</span>
                        <div class="cart-counter">
                            <button>-</button>
                            <input type="text" value="0">
                            <button>+</button>
                        </div>
                    </div></td>
                    <td>
                        <div class="table-btns">
                            <button><i class="bi bi-trash3"></i></button>
                        </div>
                    </td>
                </tr>
            </table>
            </div>

            <div class="cart-checkout col-md-4">
                <div class="checkout-container">
                    <div class="checkout-header">
                    <h1>Cart Total</h1>
                    </div>
                    <div class="checkout-payout">
                        <div class="checkout-list">
                            <div class="checkout-lists">Total</div>
                            <div class="checkout-lists"><i class="bi bi-currency-rupee"></i>20.00</div>
                        </div>
                        <div class="checkout-list">
                            <div class="checkout-lists">CGST</div>
                            <div class="checkout-lists"><i class="bi bi-currency-rupee"></i>20.00</div>
                        </div>
                        <div class="checkout-list">
                            <div class="checkout-lists">SGST</div>
                            <div class="checkout-lists"><i class="bi bi-currency-rupee"></i>20.00</div>
                        </div>
                    </div>
                    <div class="sub-total">
                        <div class="sub-total-flex">
                            <div class="sub-total-list">Sub Total</div>
                            <div class="sub-total-list"><i class="bi bi-currency-rupee"></i>20.00</div>
                        </div>
                    </div>
                </div>
                <div class="checkout-btn">
                    <button>Enquiry</button>
                </div>
                <div class="continueshopping">
                <a href="shop.php"><i class="bi bi-arrow-left"></i>Continue Shopping</a>
                </div>
            </div>

        </div>
     </section>

     <?php
        include 'footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>