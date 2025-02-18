<?php
$number = [5,6,7,8,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ordered</title>
</head>
<body>
    <ol>
        <?php
        for ($i = 0; $i <=count($number) - 1; $i++) {
        ?>
        <li>
        <?php
            echo $number[$i]; 
        ?>
        <?php
        }
        ?>
        </li>
    </ol>
</body>
</html>

