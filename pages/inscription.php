<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="../assets/css/style.css">
 <title>Inscription</title>
</head>

<body>
 <?php
 require_once '../includes/menu.php';

 ?>
 <h1>Inscription</h1>
 <div class="signin">
        <form action="">
            <label for="username">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" required><br>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required><br>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required><br>

            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe ici" minlength="8" maxlength="20" required>

            <BUtton type="submit">S'inscrire</BUtton>

            <p>Deja un compte ? Connectez vous en cliquant  <a href="/blogADN/pages/connexion.php?page=connexion">ici</a></p>
        </form>
    </div>

 
</body>

</html>