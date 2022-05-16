<?php
require 'C:/xampp/htdocs/PHP/mini_blog/functions.php';
include 'C:/xampp/htdocs/PHP/mini_blog/partials/head.php';

if(isset($_POST) && !empty($_POST)){
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $password_clean = htmlspecialchars($_POST['password']);
   $hashed_password = password_hash($password_clean, PASSWORD_BCRYPT);
   $email = htmlspecialchars($_POST['email']);
   register($pseudo, $hashed_password, $email);
}



?>
<h2>Inscription à l'espace membre</h2>
<div class="container">
<form action="" method="post">
    <div>
        <label for="pseudo"> Pseudo :</label>
        <input id="pseudo" name="pseudo" type="text" class="form-control">
    </div>
    <div>
        <label for="email">Email :</label>
        <input id="email" name="email" type="email" class="form-control">
    </div>
    <div>
    <label for="password">Mot de passe :</label>
    <input id="password" name="password" type="password" class="form-control">
    </div>
    <input type="submit" value="Sign up">
</form>
</div>







<?php
include 'C:/xampp/htdocs/PHP/mini_blog/partials/footer.php';
?>