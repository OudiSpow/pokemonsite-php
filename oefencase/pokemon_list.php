<?php
global $pokemons;
include 'data.php';
?>
<?php include 'header.php'; ?>

    <!DOCTYPE html>

    <html>
    <head>
        <title>Pokemon Lijst</title>
    </head>
    <body>
    <h1>Pokemon Lijst</h1>
    <ul>
        <?php foreach ($pokemons as $pokemon): ?>
            <li><a href="pokemon_detail.php?name=<?php echo $pokemon; ?>"><?php echo $pokemon; ?></a></li>
        <?php endforeach; ?>
    </ul>
    </body>
    </html>
