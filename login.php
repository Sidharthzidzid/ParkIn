<?php

$is_invalid = false;
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email_id = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"]; // Store user's name in session
            
            header("Location: index.php");
            exit;
        } else {
            $is_invalid = true;
            $error_message = 'Incorrect password.';
        }
    } else {
        $is_invalid = true;
        $error_message = 'Email not found.';
    }
    
    if ($is_invalid) {
        echo "<script>alert('$error_message'); window.location.href='login.html';</script>";
        exit;
    }
}

?>
