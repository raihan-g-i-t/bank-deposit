<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
     
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

    @if(session('success'))
        @include('user.modal');
    @endif

</body>
</html>
