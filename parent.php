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
    <center>
        <p style="font-family: Poppins; font-size: 500%;">
            <b>KOST SATRIA</b>
        </p>
    </center>
    <div>
        <a href="penyewa.php?">
            <button style="width: 400px; height: 400px; margin-left: 300px; background-color: rgb(255, 100, 100); border-radius: 25px;">
                <img src="img/man.png" class="img-fluid">
                <p style="margin-top: 10px; font-size: xx-large;"><b>DATA PENYEWA</b></p>
            </button>
        </a>
        <a href="transaksi.php?">
            <button style="width: 400px; height: 400px; margin-left: 100px; margin-top: 50px; background-color: rgb(100, 255, 105); border-radius: 25px;">
                <img src="img/transaction.png" class="img-fluid">
                <p style="margin-top: 10px; font-size: xx-large;"><b>DATA TRANSAKSI</b></p>
            </button>
        </a>
        <a href="kamar.php">
            <button style="width: 400px; height: 400px; margin-left: 100px; margin-top: 50px; background-color: rgb(100, 245, 255); border-radius: 25px;">
                <img src="img/bedroom.png" class="img-fluid">
                <p style="margin-top: 10px; font-size: xx-large;"><b>DATA KAMAR</b></p>
            </button>
        </a>
    </div>
    <div style="margin-top: 100px;">    
        <a href="pembantu.php">
            <button style="width: 400px; height: 400px; margin-left: 500px; background-color: rgb(201, 100, 255); border-radius: 25px;">
                <img src="img/waiter.png" class="img-fluid">
                <p style="margin-top: 10px; font-size: xx-large;"><b>DATA PEMBANTU</b></p>
            </button>
        </a>
        <a href="tanggungan.php">
            <button style="width: 400px; height: 400px; margin-left: 200px; background-color: rgb(255, 100, 157); border-radius: 25px;">
                <img src="img/dependencies.png" class="img-fluid">
                <p style="margin-top: 10px; font-size: xx-large;"><b>DATA TANGGUNGAN</b></p>
            </button>
        </a>
    </div>
</body>
</html>