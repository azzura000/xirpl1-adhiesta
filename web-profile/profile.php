<?php
$Nama = "Adhiesta";
$Umur = "17";
$Tinggi = "Harapan Orang Tua";
$Sekolah = "SMK Negeri 2 Bandung";
$Hobi = "Wasting Time With You";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: radial-gradient(circle, #111, #222);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            color: #ffffff;
        }

        .info-box {
            position: relative;
            background: rgba(0, 0, 0, 0.7);
            border: none;
            border-radius: 20px;
            padding: 40px;
            width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            color: #ffffff;
            z-index: 2;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .info-box h2 {
            font-size: 32px;
            margin-bottom: 20px;
            letter-spacing: 2px;
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.6), 0 0 20px rgba(255, 255, 255, 0.3);
        }

        .info-box p {
            font-size: 18px;
            margin: 15px 0;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
            letter-spacing: 1px;
        }

        /* Efek hover dinamis */
        .info-box:hover {
            transform: scale(1.1);
            box-shadow: 0 20px 50px rgba(255, 255, 255, 0.5);
        }

        /* Efek neon border */
        .info-box::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px solid rgba(255, 255, 255, 0.6);
            border-radius: 25px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.6), 0 0 30px rgba(255, 255, 255, 0.3);
            z-index: -1;
            transition: all 0.3s ease;
        }

        /* Efek bergerak berkelanjutan */
        .info-box::after {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            filter: blur(20px);
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            }
            100% {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }
        }

        /* Efek grid bergerak di latar belakang */
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
    <div class="info-box">
        <h2>Profil Siswa</h2>
        <?php
        echo"<p>Nama: $Nama</p>";
        echo"<p>Umur: $Umur tahun</p>";
        echo"<p>Tinggi: $Tinggi</p>";
        echo"<p>Asal Sekolah: $Sekolah</p>";
        echo"<p>Hobi: $Hobi</p>";
        ?>
    </div>
</body>
</html>
