<!DOCTYPE html>
<html>
<head>
    <title>Lomake</title>
</head>
<body>
    <form action="tallenna.php" method="post">
        Kenttä 1: <input type="kenttä1" name="Kenttä1" required><br>
        Kenttä 2: <input type="Kenttä2" name="Kenttä2" required><br>
        Kenttä 3: <input type="Kenttä3" name="Kenttä3" required><br>
        Numero: <input type="number" name="numero" required><br>
        Pelimuoto: 
        <select name="Pelimuoto" required>
            <option value="Reikäpeli">Reikäpeli</option>
            <option value="Lyöntipeli">Lyöntipeli</option>
            <option value="Pistebogey">Pistebogey</option>
            <option value="Scratch">Scratch</option>
        </select><br>
        <input type="submit" value="Tallenna">
    </form>
</body>
</html>
