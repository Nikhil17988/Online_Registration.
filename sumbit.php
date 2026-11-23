
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

} else {
    die("Please submit the registration form first.");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Registration Successful!</h2>

    <h3>Student Details</h3>

    <p><b>Name:</b> <?php echo $name; ?></p>

    <p><b>Email:</b> <?php echo $email; ?></p>

    <p><b>Phone:</b> <?php echo $phone; ?></p>

    <p><b>Date of Birth:</b> <?php echo $dob; ?></p>

    <p><b>Gender:</b> <?php echo $gender; ?></p>

    <p><b>Course:</b> <?php echo $course; ?></p>

    <p><b>Address:</b> <?php echo $address; ?></p>

    <a href="index.php">Back to Form</a>

</div>

</body>
</html>
