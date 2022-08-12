<?php
include("connect.php");
function retrieve(){
    try{
        $str = connect()->prepare("SELECT * FROM section");
        $str->execute();
        $return = $str->fetchAll();
        for($i=0;$i< count($return);$i++) {
            $index = strval($i);
            echo '<p>' .$return[$index]['id_intervention'].', réalisé le '.$return[$index]['id_date']." à l'étage ".$return[$index]['id_etage'];
        }
    } catch(PDOException $th){
        echo $th;
    }
}

?>


<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Tableau des intervention</title>
</head>

<body class="d-flex justify-content-center align-items-center">
    <section class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <input type="date" class="col-1 mb-2 rounded" id="date">
        <ul class="list-group flex-row list-unstyled">
            <li class="p-2 m-2 bg-danger text-white rounded">An Item</li>
            <li class="p-2 m-2 bg-danger text-white rounded">Two Item</li>
            <li class="p-2 m-2 bg-danger text-white rounded">Three Item</li>
        </ul>
        <a href="register.php" class="btn btn-warning m-3">Créer</a>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>