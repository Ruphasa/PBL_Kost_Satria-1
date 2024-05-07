<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                KOST SATRIA
            </a>
            <a href="parent.php" type="button" class="btn btn-secondary mt-2 me-3">
                home
            </a>
        </div>
    </nav>
    <?php
        if (isset($_POST['aksi'])) {
            if ($_POST['aksi'] == "add") {
                echo "Tambah Data <a href='penyewa.php'>[kembali]</a>";
            }else if($_POST['aksi'] == "edit") {
                echo "Edit Data <a href='penyewa.php'>[kembali]</a>";
            }
        }

        if (isset($_GET['hapus'])) {
            echo "Hapus Data <a href='penyewa.php'>[kembali]</a>";
        }
    ?>
</body>
</html>