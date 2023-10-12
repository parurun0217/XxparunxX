<?php
session_start();
require_once('stats/warrior.php');
require_once('stats/wizard.php');
require_once('stats/monk.php');
require_once('stats/thief.php');

if(isset($_SESSION['warrior'])){
    $warrior = $_SESSION['warrior'];

}if(isset($_SESSION['wizard'])){
    $wizard = $_SESSION['wizard'];

}if(isset($_SESSION['monk'])){
    $monk = $_SESSION['monk'];

}if(isset($_SESSION['thief'])){
    $thief = $_SESSION['thief'];
}

if(isset($warrior)){
    echo '貴方は戦士です';
}else if(isset($wizard)){
    echo '貴方は魔法使いです';
}else if(isset($monk)){ 
    echo '貴方は僧侶です';
}else if(isset($thief)){
    echo '貴方は盗賊です';
}
?>