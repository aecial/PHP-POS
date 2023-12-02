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
      echo '<div
      class="alert alert-danger alert-dismissible fade show"
      role="alert"
    >
      <strong>Email Taken!</strong>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
      ></button>
    </div>';
    } else {
      if($password === $conf_password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(email, password, role) VALUES ('$email','$hash', '$role');";
        $result = mysqli_query($conn, $sql);
        header("Location: index.php?registerSuccess");
      }
      else {
        echo '<div
        class="alert alert-danger alert-dismissible fade show"
        role="alert"
      >
        <strong>Passwords Do not match!</strong>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="alert"
          aria-label="Close"
        ></button>
      </div>';
      }
    }
  }
?>