<?php
$error=false;
include 'config.php';
session_start();
if (isset($_POST['Login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if (mysqli_num_rows($result) == 1) {
    header("location: index.php");
  } else {
    $error = true;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      background-image: url('jobback.jpg');
      background-size: cover;
    }

    form {
      margin-top: 3em;
      margin-left: 35em;
      margin-right: 7em;
      padding: 2em;
      box-shadow: 5px 5px 8px 8px #888888;
      background-color: #dedede;
      opacity: 0.98;
    }
  </style>
  <title>Login</title>
</head>

<body>
<?php
    if($error){
      echo '<div class="alert alert-danger" role="alert">
      !Invalid Credentials...
  </div>';
    }
?>
  <div class="contaner">
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="Login">Login</button>
      <br>
      <p style="text-align: center" ;>New User?<br>Create Account <a href="register.php">Sign Up</a></p>
    </form>
  </div>
</body>

</html>