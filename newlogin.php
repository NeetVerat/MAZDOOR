<?php

error_reporting(0)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/newlogin.css" />
  <title>Login - Mazdoor</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="login_client.php" method="POST">
        <h1>Client Login</h1>
        <input type="email" placeholder="Email " name="clientemail" value="<?php echo $clientemail; ?>" />
        <input type="password" placeholder="Password" name="clientpassword"
          value="<?php echo $_POST['clientpassword']; ?>" />
        <button name="submit" class="btn">Sign In</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="login_worker.php" method="POST">
        <h1>Worker Login</h1>
        <input type="email" placeholder="Email" name="email" value="<?php echo $email ?>" />
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" />
        <button name="submit">Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back Worker!</h1>
          <p>To login as Worker</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Client!</h1>
          <p>To login as Client</p>
          <button class="ghost" id="signUp">Sign In</button>
        </div>
      </div>
    </div>
  </div>
  <script>
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container = document.getElementById("container");

  signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
  });
  </script>
</body>

</html>