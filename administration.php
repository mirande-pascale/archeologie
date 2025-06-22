<?php
include 'db.php';


if (isset($_POST['id'])) {
  $id = intval($_POST['id']);
  $sql = "DELETE FROM formulaire WHERE id = $id";
  if (mysqli_query($conn, $sql)) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  } else {
    echo "Erreur : " . mysqli_error($conn);
  }
  
}
if (isset($_POST['inscription_id'])) {
  $id = intval($_POST['inscription_id']);
  $sql = "DELETE FROM inscription WHERE id = $id";
  if (mysqli_query($conn, $sql)) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  } else {
    echo "Erreur : " . mysqli_error($conn);
  }
}
if (isset($_POST['actualites_id'])) {
  $id = intval($_POST['actualites_id']);
  $sql = "DELETE FROM actualités WHERE id = $id";
  if (mysqli_query($conn, $sql)) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  } else {
    echo "Erreur : " . mysqli_error($conn);
  }
}


$query = 'SELECT * FROM formulaire';
$result = $conn->query($query);
$query_inscription = 'SELECT * FROM inscription';
$result_inscription = $conn->query($query_inscription);
$query_actualites = 'SELECT * FROM actualités';
$result_actualites = $conn->query($query_actualites);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>Table de données</title>
</head>
<body class="body-admin">
  <?php
      include 'header.php'
    ?>
<div class="table-text">
  <h1>table de donnees</h1>
</div>

<div id="table" class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>adress mail</th>
        <th>Demande</th>
        <th>commentaire</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row): ?>
        <?php if (empty($row['nom']) && empty($row['prenom']) && empty($row['Email']) && empty($row['Demande']) && empty($row['Commentaire'])) continue; ?>

      <tr>
        <td><?= $row['nom'] ?></td>
        <td><?= $row['prenom'] ?></td>
        <td><?= $row['Email'] ?></td>
        <td><?= $row['Demande'] ?></td>
        <td><?= $row['Commentaire'] ?></td>
        <td>
          <form method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit">Supprimer</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="table-text">
  <h1>Table des inscriptions</h1>
</div>

<div id="table" class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        <th>nom</th>
        <th>Email</th>
        <th>mot_passe</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result_inscription as $row): ?>
        <?php if (empty($row['nom']) && empty($row['Email']) && empty($row['mot_passe'])) continue; ?>
        <tr>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['Email'] ?></td>
          <td><?= $row['mot_passe'] ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="inscription_id" value="<?= $row['id'] ?>">
              <button type="submit">Supprimer</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="table-text">
  <h1>Table des actualités</h1>
</div>
<div id="table" class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        <th></th>
        <th>Email</th>
        <th>mot_passe</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result_actualites as $row): ?>
        <?php if (empty($row['titre']) && empty($row['text']) && empty($row['image'])) continue; ?>
        <tr>
          <td><?= $row['titre'] ?></td>
          <td><?= $row['text'] ?></td>
          <td><?= $row['image'] ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="actualites_id" value="<?= $row['id'] ?>">
              <button type="submit">Supprimer</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php
 include 'footer.php'
 ?>

<script src="/java/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
