<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #141e30, #243b55);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Profile Container */
        .profile-container {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            width: 350px;
            text-align: center;
            padding: 20px;
        }

        /* Profile Picture */
        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #fff;
            margin: 0 auto;
            background: url('dp.jpg') no-repeat center center/cover;
        }

        /* User Name */
        .profile-name {
            margin: 20px 0 10px;
            font-size: 24px;
            font-weight: bold;
        }

        /* User Bio */
        .profile-bio {
            font-size: 14px;
            color: #ddd;
            margin-bottom: 20px;
        }

        /* Profile Stats */
        .profile-stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .stat {
            text-align: center;
        }

        .stat h3 {
            font-size: 18px;
            margin: 0;
            color: #fff;
        }

        .stat p {
            margin: 0;
            font-size: 12px;
            color: #aaa;
        }

        /* Edit Profile Button */
        .edit-button {
            padding: 10px 20px;
            background: linear-gradient(45deg, #36d1dc, #5b86e5);
            border: none;
            border-radius: 8px;
            font-size: 14px;
            color: #fff;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .edit-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(60, 162, 255, 0.6);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-picture" style="background-image: url('https://via.placeholder.com/120');"></div>
        <h1 class="profile-name">John Doe</h1>
        <p class="profile-bio">Web Developer | Tech Enthusiast | Lifelong Learner</p>
        <div class="profile-stats">
            <div class="stat">
                <h3>120</h3>
                <p>Posts</p>
            </div>
            <div class="stat">
                <h3>300</h3>
                <p>Followers</p>
            </div>
            <div class="stat">
                <h3>180</h3>
                <p>Following</p>
            </div>
        </div>
        <button class="edit-button">Edit Profile</button>
    </div>
</body>
</html>
