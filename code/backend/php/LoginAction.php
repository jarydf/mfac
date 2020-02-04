<?php
include "connection.php";
session_start();
$email = "";
$password = "";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email = $connection->real_escape_string($_POST['email']);
  $password = $connection->real_escape_string($_POST['password']);
    $hashedpassword = sha1($password);
    $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt=$connection->prepare($sql);
      $stmt->bind_param("ss", $email, $hashedpassword);
        $stmt->execute();
          $result = $stmt->get_result();
          $num_of_rows = $result->num_rows;
            if($num_of_rows > 0){
              while($row = $result->fetch_assoc()) {
                $_SESSION['fname'] = $row["fname"];
                $_SESSION['lname'] = $row["lname"];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $hashedpassword;
                header("Location: ./Home.php");
            }
        }
        else{
          $message = "Username and/or Password incorrect.\\nTry again.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          header("Location: ./Login.php");
        }
        $stmt->close();
    }
    else{
    header("Location: ./Login.php");
  }
    $connection->close();
 ?>
