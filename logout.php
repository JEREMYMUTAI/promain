<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<h1>Logout</h1>
	<p>Are you sure you want to log out?</p>
	<button onclick="confirmLogout()">Logout</button>
	<script>
		function confirmLogout() {
			var confirmLogout = confirm("Are you sure you want to log out?");
			if (confirmLogout) {
				window.location.href = "logout.php";
			}
		}
	</script>
    <?php
    // Start the session
    session_start();

    // If user clicks on logout button
    if(isset($_POST['logout'])) {
        // Confirm that user wants to logout
        echo '<script>alert("Are you sure you want to log out?");</script>';

        // Destroy the session
        session_destroy();
        // Redirect to login page
        header('Location: login.php');
        exit;
    }
?>

</body>
</html>