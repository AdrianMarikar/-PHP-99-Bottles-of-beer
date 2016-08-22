<?php

function problems99() {
    for ($beerBottles = 99; $beerBottles > 0; $beerBottles--) {
        if ($beerBottles > 1) {
            echo $beerBottles . " bottles of beer on the wall. " . $beerBottles . " bottles of beer!";
            echo "Take one down, and pass it around! " . ($beerBottles - 1) . " bottles of beer on the wall.\n";
        }
        else if ($beerBottles == 1) {
            echo $beerBottles . " bottle of beer on the wall. " . $beerBottles . " bottle of beer!";
            echo "Take one down, and pass it around! No more bottles of beer on the wall.\n";
                
        }
        
    }

    echo "No more bottles of beer on the wall, no more bottles of beer.\n";
    echo "Go to the store and buy some more. 99 bottles of beer on the wall.\n";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>99 Bottles</title>
</head>
<body>
    <?php problems99();  ?>
</body>
</html>