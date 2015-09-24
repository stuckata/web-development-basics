<h1>Guess Number Game</h1>
<form method="post">
    <input type="text" name="user" placeholder="Enter Your Name...">
    <input type="submit" id="submit" name="startGame" value="Start Game">
</form>

<?php
session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['username'] = null;
}

if(isset($_POST['startGame']) && (trim($_POST['user']) != null)) {
    $_SESSION['username'] = $_POST['user'];
    $_SESSION['randomNumber'] = rand(1, 100);
    header("Location: play.php");
}
?>
