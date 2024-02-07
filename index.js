let pokemonData = [
  {
    imgSrc: "assets/images/001.png",
    name: "Bulbasaur",
    num: "001",
    types: "Grass, Poison",
    generation: "Generation #1",
  },
  {
    imgSrc: "assets/images/004.png",
    name: "Charmander",
    num: "004",
    types: "Fire",
    generation: "Generation #1",
  },
  {
    imgSrc: "assets/images/007.png",
    name: "Squirtle",
    num: "007",
    types: "Water",
    generation: "Generation #1",
  },
  {
    imgSrc: "assets/images/074.png",
    name: "Geodude",
    num: "074",
    types: "Rock, Ground",
    generation: "Generation #1",
  },
  {
    imgSrc: "assets/images/129.png",
    name: "Magikarp",
    num: "129",
    types: "Water",
    generation: "Generation #1",
  },
  {
    imgSrc: "assets/images/150.png",
    name: "MewTwo",
    num: "0150",
    types: "Psychic",
    generation: "Generation #1",
  },
  {
    imgSrc: "assets/images/250.png",
    name: "Ho-oh",
    num: "250",
    types: "Fire, Flying",
    generation: "Generation #2",
  },
  {
    imgSrc: "assets/images/658.png",
    name: "Greninja",
    num: "658",
    types: "Water, Dark",
    generation: "Generation #6",
  },
  {
    imgSrc: "assets/images/591.png",
    name: "Amoonguss",
    num: "591",
    types: "Grass, Poison",
    generation: "Generation #5",
  },
  {
    imgSrc: "assets/images/448.png",
    name: "Lucario",
    num: "448",
    types: "Fighting, Steel",
    generation: "Generation #4",
  },

  {
    imgSrc: "assets/images/385.png",
    name: "Jirachi",
    num: "385",
    types: "Steel, Psychic",
    generation: "Generation #3",
  },
  {
    imgSrc: "assets/images/497.png",
    name: "Serperior",
    num: "497",
    types: "Grass",
    generation: "Generation #5",
  },
  {
    imgSrc: "assets/images/639.png",
    name: "Terrakion",
    num: "639",
    types: "Rock, Fighting",
    generation: "Generation #5",
  },
  {
    imgSrc: "assets/images/721.png",
    name: "Volcanion",
    num: "721",
    types: "Fire, Water",
    generation: "Generation #6",
  },
  {
    imgSrc: "assets/images/802.png",
    name: "Marshadow",
    num: "802",
    types: "Fighting, Ghost",
    generation: "Generation #7",
  },
  {
    imgSrc: "assets/images/886.png",
    name: "Drakloak",
    num: "886",
    types: "Dragon, Ghost",
    generation: "Generation #8",
  },
  {
    imgSrc: "assets/images/245.png",
    name: "Suicune",
    num: "245",
    types: "Water",
    generation: "Generation #2",
  },
  {
    imgSrc: "assets/images/384.png",
    name: "Rayquaza",
    num: "384",
    types: "Dragon, Flying",
    generation: "Generation #3",
  },
  {
    imgSrc: "assets/images/479.png",
    name: "Rotom",
    num: "479",
    types: "Electric, Ghost",
    generation: "Generation #4",
  },
  {
    imgSrc: "assets/images/555.png",
    name: "Darmanitan",
    num: "555",
    types: "Fire",
    generation: "Generation #5",
  },
];

let listOfPokemons = [];
pokemonData.forEach((pokemon) => {
  listOfPokemons.push({
    imgSrc: pokemon.imgSrc,
    name: pokemon.name,
    num: pokemon.num,
    types: pokemon.types,
    generation: pokemon.generation,
  });
});

let filteredListOfPokemons = filterPokemon(listOfPokemons);

//add the list of pokemans
filteredListOfPokemons.forEach((pokemon) => {
  addPokemon(pokemon);
});

function addPokemon(pokemon) {
  const newnum = document.createElement("a");
  newnum.href = "pokemon.php?no=" + pokemon.num;  

  const newCard = document.createElement("li");

  const imgElement = document.createElement("img");
  imgElement.src = pokemon.imgSrc;
  imgElement.alt = pokemon.name;

  const infoDiv = document.createElement("div");
  infoDiv.classList.add("infos-list-pokemon");

  const nameAnchor = document.createElement("a");
  nameAnchor.textContent = pokemon.name;

  const typesParagraph = document.createElement("p");
  typesParagraph.classList.add("liste-types");
  typesParagraph.textContent = pokemon.types;

  const generationParagraph = document.createElement("p");
  generationParagraph.classList.add("liste-generation");
  generationParagraph.textContent = pokemon.generation;

  infoDiv.appendChild(nameAnchor);
  infoDiv.appendChild(typesParagraph);
  infoDiv.appendChild(generationParagraph);

  newCard.appendChild(imgElement);
  newCard.appendChild(infoDiv);

  newnum.appendChild(newCard);
  const pokemonList = document.querySelector(".pokemon-list");
  pokemonList.appendChild(newnum);
}

function filterPokemon(pokemons) {
  if (!window.location.search) {
    return pokemons;
  }

  const queryString = window.location.search.split("=")[1];
  const filteredListOfPokemons = pokemons.filter((pokemon) => {
    return pokemon.types.toLowerCase().includes(queryString);
  });

  return filteredListOfPokemons;
}
