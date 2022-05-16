<?php
require 'C:/xampp/htdocs/PHP/mini_blog/functions.php';
include 'C:/xampp/htdocs/PHP/mini_blog/partials/head.php';

$article = getAllPosts();
foreach($article as $article){
    ?>
    <div class="container">
      <h2>    
        <a href="single.php?id=<?php echo $article['id'] ?>"><?php echo $article["titre"]?></a> 
      </h2> 
        <img src="" alt="image de merde">
          <p>    
            <?php echo $article["content"]?> 
          </p>  
          <p>    
            <?php echo $article["user_id"]?> 
          </p>  
          <p>    
            <?php echo $article["date"]?> 
          </p>  
          
    </div>
<?php
}
include 'C:/xampp/htdocs/PHP/mini_blog/partials/footer.php';