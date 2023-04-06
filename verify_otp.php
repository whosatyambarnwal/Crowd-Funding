<?php
// Verify the OTP entered by the user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  session_start();
  $entered_otp = $_POST['otp'];
  $stored_otp = $_SESSION['otp'];
  $mobile_number = $_SESSION['mobile_number'];

  if (verify_otp($entered_otp, $stored_otp)) {
    // The OTP is valid, log the user in or perform other actions
    echo "OTP verified successfully for mobile number: " . $mobile_number;
  } else {
    // The OTP is invalid, show an error message to the user
    echo "Invalid OTP";
  }

  // Clear the session
  session_unset();
  session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Verify OTP</title>
</head>
<body>
  <form method="post">
    <label>OTP:</label>
    <input type="text" name="otp">
    <br>
    <button type="submit">Verify OTP</button>
  </form>
</body>
</html>
