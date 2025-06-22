<?php 
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $Email = $_POST['Email'];
  $Demande = $_POST['Demande'];
  $commentaire = $_POST['Commentaire'];

  $sql = "INSERT INTO formulaire(nom, prenom, Email, Demande, Commentaire) 
          VALUES ('$nom', '$prenom', '$Email', '$Demande', '$commentaire')";
  $reponse = $conn->query($sql);
 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/style.css" />
    <title>contact</title>
  </head>

  <body class="body-contact">
   <?php
      include 'header.php'
    ?>
    <div class="cover-page">
    <form id="form-contact" method="post">
      <div class="container-head">
        <h1>Formulaire</h1>
      </div>
      <div class="container-name">
        <label for="name">nom</label>
        <input
          type="text"
          id="name"
          name="nom"
          placeholder="entrer votre nom"
        />
      </div>
      <div class="container-prename">
        <label for="prename" class="">prenom</label>
        <input
          type="text"
          name="prenom"
          id="prename"
          placeholder="entrer votre prenom"
        />
      </div>
      <div class="container-mail">
        <label for="Email">address mail</label>
        <input
          type="email"
          id="email"
          name="Email"
          placeholder="entrer votre address mail"
        />
      </div>
      <div class="container-select">
        <label for="Demande">type de demande</label>

        <select aria-label="Default select example" name="Demande">
          <option selected></option>
          <option>Demande d'information</option>
          <option>Demande de rendez-vous</option>
          <option>Autres</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">commentaire</label>
        <textarea
          class="form-control"
          id="exampleFormControlTextarea1"
          rows="3"
          name="Commentaire"
        ></textarea>
      </div>
      <div class="container-button">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    <footer>
      <div class="copyright">
        <span class="copyright">Copyright@2025-2026-Tous droits reserves</span>
      </div>
      <div class="app">
        <img
          class="facebook"
          src="\images\facebook.png"
          alt="description de l image"
        />
        <img
          class="youtube"
          src="\images\youtube.png"
          alt="description de l image"
        />
        <img
          class="insta"
          src="\images\insta.png"
          alt="description de l image"
        />
      </div>
      <span> | </span>
      <span> FAQ</span>
      <span> contact </span>
      <span> mention legale </span>
    </footer>

    <script src="/java/script.js"></script>
  </body>
</html>
