<?php
session_start();
require_once 'monk.php';
require_once 'monk_stats.php';

$monkStats = [
    'Hp' => rand(9, 12),
    'Mp' => rand(5, 8),
    'Power' => rand(7, 10),
    'Defense' => rand(5, 7),
    'Speed' => rand(9, 13),
];
$character = new GameCharacter_monk($monkStats);

$monk = new monk();

$_SESSION['monk_Stats'] = $monkStats;
$_SESSION['monk_Character'] = $character;
$_SESSION['monk_Class'] = $monk;

echo '貴方は', $monk->name, 'です', '<br>';

echo '貴方のステータスです', '<br>';
foreach ($character->stats as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
echo '<br>';
echo '初期スキル：', $monk->initialSkill['name'], '<br>';
echo '消費MP    :', $monk->initialSkill['mpCost'], '<br>';
echo '効果      :', $monk->initialSkill['effect'], '<br>';
echo '<a href="../../select.php">', '<button type="submit">', '選びなおす', '</button>', '</a>';
echo '<a href="../../main.php">', '<button type="submit">', '冒険に行く！', '</button>', '</a>';
?>