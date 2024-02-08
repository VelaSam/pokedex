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

    <?php
    $no = $_GET['no'] ?? null;

    if ($no != '') {
      $filtrer = "SELECT * FROM pokemon WHERE pokedex_number = :no";
      $results = $pdo->prepare($filtrer);
      $results->execute([':no' => $no]);

      // Fetch the results
      $pokemon = $results->fetch(PDO::FETCH_ASSOC);

      // Check if any results were found
      if ($pokemon) {

        $name = $pokemon['name'];
        $image = $pokemon['url_image'];
        $type = isset($pokemon['type1']) && $pokemon['type1'] !== '' ? ucfirst($pokemon['type1']) . " " . ucfirst($pokemon['type2']) : $pokemon['type2'];
        $generation = $pokemon['generation'];
        $size = $pokemon['height_m'];
        $weight = $pokemon['weight_kg'];
        $good = $pokemon['type1'] == 'normal' ? $pokemon['type2'] : $pokemon['type1'];
        switch ($good) {
          case 'normal':
            $background = "./images/background_normal.png";
            break;
          case 'fire':
            $background = "./images/background_fire.jpg";
            break;
          case 'water':
            $background = "./images/background_water.jpg";
            break;
          case 'electric':
            $background = "./images/background_electric.jpg";
            break;
          case 'grass':
            $background = "./images/background_grass.jpg";
            break;
          case 'ice':
            $background = "./images/background_ice.jpg";
            break;
          case 'fighting':
            $background = "./images/background_fighting.jpg";
            break;
          case 'poison':
            $background = "./images/background_poison.jpg";
            break;
          case 'ground':
            $background = "./images/background_ground.jpg";
            break;
          case 'flying':
            $background = "./images/background_flying.jpg";
            break;
          case 'psychic':
            $background = "./images/background_psychic.jpg";
            break;
          case 'bug':
            $background = "./images/background_bug.jpg";
            break;
          case 'rock':
            $background = "./images/background_rock.png";
            break;
          case 'ghost':
            $background = "./images/background_ghost.jpg";
            break;
          case 'dragon':
            $background = "./images/background_dragon.jpg";
            break;
          case 'dark':
            $background = "./images/background_dark.jpg";
            break;
          case 'steel':
            $background = "./images/background_steel.jpg";
            break;
          case 'fairy':
            $background = "./images/background_fairy.jpg";
            break;
          default:
            // default code block if the type doesn't match any case
            $background = "./images/background_normal.png";
        }


        echo '
        <main id="pokemon-main">
            <div class="card" style="background: url(' . $background . '); background-size: cover;">
                <div class="entete">
                    <h1 id="nom_carte" > ' . $name . '</h1>
                    <img src="images/fighter_icon.png" alt="icon-fighter" id="icon" />
                </div>
                <img
                    src="' . $image . '"
                    alt="' . $name . '"
                    style="width: 90%"
                    class="background"
                />
                <div class="informations-pokemon">
                    <p>Type(s) : ' . $type . '</p>
                    <p>Génération : ' . $generation . '</p>
                    <p>Taille : ' . $size . 'm</p>
                    <p>Poids : ' . $weight . 'kg</p>
                </div>
            </div>
        </main>';




      } else {
        echo "No results found for Pokedex number: " . $no;
      }
    } else {
      echo "No Pokedex number provided.";
    }
    ?>


    

    <script src="pokemon.js"></script>
  </body>
</html>
