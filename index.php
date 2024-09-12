<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- This is the title for the Home page. -->
    <title>Fitness Class</title>
    <!-- Linking the CSS file which is placed in the public folder. -->
    <link rel="stylesheet" href="public/style.css">
</head>

<!-- Content for the body starts from here. -->
<body>

    <!-- This is the header and the navbar. It is consistent across all pages. -->
    <header class="header">
        <h1 id="nav-title"><span class="h-span">Fit</span>ness Class</h1>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>

                <!-- Creating an extra About Me section to display my details. -->
                <li><a href="about.php">About Me</a></li>
            </ul>
        </nav>
    </header>

    <!-- The content for the main body starts from here. -->
    <main>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other

    </main>

    <!-- This is the footer and is consistent across all pages. -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Fitness Class by Sarthak Gupta. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>