<?php

session_start();
include "Links.php";

if (isset($_POST['submit'])) {
    $user = $_POST['name'];
    $pass = $_POST['password'];
    // echo "Name is $user and Password is $pass";

    if ($user == 'Arkar' && $pass == '123') {
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header('Location:Member.php');
    } else {
        echo "You are not a valid user"; 
    }
}
?>

<h1>Index Page</h1><br>
  
<form action="<?php $_PHP_SELF; ?>" method="POST">
    <input type="text" name="name" placeholder="username"><br><br>
    <input type="password" name="password"><br><br>
    <button type="submit" name="submit">Login</button>
</form>