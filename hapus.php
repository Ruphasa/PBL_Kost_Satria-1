<?php
if (isset($_GET['hapuskamar'])) {
    require_once 'backend.php';
    $no_kamar = $_GET["hapuskamar"];
    $sql = "DELETE FROM kamar WHERE no_kamar = '$no_kamar'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='kamar.php'>[kembali]</a>";
} else if (isset($_GET['hapuspembantu'])) {
    require_once 'backend.php';
    $KTP_pembantu = $_GET['hapuspembantu'];
    $sql = "DELETE FROM pembantu WHERE KTP_pembantu = '$KTP_pembantu'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='pembantu.php'>[kembali]</a>";
} else if (isset($_GET['hapustransaksi'])) {
    require_once 'backend.php';
    $kode_transaksi = $_GET['hapustransaksi'];
    $sql = "DELETE FROM transaksi WHERE kode_transaksi = '$kode_transaksi'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='transaksi.php'>[kembali]</a>";
} else if (isset($_GET['hapuspenyewa'])) {
    require_once 'backend.php';
    $KTP_Penyewa = $_GET['hapuspenyewa'];
    $sql = "DELETE FROM Penyewa WHERE KTP_Penyewa = '$KTP_Penyewa'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='penyewa.php'>[kembali]</a>";
} else if (isset($_GET['hapustanggungan'])) {
    require_once 'backend.php';
    $kode_tanggungan = $_GET['hapustanggungan'];
    $sql = "DELETE FROM bayartanggungan WHERE kode_tanggungan = '$kode_tanggungan'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='tanggungan.php'>[kembali]</a>";
} else if (isset($_GET['hapussewa'])) {
    require_once 'backend.php';
    $kode_transaksi = $_GET['hapussewa'];
    $sql = "DELETE FROM menyewa WHERE kode_transaksi = '$kode_transaksi'";
    mysqli_query($conn, $sql);
    echo "Hapus Data <a href='menyewa.php'>[kembali]</a>";
}
?>