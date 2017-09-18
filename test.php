<?php

$pdo = new PDO('mysql:host=127.0.0.1', 'root', '123122');
$sql = "SELECT * FROM `test` WHERE `id` < id";
$statement = $pdo->query($sql);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
