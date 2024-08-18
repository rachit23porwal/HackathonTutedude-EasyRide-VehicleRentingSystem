<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyRide Vehicle Rental</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="jQuery.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="#">EasyRide</a>
            </div>
            <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span class="menu-icon"></span></a>
            </div>
                <ul class="nav-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#vehicles">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#cart">Cart</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="hero">
        <div class="hero-content">
            <h1>Vehicle Rental Service</h1>
            <p>Your Ride, Your Way</p>
            <a href="#vehicles" class="btn">Browse Vehicles</a>
        </div>
    </section>

    <section class="about-us" id="about">
        <h2>About Us</h2>
        <p>

            Welcome to EasyRide, your premier destination for affordable and reliable vehicle rentals. We specialize in providing a diverse range of vehicles to suit every need and budget. Whether you're looking for an eco-friendly electric scooter, a convenient petrol scooter, a sturdy bike, a comfortable car, or a versatile bicycle, we have you covered.
            
            At EasyRide, our mission is to make transportation accessible and economical for everyone. We pride ourselves on offering high-quality vehicles at competitive prices, ensuring that you get the best value for your money. Our team is dedicated to providing exceptional customer service, and we are always here to assist you with your rental needs.
            
            Discover the freedom and convenience of EasyRide today, and experience transportation like never before.</p>
    </section>

    <section class="vehicle-categories" id="vehicles">
        <h2>Our Vehicles</h2>
        <div class="vehicle-category">
            <img src="electric-scooter.jpg" alt="Electric Scooter">
            <h3>Electric Scooters</h3>
            <p>Eco-friendly and perfect for short distances.</p>
            <button class="explore-button" onclick="showSiblings(this)">Explore</button>
            <div class="sibling-products" style="display: none;">
                <div class="sibling">
                    <h4>Electric Scooter Model X</h4>
                    <p>Price: $20.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="sibling">
                    <h4>Electric Scooter Model Y</h4>
                    <p>Price: $18.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="vehicle-category">
            <img src="petrol-scooter.jpg" alt="Electric Scooter">
            <h3>Petrol Scooters</h3>
            <p>Perfect for long distances.</p>
            <button class="explore-button" onclick="showSiblings(this)">Explore</button>
            <div class="sibling-products" style="display: none;">
                <div class="sibling">
                    <h4>Petrol Scooter Model X</h4>
                    <p>Price: $40.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="sibling">
                    <h4>Petrol Scooter Model Y</h4>
                    <p>Price: $32.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="vehicle-category">
            <img src="bike.jpg" alt="Electric Scooter">
            <h3>Bikes</h3>
            <p>Perfect for long distances and status symbol.</p>
            <button class="explore-button" onclick="showSiblings(this)">Explore</button>
            <div class="sibling-products" style="display: none;">
                <div class="sibling">
                    <h4>Bike Model X</h4>
                    <p>Price: $30.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="sibling">
                    <h4>Bike Model Y</h4>
                    <p>Price: $36.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="vehicle-category">
            <img src="bicycle.jpg" alt="Electric Scooter">
            <h3>Bicycles</h3>
            <p>Eco-friendly Pollute less</p>
            <button class="explore-button" onclick="showSiblings(this)">Explore</button>
            <div class="sibling-products" style="display: none;">
                <div class="sibling">
                    <h4>Bicycle Model X</h4>
                    <p>Price: $2.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="sibling">
                    <h4>Bicycle Model Y</h4>
                    <p>Price: $5.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="vehicle-category">
            <img src="car.jpg" alt="Electric Scooter">
            <h3>Cars</h3>
            <p>Perfect for Long Drives.</p>
            <button class="explore-button" onclick="showSiblings(this)">Explore</button>
            <div class="sibling-products" style="display: none;">
                <div class="sibling">
                    <h4>Car Model X</h4>
                    <p>Price: $72.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="sibling">
                    <h4>Car Model Y</h4>
                    <p>Price: $55.00</p>
                    <p>Time Limit: 12 hours</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <h2>Why Choose Us</h2>
        <div class="feature" id="easy-booking">
            <img src="easy-booking.jpg" alt="Easy Booking" class="easy-booking">
            <h3>Easy Booking</h3>
            <p>Book your vehicle in just a few clicks.</p>
        </div>
        <div class="feature">
            <img src="affordable-prices.jpg" alt="Affordable Prices">
            <h3>Affordable Prices</h3>
            <p>Competitive rates for all types of vehicles.</p>
        </div>
        <div class="feature">
            <img src="support.jpg" alt="Customer Support">
            <h3>24/7 Customer Support</h3>
            <p>We’re here to help you anytime.</p>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial">
            <p>"EasyRide made my trip so convenient. The booking process was seamless and the vehicle was in great condition!"</p>
            <h4>– John Doe</h4>
        </div>
        <div class="testimonial">
            <p>"Affordable and reliable. I rented a bike for my daily commute and it's been fantastic!"</p>
            <h4>– Jane Smith</h4>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <h2>Contact Us</h2>
        <form method="post1" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="emailcontact" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit" name="send">Send</button>
        </form>
    </section>

<section class="cart" id="cart">
    <h2>Your Cart</h2>
    <div class="cart-container">
        <div class="heading"><h3>Product Name</h3><h3>Product Quantity</h3><h3>Product Price</h3></div>
        <ul id="cart-items"></ul>
        <div class="cart-summary">
            <p id="total-items">Total Items: 0</p>
            <p id="total-price">Total Price: $0.00</p>
            <button id="checkout">Checkout</button>
        </div>
    </div>
</section>

<div id="checkoutForm" style="display: none;">
    <span id="closeForm">&times;</span>
    <form onsubmit="return compareDate();" method="post" action="process.php">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="rentDate">Date of Vehicle Rent:</label>
        <input type="date" id="rentDate" name="rentDate" required>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>
        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" name="submit" id="submit">Submit</button>
    </form>
</div>

<div id="cart-icon" style="display: none;">
    <img src="cart.png" alt="Cart">
    <span id="cart-item-count">0</span>
</div>

    <footer>
    <div class="footer-content">
        <div class="social-icons">
            <a href="https://www.facebook.com/rachit23porwal" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/Rachit14360006" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/rachit-porwal-8160442a9/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.instagram.com/rachit23_porwal/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p>&copy; 2024 EasyRide. All rights reserved.</p>
        <p><a href="terms.html">Terms of Service</a> | <a href="privacy.html">Privacy Policy</a></p>
    </div>
</footer>

    <script src="/js/script.js"></script>
</body>

</html>