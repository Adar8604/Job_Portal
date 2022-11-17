<?php
$res=false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'config.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $number = $_POST['phone'];

  $sql = "INSERT INTO `users`( `name`, `email`, `password`, `phone`) VALUES ('$name','$email','$password','$number')";
 $result1= mysqli_query($conn, $sql);
  if ($result1) {
    $res=true;
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
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
  <title>register</title>
</head>

<body>
  <?php
    if($res){
      echo '<div class="alert alert-danger" role="alert">
  Successfully registered ! Now You can Login...
  </div>';
    }
?>
  <div class="contaner">
    <form action="register.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="phone">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="passwordHelp" class="form-text">Password should be same as above.</div>
      </div>
      <button type="submit" class="btn btn-primary" name="job">register</button>
      <br>
      <p style="text-align: center" ;>Already registered? <a href="login.php">Login</a></p>
    </form>
  </div>
</body>

</html>