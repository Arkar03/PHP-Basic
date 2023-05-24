<?php

// include_once "sysgem/MySession.php"
include_once "C:/xampp/htdocs/PHP Code/Simple Blog/sysgem/MySession.php";
?>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand h1" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                    <?php if (checkSession("username")) : ?>
                        <li class="nav-item">
                            <a href="http://localhost/php%20code/Simple%20Blog/admin.php" class="nav-link active text-danger" aria-current="page" href="#">Admin</a>
                        </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Politic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Wars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">IT News</a>
                    </li>


                    <div class="dropdown mt-2">
                        <a href="#" class="link link-dark dropdown-toggle" type="link" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            // echo $_SESSION['username'];
                            // echo $_SESSION['email'];
                            if (checkSession("username")) {
                                echo strtoupper(getSession("username"));
                                // header('location:index.php');
                            } else {
                                echo "Member";
                            }

                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (!checkSession('username')) : ?>
                                <li><a class="dropdown-item" href="register.php">Register</a></li>
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <?php endif ?>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
</div>
</ul>

</div>
</div>
</nav>
</div>