<?php
require_once "config.php";
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $database->prepare("DELETE FROM etudiant WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "
        <script>
            alert('Etudiant supprime avec succes');
            window.location.href = 'index.php';
        </script>
        ";
        // header('Location: http://localhost/crud_php/index.php');
        exit();
    } else {
        header('Location: http://localhost/crud_php/index.php');
        exit();
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

