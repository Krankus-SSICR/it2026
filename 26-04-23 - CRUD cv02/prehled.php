<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad kávy - přehled</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        <h2 class="alert alert-info">Sklad kávy</h2>
        <?php
        $vyber = "SELECT * FROM kava";
        $vyber = $conn->query($vyber);
        ?>
        <table class="table">
            <tr>
                <th>Název</th>
                <th>Typ</th>
                <th>Smazat</th>
                <th>Upravit</th>
            </tr>
            <?php while ($radek = $vyber->fetch_assoc()): ?>
                <tr>
                    <td><?= $radek['nazev']; ?></td>
                    <td><?= $radek['typ']; ?></td>
                    <td><a href="upravit.php?id=<?= $radek['id']; ?>" class="btn btn-primary">Upravit záznam</a></td>
                    <td><a href="smazat.php?id=<?= $radek['id']; ?>" class="btn btn-danger">Smazat záznam</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>