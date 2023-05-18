<?php include_once "view/top.php" ?>
<?php include_once "view/nav.php"; ?>

<div class="container my-3">
    <div class="col-md-8 offset-md-2">
        <h1 class="h1 text-center my-5">Login</h1>
        <!-- <form action="" class="form">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3 row">
                <a href="#" class="btn btn-info col-2 text-white float-end">Login</a>
            </div>
        </form> -->
        <form action="#" class="form-control align-center" method="GET">
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