<?php
$servername = "localhost";
//$username = "testi";
//$password = "testi_uusi";
$username = "root";
$password = "";
$dbname = "golfdb";

// Luo yhteys
$conn = new mysqli($servername, $username, $password, $dbname);

// Tarkista yhteys
if ($conn->connect_error) {
    die("Yhteys epäonnistui: " . $conn->connect_error);
}

$nimi = $_POST['nimi'];
$hcp = $_POST['hcp'];
$pelimuoto = $_POST['pelimuoto'];
$tee = $_POST['tee'];
$vaylat = $_POST['vaylat'];
$lyonnit = $_POST['lyonnit'];
$sukupuoli = $_POST['sukupuoli'];
$paiva = $_POST['paiva'];

// Valmistele ja suorita SQL-kysely
$stmt = $conn->prepare("INSERT INTO lomaketiedot (nimi, hcp, vaylat, lyonnit, pelimuoto, tee, sukupuoli, paiva) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sdiissss", $nimi, $hcp, $vaylat, $lyonnit, $pelimuoto, $tee, $sukupuoli, $paiva);
$stmt->execute();

echo "Tiedot tallennettu onnistuneesti";

$stmt->close();
$conn->close();
?>
