<?php
    require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body{
            font-family: System-ui;
        }
        table,th,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 10px;
        }
        th{
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <h1>List Etudiants</h1>
    <a href="create.php"><button>Ajouter Etudiant</button></a>
    <br> <br>
    <?php
    try {
        $stmt = $database->query('SELECT * FROM etudiant');
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr><th>ID</th><th>Nom</th><th>Age</th><th>Date de naissance</th><th>Téléphone</th><th>Actions</th></tr>";
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['ddn']."</td>";
            echo "<td>".$row['tel']."</td>";
            echo "<td><a href=\"edit.php/?id={$row['id']}\"><button>Editer</button></a> &emsp13; 
            <a href=\"delete.php/?id={$row['id']}\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet etudiant?')\"><button>Supprimer</button></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    ?>

</body>
</html>


