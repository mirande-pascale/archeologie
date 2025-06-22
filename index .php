
<?php
session_start();
include("db.php");
?>
 <!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Association Archéo Passion</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="/css/accueil.css" />
      <link rel="stylesheet" href="/css/accueil-responsive.css"/>
 
  </head>
  <body class="body-acceuil">
    <?php
      include 'header.php';
    ?>
     <main>
      <section class="presentation">
         <h2>Bienvenue sur notre site</h2> 
        <p>
          Bienvenue sur ARCHEO-IT, le site qui mêle passion de l'archéologie et nouvelles technologies.

           Explorez les lieux emblématiques de notre patrimoine, analysés avec les outils du numérique.</p>

         <p>Notre mission : rendre l’histoire accessible grâce aux innovations modernes.

         Connectez-vous pour accéder à l’intégralité de nos articles, images et ressources exclusives.

        Vous y trouverez des actualités, des lieux classés, et des découvertes archéologiques récentes.

        Rejoignez notre communauté pour enrichir vos connaissances et partager vos découvertes.

        Ensemble, explorons le passé pour mieux comprendre le présent.
        </p>
      </section>


    <?php if (!isset($_SESSION['id'])): ?>
    <?php else: ?>
        <p>Connecté en tant que <?= htmlspecialchars($_SESSION['nom']) ?> | <a href="deconnexion.php">Déconnexion</a></p>
    <?php endif; ?>

    <h2>Actualités</h2>
    <div class="actualites">
        <?php
        if (isset($_SESSION['id'])) {
            $sql = "SELECT * FROM actualités";
        } else {
            $sql = "SELECT * FROM actualités LIMIT 3";
        }

        $resultat = mysqli_query($conn, $sql);
        ?>
     <div class="section">

        <section class="cartes">
          <?php while ($row = mysqli_fetch_assoc($resultat)) : ?>
          <div class="carte">
           <div class="carte-image">
             <img
              src="/images/<?= htmlspecialchars($row['image']) ?>" width="200"
            />
          </div>
           <div class="carte-texte">
            <a href="<?= htmlspecialchars($row['lien']) ?>">
            <?= htmlspecialchars($row['titre']) ?>
            </a>
            <p><?= nl2br(htmlspecialchars($row['text'])) ?></p>
          </div>
          <div class="date"> <span><?= htmlspecialchars($row['date']) ?></span> </div>
        </div>
        <?php endwhile; ?>
    </div>
    </section>
          </div>
    <section class="image">
      <?php if (!isset($_SESSION['utilisateur'])): ?> 
        <button class="btn-decouvrir" onclick="verifierConnexion()">Découvrir</button>
          <?php endif; ?>  
      
    </section>
  <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
  <div id="carousel" class="carousel-inner" width="600" height="400">
    <div class="carousel-item active">
      <img src="/images/mers.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="/images/art.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="/images/roche.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="/images/os.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="/images/ile.webp" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="/images/decouv.webp" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="/images/epee.jpg" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <div class="iframe">
      <h2>Explorez nos lieux</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d685584.5709673984!2d1.3012248554088337!3d47.83833933137899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssites%20arch%C3%A9ologiques%20%C3%A0%20visiter%20en%20France!5e0!3m2!1sfr!2sfr!4v1750545769104!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </main>

  <?php
    include 'footer.php';
?>
      <script src="/java/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
 </body>
</html>

 

    

      
    
    
    