<?php
    require 'backend.php';
    $sql= "SELECT * FROM pembantu";
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
    <h1 class="mt-3">Data Pembantu</h1>
        <figure>
            <blockquote class="blockquote">
                <p>KOST SATRIA</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                Managed by <cite title="Source Title">handsome people</cite>
            </figcaption>
            <a href="kelola.php?tambahpembantu=1" type="button" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i>
                Tambah Data
            </a>
            <div class="table-responsive">
            <table class="table align-middle table-bordered table-howver">
                <thead>
                    <tr>
                    <th>No. KTP</th>
                    <th>Nama</th>
                    <th>Alamat Kos</th>
                    <th>N0. Hp</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php foreach($data as $row): ?>
                    <td><?= $row['KTP_pembantu'] ?></td>
                    <td><?= $row['nama_pembantu'] ?></td>
                    <td><?= $row['alamat_kos'] ?></td>
                    <td><?= $row['no_hp_pembantu'] ?></td>
                    <td>
                        <a href="kelola.php?ubah4" type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-pencil"></i>
                            Ubah
                        </a>
                        <button type="button" onclick="changeVariable2('<?= $row['KTP_pembantu']?>')"class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Hapus
                        </button>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ingin menghapus Data dengan KTP : <span id="deleteVariable2"></span>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="hapus.php?hapuspembantu" id="KTP_pembantu" "type="button" class="btn btn-primary">Save changes</a>
                            </div>
                            </div>
                        </div>
                        </div>
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
    <script src="script.js"></script>
</body>
</html>