<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $applicant_id = $_POST["applicant_id"] ?? "";
    $full_name = $_POST["full_name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $password = $_POST["password"] ?? "";
    $gender = $_POST["gender"] ?? "";
    $job_position = $_POST["job_position"] ?? "";
    $qualification = $_POST["qualification"] ?? "";
    $address = $_POST["address"] ?? "";

    if (empty($applicant_id)) {
        $errors[] = "Applicant ID is required.";
    }

    if (empty($full_name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Must be a valid email.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (strlen($phone) != 11) {
        $errors[] = "Phone number must contain 11 digits.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must contain at least 6 characters.";
    }

    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }

    if (empty($job_position)) {
        $errors[] = "Please select a job position.";
    }

    if (empty($qualification)) {
        $errors[] = "Qualification is required.";
    }

    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] != 0) {

        $errors[] = "Please upload your CV.";

    } else {

        $file_name = $_FILES["cv"]["name"];
        $file_size = $_FILES["cv"]["size"];
        $file_tmp = $_FILES["cv"]["tmp_name"];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed_exts = [
            "pdf",
            "doc",
            "docx"
        ];

        if (!in_array($file_ext, $allowed_exts)) {
            $errors[] = "Only PDF, DOC, and DOCX files are allowed.";
        }

        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "Maximum file size is 2 MB.";
        }
    }

    if (count($errors) == 0) {

        $upload_folder = "uploads/";

        $new_file_name = time() . "_" . basename($file_name);

        $file_path = $upload_folder . $new_file_name;

        move_uploaded_file($file_tmp, $file_path);

        header(
            "Location: result.php?applicant_id=" .
            urlencode($applicant_id) .
            "&name=" .
            urlencode($full_name) .
            "&email=" .
            urlencode($email) .
            "&phone=" .
            urlencode($phone) .
            "&gender=" .
            urlencode($gender) .
            "&job_position=" .
            urlencode($job_position) .
            "&qualification=" .
            urlencode($qualification) .
            "&address=" .
            urlencode($address) .
            "&cv=" .
            urlencode($new_file_name)
        );

        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Processing</title>
</head>
<body>

<h2>Application Status</h2>

<?php

if (count($errors) > 0) {

    echo "<h3>Application Failed!</h3>";

    foreach ($errors as $error) {

        echo "<p>$error</p>";

    }

    echo '<a href="index.php">Go Back</a>';

}

?>

</body>
</html>