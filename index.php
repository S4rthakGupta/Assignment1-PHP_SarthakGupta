<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Class</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    
<header>
    <nav class="navbar">
        <ul>
            <li>Home</li>
            <li>About Me</li>    
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

<footer>

</footer>
</body>
</html>