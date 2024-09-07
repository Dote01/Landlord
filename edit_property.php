<?php
// Database connection
include("Database_connection.php");
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "User not logged in. Please <a href='login.php'>log in</a>.";
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
// Retrieve property_id from POST or GET request
$property_id = $_GET['property_id'] ;

if (!$property_id) {
    echo "No property ID provided.";
    exit();
}

// Retrieve property details for editing
$query = "SELECT * FROM property WHERE property_id = $property_id";
$result = $db->query($query);
$property = $result->fetch_assoc();

if (!$property) {
    echo "Property not found.";
    exit();
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update property details
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    $type = $_POST['type'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $rent = $_POST['rent'];
    $date = $_POST['date'];
    $property_id = $_POST['property_id'];
    $description = $_POST['description'];

    $update = "UPDATE property SET address='$address', country='$state', city='$city', house_number='$code', 
    price='$rent', description='$description', property_type='$type', beds='$beds', baths='$baths', date='$date' WHERE property_id='$property_id'";
    $update_result = $db->query($update); 
       if ($update_result) {
        header("Location: edit_property.php?property_id=" . $property_id);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property</title>
    <style>
        body, h1, form, input, select, textarea {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            padding: 0 20px;
        }


        body,
        h1,
        header,
        nav,
        main,
        section {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 2.5rem;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 2.5rem;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #555;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <a href="home.php">Home</a>
            <a href="#">Search</a>
            <a href="#">Contact</a>
            <a href="#">Sign In</a>
            <a href="#">About</a>
            <a href="register.html">Sign Up</a>
        </nav>
    </header>
    <h1>Edit Property</h1>
    <form action="edit_property.php" method="POST">
        <input type="hidden" name="property_id" value="<?php echo htmlspecialchars($property_id); ?>">
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($property['address']); ?>" required>
        
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($property['city']); ?>" required>
        
        <label for="state">State:</label>
        <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($property['country']); ?>" required>
        
        <label for="code">House Number:</label>
        <input type="text" id="code" name="code" value="<?php echo htmlspecialchars($property['house_number']); ?>" required>
        
        <label for="type">Property Type:</label>
        <input type="text" id="type" name="type" value="<?php echo htmlspecialchars($property['property_type']); ?>" required>
        
        <label for="beds">Number of Beds:</label>
        <input type="number" id="beds" name="beds" value="<?php echo htmlspecialchars($property['beds']); ?>" required>
        
        <label for="baths">Number of Baths:</label>
        <input type="number" id="baths" name="baths" value="<?php echo htmlspecialchars($property['baths']); ?>" required>
        
        <label for="rent">Rent Amount:</label>
        <input type="number" id="rent" name="rent" value="<?php echo htmlspecialchars($property['price']); ?>" required>
        
        <label for="date">Availability Date:</label>
        <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($property['date']); ?>" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo htmlspecialchars($property['description']); ?></textarea>
        
        <input type="hidden" name="property_id" value ="<?php echo $property['property_id'] ?>">
        <button type="submit">Update Property</button>
        <button><a href="home.php">Home</a></button>
    </form>
</body>
</html>
