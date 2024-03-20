<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM user
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reset-password.css">
</head>
<body>
<div class="main-container">
      <button class="rectangle">
        <h1><span class="reset-password">Reset Password</span></button></h1>
      ><span class="set-new-password">
        Set your new password so you can login</span
      ><span class="create-new-password"><label for="password">Create New Password</label></span>
      ><br />

    <form method="post" action="process-reset-password.php">

        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
        <input type="password" id="password" name="password">

        <span class="confirm-new-password"><label for="Password">Confirm New Password</label></span>
      ><br />
        <input type="password" id="password_confirmation"
               name="password_confirmation">
               <br/>
      <div class="line-1"></div>

               <button class="rectangle-2">
        <span class="reset-password-3">Reset Password</span>
      </button>
    </form>

</body>
</html>