<?php

function register(){
    $pass = $_POST['intevention'];
    $login = $_POST['etage'];
    $name = $_POST['dateintervention'];

    $ajouter = connect()->prepare('INSERT INTO section (id_intervention, id_etage, id_date) VALUES (:id_intervention, :id_etage, :id_date)');
    $ajouter->bindParam(':id_intervention', $login, 
    PDO::PARAM_STR);
    $ajouter->bindParam(':id_etage', $pass,  
    PDO::PARAM_STR);
    $ajouter->bindParam(':id_date', $name,  
    PDO::PARAM_STR);
    $estceok = $ajouter->execute();
    $ajouter->debugDumpParams();
    if($estceok){
        header('Location: ./register.php');   
    } else {
        echo 'Error during registration';
    }
}
if(isset($_POST['action']) && !empty($_POST['intevention'])  && !empty($_POST['etage']) && !empty($_POST['dateintervention'])  && $_POST['action']=="register"){
    register();
}


?>