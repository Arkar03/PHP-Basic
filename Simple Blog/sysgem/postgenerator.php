<?php
include_once "C:/xampp/htdocs/PHP Code/Simple Blog/sysgem/DB_Hacker.php";

function insertPost($title, $type, $writer, $content, $imglink)
{
    try {
        $created_at = getTimeNow();
        $db = dbConnect();
        $qry = "INSERT INTO `post`( `title`, `type`, `writer`, `content`, `imglink`, `created_at`) VALUES ('$title','$type','$writer','$content','$imglink','$created_at')";
        $result = mysqli_query($db, $qry);
        return $result;
        // echo $result ? 'true' : 'false';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getAllPost($type)
{
    $db = dbConnect();
    if($type == 1) {
        $qry = "SELECT * FROM post WHERE type = $type";
    }else {
        $qry = "SELECT * FROM post";
    }
    $result = mysqli_query($db,$qry);
    return $result;
}

function getSinglePost($pid)
{
    $db = dbConnect();
    $qry = "SELECT * FROM post WHERE id = $pid";
    $result = mysqli_query($db,$qry);
    return $result;
}

function updatePost($title,$type,$writer,$content,$imglink,$id)
{
    $db =dbConnect();
    $qry = "UPDATE post SET title = '$title', type = '$type', writer = '$writer', content = '$content', imglink = '$imglink' WHERE id = $id; ";
    $result = mysqli_query($db,$qry);
    if($result) {
        header('Location:showAllPost.php');
    }else {
        echo "<script>alert('Post Insert Fail!)</script>";
    }
}
