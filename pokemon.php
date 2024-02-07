<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pokemon</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <a href="index.php" class="button-retour button-pokemon">Retour</a>
    </header>

    <main id="pokemon-main">
      <div class="card">
        <div class="entete">
          <h1 id="nom_carte">Geodude</h1>
          <img src="images/fighter_icon.png" alt="icon-fighter" id="icon" />
        </div>
        <img
          src="assets/images/074.png"
          alt="Geodude"
          style="width: 90%"
          class="background"
        />
        <div class="informations-pokemon">
          <p>Type(s) : Rock, Ground</p>
          <p>Génération : 1</p>
          <p>Taille : 0.4m</p>
          <p>Poids : 20kg</p>
        </div>
      </div>
    </main>

    <script src="pokemon.js"></script>
  </body>
</html>