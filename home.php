<?php
//start session
session_start();

//database connection
include("Database_connection.php");


//retrieving the landlord id
$landlord_id = $_SESSION['user_id'];

//retrieving all the prpoerties by landlord at the database
$query = "SELECT * FROM property WHERE landlord_id = '".$landlord_id."'";
$result = $db->query($query);

if(!$result){
    echo "Error: $db->error";
    echo "<br>There was an error with fetching the properties' data from database please try agian later";
}

$fetchedProperties = array();

while ($property = $result->fetch_assoc()){
    $fetchedProperties[] = $property;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        hr {
            width: 80%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        h3 {
            text-align: center;
            color: #555;
            margin-top: 20px;
        }

        /* Table styles */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
            color: #333;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
         /* Action buttons container */
         .action-buttons-container {
            margin: 20px auto;
            text-align: right;
            width: 80%;
        }

        /* Button styles */
        .action-buttons a {
            text-decoration: none;
            color: white;
            background-color: #2980b9;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            margin-left: 10px;
            display: inline-block;
        }

        .action-buttons a:hover {
            background-color: #3498db;
        }

        /* Button styles
        .action-buttons a {
            text-decoration: none;
            color: white;
            background-color: #2980b9;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .action-buttons a:hover {
            background-color: #3498db;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        } */


        /* Responsive design */
        @media (max-width: 768px) {
            table {
                width: 100%;
            }

            th, td {
                padding: 10px;
            }

            h1 {
                font-size: 1.5em;
            }

            h3 {
                font-size: 1.2em;
            }
            .action-buttons-container {
                width: 100%;
                text-align: center;
            }

            .action-buttons a {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    
       
    </style>
</head>
<body>
    <h1>Landlord Dashboard</h1>
    <hr>
    <h3>My Properties</h3>

        <?php foreach($fetchedProperties as $property): ?>
            <table border="1px solid black">
        <tr>
            <td>Address</td>
            <td><?php echo $property['address'] ?></td>
        </tr>

        <tr>
            <td>Country</td>
            <td><?php echo $property['country'] ?></td>
        </tr>

        <tr>
            <td>City</td>
            <td><?php echo $property['city'] ?></td>
        </tr>

        <tr>
            <td>House Number</td>
            <td><?php echo $property['house_number'] ?></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><?php echo $property['price'] ?></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><?php echo $property['description'] ?></td>
        </tr>

        <tr>
            <td>Property Type</td>
            <td><?php echo $property['property_type'] ?></td>
        </tr>

        <tr>
            <td>Beds</td>
            <td><?php echo $property['beds'] ?></td>
        </tr>

        <tr>
            <td>Baths</td>
            <td><?php echo $property['baths'] ?></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><?php echo $property['date'] ?></td>
        </tr>

        <!-- <tr>
            <td><a href="edit_property.php?property_id=<?php echo $property['property_id'] ?>">Edit</a></td>
            <td><a href="delete_property.php?property_id=<?php echo $property['property_id'] ?>">Delete</a></td>
        </tr> -->
        </table>
<?php endforeach   ?>
<!-- action button -->
<div class="action-buttons-container">
        <?php if (!empty($fetchedProperties)): ?>
            <div class="action-buttons">
                <a href="edit_property.php?property_id=<?php echo $property['property_id']; ?>">Edit</a>
                <a href="delete_property.php?property_id=<?php echo $property['property_id']; ?>">Delete</a>
            </div>
        <?php endif; ?>
    </div>
    
</body>
</html>