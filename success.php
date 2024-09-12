<?php
session_start(); // Start the session

if (!isset($_SESSION['data'])) {
    // Redirect to index.php if no data is found
    header("Location: index.php");
    exit();
}

// Retrieve the form data from the session
$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Success</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your stylesheets if any -->
</head>
<body>
    <h1>Form Submission Successful!</h1>
    <h2>Submitted Data:</h2>
    <ul>
        <li><strong>First Name:</strong> <?php echo htmlspecialchars($data['first_name']); ?></li>
        <li><strong>Last Name:</strong> <?php echo htmlspecialchars($data['last_name']); ?></li>
        <li><strong>Date of Birth:</strong> <?php echo htmlspecialchars($data['date_of_birth']); ?></li>
        <li><strong>Email:</strong> <?php echo htmlspecialchars($data['email']); ?></li>
        <li><strong>Phone Number:</strong> <?php echo htmlspecialchars($data['phone_number']); ?></li>
        <li><strong>Emergency Contact:</strong> <?php echo htmlspecialchars($data['emergency_contact']); ?></li>
        <li><strong>Membership Number:</strong> <?php echo htmlspecialchars($data['membership_number']); ?></li>
        <li><strong>Referral Source:</strong> <?php echo htmlspecialchars($data['referral_source']); ?></li>
        <li><strong>Address:</strong> <?php echo htmlspecialchars($data['address']); ?></li>
        <li><strong>Gender:</strong> <?php echo htmlspecialchars($data['gender']); ?></li>
        <li><strong>Batch:</strong> <?php echo htmlspecialchars($data['batch']); ?></li>
        <li><strong>Medical Conditions or Allergies:</strong> <?php echo htmlspecialchars($data['medical_conditions']); ?></li>
        <li><strong>Additional Comments:</strong> <?php echo htmlspecialchars($data['comment']); ?></li>
    </ul>
    <a href="index.php">Go Back to Form</a>
</body>
</html>

<?php
// Clear the session data after displaying it
unset($_SESSION['data']);
?>