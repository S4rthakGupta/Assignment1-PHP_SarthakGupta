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
        <form action="your_php_script.php" method="post" class="form-grid">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" id="phone_number" name="phone_number" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="emergency_contact">Emergency Contact Number:</label>
                <input type="tel" id="emergency_contact" name="emergency_contact" required>
            </div>

            <div class="form-group full-width">
                <fieldset>
                    <legend>Gender:</legend>
                    <label><input type="radio" id="male" name="gender" value="Male" required> Male</label>
                    <label><input type="radio" id="female" name="gender" value="Female"> Female</label>
                    <label><input type="radio" id="other" name="gender" value="Other"> Other</label>
                </fieldset>
            </div>

            <div class="form-group full-width">
                <fieldset>
                    <legend>Choose a Batch:</legend>
                    <label><input type="radio" id="slot1" name="batch" value="Slot1" required> Slot 1 (9:00am to 12:00pm)</label>
                    <label><input type="radio" id="slot2" name="batch" value="Slot2"> Slot 2 (12:00pm to 3:00pm)</label>
                    <label><input type="radio" id="slot3" name="batch" value="Slot3"> Slot 3 (3:00pm to 6:00pm)</label>
                    <label><input type="radio" id="slot4" name="batch" value="Slot4"> Slot 4 (6:00pm to 9:00pm)</label>
                </fieldset>
            </div>

            <div class="form-group full-width">
                <label for="comment">Additional Comments:</label>
                <textarea id="comment" name="comment"></textarea>
            </div>
        </form>
    </main>

    <!-- This is the footer and is consistent across all pages. -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Fitness Class by Sarthak Gupta. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>