<?php
session_start();
function connect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=crud', 'root', 'Solbertek3965');
        return $db;
        }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
function login(){
    $findUser = connect()->prepare('SELECT * FROM user WHERE id_user = :id_user');
    $findUser->bindParam(':id_user', $_POST['username'], PDO::PARAM_STR);
    $findUser->execute();
    $user = $findUser->fetch();
    if ($user && password_verify($_POST['password'], $user['id_pass'])) {
        $_SESSION['id_user'] = $user['id_user']; 
        header('Location: ./register.php');  
        
    } else {
        echo 'Invalid username or password';
    }
}
if(isset($_POST['action']) && !empty($_POST['username'])  && !empty($_POST['password'])  && $_POST['action']=="login"){
    login();
}
?>