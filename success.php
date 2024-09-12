<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- This is the title for the Home page. -->
    <title>Form Submission Successful</title>
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


    <main>
        <div class="success-message">
            <h1>Thank you for registering!</h1>
            <p>Your registration has been successfully submitted.</p>
            <!-- Button to go back to Home -->
            <button class="btn-primary" onclick="window.location.href='index.php'">Go back to Home</button>
        </div>
    </main>

    <!-- This is the footer and is consistent across all pages. -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Fitness Class by Sarthak Gupta. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>