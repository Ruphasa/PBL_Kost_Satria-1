<?php
    require 'backend.php';
    $sql= "SELECT * FROM transaksi";
    $data = printData($sql);
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
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
    <div class="container">
    <h1 class="mt-3">Data Transaksi</h1>
        <figure>
            <blockquote class="blockquote">
                <p>KOST SATRIA</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                Managed by <cite title="Source Title">handsome people</cite>
            </figcaption>
            <a href="kelola.php?tambahtransaksi=1" type="button" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i>
                Tambah Data
            </a>
            <div class="table-responsive">
                <table class="table align-middle table-bordered table-howver">
                    <thead>
                        <tr>
                        <th>Kode Transaksi</th>
                        <th>Quantity</th>
                        <th>KTP Penyewa</th>
                        <th>KTP Pembantu</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php foreach($data as $row): ?>
                    <td><?= $row['kode_transaksi'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td><?= $row['KTP_Penyewa'] ?></td>
                    <td><?= $row['KTP_pembantu'] ?></td>
                        <td>
                            <a href="kelola.php?ubah2=1" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                                Ubah
                            </a>
                            <a href="proses.php?hapus2=1" type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                Hapus
                            </a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr class="align-bottom">
                        </tr>
                    </tbody>
                </table>
            </div>
        </figure>
    </div>
</body>
</html>