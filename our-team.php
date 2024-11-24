<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom right, #001f3f, #001233); 
        }
        .animated-bg {
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0));
            animation: float 20s infinite linear;
        }
        @keyframes float {
            0% { transform: translate(-25%, -25%); }
            50% { transform: translate(0, 0); }
            100% { transform: translate(-25%, -25%); }
        }
        .team-page {
            position: relative;
            text-align: center;
            background: rgba(0, 0, 50, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            cursor: pointer;
            transition: transform 0.2s;
            color: #c0c0c0;
        }
        h1:hover {
            transform: scale(1.05);
        }
        .intro {
            font-size: 1em;
            margin-bottom: 20px;
            color: #b0c4de;
        }
        .team-container {
            display: flex;
            justify-content: space-around;
            gap: 15px;
        }
        .member {
            background: white;
            border-radius: 10px;
            width: 260px;
            padding: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .member:hover {
            transform: scale(1.05);
        }
        .photo-container {
            overflow: hidden;
            border-radius: 10px;
            width: 100%;
            height: 120px; 
            transition: transform 0.2s;
        }
        .photo-container img {
            width: 60%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .details h2 {
            color: #001f3f;
            font-size: 1.2em;
            margin-top: 10px;
        }
        .details h3.role {
            color: #001f3f;
            font-weight: bold;
            font-size: 1em;
        }
        .details .description,
        .details .quote {
            color: #333;
            margin-top: 8px;
            font-size: 0.9em;
        }
        .details .quote {
            font-style: italic;
            margin-bottom: 10px;
        }
        .social-box {
            display: flex;
            justify-content: space-around;
            padding: 8px;
            background: #001f3f;
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .social-box a {
            color: white;
            font-size: 1.2em;
        }
        .social-box:hover {
            transform: scale(1.05);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="animated-bg"></div>
    <div class="team-page">
        <h1>Our Team</h1>
        <p class="intro">Meet the talented individuals behind our project, each bringing unique skills and expertise to the table.</p>
        <div class="team-container">
            <div class="member">
                <div class="photo-container">
                    <img src="priyanka.jpg" alt="Priyanka Ghosh">
                </div>
                <div class="details">
                    <h2>Priyanka Ghosh</h2>
                    <h3 class="role">Frontend Developer</h3>
                    <p class="description">A final year MCA student at Amity University Kolkata.</p>
                    <p class="quote">"Designed and implemented the user interface, ensuring a responsive and user-friendly experience."</p>
                    <div class="social-box">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="photo-container">
                    <img src="Animesh.jpg" alt="Animesh Sarkar">
                </div>
                <div class="details">
                    <h2>Animesh Sarkar</h2>
                    <h3 class="role">Backend Developer</h3>
                    <p class="description">A final year MCA student at Amity University Kolkata.</p>
                    <p class="quote">"Developed and maintained the backend infrastructure, ensuring data integrity and system performance."</p>
                    <div class="social-box">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
