<?php
class Slime {
    public $enemy_name;
    public $enemy_hp;
    public $enemy_attack;
    public $enemy_defense;
    public $enemy_speed;
    public $enemy_experience;

    public function __construct() {
        $enemy_names = ['赤スライム', '青スライム', '緑スライム', '黄スライム'];
        $this->enemy_name = $enemy_names[array_rand($enemy_names)];
        $this->enemy_hp = rand(4, 10);
        $this->enemy_attack = rand(2, 5);
        $this->enemy_defense = rand(1, 5);
        $this->enemy_speed = rand(1, 5);
        $this->enemy_experience = rand(2, 5);
    }
}
?>