<?php
global $pokemons;
include "data.php";

$searchResult = [];

if (isset($_GET['search'])) {
    $searchQuery = strtolower($_GET['search']);
    foreach ($pokemons as $pokemon) {
        if (strpos(strtolower($pokemon), $searchQuery) !== false) {
            $searchResult[] = $pokemon;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zoek Pokemon Naam</title>
</head>
<body>
<h2>Zoekresultaten:</h2>
<?php if (!empty($searchResult)): ?>
    <ul>
        <?php foreach ($searchResult as $result): ?>
            <li><a href="pokemon_detail.php?name=<?php echo urlencode($result); ?>"><?php echo $result; ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Geen resultaten gevonden voor '<?php echo htmlspecialchars($_GET['search']); ?>'.</p>
<?php endif; ?>

<a href="index.php">Terug naar startpagina</a>
</body>
</html>

