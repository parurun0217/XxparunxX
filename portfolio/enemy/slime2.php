<?php
$enemy_names = ['赤スライム', '青スライム', '緑スライム', '黄スライム'];
$enemy_name = [array_rand($enemy_names)];
$enemy_hp = rand(4, 10);
$enemy_attack = rand(2, 5);
$enemy_defense = rand(1, 5);
$enemy_speed = rand(1, 5);
$enemy_experience = rand(2, 5);
$pdo=new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root',);
$sql=$pdo->prepare('insert into enemy values(null, ?, ?, ?, ?, ?, ?)');
$sql->execute([$enemy_name,$enemy_hp,
            $enemy_attack,$enemy_defense,
            $enemy_speed,$enemy_experience]);
?>  