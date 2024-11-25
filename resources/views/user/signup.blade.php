<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        /* Background Image */
        body {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('pic.png') no-repeat center center/cover;
            height: 100vh;
        }

        /* Registration Container */
        .registration-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            text-align: center;
            width: 400px;
        }

        /* Title */
        .registration-container h1 {
            font-size: 28px;
            margin-bottom: 20px;
            letter-spacing: 1.5px;
        }

        /* Input Fields */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            outline: none;
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Button */
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #36d1dc, #5b86e5);
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: #fff;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(60, 162, 255, 0.6);
        }

        /* Footer */
        .footer {
            margin-top: 20px;
            font-size: 14px;
        }

        .footer a {
            color: #5b86e5;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
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
</body>
</html>
