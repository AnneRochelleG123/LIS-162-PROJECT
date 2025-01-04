<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to our website!">
    <meta name="keywords" content="home, website, html, homepage">
    <meta name="author" content="Your Name">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Full-Screen Styling */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        header, footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            justify-content: center;
            background-color: #444;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }

        nav ul li a:hover {
            background-color: #666;
            border-radius: 5px;
        }

        #hero {
            height: 100vh; /* Full screen height */
            background: url('hero-image.jpg') no-repeat center center/cover; /* Optional background image */
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        #hero h1 {
            font-size: 3rem;
        }

        #hero .cta-button {
            margin-top: 20px;
            background: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
        }

        #hero .cta-button:hover {
            background: #0056b3;
        }

        section {
            padding: 40px 20px;
            text-align: center;
        }

        #contact form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        #contact input, #contact textarea {
            width: 80%;
            max-width: 400px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #contact button {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #contact button:hover {
            background: #0056b3;
        }

        footer {
            margin-top: auto; /* Push footer to the bottom */
        }
    </style>
</head>
<body>
    <!-- Blade Component: x-app-layout -->
    <x-app-layout>
        <!-- Header Section -->
        <header>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <h1>User page after login<h1>
 <!-- Request Button -->
 <a href="/requests">
        <button type="button">Make a Request</button>
    </a>
        <!-- Hero Section -->
        <section id="hero">
            <h1>Welcome to Our Website</h1>
            <p>Your journey to success starts here!</p>
            <a href="#services" class="cta-button">Learn More</a>
        </section>

        <!-- About Section -->
        <section id="about">
            <h2>About Us</h2>
            <p>We are a passionate team dedicated to delivering the best solutions for your needs.</p>
        </section>

        <!-- Services Section -->
        <section id="services">
            <h2>Our Services</h2>
            <ul>
                <li>Web Design</li>
                <li>SEO Optimization</li>
                <li>Content Creation</li>
            </ul>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out!</p>
            <form action="submit_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <textarea id="message" name="message" placeholder="Your message here..." required></textarea><br>
                <button type="submit">Submit</button>
            </form>
        </section>
    </x-app-layout>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Your Company Name. All rights reserved.</p>
    </footer>

</body>
</html>
