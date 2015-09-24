<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

if(!$_SESSION['win']) {
    header("Location: play.php");
}

echo '<h1>Congratulations, ' . $_SESSION['username'] . '!</h1>';
echo '<h1>The number is, ' . $_SESSION['randomNumber'] . '.</h1>';
echo '<form method="post"><input type="submit" name="playAgain" value="Play Again"></form>';

if(isset($_POST['playAgain'])) {
    $_SESSION['randomNumber'] = rand(1, 100);
    header("Location: play.php");
}