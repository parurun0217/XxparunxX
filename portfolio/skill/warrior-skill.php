<?php
session_start();

class WarriorSkill {
    public $name;
    public $mpCost;
    public $damage;

    public function __construct($name, $mpCost, $damage) {
        $this->name = $name;
        $this->mpCost = $mpCost;
        $this->damage = $damage;
    }
}

// $damage = 1.2;
// $skillName = 'パワースラッシュ';
// $mpCost = 2;

$warriorSkill = new WarriorSkill('パワースラッシュ', 2, 1.2);

$_SESSION['warrior_skill'] = $warriorSkill;
?>
