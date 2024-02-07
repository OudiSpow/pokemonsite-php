<?php
include 'data.php';

$pokemonNames = array_keys($pokemonDetails);


$pokemonName = $_GET['name'] ?? 'Unknown';


$currentPokemonIndex = array_search($pokemonName, $pokemonNames);

$prevPokemonIndex = ($currentPokemonIndex - 1 + count($pokemonNames)) % count($pokemonNames);
$nextPokemonIndex = ($currentPokemonIndex + 1) % count($pokemonNames);

$prevPokemon = $pokemonNames[$prevPokemonIndex];
$nextPokemon = $pokemonNames[$nextPokemonIndex];

$details = $pokemonDetails[$pokemonName] ?? ['Type' => 'Unknown', 'Evolution' => []];
?>

<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Detail </title>
</head>
<body>
<h1><?php echo $pokemonName; ?> Details</h1>

<p>Type: <?php echo $details['Type']; ?></p>
<p>Evoluties: <?php echo $details['Evolution']; ?></p>


<?php if ($prevPokemon !== $pokemonName): ?>
    <a href="pokemon_detail.php?name=<?php echo $prevPokemon; ?>">Vorige Pokemon</a>
<?php endif; ?>

<?php if ($nextPokemon !== $pokemonName): ?>
    <a href="pokemon_detail.php?name=<?php echo $nextPokemon; ?>">Volgende Pokemon</a>
<?php endif; ?>

</body>
</html>


