<?php
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

if ($user_data) {
    // Show the welcome message every time the user logs in
    echo "<script>alert('Hello, Welcome to FoodMart Express');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodMart Express</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .custom-alert {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 1000;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        .custom-alert h2 {
            margin-bottom: 15px;
        }
        .custom-alert p {
            margin-bottom: 15px;
        }
        .custom-alert button {
            background-color: #ff6b6b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .custom-alert button:hover {
            background-color: #ff4c4c;
        }
        .custom-alert-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .hidden {
            display: none;
        }
    </style>
    


</head>
<body>
    <!-- header section starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>FoodMart Express</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#speciality">speciality</a>
        <a href="#popular">popular</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
        <a href="logout.php" id="logout">logout</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>food made with love</h3>
        <p>At FoodMart Express, we believe love is the secret ingredient in every dish. Our chefs pour their passion into every meal, using the freshest ingredients and cherished family recipes to create delicious, wholesome food.</p>
        <a href="#order" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="images/s-1.png" alt="">
                <h3>tasty burger</h3>
                <p>Enjoy our Tasty Burger with a juicy beef patty, fresh lettuce, ripe tomatoes, crunchy pickles, and melted cheese in a toasted bun with our signature sauce. Perfectly satisfying and delicious. Visit FoodMart Express today!</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="images/s-2.png" alt="">
                <h3>tasty pizza</h3>
                <p>Satisfy your cravings with Tasty Pizza from FoodMart Express. Order online for delivery or step into our inviting space to enjoy a slice of perfection firsthand. Indulge in our handcrafted pizzas, where every bite is a celebration of flavor. Taste the difference today!</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-3.jpg" alt="">
            <div class="content">
                <img src="images/s-3.png" alt="">
                <h3>cold ice-cream</h3>
                <p>Indulge in the delightful chill of our irresistibly creamy ice cream at FoodMart Express! With a tantalizing array of flavors crafted to delight every palate, it's the ultimate treat to savor and beat the scorching heat. Come experience a symphony of taste sensations that will leave you craving for more!</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-4.jpg" alt="">
            <div class="content">
                <img src="images/s-4.png" alt="">
                <h3>cold drinks</h3>
                <p>Quench your thirst and beat the heat with our selection of ice-cold beverages at FoodMart Express. From frosty fruit smoothies to fizzy sodas, we've got the perfect drink to cool you down and keep you refreshed. Join us today and sip your way to satisfaction!</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-5.jpg" alt="">
            <div class="content">
                <img src="images/s-5.png" alt="">
                <h3>tasty sweets</h3>
                <p>Indulge in the irresistible sweetness of life with FoodMart Express. From delectable desserts to mouthwatering treats, our tasty sweets are crafted to delight your senses and satisfy your cravings. Treat yourself to a little slice of happiness with FoodMart Express today.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-6.jpg" alt="">
            <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>healty breakfast</h3>
                <p>Kickstart your morning with a nutritious breakfast from FoodMart Express. Choose from our selection of wholesome options, including fresh fruit bowls, whole grain muffins, and protein-packed smoothies. With our commitment to quality ingredients and delicious flavors, you can enjoy a satisfying breakfast that fuels your day. Visit FoodMart Express and start your day on a healthy note!</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->
<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₱45 </span>
            <img src="images/bf.jpg" alt="">
            <h3>burger fries</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱450 </span>
            <img src="images/cake.jpg" alt="">
            <h3>tasty cakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱5 - ₱20 </span>
            <img src="images/sweet.jpg" alt="">
            <h3>tasty sweets</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱15 </span>
            <img src="images/cupcake.jpg" alt="">
            <h3>tasty cupcakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱20 </span>
            <img src="images/drinks.jpg" alt="">
            <h3>cold drinks</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱25 </span>
            <img src="images/halo.jpg" alt="">
            <h3>Halo-Halo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>

    </div>

</section>

<!-- popular section ends -->
<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Burger</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Sandwich</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Taco</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Cupcakes</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Freeze Dried Yogurt</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Fried Chicken</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Egg Sandwich</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Mini Chocolate</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Blueberry Muffins</p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/rasel.jpg" alt="">
            <h3>Rasel Santillan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>The food is great 10/10 I will buy again!!</p>
        </div>
        <div class="box">
            <img src="images/genesis.jpg" alt="">
            <h3>Genesis Lloyd Manuevo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>The food is great!!!</p>
        </div>
        <div class="box">
            <img src="images/kyneth.jpg" alt="">
            <h3>Kyneth A. Querimit</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Walang Unli Rice</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">
        
        <div class="image">
            <img src="images/yummy.jpg" alt="">
        </div>

        <form id="orderForm">

            <div class="inputBox">
                <input type="text" placeholder="Name" name="name" id="name" required>
                <input type="email" placeholder="Email" name="email" id="email" required>
            </div>

            <div class="inputBox">
                <input type="tel" placeholder="Phone Number:" name="phone" id="phone" pattern="09[0-9]{9}" inputmode="numeric" required>
                <input type="text" placeholder="Address:" name="food" id="food" required>
            </div>

            <textarea placeholder="Food Name" name="address" id="address" cols="30" rows="10" required></textarea>

            <button type="submit" class="btn">Order Now </button>

        </form>

         <!-- custom alert box -->
    <div class="custom-alert-overlay"></div>
    <div class="custom-alert" id="customAlert">
        <h2>Order Confirmation</h2>
        <p id="alertMessage"></p>
        <button onclick="closeAlert()">OK</button>
    </div>

</section>
    </div>

</section>

<!-- order section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com" target="_blank" class="btn">facebook</a>
        <a href="https://www.x.com" target="_blank" class="btn">X</a>
        <a href="https://www.instagram.com" target="_blank" class="btn">instagram</a>
        <a href="https://www.pinterest.com" target="_blank" class="btn">pinterest</a>
        <a href="https://www.linkedin.com" target="_blank" class="btn">linkedin</a>
    </div>

    <h1 class="credit"><span> </span> | all rights reserved! </h1>

</section>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

    <script>
    document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of the link
        var confirmLogout = confirm("Are you sure you want to logout?");
        if (confirmLogout) {
            window.location.href = this.getAttribute('href'); // Redirect to the logout page
        }
    });
</script>

<script>
    document.getElementById('orderForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the values from the form fields
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var food = document.getElementById('food').value;
        var address = document.getElementById('address').value;

        // Create the alert message
        var message = "Thank you for ordering our foods!\n\n";
        message += "Name: " + name + "\n";
        message += "Email: " + email + "\n";
        message += "Phone: " + phone + "\n";
        message += "Food: " + food + "\n";
        message += "Address: " + address;

        // Show the custom alert message
        document.getElementById('alertMessage').innerText = message;
        document.querySelector('.custom-alert-overlay').style.display = 'block';
        document.getElementById('customAlert').style.display = 'block';

        // Clear and hide the form
        document.getElementById('orderForm').reset();
        document.getElementById('orderFormContainer').classList.add('hidden');
    });

    function closeAlert() {
        document.querySelector('.custom-alert-overlay').style.display = 'none';
        document.getElementById('customAlert').style.display = 'none';
    }
</script>

</body>
</html>