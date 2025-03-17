<?php
  // Suppose this is from our database
  $data = [
    "username" => "JoshLsc",
    "password" => "Admin123",
    "user_type" => "admin"
  ];

  if(!isset($_POST['submit'])) {
    header("location: index.php");
  }
  
  if ($_POST['username'] === $data['username'] && $_POST['password'] === $data['password']) {
    if ($data['user_type'] === 'admin') {
      session_start();
      $_SESSION['username'] = $data['username'];
      $_SESSION['user_type'] = $data['user_type'];
      header('location: dashboard.php');
    } else {
      session_start();
      $_SESSION['username'] = $data['username'];
      $_SESSION['user_type'] = $data['user_type'];
      header('location: student_dashboard.php');
    }
  } else {
    header('location: index.php');
  }

?>