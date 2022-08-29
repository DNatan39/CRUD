<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>╰☆☆ 𝕄𝕖𝕟𝕒𝕣𝕕 ☆☆╮</title>
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="box">
        <form action="connect.php" method="post">
            <span class="text-center">Se connecter</span>
        <div class="input-container">
            <input type="text" name="username" required/>
            <label for="intervention">Utilisateur</label>		
        </div>
        <div class="input-container">		
            <input type="password" name="password" required/>
            <label for="password">Mot de passe</label>
        </div>
            <button type="submit" name="action" value="Login" class="btn">Se connecter</button>
    </form>	
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>