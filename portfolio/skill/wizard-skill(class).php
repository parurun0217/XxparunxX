<?php
class WizardSkill {
    public $name;
    public $mp;
    public $damage;

    public function __construct($name, $mp, $damage) {
        $this->name = $name;
        $this->mp = $mp;
        $this->damage = $damage;
    }
}

session_start();

$d_min = 5;
$d_max = 8;
$d_rand = rand($d_min, $d_max);

$skill1 = 'fireball';

$wizard_skill = new WizardSkill('ファイア', 3, $d_rand);

$_SESSION['wizard_skill'] = $wizard_skill;
?>
