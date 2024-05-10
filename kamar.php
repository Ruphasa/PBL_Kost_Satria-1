<?php
    require 'backend.php';
    $sql= "SELECT * FROM kamar";
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
    <h1 class="mt-3">Data Kamar</h1>
        <figure>
            <blockquote class="blockquote">
                <p>KOST SATRIA</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                Managed by <cite title="Source Title">handsome people</cite>
            </figcaption>
            <a href="kelola.php?tambahkamar=1" type="button" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i>
                Tambah Data
            </a>
            <div class="table-responsive">
            <table class="table align-middle table-bordered table-howver">
                <thead>
                    <tr>
                    <th>No. Kamar</th>
                    <th>Tipe</th>
                    <th>Lantai</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                    <th>KTP Pembantu</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php foreach($data as $row): ?>
                    <td><?= $row['no_kamar'] ?></td>
                    <td><?= $row['tipe_kamar'] ?></td>
                    <td><?= $row['lantai_kamar'] ?></td>
                    <td><?= $row['harga_kamar'] ?></td>
                    <td><?= $row['alamat_kamar'] ?></td>
                    <td><?= $row['KTP_pembantu'] ?></td>
                    <td>
                        <a href="kelola.php?ubah3=1" type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-pencil"></i>
                            Ubah
                        </a>
                        <button type="button" onclick="changeVariable3(<?= $row['no_kamar']?>)" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal3">
                        Hapus
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <div class="modal fade" id="deleteModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ingin menghapus Data kamar No. <span id="deleteVariable3"></span>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="hapus.php?hapuskamar" id="no_kamar" type="button" class="btn btn-primary">Save changes</a>
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