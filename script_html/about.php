<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Games</title>
</head>
<body>
    <header>
        <h1>About our</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="home.php">Головна</a></li>
            <li id="games-link" class="active">
                Games 
                <span id="arrow" onclick="toggleGamesDropdown()">&#9660;</span> <!-- Стрілочка -->
                <div id="games-dropdown" class="dropdown-menu">
                    <ul>
                        <li><a href="game1.php">Dota 2</a></li>
                        <li><a href="game2.php">league_of_legends</a></li>
                        <li><a href="game3.php">Game 3</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="about.php">Про сайт</a></li>
            <li><a href="chat.php">Chat</a></li>
        </ul>
    </nav>
	
    <footer>
    <p>&copy; 2023</p>
    </footer>

<script src="../script.js"></script>
</body>
</html>