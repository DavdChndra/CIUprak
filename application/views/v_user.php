<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Perpustakaan | Halaman Utama</title>
</head>

<body>
    <?php 
    if($this->session->userdata('nama') == null){
        redirect('login');
    }
    ?>
    <div class="container">
        <h4 class="mt-5 mb-3">Website Perpustakaan | Selamat datang, <span class="text-danger fst-italic">
                <?= $this->session->userdata('nama'); ?></span>
        </h4>
        <a href="<?= base_url(). 'input'?>" class="btn btn-outline-primary mb-4">
            Tambah Data
        </a>
        <a href="<?= base_url(). 'login/logout'?>" class="btn btn-outline-danger mb-4">
            Log Out
        </a>
        <h5 class="mt-3">Kumpulan Buku</h5>
        <hr class="w-25">
        <table class="table align-middle">
            <thead>
                <tr>
                    <td class="text-capitalize fw-semibold">no</td>
                    <td class="text-capitalize fw-semibold">id_buku</td>
                    <td class="text-capitalize fw-semibold">judul_buku</td>
                    <td class="text-capitalize fw-semibold">penerbit</td>
                    <td class="text-capitalize fw-semibold">jumlah_buku</td>
                    <td class="text-capitalize fw-semibold">Aksi</td>
                </tr>
            </thead>
            <?php 
            $no = 1;
            foreach ($buku as $u){
            ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $u -> id_buku; ?></td>
                    <td><?= $u -> judul_buku; ?></td>
                    <td><?= $u -> penerbit; ?></td>
                    <td><?= $u -> jumlah_buku; ?></td>
                    <td>
                        <a href="<?= base_url().'user/edit/'.$u->no ?>" class="btn btn-outline-primary">Edit</a>
                        <a href="<?= base_url().'user/delete/'.$u->no ?>" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php 
            }
            ?>
        </table>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>