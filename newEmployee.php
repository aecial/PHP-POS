<?php 
  /*Checks if the username is already existing. If not, input the information to the database after hashing the password */
  if(isset($_POST['register'])) {
    include("database.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $role = $_POST['role'];
    $sqlemail = "SELECT * FROM users where email='{$email}';";
    $resultemail = mysqli_query($conn, $sqlemail);
    if(mysqli_num_rows($resultemail) > 0) {
      header("Location: addEmployee.php?status=error");
    } else {
        if($password === $conf_password) {
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO users(email, password, role) VALUES ('$email','$hash', '$role');";
          $result = mysqli_query($conn, $sql);
          header("Location: addEmployee.php?status=success");
        }
        else {
          header("Location: addEmployee.php?status=error");
        }
    }
  }
?>