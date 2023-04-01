<?php
// Initialize session
session_start();
include("../includes/database.php");

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit;
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user input
    $user_email = $_SESSION['user_email'];
    $bio = $_POST['bio'];
    $user_profile_pic = $_FILES['$user_profile_pic'];

    // Validate input
    $errors = array();
    if (empty($bio)) {
        $errors[] = 'Bio is required';
    }
    if ($profile_picture['error'] != UPLOAD_ERR_NO_FILE) {
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
        $file_extension = pathinfo( $user_profile_pic['name'], PATHINFO_EXTENSION);
        if (!in_array($file_extension, $allowed_extensions)) {
            $errors[] = 'Invalid file type';
        }
    }

    // If there are no errors, update the user's profile
    if (empty($errors)) {
        // Update bio
        // Replace 'update_user_bio' with your database update function
        update_user_bio($user_email, $bio);

        // Update profile picture
        if ($profile_picture['error'] == UPLOAD_ERR_OK) {
            $tmp_name = $profile_picture['tmp_name'];
            $file_name = $profile_picture['name'];
            $file_path = "config/uploads/$file_name";
            move_uploaded_file($tmp_name, $file_path);
            // Replace 'update_user_profile_picture' with your database update function
            update_user_profile_picture($user_email, $file_path);
        }

        // Redirect to the user's profile page
        header('Location: profile.php');
        exit;
    }
}

// Get the user's current profile data
$username = $_SESSION['username'];
// Replace 'get_user_data' with your database query function
$user_data = get_user_data($username);
$bio = $user_data['bio'];
$profile_picture = $user_data['profile_picture'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    <?php if (!empty($errors)): ?>
        <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"><?php echo $bio; ?></textarea>
        </div>
        <div>
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
