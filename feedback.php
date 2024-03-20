<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'login_db';
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($conn->connect_error) {
        die('Could not connect: ' . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $comment = $_POST['text'];

        $sql = "INSERT INTO feedback (email, comment) VALUES (?, ?)";

        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("ss", $email, $comment);
            
            if($stmt->execute()){
                header("Location: index.php");
            exit;
            } else{
                echo "ERROR: Could not execute query: $sql. " . $conn->error;
            }
        } else{
            echo "ERROR: Could not prepare query: $sql. " . $conn->error;
        }

        $stmt->close();
    }

    $conn->close();
?>
