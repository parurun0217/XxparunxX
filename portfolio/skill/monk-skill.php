<?php
class MonkSkill {
    public $name;
    public $mpCost;
    public $recovery;

    public function __construct($name, $mpCost, $recovery) {
        $this->name = $name;
        $this->mpCost = $mpCost;
        $this->recovery = $recovery;
    }
}

session_start();

// スキルの回復量計算
$r_min = 5;
$r_max = 8;
$r_rand = rand($r_min, $r_max);
$mpCost = 3;

$monkSkill = new MonkSkill('ヒール', 3, $r_rand);

$_SESSION['monk_skill'] = $monkSkill;

?>