<?php
include_once "view/top.php";
include_once "view/nav.php";
include_once "view/header.php";
include_once "sysgem/postgenerator.php";


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

    $imglink = mt_rand(time(), time()) .  "_" . $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'], 'assets/img/' . $imglink);

    header('location:index.php');

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
            <?php 
            $result = getAllPost(2);
            foreach($result as $post) {
            echo '<div class="card p-3 mb-4">
                    <div class="card-block">
                    <h4>'.$post['title'].'</h4>
                    <p>'.substr($post['content'],0,100).'</p>
                    <a href="postedit.php?pid='.$post['id'].'" class="btn btn-secondary btn-sm float-end me-3 mb-2">Edit</a>
                    </div></div>';

            }
            ?>            
        </section>
    </div>
</div>