<?php
// Include the database connection file
include_once("config.php");

// Define variables and initialize with empty values
$name = $age = $email = "";
$name_err = $age_err = $email_err = "";

// Process form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

	// Validate name
	if(empty(trim($_POST["name"]))) {
		$name_err = "Please enter a name.";
	} else {
		$name = trim($_POST["name"]);
	}

	// Validate age
	if(empty(trim($_POST["age"]))) {
		$age_err = "Please enter an age.";
	} else {
		$age = trim($_POST["age"]);
	}

	// Validate email
	if(empty(trim($_POST["email"]))) {
		$email_err = "Please enter an email.";
	} else {
		$email = trim($_POST["email"]);
	}

	// Check input errors before updating in database
	if(empty($name_err) && empty($age_err) && empty($email_err)) {

		// Prepare an update statement
		$sql = "UPDATE contacts SET name=?, age=?, email=? WHERE id=?";

		if($stmt = mysqli_prepare($mysqli, $sql)) {

			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "sisi", $param_name, $param_age, $param_email, $param_id);

			// Set parameters
			$param_name = $name;
			$param_age = $age;
			$param_email = $email;
			$param_id = $_POST["id"];

			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)) {
				// Redirect to contacts page
				header("location: index.php");
				exit();
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
		}
	}

	// Close connection
	mysqli_close($mysqli);
} else {
	// Get contact information and populate the form
	if(isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
		$id = trim($_GET["id"]);

		// Prepare a select statement
		$sql = "SELECT * FROM contacts WHERE id = ?";

		if($stmt = mysqli_prepare($mysqli, $sql)) {

			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "i", $param_id);

			// Set parameters
			$param_id = $id;

			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)) {
				$result = mysqli_stmt_get_result($stmt);

				if(mysqli_num_rows($result) == 1) {
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

					// Retrieve individual field value
					$name = $row["name"];
					$age = $row["age"];
					$email = $row["email"];
				} else {
					// Contact not found, redirect to error page
					header("location: error.php");
					exit();
				}
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
		}

		// Close connection
		mysqli_close($mysqli);
		} else {
			// No ID parameter provided, redirect to error page
			header("location: error.php");
			exit();
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MariaDB Rolodex - Edit Contact</title>
	<link rel="stylesheet" href="styles.css" />
	<style>
		body
		{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<h2>Edit Contact</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
				<span class="help-block"><?php echo $name_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>">
				<label>Age</label>
				<input type="text" name="age" class="form-control" value="<?php echo $age; ?>">
				<span class="help-block"><?php echo $age_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
				<span class="help-block"><?php echo $email_err; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn-add" value="Submit">
				<a href="index.php" class="btn-delete text-center" style="margin-top:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cancel</a>
			</div>
		</form>
	</div>
</body>
</html>