<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Student Dashboard</h2>
  <div class="container"><?= $_SESSION['username'] ?></div>
  <a href="logout.php">Logout</a>
</body>
</html>