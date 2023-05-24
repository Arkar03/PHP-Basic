<?php include_once "view/top.php";
include_once "view/nav.php";
include_once "sysgem/membership.php";


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ret = registerUser($username, $email, $password);
    $message = "";
    switch ($ret) {
        case 'Register Success':
            $message = 'Register Success';
            setSession('email', $email);
            setSession('username', $username);
            break;
        case "Email is already in used":
            $message = "Email is already in used.";
            break;
        case 'Register Fails!':
            $message = 'Register Fails!';
            break;
        case "Fail":
            $message = "Auth Fail";
            break;
        default:
            break;
    }
    echo "<div class ='container'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$message</strong> 
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div></div>";
}


?>

<div class="container my-3">
    <div class="col-md-8 offset-md-2">
        <h1 class="h1 text-center my-5">Register</h1>
        <form action="register.php" class="form-control align-center" method="POST">
            <div class="col">
                <label for="username" class="form-label text-end" id="username">Username</label>
                <input class="form-control" type="username" name="username" id="email">
            </div>
            <div class="col">
                <label for="email" class="form-label text-end">Email</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="col">
                <label for="password" class="form-label text-end">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="col">
                <button type="submit" name="submit" value="submit" class="btn btn-secondary my-3">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include_once "view/footer.php";
include_once "view/base.php";
?>