<h1>Guess Number Game</h1>
<form action="" method="post">
    <input type="text" name="user" placeholder="Enter Your Name...">
    <input type="button" id="submit" name="startGame" value="Start Game">
</form>

<?php
if(isset($_POST['startGame']) && trim($_POST['user']) !== null){
    $user = $_POST['user'];
    header("Location: play.php");
}
