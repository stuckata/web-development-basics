<?php
session_start();

var_dump($_SESSION['randomNumber']);
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>

<form method="post">
    <h1>Enter Integer Number in range [1 - 100]</h1>
    <input type="text" name="number" placeholder="Enter Your Guess Here...">
    <input type="submit" name="submitNumber" value="Try">
</form>

<?php
if(isset($_POST['submitNumber'])){

    $number = intval($_POST['number']);

    if(is_int($number) && $number > 0 && $number < 101){
        if($number == $_SESSION['randomNumber']){
            echo '<h1>Congratulations, ' . $_SESSION['username'] . '</h1><br>';
            echo '<input type="submit" name="playAgain" value="Play Again">';
        } else if($number < $_SESSION['randomNumber']){
            echo '<h1>Down</h1>';
        } else {
            echo '<h1>Up</h1>';
        }
    } else {
        echo 'Enter a valid number';
    }
}
?>