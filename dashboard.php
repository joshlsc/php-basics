<?php
include 'functions.php';
authenticate_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php nav(); ?>
<div class="container mt-3">
  <h2>Admin Dashboard</h2>        
  <p><?= $_SESSION['username'] ?></p>
  
  
</div>

</body>
</html>