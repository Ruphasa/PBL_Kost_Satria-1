KTP_Penyewa = '';
KTP_pembantu = '';
no_kamar = '';
kode_transaksi = "A";
kode_tanggungan = -1;
function changeVariable(data) {
    KTP_Penyewa = data;
    console.log("Variable value changed to: " + KTP_Penyewa);
    document.getElementById("deleteVariable").innerText = KTP_Penyewa;
    document.getElementById("KTP_Penyewa").href = "hapus.php?hapuspenyewa=" + KTP_Penyewa;
}

function changeVariable2(data) {
    KTP_pembantu = data;
    console.log("Variable value changed to: " + KTP_pembantu);
    document.getElementById("deleteVariable2").innerText = KTP_pembantu;
    document.getElementById("KTP_pembantu").href = "hapus.php?hapuspembantu=" + KTP_pembantu;
}

function changeVariable3(data) {
    no_kamar = data;
    console.log("Variable value changed to: " + no_kamar);
    document.getElementById("deleteVariable3").innerText = no_kamar;
    document.getElementById("no_kamar").href = "hapus.php?hapuskamar=" + no_kamar;
}

function changeVariable4(data) {
    kode_transaksi = data;
    console.log("Variable value changed to: " + kode_transaksi);
    document.getElementById("deleteVariable4").innerText = kode_transaksi;
    document.getElementById("kode_transaksi").href = "hapus.php?hapustransaksi=" + kode_transaksi;
}
function changeVariable5(data) {
    kode_tanggungan = data.toString();
    console.log("Variable value changed to: " + kode_tanggungan);
    document.getElementById("deleteVariable5").innerText = kode_tanggungan;
    document.getElementById("kode_tanggungan").href = "hapus.php?hapustanggungan=" + kode_tanggungan;
}