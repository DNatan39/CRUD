<?php
session_start();

// est-ce que l'id existe et n'est pas vide ? 
if(isset($_GET['ID']) && !empty($_GET['ID'])){
    $ID = $_GET['ID'];
    require_once("co.php");
    // on écrit la requete
    $sql = "DELETE FROM `tache_faite` WHERE `ID` = :ID"; 
    $query = $db->prepare($sql);
    $query->bindValue(":ID", $ID, PDO::PARAM_INT);
    if(!$query->execute()){
        var_dump($query);
        die ("Erreur lors de la suppression1");
    }
    else{
        die ("tache supprimée avec succès");
    }
}
else{
    die ("Erreur lors de la suppression2");
}


?>