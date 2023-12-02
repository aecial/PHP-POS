<?php
  session_start();
  /*
    check if the username is existing in the database, if valid
    the user's credential will be assigned to a SESSION superglobal variable and be relocated to the home page
    else, the users will be redirected back to the login page
  */
  if(isset($_POST['login'])) {
    include("database.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from users WHERE email='{$email}';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        if(password_verify($password, $row["password"])) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['role'] = $row['role'];
          if($_SESSION['role'] == "cashier") {
            header("Location: pos.php");
          } 
          elseif ($_SESSION['role'] == "manager") {
            header("Location: addItem.php");
          }
          else {
            header("Location: addEmployee.php");
          }       
        }
        else {
          header("Location: index.php");
        }
      }
    }
    else {
      header("Location: index.php?UserNotFound");
    }
    mysqli_close($conn);
  }
?>