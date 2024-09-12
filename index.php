<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Class</title>
    <link rel="stylesheet" href="public/style.css">
</head>

<body>
    <header class="header">
        <h1 id="nav-title"><span class="h-span">Fit</span>ness Class</h1>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <?php
        function strcat($left, $right)
        {
            $combinedString = $left . $right;
            return $combinedString;
        }
        $first = "This is a ";
        $second = " complete sentence!";
        echo strcat($first, $second);

        ?>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Fitness Class by Sarthak Gupta. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>