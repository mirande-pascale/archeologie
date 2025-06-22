<?php
include("db.php");  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email = $_POST['Email'];
    $option = $_POST['choix'];      
    $taille = $_POST['taille'];  

    $execution = escapeshellcmd("python script.py $option $taille");
    shell_exec($execution);

    $script = file_get_contents("script_mdp.txt");
    $script = trim($script);  
    $script_hash = password_hash($script, PASSWORD_DEFAULT);

    $sql = "INSERT INTO inscription (nom, prenom, Email, mot_passe) VALUES ('$nom', '$prenom', '$email', '$script_hash')";
    mysqli_query($conn, $sql);

    echo "Mot de passe généré : <b>$script</b><br>";
    echo "Inscription réussie ! <a href='connexion.php'>Se connecter</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" />
    <title>Inscription</title>
</head>
<body class="body-inscription">
        <h2>Créer un compte</h2>
    <div class="structure-inscription">
   
    <div class="form">
    <form class="form-inscription" method="POST" >
  <div>
  <label for="Form" >nom</label>
    <input type="text" name="nom" placeholder="Entrez votre nom">
</div>
<div>
  <label for="colFormLabel">prenom</label>
    <input type="text"  name="prenom" placeholder="Entrez votre prenom">
</div>
<div>
  <label for="Form" >Email</label>
    <input type="email"  id="colFormLabelLg" name="Email" placeholder="Entrez votre address">
</div>
<div>
      <label for="Form" >type de mot de passe</label>
      <select name="choix">
            <option value="1">Alphabétique</option>
            <option value="2">Alpha + Numérique</option>
            <option value="3">Alpha + Num + Spéciaux</option>
        </select>
</div>
<div>
     <label for="Form" >longeur</label>
     <input type="number" name="taille" min="8" max="12" value="8"><br>
</div>
 <button type="submit" class="btn btn-primary">s'inscrire</button>
</form>
</div>
<div class="partie">
<div class="slogan-inscription">
    <h1>Rejoignez la communauté Archéo-IT</h1>
    <p>
      Passionné d’histoire, étudiant ou chercheur ? Inscrivez-vous pour accéder aux ressources exclusives, participer aux discussions, et contribuer à la mise en lumière des trésors du passé.
     Chaque inscription est une pierre de plus à l’édifice du savoir archéologique.</p>
</div>
</div>
</div>
</body>
</html>
