<?php
session_start();
if(isset($_SESSION['username'])) {
  header("Location: dashboard.php");
}
if(isset($_POST['out'])) {
  header("Location: home.php");
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn = mysqli_connect('localhost', 'root', '', 'mydatabase', "3307");
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count == 1) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
  } else {
    echo "<div class='alert alert-danger'>Invalid username or password</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1 class="mt-5 mb-3 text-center">Login Page</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form method="post" action="">
          <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button><br>
          <a href="home.php">Cancal</a>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>