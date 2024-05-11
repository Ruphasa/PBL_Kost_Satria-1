<?php
    require 'backend.php';
    $sqlkamar= "SELECT * FROM kamar";
    $sqltransaksi= "SELECT * FROM transaksi";
    $sqlmenyewa= "SELECT * FROM menyewa";
    $datakamar = printData($sqlkamar);
    $datatransaksi = printData($sqltransaksi);
    $datamenyewa = printData($sqlmenyewa);
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
    <h1 class="mt-3">Data Sewa</h1>
        <figure>
            <blockquote class="blockquote">
                <p>KOST SATRIA</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                Managed by <cite title="Source Title">handsome people</cite>
            </figcaption>
            <a href="kelola.php?tambahsewa=1" type="button" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i>
                Tambah Data
            </a>
            <div class="table-responsive">
            <table class="table align-middle table-bordered table-howver">
                <thead>
                    <tr>
                    <th>kode transaksi</th>
                    <th>No. Kamar</th>
                    <th>tanggal masuk</th>
                    <th>tanggal keluar</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php foreach($datamenyewa as $row): ?>
                    <td><?= $row['kode_transaksi'] ?></td>
                    <td><?= $row['no_kamar'] ?></td>
                    <td><?= $row['tanggalmasuk'] ?></td>
                    <td><?= $row['tanggalkeluar'] ?></td>
                    <td>
                        <a href="kelola.php?ubah6" type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-pencil"></i>
                            Ubah
                        </a>
                        <button type="button" onclick="changeVariable6('<?= $row['kode_transaksi']?>')" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal6">
                        Hapus
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <div class="modal fade" id="deleteModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ingin menghapus Data Sewa No. <span id="deleteVariable6"></span>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="hapus.php?hapussewa" id="kode_transaksi" type="button" class="btn btn-primary">Save changes</a>
                    </div>
                    </div>
                </div>
                </div>
                    <tr class="align-bottom">
                    </tr>
                </tbody>
            </table>
            </div>
    </div>
    <script src="script.js"></script>
</body>
</html>