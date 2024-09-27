<!DOCTYPE html>
<?php
include('topbar.php');
include('header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Cart with Deals</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .cart-section {
            padding: 50px 0;
        }

        .cart-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cart-item img {
            max-width: 150px;
            border-radius: 10px;
        }

        .cart-item .details {
            flex-grow: 1;
        }

        .cart-item h5 {
            font-size: 1.5rem;
            color: #128f55; /* Your theme color */
        }

        .cart-item .old-price {
            text-decoration: line-through;
            color: #999;
        }

        .cart-item .new-price {
            font-size: 1.25rem;
            color: #ff5c5c;
            font-weight: bold;
        }

        .deal-number {
            font-size: 1.125rem;
            background-color: #128f55;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .item-description {
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container cart-section">
        <h2 class="text-center mb-5">Pizza Deals</h2>

        <!-- Pizza Deal Item -->
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #1</div>
                <h5>Pepperoni Pizza</h5>
                <div>
                    <span class="old-price">$15.99</span>
                    <span class="new-price">$9.99</span>
                </div>
                <p class="item-description">Enjoy a delicious pepperoni pizza with a special 30% discount! Available for a limited time only.</p>
            </div>
        </div>

        <!-- Another Pizza Deal Item -->
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #2</div>
                <h5>Margherita Pizza</h5>
                <div>
                    <span class="old-price">$12.99</span>
                    <span class="new-price">$7.99</span>
                </div>
                <p class="item-description">Classic margherita pizza with fresh mozzarella and basil leaves at an unbeatable price!</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #2</div>
                <h5>Margherita Pizza</h5>
                <div>
                    <span class="old-price">$12.99</span>
                    <span class="new-price">$7.99</span>
                </div>
                <p class="item-description">Classic margherita pizza with fresh mozzarella and basil leaves at an unbeatable price!</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #2</div>
                <h5>Margherita Pizza</h5>
                <div>
                    <span class="old-price">$12.99</span>
                    <span class="new-price">$7.99</span>
                </div>
                <p class="item-description">Classic margherita pizza with fresh mozzarella and basil leaves at an unbeatable price!</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #2</div>
                <h5>Margherita Pizza</h5>
                <div>
                    <span class="old-price">$12.99</span>
                    <span class="new-price">$7.99</span>
                </div>
                <p class="item-description">Classic margherita pizza with fresh mozzarella and basil leaves at an unbeatable price!</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #2</div>
                <h5>Margherita Pizza</h5>
                <div>
                    <span class="old-price">$12.99</span>
                    <span class="new-price">$7.99</span>
                </div>
                <p class="item-description">Classic margherita pizza with fresh mozzarella and basil leaves at an unbeatable price!</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="images/download.jpg" alt="Pizza Image">
            <div class="details">
                <div class="deal-number">Deal #2</div>
                <h5>Margherita Pizza</h5>
                <div>
                    <span class="old-price">$12.99</span>
                    <span class="new-price">$7.99</span>
                </div>
                <p class="item-description">Classic margherita pizza with fresh mozzarella and basil leaves at an unbeatable price!</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include('footer.php')?>
