<?php
session_start();
require_once 'thief.php';
require_once 'thief_stats.php';

$thiefStats = [
    'Hp' => rand(9, 12),
    'Mp' => rand(5, 8),
    'Power' => rand(7, 10),
    'Defense' => rand(5, 7),
    'Speed' => rand(9, 13),
];
$character = new GameCharacter_thief($thiefStats);

$thief = new Thief();

$_SESSION['thief_Stats'] = $thiefStats;
$_SESSION['thief_Character'] = $character;
$_SESSION['thief_Class'] = $thief;

echo '貴方は', $thief->name, 'です', '<br>';

echo '貴方のステータスです', '<br>';
foreach ($character->stats as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
echo '<br>';
echo '初期スキル：', $thief->initialSkill['name'], '<br>';
echo '消費MP    :', $thief->initialSkill['mpCost'], '<br>';
echo '効果      :', $thief->initialSkill['effect'], '<br>';
echo '<a href="../../select.php">', '<button type="submit">', '選びなおす', '</button>', '</a>';
echo '<a href="../../main.php">', '<button type="submit">', '冒険に行く！', '</button>', '</a>';
?>