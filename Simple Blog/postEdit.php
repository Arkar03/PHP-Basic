<?php
include_once "view/top.php";
include_once "view/nav.php";
include_once "view/header.php";
include_once "sysgem/postgenerator.php";

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    // $ppid = $pid;
    $result = getSinglePost($pid);
    $posts = [];
    foreach ($result as $item) {
        $posts['title'] = $item['title'];
        $posts['writer'] = $item['writer'];
        $posts['imglink'] = $item['imglink'];
        $posts['content'] = $item['content'];
    }
}
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    if ($_FILES['file']['name'] != null) {
        $imgname = mt_rand(time(),time())."_".$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],"assets/img/".$imgname);
    } else {
        $imgname = $_POST['oldimg'];
        
    }
    $title = $_POST['posttitle'];
    $posttype = $_POST['posttype'];
    $postwriter = $_POST['postwriter'];
    $postcontent = $_POST['postcontent'];
    $imglink = $imgname;
    $pid = $_GET['pid'];

    updatePost($title, $posttype, $postwriter, $postcontent, $imglink, $pid);

}
//  if (checkSession("username")) {
//     if (getSession("username") != 'arkar') {
//         header('location:index.php');
//     }
// } else {
//     header('location:index.php');
// }
// if (isset($_POST['submit'])) {
//     $posttitle = $_POST['posttitle'];
//     $posttype = $_POST['posttype'];
//     $postwriter = $_POST['postwriter'];
//     $postcontent = $_POST['postcontent'];
//     $file = $_FILES['file'];

//     $imglink = mt_rand(time(), time()) .  "_" . $_FILES['file']['name'];

//     move_uploaded_file($_FILES['file']['tmp_name'], 'assets/img/' . $imglink);

//     header('location:index.php');

//     $res = insertPost($posttitle, $posttype, $postwriter, $postcontent, $imglink);

//     if ($res) {
//         echo "<div class ='container mt-3'><div class='alert alert-info alert-dismissible fade show' role='alert'>
//         <strong>Post Successfully Inserted</strong> 
//         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//       </div></div>";
//     } else {
//         echo "<div class ='container mt-3'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
//     <strong>Post Insert Fail!</strong> 
//     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//   </div></div>";
//     }
// }
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
            <form action="postEdit.php?pid=<?= $pid ?>" method="post" enctype="multipart/form-data">
                <h3 class="text-center dark">Post Edit Form</h3>
                <div class="mb-3">
                    <div class="form-group my-3">
                        <label for="posttitle" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="posttitle" name="posttitle" value="<?= $posts['title'] ?>">
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
                        <textarea class="form-control" name="postcontent" id="postcontent" rows="3" style="height: 215px;">
                            <?= $posts['content'] ?>
                        </textarea>
                    </div>
                    <div class="form-group my-3">
                        <div class="mb-3">
                            <input class="form-control form-control-sm" name="file" id="file" id="formFileSm" type="file">
                            <input type="hidden" name="oldimg" value="<?= $posts['imglink']; ?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="postwriter" class="form-label">Post Writer</label>
                            <input type="text" class="form-control" id="postwriter" name="postwriter" value="<?= $posts['writer'] ?>">
                        </div>
                        <img class="img-thumbnail mb-4" src="assets/img/<?= $posts['imglink']; ?>" alt="">
                        <div class=" float-end">
                            <button class="btn btn-outline-danger ms-2">Cancel</button>
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>