<?php
if (isset($_POST['hapuskamar'])) {
    require_once 'backend.php';
    $no_kamar = $_GET['no_kamar'];
    $sql = "DELETE FROM kamar WHERE no_kamar = '$no_kamar'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='tanggungan.php'>[kembali]</a>";
}else if (isset($_POST['hapuspembantu'])) {
    require_once 'backend.php';
    $KTP_pembantu = $_GET['KTP_pembantu'];
    $sql = "DELETE FROM pembantu WHERE KTP_pembantu = '$KTP_pembantu'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='tanggungan.php'>[kembali]</a>";
}else if (isset($_POST['hapustransaksi'])) {
    require_once 'backend.php';
    $kode_transaksi = $_GET['kode_transaksi'];
    $sql = "DELETE FROM transaksi WHERE kode_tanggungan = '$kode_transaksi'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='transaksi.php'>[kembali]</a>";
}else if (isset($_GET['hapuspenyewa'])) {
    require_once 'backend.php';
    $KTP_Penyewa = $_POST["NKTP"];
    $sql = "DELETE FROM Penyewa WHERE KTP_Penyewa = '$KTP_Penyewa'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='penyewa.php'>[kembali]</a>";
}else if (isset($_POST['hapus=5'])) {
    require_once 'backend.php';
    $kode_tanggungan = $_GET['kode_tanggungan'];
    $sql = "DELETE FROM bayartanggungan WHERE kode_tanggungan = '$kode_tanggungan'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='tanggungan.php'>[kembali]</a>";
}
?>