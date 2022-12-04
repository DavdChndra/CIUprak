<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <?php
        if ($this->session->flashdata('error') !='') {
            echo '<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">';
            echo $this->session->flashdata('error');
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>

        <h4 class="mt-5 text-uppercase fw-bold">Register</h4>
        <hr class="mb-5">
        <form action="<?= base_url(). 'register/proses'?>" method="post" class="mt-4 mb-4">
            <p>
            <h6 for="username">Username</h6>
            <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control">
            </p>
            <p>
            <h6 for="password">Password</h6>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
            </p>
            <p>
            <h6 for="nama">Nama</h6>
            <input type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
            </p>
            <input type="submit" value="Register" class="btn btn-outline-primary">
            <a href="<?= base_url(). 'login' ?>" class="btn btn-outline-danger">Login</a>
        </form>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'>
    </script>
</body>

</html>