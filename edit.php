<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>edit</title>
  </head>

  <body>
    <header>
      <img src="images/Poke_Ball.png" alt="logo_pokeball" id="logo_pokeball" />
      <h1>Formulaire</h1>
    </header>

    <main id="main-edit">
      <div id="formulaire-pokemon">
        <form action="formulaire">
          <div class="ligne-formulaire">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="question" id="input-nom" />
          </div>
          <div class="ligne-formulaire">
            <label for="type1" id="Label-type1">Type 1 </label>
            <select name="type1" id="input-type1" class="question">
              <option value="empty">Choisir</option>
              <option value="normal">Normal</option>
              <option value="fighting">Fighting</option>
              <option value="flying">Flying</option>
              <option value="poison">Poison</option>
              <option value="ground">Ground</option>
              <option value="rock">Rock</option>
              <option value="bug">Bug</option>
              <option value="ghost">Ghost</option>
              <option value="steel">Steel</option>
              <option value="stellar">Stellar</option>
              <option value="fire">Fire</option>
              <option value="water">Water</option>
              <option value="grass">Grass</option>
              <option value="electric">Electric</option>
              <option value="psychic">Psychic</option>
              <option value="ice">Ice</option>
              <option value="dragon">Dragon</option>
              <option value="dark">Dark</option>
              <option value="fairy">Fairy</option>
              <option value="???">???</option>
            </select>
          </div>

          <div class="ligne-formulaire">
            <label for="type2" id="Label-type2">Type 2 </label>
            <select name="type2" id="input-type2" class="question">
              <option value="empty">Choisir</option>
              <option value="normal">Normal</option>
              <option value="fighting">Fighting</option>
              <option value="flying">Flying</option>
              <option value="poison">Poison</option>
              <option value="ground">Ground</option>
              <option value="rock">Rock</option>
              <option value="bug">Bug</option>
              <option value="ghost">Ghost</option>
              <option value="steel">Steel</option>
              <option value="stellar">Stellar</option>
              <option value="fire">Fire</option>
              <option value="water">Water</option>
              <option value="grass">Grass</option>
              <option value="electric">Electric</option>
              <option value="psychic">Psychic</option>
              <option value="ice">Ice</option>
              <option value="dragon">Dragon</option>
              <option value="dark">Dark</option>
              <option value="fairy">Fairy</option>
              <option value="???">???</option>
            </select>
          </div>
          <div class="ligne-formulaire">
            <label for="image" id="Label-image">Image (URL) </label>
            <input type="url" name="image" id="input-image" class="question" />
          </div>
          <div class="ligne-formulaire">
            <label for="taille" id="Label-taille">Taille (m) </label>
            <input
              type="number"
              name="taille"
              id="input-taille"
              required
              min="0"
              class="question"
            />
          </div>
          <div class="ligne-formulaire">
            <label for="poids" id="Label-poids">Poids (kg) </label>
            <input
              type="number"
              name="poids"
              id="input-poids"
              required
              min="0"
              class="question"
            />
          </div>
          <div class="ligne-formulaire">
            <label for="generation" id="Label-gen">Génération </label>
            <input
              type="number"
              name="generation"
              id="input-gen"
              required
              min="1"
              max="9"
              class="question"
            />
          </div>
          <div class="ligne-formulaire">
            <a href="index.php" id="lien-index">Retour</a>
            <div class="submit-reset">
              <input type="submit" value="Soumettre" class="boite-bouttons" />
              <input
                type="reset"
                value="Réinitialiser"
                class="boite-bouttons"
              />
            </div>
          </div>
        </form>
      </div>
    </main>
    <script>
      let indexButton = document.getElementById("lien-index");

      indexButton.addEventListener("click", (event) => {
        if (confirm("Etes vous sur de vouloir quitter?") == false) {
          event.preventDefault();
        }
      });
    </script>
  </body>
</html>
