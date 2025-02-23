<?php
include 'config.php'; // Connexion à la base de données

$sql = "SELECT * FROM kdramas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Responsive website-->
  <title>MochiCode</title>
  <link rel="stylesheet" href="styles/main.css"> <!-- Lien vers mon fichier CSS principal -->
  <link rel=" shortcut icon" href="assets/icons/mochi-icon.png" type="image/png"> <!-- Favicon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!--Police-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">

  <!-- Scripts -->
  <script src="scripts/app.js"></script> <!-- Mon fichier JS principal -->
</head>
<body>
<header>
    <!--Logo-->
    <a href="index.html" >
      <img src="assets/icons/logo.png" alt="MochiCode Logo" class="logo">
    </a>

    <!--Menu-->
    <div class="menu_container">
        <ul class = "menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Me</a></li>
          <li><a href="galerie.php">DramaLand</a></li>
          <li><a href="mochiAnime.html">MochiAnime</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>

    <!--Menu hamburger-->
    <div class = "toggle_btn">
      <i class="fa-solid fa-bars"></i>
    </div>

    <div class="dropdown_container">
      <ul class="dropdown_menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Me</a></li>
        <li><a href="galerie.php">DramaLand</a></li>
        <li><a href="mochiAnime.html">MochiAnime</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
</header>

    <div class="gallery">
        <h1 class="title">Gallery of K-dramas</h1>
        <div class="kdrama-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='kdrama-item'>";
                    echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "</div>";
                }
            } else {
                echo "<p>No dramas found.</p>";
            }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 MochiCode. Made by Britney.</p>
    </footer>
</body>
</html>
