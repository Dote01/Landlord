<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Landlord System</title>
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

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 600px;
            width: 100%;
            margin: 20px auto;
        }

        label {
            display: block;
            font-size: 1rem;
            color: #555;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:focus {
            outline: none;
        }

        /* Main content styles */
.contact-section {
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.contact-section h1, .contact-section h2 {
    text-align: center;
}

.contact-info {
    margin-bottom: 30px;
}

.contact-form {
    margin-top: 20px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-form input, .contact-form textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form button {
    padding: 10px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.contact-form button:hover {
    background-color: #555;
}

/* Footer styles */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: bottom;
    bottom: 0;
    width: 100%;
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
    <section class="contact-section">
            <h1>Contact Us</h1>
            <p>If you have any questions or would like to learn more about our properties, please feel free to get in touch with us using the form below or the contact details provided.</p>
            
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><strong>Phone:</strong> (255) 753961345</p>
                <p><strong>Email:</strong> info@landlordwebsite.com</p>
                <p><strong>Address:</strong> 123 Main Street, Mbeya, TANZANIA</p>
            </div>

            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form action="submit_form.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Landlord Website. All rights reserved.</p>
    </footer>
</body>
</html>
