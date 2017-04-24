<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1><?=$diceNum?></h1>
    <h1>Guess: <?=$guess?></h1>
    <?php if ($diceNum == $guess) : ?><h2 style="color: green">Correct</h2>
    	<?php else: ?><h2 style="color: red">Incorrect</h2>
    <?php endif;?>
</body>
</html>