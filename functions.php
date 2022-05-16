<?php

require 'C:/xampp/htdocs/PHP/mini_blog/connect.php';

function getAllPosts(){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM posts");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
return $result;
}

function getPostByid($id_posts){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM posts WHERE id=$id_posts");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function register($pseudo, $password, $email){
    $db = dbconnect();
    $query = $db->exec("INSERT INTO user VALUES (null, '$pseudo', '$password', '$email')");
}

function getUserInfosByMail($email){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM user WHERE user.mail='$email'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function addPost($title, $author, $image, $content){
    $db = dbconnect();
    $query = $db->prepare("INSERT INTO posts VALUES(null, :titre, :user_id, null, :image, :content)");
    $query->bindParam(':titre', $title);
    $query->bindParam(':user_id', $author);
    $query->bindParam(':image', $image);
    $query->bindParam(':content', $content);
    $query->execute();
}

function getAllCategories(){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM category");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
return $result;
}

/*function getCategoryByGenre($genre){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM category WHERE genre = $genre");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}*/

function getCategoryById($id){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM category WHERE id = $id");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

/*function getPostByCategoryId($id){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM posts WHERE category_id =$id");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}*/

function editPost($id, $title, $author, $image, $content){
    $db = dbconnect();
    $query = $db->prepare("UPDATE posts SET title=:titre, image=:image, content=:content WHERE id=:id");
    $query->bindParam(':id', $id);
    $query->bindParam(':titre', $title);
    $query->bindParam(':image', $image);
    $query->bindParam(':content', $content);
    $query->execute();
}

function deletePost($id){
    $db = dbconnect();
    $query = $db->exec("DELETE FROM posts WHERE id=$id");
}
