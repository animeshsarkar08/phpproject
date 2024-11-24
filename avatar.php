<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Galaxy</title>
    <style>
        /* General styles */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-color: rgba(0, 0, 0, 0.8);
        }

        h1 {
            margin: 0;
            padding: 0;
        }

        /* Welcome Page */
        .welcome-page {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 128, 0.5); /* Blue transparent background */
            visibility: visible;
            opacity: 1;
            transition: opacity 4s ease; /* Slow fade-out effect */
        }

        .welcome-content {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.8rem;
            animation: textEntrance 2s ease-out;
        }

        .ai-avatar {
            width: 150px;
            height: 150px;
            margin-right: 20px;
            animation: avatarBounce 2s ease-out infinite;
        }

        .welcome-text {
            animation: fadeInText 2s ease-out;
        }

        /* Main Page */
        .main-page {
            position: relative;
            height: 100%;
            visibility: hidden;
            background: transparent;
            background-image: url('https://wallpapercave.com/wp/wp4575212.jpg'); /* Replace with your Google image link */
            background-size: cover;
            background-position: center;
            animation: mainPageEntrance 2s ease forwards;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px;
        }

        .headline {
            font-size: 3rem;
            color: #fff;
            text-align: center;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .headline:hover {
            transform: scale(1.1);
            color: #ffdd57;
        }

        .quote {
            font-size: 1.5rem;
            color: #ffffff;
            text-align: center;
            animation: fadeQuote 5s infinite;
        }

        /* Login and Sign-up Section */
        .container {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin: 100px 0;
        }

        .box-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            gap: 50px;
            width: 50%;
            transition: background 0.4s ease;
        }

        .box {
            width: 150px;
            height: 100px;
            background: rgba(255, 255, 255, 0.5);
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            border: 2px solid white;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .box:hover {
            transform: translateY(-15px); /* Enhanced hover effect */
            background-color: rgba(255, 255, 255, 0.3);
        }

        /* Bottom Navigation */
        .nav-boxes {
            position: absolute;
            bottom: 20px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            animation: navSlideUp 2s ease-out forwards;
        }

        .nav-box {
            width: 100px;
            padding: 10px;
            text-align: center;
            color: black;
            border: 1px solid white;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.5s ease; /* Modern, smooth animation */
            cursor: pointer;
        }

        .nav-box:hover {
            transform: translateY(-20px); /* Slide up more on hover */
            background-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0px 4px 15px rgba(255, 255, 255, 0.5); /* Modern shadow effect */
        }

        /* Animations */
        @keyframes fadeInText {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes avatarBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes fadeQuote {
            0% { opacity: 0; }
            20% { opacity: 1; }
            80% { opacity: 1; }
            100% { opacity: 0; }
        }

        @keyframes textEntrance {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }

        @keyframes navSlideUp {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes mainPageEntrance {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

    </style>
</head>
<body>
    <!-- Welcome Page -->
    <div class="welcome-page" id="welcomePage">
        <div class="welcome-content">
            <img src="Vehicles/avatar.png" alt="AI Avatar" class="ai-avatar">
            <h1 class="welcome-text">Welcome! to your galaxy of seamless product management</h1>
        </div>
    </div>

    <!-- Main Page -->
    <div class="main-page" id="mainPage">
        <!-- Top Header -->
        <header>
            <img src="Vehicles/GGLOGO.jpg" alt="Logo" class="logo">
            <h1 class="headline">Gadget Galaxy</h1>
            <div class="quote" id="quote">"Innovating the way you manage your tech"</div>
        </header>

        <!-- Login and Sign-up Section -->
        <div class="container">
            <div class="box-container">
                <div class="box login-box">Login</div>
                <div class="box signup-box">Sign Up</div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="nav-boxes">
            <div class="nav-box">Home</div>
            <div class="nav-box">Login</div>
            <div class="nav-box">Sign Up</div>
            <div class="nav-box">About Us</div>
            <div class="nav-box">Contact Us</div>
            <div class="nav-box">Our Team</div>
        </div>
    </div>

    <script>
        // Fade out welcome page after 3 seconds with slow effects
        setTimeout(() => {
            document.getElementById('welcomePage').style.opacity = '0';
            document.getElementById('welcomePage').style.visibility = 'hidden';
            document.getElementById('mainPage').style.visibility = 'visible';
        }, 3000);

        // Single quote slideshow effect
        const quoteElement = document.getElementById("quote");

        setInterval(() => {
            quoteElement.style.opacity = '0'; // Fade out
            setTimeout(() => {
                quoteElement.style.opacity = '1'; // Fade in after a brief delay
            }, 2000);
        }, 5000); // Change every 5 seconds
    </script>
</body>
</html>



