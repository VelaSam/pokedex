# Projet de session

Le projet de session consiste à construire une application web à 3 tiers. Le sujet du projet sera la construction d'un Pokedex, une base de données des différents Pokemon. Durant la première moitié de la session, nous travaillons sur la partie client (front-end) du site. Durant la deuxième moitié de la session, nous ajouterons un serveur qui fournira un API REST connecté à une base de données.

## Source d'information

La base de données sera peuplée d'information basée sur des données publiques des pokemon.

- [Pokemon Dataset](https://www.kaggle.com/datasets/rounakbanik/pokemon)

Pour la première partie du cours, puisque nous n'aurons pas de base de données, vous pouvez aller visiter le site PokemonDB pour aller chercher des informations de bases pour la création de pages client.

- [PokemonDB](https://pokemondb.net/pokedex/all)

Nous aurons aussi besoin d'image pour les différents pokemon. Vous pourrez aller chercher les images disponibles dans le dépôt suivant :

- [Pokémon Assets](https://github.com/HybridShivam/Pokemon)

## Fonctionnalités de l'application

Les fonctionnalités seront détaillées au fur et à mesure de la session, mais l'application aura les capacités suivantes :

- Affichage des Pokemon dans une liste
  - Affichage individuel d'un Pokemon avec ses caractéristiques
- Filtrage de l'affichage par type ou par génération du Pokemon
- CRUD (Create/Read/Update/Delete) Capacité d'ajouter, modifier et d'effacer un Pokemon de la liste

# Travail noté #1 - Page de contenu HTML

Vous devez créer les pages qui seront déposées sur votre dépôt Github privé. Les fichiers doivent être déposés avant le laboratoire #3.

## Travail à faire

Construire les pages suivantes :

- Fichier **index.html**
  - Contiens une liste des différents [types de Pokemon](https://bulbapedia.bulbagarden.net/wiki/Type) dans une liste non ordonnée. Chaque nom de type est un lien vers la page courante (index.html), mais en ajoutant un paramètre (voir vidéo URL Chapitre 1) qui indique le type (ex. "type=flying")
  - Une liste de 10 Pokemon
    - Pour chaque Pokemon, on affiche son image, son/ses types et le numéro de sa génération. Le nom du Pokemon est un lien vers la page **pokemon.html** avec le numéro du pokemon en paramètre (ex. "no=25")
- Fichier **pokemon.html**
  - Présente la ficher d'un pokemon de votre choix.
  - La fiche doit contenir
    - Nom du Pokemon
    - Type(s)
    - Image du Pokemon
    - Génération
    - Taille
    - Poids
- Fichier **edit.html**
  - Formulaire pour entrer les informations d'un Pokemon
  - Contrôles appropriés pour saisir les informations suivantes:
    - Nom du Pokemon
    - Type(s) (Sélection multiple)
    - Image du Pokemon (Saisi de texte pour un URL)
    - Taille
    - Poids
    - Génération (Valeur numérique)
  - Deux boutons doivent être disponibles pour respectivement soumettre le Pokemon et remettre les champs vides.

## Contrainte de travail

- Les pages doivent contenir des balises d'éléments **sémantiques** où c'est approprié.
- Les pages doivent être validées avec un valideur comment celui présenté en classe [du W3C](https://validator.w3.org/).

# Travail noté #2 - Présentation des pages

Vous devez ajouter du style aux différentes pages créé durant le travail noté #1. Les différentes modifications doivent être déposées sur le dépôt GitHub avant le laboratoire #5.

## Travail à faire

### Modification du contenu HTML

- Fichier **edit.html**
  - Ajouter un lien qui nous retourne à la page **index.html**.
- Fichier **pokemon.html**
  - Ajouter un lien qui nous retourne à la page **index.html**.
- Ficher **index.html**
  - Ajouter un lien vers la page **edit.html**

### Ajout des styles

Ajoutez du style aux pages suivantes :

- Fichier style.css:

  - Créez un et un seul fichier nommé style.css. Tous les styles que vous utiliserez doivent être dans ce fichier.

- Fichier **edit.html**

  - Le formulaire doit être centré et il y doit avoir un bon espacement à gauche et à droite de celui-ci.
  - Les _label_ et les contrôles doivent être séparés en deux colonnes. Le texte des _label_ et les contrôles doivent être justifiés à gauche (ex.: Tous les débuts de texte des labels doivent être alignés).
  - Les deux boutons et le lien ajouté doivent être alignés au bas du formulaire. Les trois doivent avoir la même allure de bouton. Le lien doit être d'une autre couleur (exemple rouge) et le texte du bouton doit être "Cancel"/"Annuller". Le lien doit être complètement à gauche. Les deux boutons doivent être complètement à droite. Il doit avoir un espace entre la droite et la gauche.
  - Vous devez implémenté du responsive design. Si la largeur de l'écran est plus petite que 600 pixels, les labels et les contrôles ne doivent faire qu’une colonne.

- Fichier **pokemon.html**

  - Les informations du pokemon doivent être présentées sous forme de "carte". Voir }}[l&#39;exemple ici](https://www.w3schools.com/howto/howto_css_cards.asp) pour avoir une idée de la présentation.
    - La carte doit avoir une bordure et un ombrage (shadow)
    - La carte doit présenter l'image du Pokemon en premier. L'image doit avoir une bordure.
    - L'image du Pokemon doit être restreinte pour un visionnement agréable.
    - Le nom du Pokemon doit avoir une place prédominante (taille et/ou police).
    - La carte doit avoir une largeur qui est facilement lisible, peu importe l'appareil de visionnement.
    - Les autres informations doivent être stylisées pour une belle présentation (alignement, positionnement, prédominance, à votre choix).
  - Au-dessus de la carte, collé en haut à gauche de la page, le lien vers **index.html** rajouté doit avoir l'apparence d'un bouton qui contient le texte "Retour" (ou "Return").

- Fichier **index.html**

  - La liste de type et la liste de Pokemon doivent être séparées à l'aide d'une grille CSS. Les types doivent se retrouver soit au-dessus du contenu ou dans une barre à gauche du contenu de la liste de Pokemon.
  - Les Pokemon de la liste doivent être affichés de manière horizontale.
  - Si le nombre de Pokemon dépasse la largeur de la page, les Pokemon doivent continuer sur des lignes additionnelles.
  - L'image et les informations du Pokemon doivent être stylisées pour une belle présentation (à votre choix).
  - En bas à gauche de la page en tout temps (position fixe), vous devez avoir le lien vers la page **edit.html** stylisé comme un bouton. Le lien/bouton doit toujours être visible au même endroit dans la fenêtre.

## Contrainte de travail

Vous pouvez utilisé du CSS natif ou des libraires de CSS pour complété ce travail.

# Travail noté #3 - Comportement dans les pages

Dans cette partie du travail, vous devrez ajouter du comportement sur certaines pages qui nous permettra de mettre la liste des Pokemon de manière dynamique. Cela dans le but ultime d'avoir des données externes qui nous seront communiquées d'un serveur.

## Travail à faire

Pour chaque modification de page, créez un fichier JavaScript du même nom que la page et insérez-la comme script de la page.

- Page **edit.html**
  - Rajouté un contrôle modal qui permet de valider que l'utilisateur veut sortir de la page d'édition quand il click sur le bouton pour retourner sur la page principale (index.html)
  - Note: Regarder la fonction `confirm` pour faire le contrôle modal.
- Page **index.html**
  - Construction dynamique de la liste des Pokemon
    - Vous devez construire une liste d'objet qui représente les informations qui permettront d'afficher un Pokemon. La liste doit contenir les mêmes informations qui sont utilisées pour l'affichage dans votre liste.
    - Votre liste d'objet doit contenir au moins 10 Pokemon. Vous pouvez reprendre les informations des Pokemons de votre liste déjà présente.
    - Créez une fonction qui reçoit la liste d'objet de Pokemon et les ajoute à notre page de manière dynamique avec les fonctions de manipulations du DOM les Pokemon à la liste. Vous pourrez ensuite enlever de votre HTML l'affichage de Pokemon statique.
  - Utilisation de la chaine de requête (Query String)
    - Nous avons déjà les types qui sont des liens qui ajoute un query string à l'adresse de la page.
    - Construisez une fonction qui va prendre le tableau d'objet de Pokemon en paramètre et retourner une liste avec seulement les Pokemon du type sélectionné dans le Query String.
    - Faire attention que les Pokemon peuvent avoir deux types, tant que l'un des deux est le type sélectionné, il devrait être affiché.
    - Si aucun Query String n'est fourni, la liste complète est renvoyée.
    - Une fois la fonction complétée, ajoutée là à votre code d'ajout dynamique de Pokemon à votre page.
    - NOTE: Nous n'avons pas vu comment aller chercher les paramètres du Query String en classe, c'est à vous de faire les recherches nécessaires pour trouver une méthode.
