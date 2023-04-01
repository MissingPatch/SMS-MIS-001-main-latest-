<?php
 include("database.php");

 function log_activity($user_id, $activity) {
    global $conn;
    
    $stmt = $conn->prepare("INSERT INTO qa_activity_log (user_id, activity) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $activity);
    $stmt->execute();
    $stmt->close();
  }

//   // Log a user login activity
// log_activity($user_id, "User logged in");

// // Log a user logout activity
// log_activity($user_id, "User logged out");

// // Log a user post activity
// log_activity($user_id, "User created a new post");

// // Log a user profile update activity
// log_activity($user_id, "User Updated their profile");

// // Log a user profile update activity
// log_activity($user_id, "User Update File");

// // Log a user profile update activity
// log_activity($user_id, "User Delete File");

// // Log a user profile update activity
// log_activity($user_id, "User View File");