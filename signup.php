<?php
    require 'connect.php';

    session_start();


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $fname = trim($_POST["fname"]);
      $email = trim($_POST["email"]);
      $pwd = trim($_POST["password"]);
      $hshpwd = sha1($pwd.$email);
      
      $query = "INSERT INTO users (full_name,email,password) VALUES ('".$fname."','".$email."','".$hshpwd."')";
      if(mysqli_query($conn, $query)){
        $_SESSION["loggedin"] = true;
        $_SESSION["fullname"] = $fname;
        header("location: index.php");
        exit;

      }else{
        echo("Error description: " . mysqli_error($conn));
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    <style>

    </style>
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <h1 class="h3 mb-3 fw-normal">BULLETIN</h1>
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
      <input  name="fname" class="form-control" id="floatingInput" placeholder="Enter Your Full Name">
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Retype-Password">
    </div>

    <div class="checkbox mb-3">
      <label>
        <a href="login.php">Already Have An Account?</a>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>
