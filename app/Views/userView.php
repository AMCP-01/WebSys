<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <?php foreach ($users as $user): ?>

        <p>
            ID: <?= $user['id']?><br>
            Name: <?= $user['name']?><br>
        </p>
        <?php endforeach; ?>
        <a href="<?= site_url("index.php/pages")?>">Go back</a>
</body>
</html>