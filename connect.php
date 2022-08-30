<?php
    session_start();
    function connect(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=crud', 'root', 'Solbertek3965');
            return $db;
            }
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
        }
    }
    
    function register(){
        $inter = $_POST['intervention'];
        $etage = $_POST['etage'];
        $dateintervention = $_POST['dateintervention'];

        $ajouter = connect()->prepare('INSERT INTO section (id_intervention, id_etage, id_date ) VALUES (:id_intervention, :id_etage, :id_date)');
        $ajouter->bindParam(':id_intervention', $inter, 
        PDO::PARAM_STR);
        $ajouter->bindParam(':id_etage', $etage,  
        PDO::PARAM_STR);
        $ajouter->bindParam(':id_date', $dateintervention,  
        PDO::PARAM_STR);
        $estceok = $ajouter->execute();
        $ajouter->debugDumpParams();
            if($estceok){
                header('Location: ./register.php');
            } else {
                echo 'Error during registration';
            }
    }
    function retrieve(){
        try{
            $str = connect()->prepare("SELECT * FROM section");
            $str->execute();
            $return = $str->fetchAll();
            for($i=0;$i< count($return);$i++) {
                $index = strval($i);
                echo '<li class="p-2 m-2 text-white rounded position-relative"><p>Intervention : ' .$return[$index]['id_intervention'].'</p><p>réalisé le : '.$return[$index]['id_date']."</p><p>À l'étage : ".$return[$index]['id_etage'].' </p> <a href="register.php?id='.$return[$index]['id'].'" class="trash position-absolute"><i class="fa-solid fa-trash-can"></i></a></li>';}
        } catch(PDOException $th){
            echo $th;
        }
    }
    function login(){
        $findUser = connect()->prepare('SELECT * FROM user WHERE id_user = :id_user');
        $findUser->bindParam(':id_user', $_POST['username'], PDO::PARAM_STR);
        $findUser->execute();
        $user = $findUser->fetch();
        if ($user && password_verify($_POST['password'], $user['id_pass'])) {
            $_SESSION['user'] = $user['id_user'];
            header('Location: ./register.php');  
        } else {
            header('Location: ./index.php'); 
        }
    }
    if(isset($_POST['action']) && !empty($_POST['intervention']) && !empty($_POST['etage'])  && !empty($_POST['dateintervention'])  && $_POST['action']=="register"){
        register();
    }
    if(isset($_POST['action']) && !empty($_POST['username'])  && !empty($_POST['password'])  && $_POST['action']=="Login"){
        login();
    }
?>