<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body 
        {
            font-family: 'Arial', sans-serif;
            background: radial-gradient(circle, #111, #222);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            overflow: hidden;
        }

        .container {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .container h1 {
            font-size: 48px;
            letter-spacing: 4px;
            margin-bottom: 30px;
            color: #ffffff;
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.5), 0 0 30px rgba(255, 255, 255, 0.2);
        }

        .menu {
            display: inline-block;
            margin-top: 20px;
        }

        .menu a {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fff;
            text-decoration: none;
            background: rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        .menu a:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #fff;
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
            transform: translateY(-5px);
        }

        /* Animasi untuk latar belakang grid */
        .background-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0.05) 0, rgba(255, 255, 255, 0.05) 1px, transparent 1px, transparent 50%);
            background-size: 50px 50px;
            animation: move-grid 10s linear infinite;
            z-index: 1;
        }

        @keyframes move-grid {
            from {
                transform: translate(0, 0);
            }
            to {
                transform: translate(-100px, -100px);
            }
        }
    </style>
</head>
<body>
    <div class="background-grid"></div>

    <div class="container">
        <h1>Selamat Datang di Halaman Utama</h1>

        <div class="menu">
            <a href="index.php?page=home">Home</a>
            <a href="http://localhost/iseng_php/profile.php">Profile</a>
            <a href="#">Opsi Lainnya</a>
        </div>
    </div>
</body>
</html>
