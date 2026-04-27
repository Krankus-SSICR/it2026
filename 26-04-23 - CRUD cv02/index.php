<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad kávy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php if (isset($_GET['pridano']) && $_GET['pridano'] == 1): ?>
            <p class="alert alert-success mt-4">Záznam byl úspěšně přidán</p>
        <?php endif; ?>
        <?php if (isset($_GET['upraveno']) && $_GET['upraveno'] == 1): ?>
            <p class="alert alert-success mt-4">Záznam byl úspěšně upraven</p>
        <?php endif; ?>
        <?php if (isset($_GET['smazano']) && $_GET['smazano'] == 1): ?>
            <p class="alert alert-success mt-4">Záznam byl úspěšně smazán</p>
        <?php endif; ?>
        <div class="d-flex justify-content-center gap-3">
            <a href="prehled.php" class="btn btn-dark">Přehled skladu</a><br>
            <a href="pridat.php" class="btn btn-dark">Přidat novou kávu</a>
        </div>
    </div>
</body>

</html>