<?php
require('config.php');

$IdTransaksi = $_POST['IdTransaksi'];
$NamaBarang = $_POST['NamaBarang'];
$TglTransaksi = $_POST['TglTransaksi'];
$Qty = $_POST['Qty'];
$Harga = $_POST['Harga'];
$Nominal = $Qty * $Harga;
$PPN = $Nominal * 10 / 100;
$Total = $Nominal + $PPN;

// Insert user data into table
$result = mysqli_query($conn, "INSERT INTO transaksi (IdTransaksi, TglTransaksi, NamaBarang, Qty, Harga, Nominal, PPN, Total) VALUES ('" . $IdTransaksi . "', '" . $TglTransaksi . "', '" . $NamaBarang . "', '" . $Qty . "', '" . $Harga . "', '" . $Nominal . "', '" . $PPN . "', '" . $Total . "')");
header("location:transaksi.php");
