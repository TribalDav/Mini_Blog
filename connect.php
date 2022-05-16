<?php

function dbconnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=mini_blog;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        //echo 'connexion réussie, bienvenue 007';
        return $db;  
    }catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }
}