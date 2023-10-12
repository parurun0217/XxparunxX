<?php
class ThiefSkill {
    public $name;
    public $mpCost;
    public $damage;

    public function __construct($name, $mpCost, $damage) {
        $this->name = $name;
        $this->mpCost = $mpCost;
        $this->damage = $damage;
    }
}

session_start();

$skillName = 'スピードスター'; // スキル名を定義

// スキルのダメージ計算を修正
$damage = $thief_stats['Power'] * $thief_stats['Speed'] / 10;

$thiefSkill = new ThiefSkill('スピードスター', 4, $damage);

$_SESSION['thief_skill'] = $thiefSkill;

?>