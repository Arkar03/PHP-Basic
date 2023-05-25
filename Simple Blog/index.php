<?php

include_once "view/top.php" ?>
<?php include_once "view/nav.php"; ?>
<?php include_once "view/header.php";
include_once "postgenerator.php";

?>

<div class="container my-3">
    <div class="row">

        <?php include_once "view/sideBar.php" ?>
        <section class="col-md-9 row">
            
                <?php
                if (checkSession('username')) {
                    $result = getAllPost(2);
                    foreach ($result as $post) {
                        echo '<div class="col-md-6">
                <div class="card container mb-3">
                    <div class="card-block">
                        <h1 class="h2">' . $post['title'] . '</h1>
                        <p>' . substr($post['content'],0,140) . '</p>
                        <a href="#" class="btn btn-info btn- text-white float-end mb-2">Detail</a>
                    </div>
                </div>
            </div>';
                    }
                } else {
                    $result = getAllPost(1);
                }
                ?>
                    <!-- <div class="card container mb-3">
                        <div class="card-block">
                            <h1 class="h2">Lorem ipsum dolor</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic magnam id mollitia error et architecto blanditiis voluptates exercitationem quis fuga laudantium ratione suscipit odio fugit modi optio pariatur, quidem molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad qui  </p>
                            
                            <a href="#" class="btn btn-info btn- text-white float-end mb-2">Detail</a>
                        </div>
                    </div>
                </div> -->


        </section>
    </div>
</div>

<?php include_once "view/footer.php";
include_once "view/base.php";
?>