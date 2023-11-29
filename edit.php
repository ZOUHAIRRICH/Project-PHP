<?php
require_once "config.php";
try {
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        $ddn = $_POST['ddn'];
        $tel = $_POST['tel'];
        $sql = "UPDATE etudiant SET nom=:nom, age=:age, ddn=:ddn, tel=:tel WHERE id=:id";
        $stmt = $database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':ddn', $ddn);
        $stmt->bindParam(':tel', $tel);
        $stmt->execute();
        header('Location: http://localhost/crud_php/index.php');
    } else {
        $id = $_GET['id'];
        $sql = "SELECT * FROM etudiant WHERE id=:id";
        $stmt = $database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Etudiant</title>
    <style>
        body{
            font-family: System-ui;
        }
    </style>
</head>
<body>
    <h1>Edit Etudiant</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $etudiant['id'] ?>">
        <label>Nom:</label>
        <input type="text" name="nom" value="<?php echo $etudiant['nom'] ?>"><br>
        <label>Age:</label>
        <input type="text" name="age" value="<?php echo $etudiant['age'] ?>"><br>
        <label>Date de naissance:</label>
        <input type="date" name="ddn" value="<?php echo $etudiant['ddn'] ?>"><br>
        <label>Téléphone:</label>
        <input type="text" name="tel" value="<?php echo $etudiant['tel'] ?>"><br>
        <input type="submit" name="submit" value="Enregistrer">
    </form>
</body>
</html>
