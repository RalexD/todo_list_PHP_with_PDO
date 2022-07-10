<?php

require_once 'configDB.php';
$id= $_GET['id']; // из url берем id
$sql= 'DELETE FROM `tasks` WHERE `id` = ?'; //либо как в add
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /todo/index.php');
?>