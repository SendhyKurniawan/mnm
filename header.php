<?php include "config.php"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="/favicon.png">
    
    <title><?php echo htmlspecialchars($title); ?></title> 
</head>

<body>
    <!-- Nav -->
    <nav class="navbar" id="navbar">
        <a href="index.php" class="navlogo">
            <img class="fade-in left" src="assets/bfslogo1.png" alt="Bright Future Safe">
        </a>
        <div class="mobile-menu-icon" id="mobile-menu-icon">
            <span class="bar fade-in right"></span>
            <span class="bar fade-in right"></span>
            <span class="bar fade-in right"></span>
        </div>
        <ul class="nav-menu" id="nav-menu">
            <li class="fade-in top"><a href="index.php">Beranda</a></li>
            <li class="dropdown fade-in top">
                <div class="dropbtn">
                    <a href="definisi.php">Bright Edu</a>
                </div>
                <div class="dropdown-content">
                    <a href="definisi.php">Definisi, Jenis & Bentuk</a>
                    <a href="pencegahan.php">Pencegahan & Penanganan</a>
                </div>
            </li>
            <li class="fade-in top"><a href="#">Bright Toon</a></li>
            <li class="fade-in top"><a href="kuis.php">Ikuti Kuis</a></li>
            <li class="fade-in top"><a href="about.php">Tentang Kami</a></li>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                echo '
    <li class="user">
        <div class="logout fade-in top">
            <a class="logoutbtn" href="logout.php">Log Out</a>
        </div>
        <div class="userdetail fade-in top">
            <p>' . htmlspecialchars($_SESSION['nama']) . '</p>
            <p>' . htmlspecialchars($_SESSION['nim']) . '</p>
        </div>
    </li>';
            } else {
                echo '
    <li class="auth-buttons fade-in top">
        <a class="loginbtn" href="loginpage.php">Masuk</a>
        <a class="registerbtn" href="registerpage.php">Daftar</a>
    </li>';
            }
            ?>
        </ul>
    </nav>
    <!-- Nav -->