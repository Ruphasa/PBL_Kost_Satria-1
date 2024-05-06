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
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                KOST SATRIA
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">
                    Nama
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" placeholder="ex: agus">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">
                    Alamat
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" placeholder="ex: agus">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Jenis Kelamin" class="col-sm-2 col-form-label">
                    Jenis Kelamin
                </label>
                <div class="col-sm-10">
                    <select id="Jenis Kelamin" class="form-select">
                        <option selected>Jenis Kelamin</option>
                        <option value="1">L</option>
                        <option value="2">P</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="No. Hp" class="col-sm-2 col-form-label">
                    No. Hp
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="No. Hp" placeholder="ex: agus">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="NKTP" class="col-sm-2 col-form-label">
                    No. KTP
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NKTP" placeholder="ex: agus">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Foto KTP" class="col-sm-2 col-form-label">
                    Foto KTP
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="Foto KTP">
                </div>
            </div>      
            <div class="mb-3 row mt-4">
                <div class="col">
                <?php
                        if (isset($_GET['ubah'])) {
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubahan
                        </button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Tambahkan
                        </button>
                    <?php
                        }
                ?>
                <a href="penyewa.php" type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    batal
                </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>