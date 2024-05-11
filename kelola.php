<?php
require 'backend.php';
$sqlPenyewa = "SELECT * FROM penyewa";
$sqlPembantu = "SELECT * FROM pembantu";
$sqlbayartanggungan = "SELECT * FROM bayartanggungan";
$sqltransaksi = "SELECT * FROM transaksi";
$sqlkamar = "SELECT * FROM kamar";
$dataPenyewa = printData($sqlPenyewa);
$dataPembantu = printData($sqlPembantu);
$databayartanggungan = printData($sqlbayartanggungan);
$dataTransaksi = printData($sqltransaksi);
$dataKamar = printData($sqlkamar);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light mb-4">
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
    if (isset($_GET['tambahpenyewa']) || isset($_GET['ubah1'])) {
        ?>
        <div class="container">
            <form method="POST" action="proses.php">
                <div class="mb-3 row">
                    <label for="NKTP" class="col-sm-2 col-form-label">
                        No. KTP
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NKTP" name="NKTP" placeholder="ex: 357305..">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Nama" class="col-sm-2 col-form-label">
                        Nama
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="ex: agus">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Alamat" class="col-sm-2 col-form-label">
                        Alamat
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="ex: Jln./perum">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Jenis Kelamin" class="col-sm-2 col-form-label">
                        Jenis Kelamin
                    </label>
                    <div class="col-sm-10">
                        <select id="Jenis Kelamin" name="Jenis_Kelamin" class="form-select">
                            <option selected>Jenis Kelamin</option>
                            <option value='Laki-Laki'>L</option>
                            <option value='Perempuan'>P</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="No. Hp" class="col-sm-2 col-form-label">
                        No. Hp
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="No. Hp" name="No_Hp" placeholder="08..">
                    </div>
                </div>
                <div class="mb-3 row mt-4">
                    <div class="col">
                        <?php
                        if (isset($_GET['tambahpenyewa'])) {
                            ?>
                            <button type="submit" name="aksi1" value="add" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Tambahkan
                            </button>
                            <?php
                        } else {
                            ?>
                            <button type="submit" name="aksi1" value="edit" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Simpan Perubahan
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
        <?php
    } else if (isset($_GET['tambahtransaksi']) || isset($_GET['ubah2'])) {
        ?>
            <div class="container">
                <form method="POST" action="proses.php">
                    <!-- <div class="mb-3 row">
                        <label for="kode_transaksi" class="col-sm-2 col-form-label">
                            Kode Transaksi
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi"
                                placeholder="TK0101">
                        </div>
                    </div> -->
                    <div class="mb-3 row">
                        <label for="Quantity" class="col-sm-2 col-form-label">
                            Quantity
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="ex: 2 kamar">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="KTP_Penyewa" class="col-sm-2 col-form-label">
                            KTP Penyewa
                        </label>
                        <div class="col-sm-10">
                            <select id="KTP_Penyewa" name="NKTP" class="form-select">
                                <option selected></option>
                            <?php foreach ($dataPenyewa as $row): ?>
                                    <option value="<?= $row['KTP_Penyewa'] ?>"><?= $row['KTP_Penyewa'] ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="KTP_Pembantu" class="col-sm-2 col-form-label">
                            KTP Pembantu
                        </label>
                        <div class="col-sm-10">
                            <select id="KTP_Pembantu" name="KTP_pembantu" class="form-select">
                                <option selected></option>
                            <?php foreach ($dataPembantu as $row): ?>
                                    <option value="<?= $row['KTP_pembantu'] ?>"><?= $row['KTP_pembantu'] ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row mt-4">
                        <div class="col">
                            <?php
                            if (isset($_GET['tambahtransaksi'])) {
                                ?>
                                <button type="submit" name="aksi2" value="add" class="btn btn-primary">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                    Tambahkan
                                </button>
                            <?php
                            } else {
                                ?>
                                <button type="submit" name="aksi2" value="edit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                    Simpan Perubahan
                                </button>
                            <?php
                            }
                            ?>
                            <a href="transaksi.php" type="button" class="btn btn-danger">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                                batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        <?php
    } else if (isset($_GET['tambahkamar']) || isset($_GET['ubah3'])) {
        ?>
                <div class="container">
                    <form method="POST" action="proses.php">
                        <div class="mb-3 row">
                            <label for="Nama" class="col-sm-2 col-form-label">
                                No. Kamar
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_kamar" name="no_kamar" placeholder="ex: 01">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Alamat" class="col-sm-2 col-form-label">
                                Tipe
                            </label>
                            <div class="col-sm-10">
                                <select id="tipe_kamar" name="tipe_kamar" class="form-select" onchange="UpdatePrice()">
                                    <option selected></option>
                                    <option value='Standar'>Standar</option>
                                    <option value='VIP'>VIP</option>
                                    <option value='VIP Non AC'>VIP Non AC</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Nama" class="col-sm-2 col-form-label">
                                Lantai
                            </label>
                            <div class="col-sm-10">
                                <select id="lantai_kamar" name="lantai_kamar" class="form-select">
                                    <option selected></option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Alamat" class="col-sm-2 col-form-label">
                                Harga
                            </label>
                            <div class="col-sm-10">
                                <select id="harga_kamar" name="harga_kamar" class="form-select">
                                    <option selected>0</option>
                                    <option value='1000000'>1.000.000</option>
                                    <option value='1500000'>1.500.000</option>
                                    <option value='1200000'>1.200.000</option>
                                </select>
                            </div>
                        </div>
                        <script>
                            function updatePrice() {
                                const roomType = document.getElementById('tipe_kamar').value;
                                const priceSelect = document.getElementById('harga_kamar');

                                    if (roomType === 'VIP') {
                                     priceSelect.value = '1500000'; // Set price to 1,500,000 for VIP
                                    } else if (roomType === 'VIP Non AC') {
                                        priceSelect.value = '1200000'; // Set price to 1,200,000 for VIP Non AC
                                    } else if (roomType === 'Standar') {
                                        priceSelect.value = '1000000'; // Set price to 1,000,000 for Standar
                                    }else {
                                        priceSelect.value = '0'; // Reset price to 0 for non-VIP options
                                }
                            }
                            $('#tipe_kamar').on('change', updatePrice);
                        </script>
                        <div class="mb-3 row">
                            <label for="Nama" class="col-sm-2 col-form-label">
                                Alamat
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat_kamar" name="alamat_kamar" placeholder="Jln.">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Nama" class="col-sm-2 col-form-label">
                                KTP Pembantu
                            </label>
                            <div class="col-sm-10">
                                <select id="KTP_Pembantu" name="KTP_pembantu" class="form-select">
                                    <option selected></option>
                            <?php foreach ($dataPembantu as $row): ?>
                                        <option value="<?= $row['KTP_pembantu'] ?>"><?= $row['KTP_pembantu'] ?></option>
                            <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row mt-4">
                            <div class="col">
                            <?php
                            if (isset($_GET['tambahkamar'])) {
                                ?>
                                    <button type="submit" name="aksi3" value="add" class="btn btn-primary">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                        Tambahkan
                                    </button>
                            <?php
                            } else {
                                ?>
                                    <button type="submit" name="aksi3" value="edit" class="btn btn-primary">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                        Simpan Perubahan
                                    </button>
                            <?php
                            }
                            ?>
                                <a href="kamar.php" type="button" class="btn btn-danger">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        <?php
    } else if (isset($_GET['tambahpembantu']) || isset($_GET['ubah4'])) {
        ?>
                    <div class="container">
                        <form method="POST" action="proses.php">
                            <div class="mb-3 row">
                                <div class="mb-3 row">
                                    <label for="Nama" class="col-sm-2 col-form-label">
                                        No. KTP
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="NKTP" name="NKTP" placeholder="ex: 357305..">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Nama" class="col-sm-2 col-form-label">
                                        Nama
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_pembantu" name="nama" placeholder="ex: Rizqi">
                                    </div>
                                </div>
                                <label for="Alamat" class="col-sm-2 col-form-label">
                                    Alamat Kos
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Alamat_kos" name="AlamatKos" placeholder="ex: Jln.">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Nama" class="col-sm-2 col-form-label">
                                    No. Hp
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="ex: 08..">
                                </div>
                            </div>
                            <div class="mb-3 row mt-4">
                                <div class="col">
                            <?php
                            if (isset($_GET['tambahpembantu'])) {
                                ?>
                                        <button type="submit" name="aksi4" value="add" class="btn btn-primary">
                                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                            Tambahkan
                                        </button>
                            <?php
                            } else {
                                ?>
                                        <button type="submit" name="aksi4" value="edit" class="btn btn-primary">
                                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                            Simpan Perubahan
                                        </button>
                            <?php
                            }
                            ?>
                                    <a href="pembantu.php" type="button" class="btn btn-danger">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        batal
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
        <?php
    } else if (isset($_GET['tambahtanggungan']) || isset($_GET['ubah4'])) {
        ?>
                        <div class="container">
                            <form method="POST" action="proses.php">
                                <!-- <div class="mb-3 row">
                                    <label for="Nama" class="col-sm-2 col-form-label">
                                        Kode Tanggungan
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kode_tanggungan" name="kode_tanggungan"
                                            placeholder="ex: L1K01L1001">
                                    </div>
                                </div> -->
                                <div class="mb-3 row">
                                    <label for="Alamat" class="col-sm-2 col-form-label">
                                        Tipe
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="tipe" name="tipe_tanggungan" class="form-select">
                                            <option selected></option>
                                            <option value='Air'>Air</option>
                                            <option value='Listrik'>Listrik</option>
                                            <option value='Pajak'>Pajak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Alamat" class="col-sm-2 col-form-label">
                                        Kode Transaksi
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="Kode_transaksi" name="kode_transaksi" class="form-select">
                                            <option selected></option>
                            <?php foreach ($dataTransaksi as $row): ?>
                                                <option value="<?= $row['kode_transaksi'] ?>"><?= $row['kode_transaksi'] ?></option>
                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_kamar" class="col-sm-2 col-form-label">
                                        No Kamar
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="no_kamar" name="no_kamar" class="form-select">
                                            <option selected></option>
                            <?php foreach ($dataKamar as $row): ?>
                                                <option value="<?= $row['no_kamar'] ?>"><?= $row['no_kamar'] ?></option>
                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <div class="col">
                                <?php
                                if (isset($_GET['tambahtanggungan'])) {
                                    ?>
                                                <button type="submit" name="aksi5" value="add" class="btn btn-primary">
                                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                                    Tambahkan
                                                </button>
                                <?php
                                } else {
                                    ?>
                                                <button type="submit" name="aksi5" value="edit" class="btn btn-primary">
                                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                                    Simpan Perubahan
                                                </button>
                                <?php
                                }
                                ?>
                                            <a href="tanggungan.php" type="button" class="btn btn-danger">
                                                <i class="fa fa-reply" aria-hidden="true"></i>
                                                batal
                                            </a>
                                        </div>
                                    </div>
                            </form>
                        </div>
        <?php
    }
    ?>
</body>

</html>