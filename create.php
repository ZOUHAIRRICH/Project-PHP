<?php
require_once "config.php";
try {
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        $ddn = $_POST['ddn'];
        $tel = $_POST['tel'];
        $sql = "INSERT INTO etudiant (nom, age, ddn, tel) VALUES (:nom, :age, :ddn, :tel)";
        $stmt = $database->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':ddn', $ddn);
        $stmt->bindParam(':tel', $tel);
        $stmt->execute();
        header('Location: index.php');
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un étudiant</title>
    <style>
        body{
            font-family: System-ui;
        }
    </style>    
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form method="post">
        <label>Nom:</label>
        <input type="text" name="nom"><br>
        <label>Age:</label>
        <input type="text" name="age"><br>
        <label>Date de naissance:</label>
        <input type="date" name="ddn"><br>
        <label>Téléphone:</label>
        <input type="text" name="tel"><br>
        <input type="submit" name="submit" value="Valider">
    </form>
</body>
</html>
