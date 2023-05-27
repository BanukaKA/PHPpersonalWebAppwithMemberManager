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

	// Check input errors before inserting in database
	if(empty($name_err) && empty($age_err) && empty($email_err)) {

		// Prepare an insert statement
		$sql = "INSERT INTO contacts (name, age, email) VALUES (?, ?, ?)";

		if($stmt = mysqli_prepare($mysqli, $sql)) {

			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "sis", $param_name, $param_age, $param_email);

			// Set parameters
			$param_name = $name;
			$param_age = $age;
			$param_email = $email;

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
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Contact</title>
	<link rel="stylesheet" href="styles.css">
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
	<div class="container">
		<h1>Create Contact</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?>">
				<span class="help-block"><?php echo $name_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>">
				<label>Age</label>
				<input type="text" name="age" value="<?php echo $age; ?>">
				<span class="help-block"><?php echo $age_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
				<label>Email</label>
				<input type="text" name="email" value="<?php echo $email; ?>">
				<span class="help-block"><?php echo $email_err; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn-add" value="Submit">
				<a href="index.php" class="btn-delete text-center"style="margin-top:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cancel</a>
		</div>
	</form>
</body>
</html>