<?php

const dbhost = 'localhost:3309';
const dbname = 'Etudiants';
const dbuser = 'root';
const dbpass = '';

$dsn = "mysql:host=".dbhost.";dbname=".dbname;

// $dsn = "mysql:host=".dbhost.";port=3309;dbname=".dbname;

$database = new PDO($dsn,dbuser,dbpass);


?>