<?php
include_once "view/top.php";
include_once "view/nav.php";
include_once "view/header.php";
include_once "postgenerator.php";


if (checkSession("username")) {
    if (getSession("username") != 'arkar') {
        header('location:index.php');
    }
} else {
    header('location:index.php');
}
if (isset($_POST['submit'])) {
    $posttitle = $_POST['posttitle'];
    $posttype = $_POST['posttype'];
    $postwriter = $_POST['postwriter'];
    $postcontent = $_POST['postcontent'];
    $file = $_FILES['file'];

    $imglink = mt_rand(time(), time()) .  "_" . $_FILES['file']['name'] . mt_rand(time(), time());

    move_uploaded_file($_FILES['file']['tmp_name'], 'assets/uploads/' . $imglink);


    $res = insertPost($posttitle, $posttype, $postwriter, $postcontent, $imglink);

    if ($res) {
        echo "<div class ='container mt-3'><div class='alert alert-info alert-dismissible fade show' role='alert'>
        <strong>Post Successfully Inserted</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div></div>";
    } else {
        echo "<div class ='container mt-3'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Post Insert Fail!</strong> 
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div></div>";
    }
}
?>
<style>
    body {
        overflow-x: hidden;
    }
</style>
<div class="container my-3">
    <div class="row">
        <?php include_once "view/sideBar.php" ?>
        <section class="col-md-9">
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center dark">Post Insert Form</h3>
                <div class="mb-3">
                    <div class="form-group my-3">
                        <label for="posttitle" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="posttitle" name="posttitle">
                    </div>
                    <div class="form-group my-3">
                        <label for="posttype" class="form-label">Post Type</label>
                        <select class="form-select" id="posttype" name="posttype" aria-label="Post Type">
                            <option value="1">Free Post</option>
                            <option value="2">Paid Post</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="postcontent" class="form-label d-block">Content</label>
                        <textarea name="postcontent" id="postcontent" cols="40" rows="5"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <div class="mb-3">
                            <input class="form-control form-control-sm" name="file" id="file" id="formFileSm" type="file">
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label for="postwriter" class="form-label">Post Writer</label>
                        <input type="text" class="form-control" id="postwriter" name="postwriter" aria-describedby="emailHelp">
                    </div>
                    <div class=" float-end">
                        <button class="btn btn-outline-danger ms-2">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Post</button>
                    </div>
            </form>
        </section>
    </div>
</div>