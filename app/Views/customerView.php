<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer View</title>
</head>
<body>
    <h1>Customers</h1>
    <?php foreach ($customers as $customer): ?>

        <p>
            ID: <?= $customer['id']?><br>
            Name: <?= $customer['name']?><br>
        </p>
        <?php endforeach; ?>
        <a href="<?= site_url("index.php/pages")?>">Go back</a>
</body>
</html>