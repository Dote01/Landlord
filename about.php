<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Landlord System</title>
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

        p {
            margin-bottom: 1.5rem;
            font-size: 1.2em;
            color: #555;
        }
        
/* General Styles for Team Section */
.team {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Team Column Styles */
.team-column {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Team Member Styles */
.team-member {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: center;
}

.team-member:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Image Styles */
.team-member img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    margin-bottom: 10px;
}

/* Name and Role Styles */
.team-member h3 {
    font-size: 18px;
    color: #333;
    margin: 10px 0 5px;
}

.team-member p {
    font-size: 14px;
    color: #777;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .team {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 15px;
        padding: 15px;
    }

    .team-member h3 {
        font-size: 16px;
    }

    .team-member p {
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .team {
        grid-template-columns: 1fr;
        gap: 10px;
        padding: 10px;
    }

    .team-column {
        flex-direction: column;
    }

    .team-member {
        padding: 10px;
    }

    .team-member h3 {
        font-size: 14px;
    }

    .team-member p {
        font-size: 12px;
    }
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
        <h1>About Us</h1>
        <p>
            Welcome to the Landlord System, a comprehensive solution for managing properties, tenants, and rental agreements. Our platform provides an easy-to-use interface for landlords and tenants alike, helping you streamline property management and improve communication.
        </p>
        <p>
            Our team is dedicated to providing the best possible experience for our users. Whether you are a landlord looking to manage multiple properties or a tenant searching for your next home, the Landlord System is here to help.
        </p>
        <p>
            Thank you for choosing our platform. We are constantly working to improve our services and welcome any feedback you may have.
        </p>


    </main>
    <h2>Meet the Team</h2>
                <div class="team">
                    <div class="team-member">
                        <img src="image/wile.jpg" alt="Jamy Sovera">
                        <h3>Jamy Sovera</h3>
                        <p>Founder </p>
                    </div>
                    <div class="team-member">
                        <img src="image/me.jpg" alt="Dotte Samwel">
                        <h3>Dotte Samwel</h3>
                        <p>Property Manager</p>
                    </div>
                    <div class="team-member">
                        <img src="image/abinery.jpg" alt="Dotte Samwel">
                        <h3>Abinery A Kinmwiko</h3>
                        <p>CEO</p>
                    </div>
                    <div class="team-member">
                        <img src="image/peter.jpg" alt="Dotte Samwel">
                        <h3>ahmed mohammed</h3>
                        <p>Font-end Developer</p>
                    </div>
                    
                </div>
         </section>
        </main>
    <footer>
        <p>&copy; 2024 Landlord Website. All rights reserved.</p>
    </footer>


</body>
</html>
