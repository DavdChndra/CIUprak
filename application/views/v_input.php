<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Perpustakaan | Input Data</title>
</head>

<body>
    <div class="container">
        <h4 class="mt-5 text-uppercase fw-bold">Input Buku</h4>
        <hr class="mb-5">
        <form action="<?= base_url(). 'insert' ?>" method="post">
            <h6 class="text-capitalize">id_buku</h6>
            <input type="text" name="id_buku" placeholder="id_buku" class="form-control mb-3">
            <h6 class="text-capitalize">judul_buku</h6>
            <input type="text" name="judul_buku" placeholder="judul_buku" class="form-control mb-3">
            <h6 class="text-capitalize">penerbit</h6>
            <input type="text" name="penerbit" placeholder="penerbit" class="form-control mb-3">
            <h6 class="text-capitalize">jumlah_buku</h6>
            <input type="text" name="jumlah_buku" placeholder="jumlah_buku" class="form-control mb-3">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <a href="<?= base_url(). "HalamanUtama" ?>" class="btn btn-outline-danger">Back</a>
        </form>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>