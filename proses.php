<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
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
    if (isset($_POST['aksi1'])) {
        if ($_POST['aksi1'] == "add") {
            require_once 'backend.php';
            $KTP_Penyewa = $_POST["NKTP"];
            $Nama_Penyewa = $_POST["Nama"];
            $Alamat_Penyewa = $_POST["Alamat"];
            $Jenis_Kelamin_Penyewa = $_POST["Jenis_Kelamin"];
            $No_Hp_Penyewa = $_POST["No_Hp"];
            $sql = "INSERT INTO Penyewa (
        KTP_Penyewa, nama_penyewa, Alamat_Penyewa, Jenis_Kelamin, No_Hp_Penyewa
        ) VALUES (
            '$KTP_Penyewa', '$Nama_Penyewa','$Alamat_Penyewa', '$Jenis_Kelamin_Penyewa', '$No_Hp_Penyewa'
            )";
            mysqli_query($conn, $sql);
            echo "Tambah Data <a href='penyewa.php'>[kembali]</a>";
        } else if ($_POST['aksi1'] == "edit") {
            echo "Edit Data <a href='penyewa.php'>[kembali]</a>";
        }
    } else if (isset($_POST['aksi2'])) {
        if ($_POST['aksi2'] == "add") {
            require_once 'backend.php';
            $kode_transaksi = $_POST["kode_transaksi"];
            $Quantity = $_POST["Quantity"];
            $KTP_Penyewa = $_POST["NKTP"];
            $KTP_Pembantu = $_POST["KTP_pembantu"];
            $sql = "INSERT INTO transaksi (
        kode_transaksi, Quantity, KTP_Penyewa, KTP_pembantu
        ) VALUES (
            '$kode_transaksi', '$Quantity', '$KTP_Penyewa', '$KTP_Pembantu'
            )";
            mysqli_query($conn, $sql);
            echo "Tambah Data <a href='transaksi.php'>[kembali]</a>";
        } else if ($_POST['aksi2'] == "edit") {
            echo "Edit Data <a href='transaksi.php'>[kembali]</a>";
        }
    } else if (isset($_POST['aksi3'])) {
        if ($_POST['aksi3'] == "add") {
            require_once 'backend.php';
            $no_kamar = $_POST["no_kamar"];
            $tipe_kamar = $_POST["tipe_kamar"];
            $lantai_kamar = $_POST["lantai_kamar"];
            $harga_kamar = $_POST["harga_kamar"];
            $alamat_kamar = $_POST["alamat_kamar"];
            $KTP_Pembantu = $_POST["KTP_pembantu"];
            $sql = "INSERT INTO kamar (
        no_kamar, tipe_kamar, lantai_kamar, harga_kamar, alamat_kamar, KTP_Pembantu
        ) VALUES (
            '$no_kamar','$tipe_kamar', '$lantai_kamar', '$harga_kamar', '$alamat_kamar', '$KTP_Pembantu'
            )";
            mysqli_query($conn, $sql);
            echo "Tambah Data <a href='kamar.php'>[kembali]</a>";
        } else if ($_POST['aksi1'] == "edit") {
            echo "Edit Data <a href='kamar.php'>[kembali]</a>";
        } 
    } else if (isset($_POST['aksi4'])) {
        if ($_POST['aksi4'] == "add") {
            require_once 'backend.php';
            $KTP_pembantu = $_POST["NKTP"];
            $Nama_pembantu = $_POST["nama"];
            $Alamat = $_POST["AlamatKos"];
            $No_Hp_Pembantu = $_POST["no_hp"];
            $sql = "INSERT INTO pembantu (
        KTP_Pembantu, nama_pembantu, Alamat_kos, No_Hp_Pembantu
        ) VALUES (
            '$KTP_pembantu','$Nama_pembantu', '$Alamat', '$No_Hp_Pembantu'
            )";
            mysqli_query($conn, $sql);
            echo "Tambah Data <a href='pembantu.php'>[kembali]</a>";
        } else if ($_POST['aksi4'] == "edit") {
            echo "Edit Data <a href='pembantu.php'>[kembali]</a>";
        }
    } else if (isset($_POST['aksi5'])) {
        if ($_POST['aksi5'] == "add") {
            require_once 'backend.php';
            $kode_tanggungan = $_POST["kode_tanggungan"];
            $tipe_tanggungan = $_POST["tipe_tanggungan"];
            $kode_transaksi = $_POST["kode_transaksi"];
            $no_kamar = $_POST["no_kamar"];
            $sql = "INSERT INTO bayartanggungan (
        kode_tanggungan, tipe_tanggungan, kode_transaksi, no_kamar
        ) VALUES (
            '$kode_tanggungan', '$tipe_tanggungan', '$kode_transaksi', '$no_kamar'
            )";
            mysqli_query($conn, $sql);
            echo "Tambah Data <a href='tanggungan.php'>[kembali]</a>";
        } else if ($_POST['aksi5'] == "edit") {
            echo "Edit Data <a href='tanggungan.php'>[kembali]</a>";
        }
    } 
    ?>
</body>

</html>