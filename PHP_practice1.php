
<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <form method="POST">
        Side 1: <input type="number" name="side1" step="any" required><br>
        Side 2: <input type="number" name="side2" step="any" required><br>
        Side 3: <input type="number" name="side3" step="any" required><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST["side1"]);
        $b = floatval($_POST["side2"]);
        $c = floatval($_POST["side3"]);

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            $s = ($a + $b + $c) / 2;

            $areaSquared = $s * ($s - $a) * ($s - $b) * ($s - $c);

            if ($areaSquared > 0) {
                $area = $areaSquared ** 0.5;

                echo "<h3>Triangle Area: " . number_format($area, 2) . " square units</h3>";
            } else {
                echo "<h3>Invalid input, area cannot be calculated.</h3>";
            }
        } else {
            echo "<h3>Invalid triangle! The sum of any two sides must be greater than the third side.</h3>";
        }
    }
    ?>
</body>
</html>
