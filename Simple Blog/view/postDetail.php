<?php
include_once "./top.php";
include_once "./nav.php";
include_once "./header.php";
include_once "../sysgem/postgenerator.php";

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
}
?>

<div class="container my-3">
    <div class="card col-md-8 offset-md-2">
        <?php $result = getSinglePost($pid);
        foreach ($result as $data) : ?>
            <div class="card-header">
                <h2 class="d-inline"><?= $data["title"] ?></h2>
                <span class="float-end text-muted mt-2"><?= $data['created_at'] ?></span>
            </div>
            <img class="img-thumbnail" src="../assets/img/<?= $data["imglink"] ?>" alt="img">
            <div class="card-block py-4 px-3"><?= $data["content"] ?></div>
            <div class="card-footer"><?= $data["writer"] ?></div>

        <?php endforeach ?>

    </div>
</div>


<?php
include_once "./footer.php";
include_once "./base.php";
?>