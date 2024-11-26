<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>

        /* General Reset */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    box-sizing: border-box;
}

:root {
    --primary-color: #3498db;
    --secondary-color: #2ecc71;
    --text-color: #333;
    --light-bg: #f9f9f9;
}

/* Navbar Styling */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background: var(--primary-color);
    color: #fff;
}

.navbar .logo {
    font-size: 1.5rem;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 1rem;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--secondary-color);
}

.auth-buttons button {
    background: var(--secondary-color);
    border: none;
    padding: 0.5rem 1rem;
    color: #fff;
    margin-left: 0.5rem;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: background 0.3s ease;
}

.auth-buttons button:hover {
    background: #27ae60;
}

/* Hero Section */
.hero-section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: linear-gradient(to right, #3498db, #2ecc71);
    color: #fff;
    padding: 2rem;
}

.hero-content h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
}

.cta-btn {
    padding: 1rem 2rem;
    background: #fff;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background 0.3s ease, color 0.3s ease;
}

.cta-btn:hover {
    background: var(--primary-color);
    color: #fff;
}

/* Platform Details Section */
.details-section {
    padding: 3rem 2rem;
    background: var(--light-bg);
    text-align: center;
}

.details-section h2 {
    font-size: 2.5rem;
    margin-bottom: 2rem;
    color: var(--text-color);
}

.details-container {
    display: flex;
    gap: 2rem;
    justify-content: center;
}

.detail-card {
    background: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    flex: 1;
    max-width: 300px;
}

.detail-card h3 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.detail-card p {
    color: var(--text-color);
}

     </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">PlatformName</div>
        <ul class="nav-links">
            <li><a href="#details">Platform Details</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <a href="{{route("login")}}"><button class="login-btn">Login</button> </a>
            <a href="{{route("user.signup")}}"><button class="signup-btn">Sign Up</button></a>
        </div>
    </nav>
    <header class="hero-section">
        <div class="hero-content">
            <h1>Welcome to PlatformName</h1>
            <p>Discover the ultimate platform for your needs. Experience cutting-edge features and seamless integration.</p>
            <a href="{{route("user.signup")}}" class="cta-btn">Get Started</a>
        </div>
    </header>
    <section id="details" class="details-section">
        <h2>Why Choose PlatformName?</h2>
        <div class="details-container">
            <div class="detail-card">
                <h3>Feature 1</h3>
                <p>Experience blazing fast performance tailored to your needs.</p>
            </div>
            <div class="detail-card">
                <h3>Feature 2</h3>
                <p>Our platform is designed with simplicity and usability in mind.</p>
            </div>
            <div class="detail-card">
                <h3>Feature 3</h3>
                <p>Seamlessly integrate with tools you already love and use.</p>
            </div>
        </div>
    </section>
</body>
</html>
