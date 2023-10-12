<link rel="stylesheet" type="text/css" href="css/jobColor.css">
<!-- <style>
body{
    font-family: 'DragonQuestFC', DragonQuestFC;
    font-size: 24px;
}

</style> -->
<?php
session_start();

if(isset($_POST['warrior'])){
    $_SESSION['warrior'] = 'warrior';
    header('Location:stats/warrior/warrior_stats_show.php');

}if(isset($_POST['wizard'])){
    $_SESSION['wizard'] = 'wizard';
    header('Location:stats/wizard/wizard_stats_show.php');

}if(isset($_POST['monk'])){
    $_SESSION['monk'] = 'monk';
    header('Location:stats/monk/monk_stats_show.php');

}if(isset($_POST['thief'])){
    $_SESSION['thief'] = 'thief';
    header('Location:stats/thief/thief_stats_show.php');
}
?>
<html>
<body>
<p>よくぞ来た勇者よ！！</p>
<p>そなたの職業を選ぶのじゃ！</p>
<form action="#" method="post" class="button">
    <button type="submit" name="warrior" class="warrior-button">戦士</button>
    <button type="submit" name="wizard" class="wizard-button">魔法使い</button>
    <button type="submit" name="monk" class="monk-button">僧侶</button>
    <button type="submit" name="thief" class="thief-button">盗賊</button>
</form>
</body>
</html>
