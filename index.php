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

    <?php

    $firstNameErr = $lastNameErr = $dobErr = $emailErr = $phoneErr = $emergencyContactErr = $genderErr = $batchErr = $addressErr = "";
    $firstName = $lastName = $dateOfBirth = $email = $phoneNumber = $emergencyContact = $membershipNumber = $referralSource = $address = $gender = $batch = $medicalConditions = $comment = "";

    // Function to sanitize input data
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }    

       // Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true; // Flag to check if form is valid

    // Validate First Name
    if (empty($_POST["first_name"])) {
        $firstNameErr = "First Name is required";
    } else {
        $firstName = test_input($_POST["first_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $firstNameErr = "Only letters and spaces are allowed";
        }
    }

    // Validate Last Name
    if (empty($_POST["last_name"])) {
        $lastNameErr = "Last Name is required";
    } else {
        $lastName = test_input($_POST["last_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $lastNameErr = "Only letters and spaces are allowed";
        }
    }

    // Validate Date of Birth
    if (empty($_POST["date_of_birth"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dateOfBirth = test_input($_POST["date_of_birth"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Phone Number
    if (empty($_POST["phone_number"])) {
        $phoneErr = "Phone Number is required";
    } else {
        $phoneNumber = test_input($_POST["phone_number"]);
        if (!preg_match("/^[0-9]{10}$/", $phoneNumber)) {
            $phoneErr = "Invalid phone number format";
        }
    }

    // Validate Emergency Contact
    if (empty($_POST["emergency_contact"])) {
        $emergencyContactErr = "Emergency Contact Number is required";
    } else {
        $emergencyContact = test_input($_POST["emergency_contact"]);
        if (!preg_match("/^[0-9]{10}$/", $emergencyContact)) {
            $emergencyContactErr = "Invalid phone number format";
        }
    }

    // Validate Gender
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }
    
    // Validate Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Validate Batch
    if (empty($_POST["batch"])) {
        $batchErr = "Please choose a batch";
    } else {
        $batch = test_input($_POST["batch"]);
    }

    // Optional fields
    $membershipNumber = test_input($_POST["membership_number"]);
    $referralSource = test_input($_POST["referral_source"]);
    $address = test_input($_POST["address"]);
    $medicalConditions = test_input($_POST["medical_conditions"]);
    $comment = test_input($_POST["comment"]);

    // If all inputs are valid, redirect to success.php with data
    if ($isValid) {
        // Store data in session or directly pass to success.php
        session_start();
        $_SESSION['data'] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'date_of_birth' => $dateOfBirth,
            'email' => $email,
            'phone_number' => $phoneNumber,
            'emergency_contact' => $emergencyContact,
            'membership_number' => $membershipNumber,
            'referral_source' => $referralSource,
            'address' => $address,
            'gender' => $gender,
            'batch' => $batch,
            'medical_conditions' => $medicalConditions,
            'comment' => $comment
        ];
        header("Location: success.php");
        exit();
    }
}

?>


    <!-- The content for the main body starts from here. -->
    <main>
    <form method="POST" class="form-grid" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div class="form-group">
            <span class="error">* <?php echo $firstNameErr; ?></span>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $firstName; ?>">
        </div>

        <div class="form-group">
            <span class="error">* <?php echo $lastNameErr; ?></span>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $lastName; ?>">
        </div>

        <div class="form-group">
            <span class="error">* <?php echo $dobErr; ?></span>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $dateOfBirth; ?>">
        </div>

        <div class="form-group">
            <span class="error">* <?php echo $emailErr; ?></span>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
            <span class="error">* <?php echo $phoneErr; ?></span>
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" value="<?php echo $phoneNumber; ?>">
        </div>

        <div class="form-group">
            <span class="error">* <?php echo $emergencyContactErr; ?></span>
            <label for="emergency_contact">Emergency Contact Number:</label>
            <input type="tel" id="emergency_contact" name="emergency_contact" value="<?php echo $emergencyContact; ?>">
        </div>

        <div class="form-group">
            <label for="membership_number">Membership Number (if applicable):</label>
            <input type="text" id="membership_number" name="membership_number" value="<?php echo $membershipNumber; ?>">
        </div>

        <div class="form-group">
            <label for="referral_source">How Did You Hear About Us?</label>
            <input type="text" id="referral_source" name="referral_source" value="<?php echo $referralSource; ?>">
        </div>

        <div class="form-group full-width">
            <span class="error">* <?php echo $addressErr; ?></span>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>">
        </div>

        <div class="form-group full-width">
            <fieldset>
                <legend>Gender:</legend>
                <label><input type="radio" id="male" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male</label>
                <label><input type="radio" id="female" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female</label>
                <label><input type="radio" id="other" name="gender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>> Other</label>
                <span class="error">* <?php echo $genderErr; ?></span>
            </fieldset>
        </div>

        <div class="form-group full-width">
            <fieldset>
                <legend>Choose a Batch:</legend>
                <label><input type="radio" id="slot1" name="batch" value="Slot1" <?php if ($batch == "Slot1") echo "checked"; ?>> Slot 1 (9:00am to 12:00pm)</label>
                <label><input type="radio" id="slot2" name="batch" value="Slot2" <?php if ($batch == "Slot2") echo "checked"; ?>> Slot 2 (12:00pm to 3:00pm)</label>
                <label><input type="radio" id="slot3" name="batch" value="Slot3" <?php if ($batch == "Slot3") echo "checked"; ?>> Slot 3 (3:00pm to 6:00pm)</label>
                <label><input type="radio" id="slot4" name="batch" value="Slot4" <?php if ($batch == "Slot4") echo "checked"; ?>> Slot 4 (6:00pm to 9:00pm)</label>
                <span class="error">* <?php echo $batchErr; ?></span>
            </fieldset>
        </div>

        <div class="form-group full-width">
            <label for="medical_conditions">Medical Conditions or Allergies:</label>
            <textarea id="medical_conditions" name="medical_conditions" placeholder="Please list any relevant medical conditions or allergies"><?php echo $medicalConditions; ?></textarea>
        </div>
                    
        <div class="form-group full-width">
            <label for="comment">Additional Comments:</label>
            <textarea id="comment" name="comment"><?php echo $comment; ?></textarea>
        </div>

        <div class="form-group full-width">
            <input type="submit" value="Submit">
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