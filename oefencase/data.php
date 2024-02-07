<?php
$pokemons = ["Pikachu", "Charizard", "Bulbasaur", "Gengar", "Lucario"];

$pokemonDetails = [
    "Pikachu" => [
        "Type" => "Electric",
        "Evolution" => "Raichu"
    ],

    "Charizard" => [
        "Type" => "Fire/Flying",
        "Evolution" => "Charmander"
    ],

    "Bulbasaur" => [
        "Type" => "Grass/Poison",
        "Evolution" => "Ivysaur / Venusaur"
    ],

    "Gengar" => [
        "Type" => "Ghost/Poison",
        "Evolution" => "Haunter"
    ],

    "Lucario" => [
        "Type" => "Fighting/Steel",
        "Evolution" => "Riolu"
    ]
];

$types = [
    "Electric" => ["Ground", "Grass", "Dragon"],
    "Fire/Flying" => ["Electric", "Rock", "Steel", "Fairy"],
    "Fire" => ["Rock" , "Fire", "Water"],
    "Ghost/Poison" => ["Ground", "Psychic", "Ghost", "Dark"],
    "Fighting/Steel" => ["Fighting", "Ground", "Fire", "Water", "Electric", "Psychic", "Ice", "Dragon", "Fairy"],
];

?>