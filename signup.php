<?php
if (empty($_POST["first_name"])){
    die("Please enter a first_name");
}
if (empty($_POST["last_name"])){
    die("Please enter a last_name");
}
if (empty($_POST["email"])){
    die("Please enter a email_id");
}
if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}
if (strlen($_POST["confirm_password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["confirm_password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["confirm_password"])) {
    die("Password must contain at least one number");
}
$password_hash = password_hash($_POST["confirm_password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (first_name, last_name, email_id, password_hash)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $stmt->error);
}

$stmt->bind_param("ssss",
    $_POST["first_name"],
    $_POST["last_name"],
    $_POST["email"],
    $password_hash);

    try {
        if ($stmt->execute()) {
            header("Location: login.html");
            exit;
        } 
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            header("Location: email.html");
            exit;
        } else {
            die("An error occurred: " . $e->getMessage());
        }
    }
    ?>