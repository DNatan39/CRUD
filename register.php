<html lang="fr">
<?php 
include("connect.php");
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href=icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>╰☆☆ 𝕄𝕖𝕟𝕒𝕣𝕕 ☆☆╮</title>
</head>

<body class="container-fluid d-flex justify-content-center align-items-center">
<div class="box1">
    <form action="register.php" method="post">
        <span class="text-center pt-4">Enregistrement des interventions</span>
        <div class="input-container">
            <input type="text" name="intervention" id="intevention" required/>
            <label for="intervention">Votre intervention</label>		
        </div>
        <div class="input-container">		
            <input type="number" name="etage" id="etage" required/>
            <label for="etage">L'étage</label>
        </div>
        <div class="input-container">		
            <input type="date" name="dateintervention" id="dateintervention" value="" required/>
            <label for="dateintervention">Votre date d'intervention</label>
        </div>
        <button type="submit" name="action" value="register" class="btn">Enregister</button>
    </form>	
</div>
<section class="box2 ">
        <div class="container-fluid filter d-flex align-items-center p-0">
        <p class="m-0 mx-2">DATE:</p>
            <input type="date" value="date" class="outilfilter m-2 rounded">
            <p class="m-0 mx-2">L'ÉTAGE:</p>
            <span class="px-1">
                <?php
                    $selected = '';
                    echo '<select name="number" class="outilfilter value="number">',"\n";
                    for($i=1; $i<=10; $i++)
                    {
                        if($i == date('Y')){
                            $selected = ' selected="selected"';
                        }
                        echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
                        $selected='';
                    }
                    echo '</select>',"\n";
                ?>
            </span>
            <button type="submit" name="" value="filter" class="btn m-0 ms-3">Filtrer</button>
        </div>

    <div id="tableau" class="mt-3">
        <ul class="list-unstyled">
            <?php
                retrieve();
            ?>
        </ul>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>