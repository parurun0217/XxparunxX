<?php
session_start();
require_once 'wizard.php';
require_once 'wizard_stats.php';

$wizardStats = [
    'Hp' => rand(8, 12),
    'Mp' => rand(10, 15),
    'Power' => rand(4, 6),
    'Defense' => rand(4, 6),
    'Speed' => rand(6, 9),
];
$character = new GameCharacter_wizard($wizardStats);

$wizard = new Wizard();

$_SESSION['wizard_Stats'] = $wizardStats;
$_SESSION['wizard_Character'] = $character;
$_SESSION['wizard_Class'] = $wizard;

echo '貴方は', $wizard->name, 'です', '<br>';

echo '貴方のステータスです', '<br>';
foreach ($character->stats as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
echo '<br>';
echo '初期スキル：', $wizard->initialSkill['name'], '<br>';
echo '消費MP    :', $wizard->initialSkill['mpCost'], '<br>';
echo '効果      :', $wizard->initialSkill['effect'], '<br>';
echo '<a href="../../select.php">', '<button type="submit">', '選びなおす', '</button>', '</a>';
echo '<a href="../../main.php">', '<button type="submit">', '冒険に行く！', '</button>', '</a>';
?>