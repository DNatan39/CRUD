<html lang="fr">
<?php 
        include("connect.php");
        updateaffiche();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>╰☆☆ Updata ☆☆╮</title>
</head>

<body class="d-flex justify-content-center align-items-center">
    <section class="box1">
        <form action="register.php" method="post">
            <span class="text-center pt-4">Modifier une intervention</span>
            <div class="input-container">
                <input type="text" name="intervention" id="intevention" value="<?php $result[$index]['id_intervention'] ?>" />
                <label for="intervention">Votre intervention</label>
            </div>
            <div class="input-container">
                <input type="number" name="etage" id="etage" required value="<?php  ?>" />
                <label for="etage">L'étage</label>
            </div>
            <div class="input-container">
                <input type="date" name="dateintervention" id="dateintervention" value="<?php  ?>" />
                <label for="dateintervention">Votre date d'intervention</label>
            </div>
            <button type="submit" name="action" value="register" class="btn1">Modifier</button>
        </form>
    </section>
</body>

</html>