<?php
    // Database connection information
    $host = "172.31.22.43";
    $username = "Datt200552718";
    $pass = "Hoe_l7cVUT";
    $dbname = "Datt200552718";

    // Create a database connection
    $connection = new mysqli($host, $username, $pass, $dbname);

    // Check if the connection was successful
    if (!$connection) {
        echo "Oops... Something went wrong with the database connection.";
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get data from the form
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $size = $_POST["pizzaSize"];
        $type = $_POST["pizzaType"];
        $delivery = $_POST["delivery"];
        $quantity = $_POST["quantity"];
        
        // Checkboxes may have multiple selections, so use implode to join them into a string
        $dips = isset($_POST["dips"]) ? implode(", ", $_POST["dips"]) : "";
        $toppings = isset($_POST["topping"]) ? implode(", ", $_POST["topping"]) : "";

        // Insert the data into the database
        $query = "INSERT INTO DattPizza (name, email, phone, size, toppings, dips, type, delivery, quantity)
                  VALUES ('$name', '$email', '$phone', '$size', '$toppings', '$dips', '$type', '$delivery', '$quantity')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            // Display order confirmation with submitted data
            echo "<h1>Order Confirmation</h1>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone Number: $phone</p>";
            echo "<p>Size of Pizza: $size</p>";
            echo "<p>Pizza Type: $type</p>";
            echo "<p>Delivery: $delivery</p>";
            echo "<p>Toppings: $toppings</p>";
            echo "<p>Dips: $dips</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Your order has been placed successfully!</p>";
        } else {
            // Display an error message if there was a problem with the database query
            echo "Error: " . mysqli_error($connection);
        }

        // Close the database connection
        mysqli_close($connection);
    } else {
        // Display a message if the form was not submitted
        echo "Form not submitted.";
    }
?>
