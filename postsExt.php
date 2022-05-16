<?php
require 'C:/xampp/htdocs/PHP/mini_blog/functions.php';
include 'C:/xampp/htdocs/PHP/mini_blog/partials/head.php';

?>

<!-- ajouter une variable de vérif session  -->

<?php

if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){
   /* var_dump($_SESSION['user']);*/
    if(isset($_POST)&&!empty($_POST)){
       /* var_dump($_POST);*/
    }
}else{
    echo "Vous devez être connecté pour écrire un article sur notre blog";
} 
?>


<h2>Dépôt d'article membre</h2>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="titre"> Titre :</label>
            <input id="titre" name="titre" type="text" class="form-control">
        </div>
        <div>
            <label for="content">Article :</label>
            <textarea id="content" name="content" type="text" class="form-control" cols="25" rows="10"></textarea>
        </div>
        
        
        <div>
            <label for="image">Insérez une image :</label>
            <input type="file" src="" alt="" name="image" class="form-control">
        </div>

        <select name="category" id="choixCat">
                <?php 
                $categories = getAllCategories($id); 
                    foreach($categories as $category){ ?>                                                                                          <!-- à revoir  --> 
                       <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?></option>
                                    
                <?php } 
                ?> 
        </select> 
            <input type="submit" value="envoi">
    </form>
</div>


<?php

include 'C:/xampp/htdocs/PHP/mini_blog/partials/footer.php';