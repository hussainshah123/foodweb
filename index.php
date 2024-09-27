<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('topbar.php');
    include('header.php');
    ?>
   
<!-- banner start -->
    <div class="banner">
        <div class="banner-content">
            <!-- <img src="images/banner.jpg"/> -->
            <h1>Welcome to Our Website</h1>
            <p>Discover great services and deals</p>
        </div>
    </div>

<!-- cart start -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Your Food Cart</h2>
        
        <div class="row">
            <!-- Cart Item 1 -->
            <div class="col-md-4 cart-item">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="food-icon">🍔</div> <!-- Food Icon (Burger) -->
                        <h5 class="food-name">Cheeseburger</h5>
                        <p class="food-price">$5.99</p>
                        <a href="detail.php">
                        <button  class="btn btn-custom">Read More..</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cart Item 2 -->
            <div class="col-md-4 cart-item">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="food-icon">🍕</div> <!-- Food Icon (Pizza) -->
                        <h5 class="food-name">Pepperoni Pizza</h5>
                        <p class="food-price">$8.99</p>
                        <button class="btn btn-custom">Read More..</button>
                    </div>
                </div>
            </div>

            <!-- Cart Item 3 -->
            <div class="col-md-4 cart-item">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="food-icon">🍟</div> <!-- Food Icon (Fries) -->
                        <h5 class="food-name">French Fries</h5>
                        <p class="food-price">$3.49</p>
                        <button class="btn btn-custom">Read More..</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Cart Item 4 -->
            <div class="col-md-4 cart-item">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="food-icon">🍜</div> <!-- Food Icon (Noodles) -->
                        <h5 class="food-name">Chicken Noodles</h5>
                        <p class="food-price">$6.49</p>
                        <button class="btn btn-custom">Read More..</button>
                    </div>
                </div>
            </div>

            <!-- Cart Item 5 -->
            <div class="col-md-4 cart-item">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="food-icon">🍣</div> <!-- Food Icon (Sushi) -->
                        <h5 class="food-name">Sushi Platter</h5>
                        <p class="food-price">$12.99</p>
                        <button class="btn btn-custom">Read More..</button>
                    </div>
                </div>
            </div>

            <!-- Cart Item 6 -->
            <div class="col-md-4 cart-item">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="food-icon">🍦</div> <!-- Food Icon (Ice Cream) -->
                        <h5 class="food-name">Vanilla Ice Cream</h5>
                        <p class="food-price">$2.99</p>
                        <button class="btn btn-custom">Read More..</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- cart end -->





        
 
    <div class="container counter-section">
        <h2 class="text-center mb-5">Explore Our Food Categories</h2>
        
        <div class="row">
            <!-- Italian Counter -->
            <div class="col-md-4">
                <div class="counter-item">
                    <h3 class="counter" data-target="90">0</h3>
                    <p>Italian Dishes</p>
                </div>
            </div>

            <!-- Chinese Counter -->
            <div class="col-md-4">
                <div class="counter-item">
                    <h3 class="counter" data-target="120">0</h3>
                    <p>Chinese Dishes</p>
                </div>
            </div>

            <!-- French Counter -->
            <div class="col-md-4">
                <div class="counter-item">
                    <h3 class="counter" data-target="80">0</h3>
                    <p>French Dishes</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="counter-item">
                    <h3 class="counter" data-target="100">0</h3>
                    <p>Dessi Dishes</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="counter-item">
                    <h3 class="counter" data-target="500">0</h3>
                    <p>Halal Dishes</p>
                </div>
            </div>
        </div>

    </div>

  
    

</body>
<script src="script.js"></script>
</html>
<?php include('footer.php'); ?>