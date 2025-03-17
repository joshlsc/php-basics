<?php
include 'functions.php';
check_active_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Basics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Login Form</h2>
  <form method="post" action="login.php">
    <div class="mb-3 mt-3">
      <label for="name">Username</label>
      <input type="text" class="form-control" placeholder="Enter Username" name="username">
    </div>
    <div class="mb-3 mt-3">
      <label for="name">Password</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password">
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Login" />
  </form>
</div>

</body>
</html>

