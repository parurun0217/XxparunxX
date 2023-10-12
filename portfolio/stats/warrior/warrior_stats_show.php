<?php
session_start();
require_once 'warrior.php';
require_once 'warrior_stats.php';

$warriorStats = [
    'Hp' => rand(10, 15),
    'Mp' => rand(2, 5),
    'Power' => rand(9, 13),
    'Defense' => rand(7, 10),
    'Speed' => rand(3, 6),
];
$character = new GameCharacter_warrior($warriorStats);

$warrior = new Warrior();

$_SESSION['warrior_Stats'] = $warriorStats;
$_SESSION['warrior_Character'] = $character;
$_SESSION['warrior_Class'] = $warrior;

echo '貴方は', $warrior->name, 'です', '<br>';

echo '貴方のステータスです', '<br>';
foreach ($character->stats as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
echo '<br>';
echo '初期スキル：', $warrior->initialSkill['name'], '<br>';
echo '消費MP    :', $warrior->initialSkill['mpCost'], '<br>';
echo '効果      :', $warrior->initialSkill['effect'], '<br>';
echo '<a href="../../select.php">', '<button type="submit">', '選びなおす', '</button>', '</a>';
echo '<a href="../../main.php">', '<button type="submit">', '冒険に行く！', '</button>', '</a>';
?>