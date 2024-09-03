<?php
//database connection
include("Database_connection.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landlord system</title>
    <style>
  /* Reset some default browser styles */
body, h1, header, nav, main, section, input, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic body styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f4f4f4;
    padding: 0 20px;
}

/* Heading styling */
h1 {
    text-align: center;
    margin-top: 20px;
    font-size: 2.5em;
    color: #444;
}

/* Header and navigation styling */
header {
    background-color: #2c3e50;
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

nav {
    display: flex;
    justify-content: center;
    gap: 30px;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-size: 1em;
    padding: 5px 10px;
    transition: background-color 0.3s ease;
}

nav a:hover {
    background-color: #34495e;
    border-radius: 5px;
}

/* Main section styling */
main {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    width: 100%;
}

/* Form styling */
form {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    width: 100%;
}

fieldset {
    border: none;
    margin-bottom: 20px;
}

legend {
    font-size: 1.5em;
    color: #2980b9;
    margin-bottom: 10px;
}

label {
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="number"],
input[type="date"],
textarea,
select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1em;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="date"]:focus,
textarea:focus,
select:focus {
    border-color: #2980b9;
    outline: none;
}

input[type="submit"] {
    background-color: #2980b9;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2em;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #3498db;
}

/* Responsive styling */
@media (max-width: 768px) {
    body {
        padding: 0 10px;
    }

    h1 {
        font-size: 2em;
    }

    form {
        padding: 20px;
    }

    nav {
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
}

</style>

</head>
<body>
    <h1>Landlord system</h1>
    <header>
        <nav >
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="About.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
    <form action="submit_property.php" method="POST">

      
        <!-- Property Information -->
        <fieldset>
            <legend>Property Information</legend>
            
            <label for="address">Property Address:</label><br>
            <input type="text" id="address" name="address" required><br><br>

            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" required><br><br>

            <label for="state">State:</label><br>
            <input type="text" id="state" name="state" required><br><br>

            <label for="code">House Number:</label><br>
            <input type="text" id="zipCode" name="code" required><br><br>

            <label for="type">Property Type:</label><br>
            <select id="type" name="type" required>
                <option value="Apartment">Apartment</option>
                <option value="House">House</option>
                <option value="Condo">Condo</option>
                <option value="Townhouse">Townhouse</option>
            </select><br><br>

            <label for="beds">Number of Bedrooms:</label><br>
            <input type="number" id="beds" name="beds" required><br><br>

            <label for="baths">Number of Bathrooms:</label><br>
            <input type="number" id="baths" name="baths" required><br><br>

            <label for="rent">Monthly Rent ($):</label><br>
            <input type="number" id="rent" name="rent" required><br><br>

            <label for="date">Availability Date:</label><br>
            <input type="date" id="date" name="date" required><br><br>

            <label for="description">Property Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" placeholder="Provide a brief description of the property..."></textarea><br><br>

            <!-- <label for="photos">Upload Property Photos:</label><br>
            <input type="file" id="photos" name="photos[]" multiple><br><br> -->
        </fieldset>

        <!-- Submission -->
        <input type="submit" value="Register Property">
    </form>
    </main>
    
</body>
</html>

