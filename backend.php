<?php
    // Create connection
    $conn = mysqli_connect("localhost","root","","db_satria1");    
    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }

function printData($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $datas = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
    }
    return $datas;
}

// function selectform($input)
// {
//     global $conn;
//     $sql = "SELECT * FROM $input";
//     $result = mysqli_query($conn, $sql);
//     $resultCheck = mysqli_num_rows($result);
//     if ($resultCheck > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
//         }
//     }
// }

function insertIntoPenyewa()
{
    global $conn;
    $KTP_Penyewa=$_POST['KTP_Penyewa'];
    $Nama_Penyewa=$_POST['Nama_Penyewa'];
    $Jenis_Kelamin_Penyewa=$_POST['Jenis_Kelamin_Penyewa'];
    $No_Hp_Penyewa=$_POST['No_Hp_Penyewa'];
    $sql = "INSERT INTO Penyewa (
        KTP_Penyewa, Alamat_Penyewa, Jenis_Kelamin_Penyewa, No_Hp_Penyewa
        ) VALUES (
            $KTP_Penyewa, $Nama_Penyewa, $Jenis_Kelamin_Penyewa, $No_Hp_Penyewa
            )";
}

// function insertIntoKamar()
// {
//     global $conn;
//     $no_Kamar=$_POST['no_Kamar'];
//     $tipe=$_POST['tipe'];
//     $lantai=$_POST['lantai'];
//     $harga=$_POST['harga'];
//     $alamat=$_POST['alamat'];
//     $sql = "INSERT INTO Kamar (
//         No_Kamar, tipe, lantai, harga, alamat
//         ) VALUES (
//             $no_Kamar, $tipe, $lantai, $harga, $alamat
//             )";
//     mysql_query($conn, $sql);
// }

// function insertIntoTransaksi($input)
// {
//     global $conn;
//     $kode_Transaksi=$_POST['kode_Transaksi'];
//     $quantity=$_POST['quantity'];
//     $sql = "INSERT INTO Transaksi (
//         kode_Transaksi, quantity
//         ) VALUES (
//             $kode_Transaksi, $quantity
//             )";
//     mysql_query($conn, $sql);
// }

// function delete($input)
// {
//     global $conn;
//     $sql = "DELETE FROM $input WHERE id = ?";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         echo "error";
//     } else {
//         mysqli_stmt_bind_param($stmt, "i", $input);
//         mysqli_stmt_execute($stmt);
//     }
// }

// function updateSet($conn, $input)
// {
//     $sql = "UPDATE $input SET name = ? WHERE id = ?";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         echo "error";
//     } else {
//         mysqli_stmt_bind_param($stmt, "si", $input, $input);
//         mysqli_stmt_execute($stmt);
//     }
// }
?>