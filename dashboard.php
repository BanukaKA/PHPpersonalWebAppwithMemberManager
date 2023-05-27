<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("Location: login.php");
}
if(isset($_POST['logout'])) {
  session_destroy();
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form method="post">
      <button type="submit" name="logout" class="btn btn-primary float-right mt-3">Logout</button>

    </form>
    <?php if($_SESSION['username'] == 'admin') { ?>
      <h1 class="mt-5 mb-3 text-center">Admin Dashboard</h1>
      <br>
      <a href="./Cust/index.php" class="btn-add">Manage My Members</a>
      <br>
      <p>Here you can see all the users:</p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $conn = mysqli_connect("localhost", "root", "", "mydatabase", "3307");
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>".$row['username']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    <?php } else { ?>
      <h1 class="mt-5 mb-3 text-center">User Dashboard</h1>
      <p class="text-center">Welcome <?php echo $_SESSION['username']; ?>!</p>
    <?php } ?>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>