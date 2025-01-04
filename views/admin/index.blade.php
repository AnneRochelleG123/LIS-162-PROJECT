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
    <!-- Optional: Link to Google Fonts or other stylesheets -->
</head>
<body>

    Admin
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

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Your Company Name. All rights reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <script src="script.js"></script>


</body>
</html>
