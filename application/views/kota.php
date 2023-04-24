<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combo Kota</title>
    <link href="/assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet" />
    <script src="/assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.6.4.min.js"></script>
</head>

<body class="bg-dark-subtle">
    <div class="container mt-4">
        <div class="form-floating">
            <select class="form-select" id="provinsi" aria-label="Floating label select example">
                <option value="" selected>Pilih Provinsi</option>
                <?php foreach($provinsis as $provinsi): ?>
                <option value="<?= $provinsi->id ?>"><?= $provinsi->name ?></option>
                <?php endforeach; ?>
            </select>
            <label for="provinsi">Provinsi</label>
        </div>
        <div class="form-floating mt-4">
            <select class="form-select" id="kota" aria-label="Floating label select example">

            </select>
            <label for="kota">Kota</label>
        </div>
    </div>
    <script src="/assets/js/combo.js"></script>
</body>

</html>