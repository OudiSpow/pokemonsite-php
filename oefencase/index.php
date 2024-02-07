<?php
global $pokemons;
include 'data.php';

$pokemonOfTheDay = $pokemons[array_rand($pokemons)];
?>

<!DOCTYPE html>


<?php include 'header.php'; ?>


<main>
    <h1>Welkom op Pokemon Website</h1>

    <h2>Pokémon van de Dag: <?php echo $pokemonOfTheDay; ?></h2>

    <form action="search.php" method="GET">
        <input type="text" name="search" placeholder="Zoek een Pokemon">
        <input type="submit" value="Zoek">
    </form>

</main>
</body>
</html>

