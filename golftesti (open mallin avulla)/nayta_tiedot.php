<!DOCTYPE html>
<html>
<head>
    <title>Tietokannan Tiedot</title>
</head>
<body>
    <h2>Tietokannasta haetut tiedot</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nimi</th>
            <th>Tarkka HCP</th>
            <th>Pelimuoto</th>
            <th>Tee paikka</th>
            <th>Vaylät</th>
            <th>Lyönnit</th>
            <th>Sukupuoli</th>
            <th>Päivä</th>
        </tr>

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

        // Suorita kysely
        $sql = "SELECT id, nimi, hcp, vaylat, lyonnit, pelimuoto, tee, sukupuoli, paiva FROM lomaketiedot";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Tulosta jokainen rivi
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nimi"]. "</td><td>" . $row["hcp"]. "</td><td>" . $row["pelimuoto"]. "</td><td>" . $row["tee"]. "</td><td>". $row["vaylat"]. "</td><td>". $row["lyonnit"]."</td><td>". $row["sukupuoli"]."</td><td>". $row["paiva"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Ei tuloksia</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
