<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>reset-password</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="reset.css" />
  </head>
  <body>
    <div class="main-container">
      <button class="rectangle">
        <span class="reset-password">Reset Password</span></button
      ><span class="set-new-password">
        Set your new password so you can login</span
      >
      <span class="email"><label for="email">Email</label></span>
      <br />
      <form method="post" action="send-password-reset.php">
      <input
      type="email"
      name="email"
      placeholder="ParkIN@gmail.com"
      required
      /><br /><br />
      <div class="line-1"></div>
      <button class="rectangle-2">
        <span class="reset-password-3">Send</span>
      </button>
</form>
    </div>

  </body>
</html>