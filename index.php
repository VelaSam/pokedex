<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pokedex</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body id="index">

  <?php
  $DBuser = 'root';
  $DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
  $pdo = null;

  try {
    $database = 'mysql:host=database:3306;dbname=pokedex';
    $pdo = new PDO($database, $DBuser, $DBpass);
  } catch (PDOException $e) {
    echo "Error: Unable to connect to MySQL. Error:\n $e";
  }
  ?>


    <header>
      <img src="images/Poke_Ball.png" alt="logo_pokeball" id="logo_pokeball" />
      <h1>Index</h1>
    </header>

    <main class="index">
      <ul>
        <div class="type-list">
          <li><a href="index.php?type=normal" id="color-normal">Normal</a></li>
          <li>
            <a href="index.php?type=fighting" id="color-fighting">Fighting</a>
          </li>
          <li><a href="index.php?type=flying" id="color-flying">Flying</a></li>
          <li><a href="index.php?type=poison" id="color-poison">Poison</a></li>
          <li><a href="index.php?type=ground" id="color-ground">Ground</a></li>
          <li><a href="index.php?type=rock" id="color-rock">Rock</a></li>
          <li><a href="index.php?type=bug" id="color-bug">Bug</a></li>
          <li><a href="index.php?type=ghost" id="color-ghost">Ghost</a></li>
          <li><a href="index.php?type=steel" id="color-steel">Steel</a></li>
          <li>
            <a href="index.php?type=stellar" id="color-stellar">Stellar</a>
          </li>
          <li><a href="index.php?type=fire" id="color-fire">Fire</a></li>
          <li><a href="index.php?type=water" id="color-water">Water</a></li>
          <li><a href="index.php?type=grass" id="color-grass">Grass</a></li>
          <li>
            <a href="index.php?type=electric" id="color-electric">Electric</a>
          </li>
          <li>
            <a href="index.php?type=psychic" id="color-psychic">Psychic</a>
          </li>
          <li><a href="index.php?type=ice" id="color-ice">Ice</a></li>
          <li><a href="index.php?type=dragon" id="color-dragon">Dragon</a></li>
          <li><a href="index.php?type=dark" id="color-dark">Dark</a></li>
          <li><a href="index.php?type=fairy" id="color-fairy">Fairy</a></li>
          <li><a href="index.php?type=???" id="color-unknown">???</a></li>
        </div>
      </ul>
      <ul class="pokemon-list">

      <?php

      $type = $_GET['type'] ?? null;

      if ($type != '') {
        $filtrer = "select * from pokemon where pokedex_number and (type2= :type or type1= :type)";
        $results = $pdo->prepare($filtrer);
        $results->execute([':type' => $type]);
      } else {
        $results = $pdo->query('select * from pokemon');
      }

      foreach ($results as $row): ?>
                                                                                        <?php echo '<li> <a href="pokemon.php?no=' . $row['pokedex_number'] . '">
            
                <img src="' . $row['url_image'] . '" alt="' . $row['name'] . '">
                <div class="infos-list-pokemon">
                    <a>' . $row['name'] . '</a>
                    <p class="liste-types">' . ucfirst($row['type1']) . ' ' . ucfirst($row['type2']) . '</p>
                    <p class="liste-generation"> Generation#' . $row['generation'] . '</p>
                </div>
                </a>
            </li>'
                                                                                        ;
                                                                                        ?>
    <?php endforeach; ?>
    
    




      </ul>
    </main>

    <footer>
      <a href="edit.php" class="button-retour button-index">Edit</a>
    </footer>

    <script src="index.js"></script>
  </body>
</html>


