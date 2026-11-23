
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form id="registrationForm" action="submit.php" method="POST">

        <label>Full Name:</label>
        <input type="text" name="fullname" id="fullname" required>

        <label>Email:</label>
        <input type="email" name="email" id="email" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" id="phone" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Course:</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option>Computer Science</option>
            <option>Information Science</option>
            <option>Electronics</option>
            <option>Mechanical</option>
        </select>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <button type="submit">Submit Registration</button>

    </form>
</div>

</body>
</html>
