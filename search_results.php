<?php
// Start session
session_start();

// Database connection
include("Database_connection.php");

// Retrieve the search term from the query string
$searchTerm = $_GET['search'];

// Prepare the SQL query to search properties
$query = "SELECT * FROM property 
          WHERE address LIKE ? 
          OR city LIKE ? 
          OR description LIKE ? 
          OR property_type LIKE ?";

// Prepare statement to prevent SQL injection
$stmt = $db->prepare($query);
$likeTerm = '%' . $searchTerm . '%';
$stmt->bind_param('ssss', $likeTerm, $likeTerm, $likeTerm, $likeTerm);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Fetch all matching properties
$properties = array();
while ($property = $result->fetch_assoc()) {
    $properties[] = $property;
}

// Close the statement and connection
$stmt->close();
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | Landlord System</title>
    <style>
        /* Include the same styles as the main page */
        body, h1, header, nav, main, section, input, button {
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
            font-size: 2.5em;
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
            font-size: 1em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .no-results {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Landlord System</h1>
    <header>
        <nav>
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
            <a href="register.php">Sign Up</a>
        </nav>
    </header>

    <main>
        <h1>Search Results</h1>

        <?php if (count($properties) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Address</th>
                        <th>City</th>
                        <th>Property Type</th>
                        <th>Price</th>
                        <th>Beds</th>
                        <th>Baths</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($properties as $property): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($property['address']); ?></td>
                            <td><?php echo htmlspecialchars($property['city']); ?></td>
                            <td><?php echo htmlspecialchars($property['property_type']); ?></td>
                            <td><?php echo htmlspecialchars($property['price']); ?></td>
                            <td><?php echo htmlspecialchars($property['beds']); ?></td>
                            <td><?php echo htmlspecialchars($property['baths']); ?></td>
                            <td><?php echo htmlspecialchars($property['description']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="no-results">No properties found matching your search criteria.</p>
        <?php endif; ?>
    </main>
</body>
</html>
