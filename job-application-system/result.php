<?php

$applicant_id = $_GET["applicant_id"] ?? "";
$name = $_GET["name"] ?? "";
$email = $_GET["email"] ?? "";
$phone = $_GET["phone"] ?? "";
$gender = $_GET["gender"] ?? "";
$job_position = $_GET["job_position"] ?? "";
$qualification = $_GET["qualification"] ?? "";

$address = $_GET["address"] ?? "";
$cv = $_GET["cv"] ?? "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Result</title>
</head>

<body>

<h2>APPLICATION SUCCESSFUL</h2>

<p>
    <strong>Applicant ID:</strong>
    <?php echo htmlspecialchars($applicant_id); ?>
</p>

<p>
    <strong>Name:</strong>
    <?php echo htmlspecialchars($name); ?>
</p>

<p>
    <strong>Email:</strong>
    <?php echo htmlspecialchars($email); ?>
</p>

<p>
    <strong>Phone:</strong>
    <?php echo htmlspecialchars($phone); ?>
</p>

<p>
    <strong>Gender:</strong>
    <?php echo htmlspecialchars($gender); ?>
</p>

<p>
    <strong>Job Position:</strong>
    <?php echo htmlspecialchars($job_position); ?>
</p>

<p>
    <strong>Qualification:</strong>
    <?php echo htmlspecialchars($qualification); ?>
</p>

<p>
    <strong>Address:</strong>
    <?php echo htmlspecialchars($address); ?>
</p>

<p>
    <strong>Uploaded CV:</strong>
    <?php echo htmlspecialchars($cv); ?>
</p>

<p>Application submitted successfully.</p>

<br>

<a href="index.php">Apply Again</a>

</body>
</html>