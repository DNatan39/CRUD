<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body class="d-flex justify-content-center align-items-center">
    <form action="assets/login.php" method="post" class="d-flex justify-content-center align-items-center flex-column border border-warning rounded bg-dark p-3">

        <div class="d-flex justify-content-center align-items-start flex-column">
            <label for="intervention" class="bg-warning mb-2 rounded p-1 w-100">Votre intervention :</label>
            <input type="text" name="intevention" id="intevention" placeholder="saisiez votre intervention" class="w-100 mb-2">
        </div>

        <div class="d-flex justify-content-center align-items-start flex-column">
            <label for="etage" class="bg-warning mb-2 rounded p-1 w-100">L'étage :</label>
            <input type="text" name="etage" id="etage" placeholder="numéro de l'étage" class="w-100 mb-2">
        </div>

        <div class="d-flex justify-content-center align-items-start flex-column">
            <label for="dateintervention" class="bg-warning mb-2 rounded p-1 w-100">Votre date d'intervention :</label>
            <input type="date" name="dateintervention" id="dateintervention" class="w-100 mb-2">
        </div>
        <section>
            <button type="submit" name="action" value="Register" class="btn btn-warning m-3">Register</button>
            <a href="assets/register.php" class="btn btn-warning m-3">Create</a>
        </section>

    </form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>