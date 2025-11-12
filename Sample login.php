
<html>
<head>
    <title>Sample login</title>
</head>
<body>
<form method="get" action="">
  Please Enter your Username: <input type="text" name="username" />
  Password <input type="password" name="password" />
  <input type="submit" value="Login" />
</form>

<?php
if (isset($_GET['username']) && $_GET['username'] !== '') {
    $username = $_GET['username'];
    echo 'Welcome, ' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
}
if (isset($_GET['password']) && $_GET['password'] !== '') {
    // don't echo the raw password back to the user
    echo 'Login successful';
}
?>
</body>
</html>