// let pokemonData = [];

// let listOfPokemons = [];
// pokemonData.forEach((pokemon) => {
//   listOfPokemons.push({
//     imgSrc: pokemon.imgSrc,
//     name: pokemon.name,
//     num: pokemon.num,
//     types: pokemon.types,
//     generation: pokemon.generation,
//   });
// });

// let filteredListOfPokemons = filterPokemon(listOfPokemons);

// //add the list of pokemans
// filteredListOfPokemons.forEach((pokemon) => {
//   addPokemon(pokemon);
// });

// export function addPokemon(pokemon) {
//   const newnum = document.createElement("a");
//   newnum.href = "pokemon.php?no=" + pokemon.num;  

//   const newCard = document.createElement("li");

//   const imgElement = document.createElement("img");
//   imgElement.src = pokemon.imgSrc;
//   imgElement.alt = pokemon.name;

//   const infoDiv = document.createElement("div");
//   infoDiv.classList.add("infos-list-pokemon");

//   const nameAnchor = document.createElement("a");
//   nameAnchor.textContent = pokemon.name;

//   const typesParagraph = document.createElement("p");
//   typesParagraph.classList.add("liste-types");
//   typesParagraph.textContent = pokemon.types;

//   const generationParagraph = document.createElement("p");
//   generationParagraph.classList.add("liste-generation");
//   generationParagraph.textContent = pokemon.generation;

//   infoDiv.appendChild(nameAnchor);
//   infoDiv.appendChild(typesParagraph);
//   infoDiv.appendChild(generationParagraph);

//   newCard.appendChild(imgElement);
//   newCard.appendChild(infoDiv);

//   newnum.appendChild(newCard);
//   const pokemonList = document.querySelector(".pokemon-list");
//   pokemonList.appendChild(newnum);
// }

// export function filterPokemon(pokemons) {
//   if (!window.location.search) {
//     return pokemons;
//   }

//   const queryString = window.location.search.split("=")[1];
//   const filteredListOfPokemons = pokemons.filter((pokemon) => {
//     return pokemon.types.toLowerCase().includes(queryString);
//   });

//   return filteredListOfPokemons;
// }
