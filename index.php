<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MELOMANIAC</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .splash-screen {
            text-align: center;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        .logo {
            width: 200px; 
            height: auto;
        }

        .app-name {
            margin-top: 20px;
            font-size: 40px;
            color: #333;
            opacity: 0;
            animation: fadeInText 3s ease-in-out forwards;
        }

        .welcome-message {
            margin-top: 20px;
            font-size: 24px;
            color: #555;
            opacity: 0;
            animation: fadeInText 3s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInText {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        .main-content {
            display: none;
        }
    </style>
</head>
<body>
    <div class="splash-screen">
        <img src="images/icon1.png" alt="Logo" class="logo">
        <h1 class="app-name">MusikaMix</h1>
        <div class="welcome-message">Welcome to MELOMANIAC - "Express yourself through the music"</div>
    </div>
    <div class="main-content" id="main-content">
s    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var splashScreen = document.querySelector('.splash-screen');
            var mainContent = document.getElementById('main-content');
            setTimeout(function() {
                splashScreen.style.animation = 'fadeOut 1s ease-in-out forwards';
                document.querySelector('.app-name').style.animation = 'fadeOut 1s ease-in-out forwards';
                document.querySelector('.welcome-message').style.animation = 'fadeOut 1s ease-in-out forwards';
                setTimeout(function() {
                    splashScreen.style.display = 'none';
                    mainContent.style.display = 'block';
                    loadMainContent();
                }, 3000); 
            }, 5000); 
        });

        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                window.location.href = "song_1.php";
            }, 6000); 
        });
    </script>
</body>
</html>
