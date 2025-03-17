<?php
$user = [
  "id" => "12345",
  "fname" => "Josh",
  "lname" => "Lasac"
];

if (!isset($_GET['id']) || $_GET['id'] !== $user['id']){
  header("location: 404.php");
}

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

<div class="container mt-3">
  <h2>Account Details</h2>        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Lastname</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['fname'] ?></td>
        <td><?= $user['lname'] ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>