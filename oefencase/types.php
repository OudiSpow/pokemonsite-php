<?php
global $types;
include 'data.php';
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokemon Types</title>
</head>
<body>
<h1>Pokemon Types</h1>
<ul>
    <?php foreach ($types as $type => $weaknesses): ?>
        <li>
            <strong><?php echo $type; ?>:  </strong>
            weak against: <?php echo implode(", ", $weaknesses); ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>

