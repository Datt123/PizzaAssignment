<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Pizza Order</title>
</head>
<body>
    <!-- Header section with navigation -->
    <header class="header">
        <nav class="pizza-nav">
            <div class="navbar-brand">
                <img src="./logo.jpeg" alt="header logo">
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Location</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content container -->
    <div class="container">
        <h1>Dattu's Pizzzzzzza</h1>

        <!-- Pizza Order Form -->
        <form action="confirmation.php" method="POST" id="pizzaForm">

            <!-- Pizza Information Section -->
            <section class="PizzaInfo">
                <h2>Pizza Information</h2>
                <label for="pizzaSize">Pizza Size:</label>
                <p>
                    <select id="pizzaSize" name="pizzaSize">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        <option value="extra large">Extra Large</option>
                    </select>
                </p>
                <br>

                <!-- Toppings checkboxes -->
                <label>Toppings (choose at least one):</label><br>  
                <div class="topping-checkbox">
                    <input type="checkbox" id="pepperoni" name="topping[]" value="Pepperoni">
                    <label for="pepperoni">Pepperoni</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="mushrooms" name="topping[]" value="Mushrooms">
                    <label for="mushrooms">Mushrooms</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="bacon" name="topping[]" value="Bacon">
                    <label for="bacon">Bacon</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="sausage" name="topping[]" value="Sausage">
                    <label for="sausage">Sausage</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="pineapple" name="topping[]" value="Pineapple">
                    <label for="pineapple">Pineapple</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="onions" name="topping[]" value="Onions">
                    <label for="onions">Onions</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="olives" name="topping[]" value="Olives">
                    <label for="olives">Olives</label>
                </div>
                <br>
                <!--Dipping choices for customers-->
                <label>Dips:</label><br>
                <div class="topping-checkbox">
                    <input type="checkbox" id="creamyGarlic" name="dips[]" value="Creamy Garlic">
                    <label for="creamyGarlic">Creamy Garlic</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="cheddarSriracha" name="dips[]" value="Cheddar Sriracha">
                    <label for="cheddarSriracha">Cheddar Sriracha</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="creamyDill" name="dips[]" value="Creamy Dill">
                    <label for="creamyDill">Creamy Dill</label>
                </div>
                <div class="topping-checkbox">
                    <input type="checkbox" id="cheddarJalapeno" name="dips[]" value="Cheddar Jalapeno">
                    <label for="cheddarJalapeno">Cheddar Jalapeno</label>
                </div>
                <br>
                <!-- Quantity input -->
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
                <br>

                <!-- Pizza Type radio buttons -->
                <p>
                    <label>Pizza Type:</label><br>
                    <input type="radio" id="stoneBaked" name="pizzaType" value="Stone Baked">
                    <label for="stoneBaked">Stone Baked</label>
                    <input type="radio" id="ovenBaked" name="pizzaType" value="Oven Baked">
                    <label for="ovenBaked">Oven Baked</label>
                    <br>
                </p>

                <!-- Delivery radio buttons -->
                <label>Delivery:</label>
                <input type="radio" id="yes" name="delivery" value="Yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="delivery" value="No">
                <label for="no">No</label>
            </section>

            <!-- Personal Information Section -->
            <section class="personalinfo">
                <h2>Personal Information</h2>
                <!-- Name input -->
                <label for="name">Enter your Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
                <br>

                <!-- Email input -->
                <label for="email">Enter your Email address:</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
                <br>

                <!-- Phone number input -->
                <label for="phone">Enter your Phone number:</label>
                <div class="phone-input">
                    <!-- Country code dropdown -->
                    <select name="country_code" id="country_code" required>
                        <option value="">Select Country Code</option>
                        <option value="+1">+1 (US/Canada)</option>
                        <option value="+91">+91 (India)</option>
                        <option value="+44">+44 (UK)</option>
                        <option value="+52">+52 (Mexico)</option>
                        <option value="+7">+7 (Russia)</option>
                    </select>
                    <!-- Phone number input -->
                    <input type="tel" id="phone" name="phone" placeholder="9999999999" required>
                </div>
                <br>
            </section>

            <!-- Submit button to place the order -->
            <input type="submit" value="Place Order">
        </form>
    </div>
</body>
</html>
