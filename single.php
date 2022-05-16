<?php
require 'C:/xampp/htdocs/PHP/mini_blog/functions.php';
include 'C:/xampp/htdocs/PHP/mini_blog/partials/head.php';


if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $id_post = $id;
} else {
    header('location:single.php?id=1');
}
?>

<h2><?php echo $id_post["titre"]?></h2>
<p><?php echo $id_post["content"]?></p>
<p><?php echo $id_post["user"]?></p>
<p><?php echo $id_post["date"]?></p>



<?php



include 'C:/xampp/htdocs/PHP/mini_blog/partials/footer.php';
