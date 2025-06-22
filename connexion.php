<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $mot_passe = $_POST['mot_passe'];

    $sql = "SELECT * FROM inscription WHERE Email = '$email'";
    $reponse = mysqli_query($conn, $sql);
    $utilisateur = mysqli_fetch_assoc($reponse);

    // Utiliser password_verify car le mot de passe en base est hashé
    if ($utilisateur && password_verify($mot_passe, $utilisateur['mot_passe'])) {
        $_SESSION['id'] = $utilisateur['id'];
        $_SESSION['nom'] = $utilisateur['nom'];
        header("Location: index.php");
        exit();
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" />
    
</head>
<body id="body-connexion">
    <div class="h2">
    <h2>Se connecter</h2>
    </div>
<div class="structure">
 <form id="form-connexion" method="POST" action="connexion.php">
    <div class="mb-3" id="email">
    <label for="Email1" class="form-label" id="email">Email address</label>
    <input type="email" class="form-control" name="Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3" id="password">
    <label for="Password1" class="form-label">Password</label>
    <input type="password" class="form-control" name="mot_passe">
    </div>
    <div id="emailHelp" class="form-text"><a href="/php/inscription.php">creer un compte</a></div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <div class="slogan">
    <h1 class="h1">
     Bienvenue sur le portail Archéo-IT
    </h1> 
       <p>Bienvenue sur le portail Archéo-IT
        Accédez à votre espace personnel pour explorer les dernières découvertes, partager vos recherches et consulter les archives des fouilles.
        Connectez-vous pour faire revivre le passé, un fragment à la fois.</p>
  </div>
</div>
</body>
</html>
