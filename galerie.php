<?php
include 'config.php'; // Connexion à la base de données

$sql = "SELECT * FROM kdramas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DramaLand - Kdrama Gallery</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header>
        <a href="index.html"><img src="assets/icons/logo.png" alt="MochiCode Logo" class="logo"></a>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="galerie.php">DramaLand</a></li>
                <li><a href="mochiAnime.html">MochiAnime</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="gallery">
        <h1>Gallery of K-dramas</h1>
        <div class="kdrama-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='kdrama-item'>";
                    echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p><strong>Rating:</strong> ⭐" . number_format($row["rating"], 1) . "/10</p>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<blockquote>« " . $row["quote"] . " »</blockquote>";
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
