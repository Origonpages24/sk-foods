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

  <div class="product-header">
    <div class="product-caption container">
      <h1>Our Product</h1>
    </div>
  </div>

  <div class="filterable-card-container  container-lg">
    <div class="filterable-menus">
      <button class="active" data-name="all">All</button>
      <button data-name="coffee">Coffee</button>
      <button data-name="pappadam">Pappadam</button>
      <button data-name="vadam">Vadam</button>
      <button data-name="karuvadam">Karuvadam</button>
      <button data-name="kondattam">Kondattam</button>
    </div>

    <div class="filterable-card-wrapper">
        <div class="card" data-name="coffee" style="width: 20rem;">
            <img src="assets/product1.jpg" class="card-img-top" alt="products">
                <div class="card-body">
                  <div class="card-catagory">Coffee</div>
                  <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="card-select-box">
                        <select name="" id="" disabled="disabled">
                          <option value="">50g</option>
                          <option value="">100g</option>
                        </select>
                      </div>
                      <span class="card-price"><i class="bi bi-currency-rupee"></i>20.00</span>
                      <a href="#" class="btn card-btn">Add to Card</a>
                  </div>
        </div>

        <div class="card" data-name="kondattam" style="width: 20rem;">
            <img src="assets/product1.jpg" class="card-img-top" alt="products">
                <div class="card-body">
                  <div class="card-catagory">Coffee</div>
                  <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="card-select-box">
                        <select name="" id="" disabled="disabled"></select>
                      </div>
                      <span class="card-price"><i class="bi bi-currency-rupee"></i>20.00</span>
                      <a href="#" class="btn card-btn">Add to Card</a>
                  </div>
        </div>

        <div class="card" data-name="vadam" style="width: 20rem;">
            <img src="assets/product1.jpg" class="card-img-top" alt="products">
                <div class="card-body">
                  <div class="card-catagory">Coffee</div>
                  <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="card-select-box">
                        <select name="" id="" disabled="disabled"></select>
                      </div>
                      <span class="card-price"><i class="bi bi-currency-rupee"></i>20.00</span>
                      <a href="#" class="btn card-btn">Add to Card</a>
                  </div>
        </div>

        <div class="card" data-name="karuvadam" style="width: 20rem;">
            <img src="assets/product1.jpg" class="card-img-top" alt="products">
                <div class="card-body">
                  <div class="card-catagory">Coffee</div>
                  <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="card-select-box">
                        <select name="" id="" disabled="disabled"></select>
                      </div>
                      <span class="card-price"><i class="bi bi-currency-rupee"></i>20.00</span>
                      <a href="#" class="btn card-btn">Add to Card</a>
                  </div>
        </div>

        <div class="card" data-name="pappadam" style="width: 20rem;">
            <img src="assets/product1.jpg" class="card-img-top" alt="products">
                <div class="card-body">
                  <div class="card-catagory">Coffee</div>
                  <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="card-select-box">
                        <select name="" id="" disabled="disabled"></select>
                      </div>
                      <span class="card-price"><i class="bi bi-currency-rupee"></i>20.00</span>
                      <a href="#" class="btn card-btn">Add to Card</a>
                  </div>
        </div>
        
    </div>
  </div>

  <?php
  include 'footer.php'
    ?>
  <script src="JS\script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const dropdownButton = document.getElementById('dropdownButton');
      const dropdownMenu = document.getElementById('dropdownMenu');
      const addButtons = dropdownMenu.getElementsByClassName('add-btn');

      Array.from(addButtons).forEach(button => {
        button.addEventListener('click', (event) => {
          event.preventDefault();  
          const selectedItem = event.target.previousElementSibling.previousElementSibling.textContent;
          const currentButtonText = dropdownButton.textContent.trim();
          dropdownButton.textContent = selectedItem;
          event.target.previousElementSibling.previousElementSibling.textContent = currentButtonText;
        });
      });
    });
  </script>

  
</body>

</html>