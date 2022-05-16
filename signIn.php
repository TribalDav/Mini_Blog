<?php
require 'C:/xampp/htdocs/PHP/mini_blog/functions.php';

if(isset($_POST) && !empty($_POST)){
    $email = htmlspecialchars($_POST['email']);
    $entering_password =  htmlspecialchars($_POST['password']);
    //etape 1 : récupérer les données de l'utilisateur
    $userInfos = getUserInfosByMail($email);
    //etape 2 : comparer le mot de pass saisie avec celui de la base, problème celui ci est chiffré
    $hashed_password = $userInfos['password'];
    $isConfirmed = password_verify($entering_password, $hashed_password);
    if($isConfirmed){
        session_start();
        $_SESSION['user'] = $userInfos;
        header('location:index.php?status=success&message=Vous êtes bien connecté');
    }
}


include 'C:/xampp/htdocs/PHP/mini_blog/partials/head.php';

?>
<h2>Identification membre</h2>
<div class="container">
<form action="" method="post">
    <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </div>
    <input type="submit" value="Sign In">
</form>
</div>

<?php
include 'C:/xampp/htdocs/PHP/mini_blog/partials/footer.php';
?>