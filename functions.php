<?php

function authenticate_user() {
  session_start();
  if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
   header('location: 404.php');
  }
}

function check_active_session() {
  session_start();
  if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
    header('location: dashboard.php');
  } else if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'user') {
    header('location: student_dashboard.php');
  }
}

function nav() {
  echo '
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a href="sample.php" class="btn btn-primary">Page 1</a>
        </li>
        <li class="nav-item">
          <a href="sample_2.php" class="btn btn-primary">Page 2</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="btn btn-warning">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  ';
}