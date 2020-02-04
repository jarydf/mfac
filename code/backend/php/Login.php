<?php
include 'connection.php';
session_start();
echo '
<!DOCTYPE html>
<html>
<head lang="en">
  <title>Mapping For A Change</title>
  <link rel="stylesheet" href="../../frontend/css/Login.css">
  <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../../frontend/js/Login.js"></script>
</head>
<body>
  <header>
    <h1>Login</h1>
  </header>
  <main>
    <form method = "post" action="./LoginAction.php">
      <label>Email</label>
      <input type="text" name="email" value="">
    <br>
    <label>Password</label>
      <input type="password" name="password" value="">
      <br>
      <label>
      <input type="submit" name="Login" value="Login" class="button">
    </label>
    </form>
  </main>
  <footer>
  </footer>
</body>
</html>
';

 ?>
