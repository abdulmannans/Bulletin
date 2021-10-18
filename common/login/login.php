<?php
    require '../connect.php';

    session_start();


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email = trim($_POST["email"]);
      $pwd = trim($_POST["password"]);
      $hshpwd = sha1($pwd.$email);
      $query = "SELECT userid, full_name, email, password FROM users WHERE email ='".$email."'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $dbuserid = $row["userid"];
          $dbemail = $row["email"];
          $dbfname = $row["full_name"];
          $dbpwd = $row["password"];
  
          if($email == $dbemail){
            if($hshpwd == $dbpwd){
  
              $_SESSION["loggedin"] = true;
              $_SESSION["userid"] = $dbuserid;
              $_SESSION["fullname"] = $dbfname;
              header("location:  ../../");
              exit;
            }
          }
        }
  
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
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>BULLETIN - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../../css/signin.css" rel="stylesheet">
    <style>
      h2 {
        font-family: serif;
    }
    </style>
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h2 class="mb-3 fw-normal">BULLETIN</h2>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
    </div>

    <div class="checkbox mb-3">
      <label>
        <a href="signup.php">Create New User</a>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>
