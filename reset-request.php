<?php



if (isset($_POST['resetreq'])) {
	
	$selector = bin2hex(random_bytes(8));
	$token	  = random_bytes(32);

	$url = "http://localhost/Capstone/create-new-password.php?$selector=" . $selector . "&validator= ". bin2hex($token);

	$expires = date("U") + 1800;

	require 'db.php';

	$email = $_POST['mail'];

	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an error!";
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an error!";
		exit();
	}else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	$to = $email;

	$subject = "reset your password";

	$message = "<p>We received the request</p>";

	$message .= "Here is your password reset link: </br>";
	$message .= "<a href= $url > ' . $url . '</a>'";

	$headers = "From: UCP <adamsbryan2710@gmail.com> \r\n";
	$headers .= "Reply to: adamsbryan2710@gmail.com\r\n";
	$headers .= "Content-type: text/html\r\n";

	
	mail($to, $subject, $message, $headers);

	header("location: resetpassword.php");




}