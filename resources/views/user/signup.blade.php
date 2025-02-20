<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">


    
</head>
<body>
    <div class="registration-container">
        <h1>Create Account</h1>
        <form action="{{route("user.signup")}}" method="POST">
            @csrf
            <div class="input-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <!-- <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
            </div> -->
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>
            <!-- <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div> -->
            <button type="submit">Register</button>
        </form>
        <div class="footer">
            <p>Already have an account? <a href="{{route("login")}}">Log in</a></p>
        </div>
    </div>

    @if(session('success'))
        @include('user.modal');
    @endif


    
</body>
</html>
