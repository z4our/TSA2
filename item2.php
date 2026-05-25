<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_item2.css">
</head>
<body>

    <?php 
        $a = 3; // CHANGE VALUES HERE
        $b = 4; // CHANGE VALUES HERE
        $c = 5; // CHANGE VALUES HERE

        function cube ($side) {
            return $side * $side * $side;
        }
        function sphere ($radius) {
            return (4/3) * pi() * pow($radius, 3);
        }
        function cuboid ($length, $width, $height) {
            return $length * $width * $height;
        }
        function cone ($radius, $height) {
            return (1/3) * pi() * pow($radius, 2) * $height;
        }
        function cylinder ($radius, $height) {
            return pi() * pow($radius, 2) * $height;
        }
    ?>

    <table>
        <tr><td colspan = "4">Volume of Shapes</td></tr>

        <tr>
            <td>Shape</td>
            <td>Values</td>
            <td>Formula</td>
            <td>Answer</td>
        </tr>
        <tr>
            <td>Cube</td>
            <td>s = <?php echo $a ?></td>
            <td>V = s³</td>
            <td><?php echo cube($a) ?></td>
        </tr>
        <tr>
            <td>Sphere</td>
            <td>r = <?php echo $a ?></td>
            <td>V = (4/3)πr³^3</td>
            <td><?php echo sphere($a) ?></td>
        </tr>
        <tr>
            <td>Cuboid</td>
            <td>l = <?php echo $a ?><br>w = <?php echo $b ?><br>h = <?php echo $c ?></td>
            <td>V = lwh</td>
            <td><?php echo cuboid($a, $b, $c) ?></td>
        </tr>
        <tr>
            <td>Cone</td>
            <td>r = <?php echo $a ?><br>h = <?php echo $b ?></td>
            <td>V = (1/3)πr²h</td>
            <td><?php echo cone($a, $b) ?></td>
        </tr>
        <tr>
            <td>Cylinder</td>
            <td>r = <?php echo $a ?><br>h = <?php echo $b ?></td>
            <td>V = πr²h</td>
            <td><?php echo cylinder($a, $b) ?></td>
        </tr>
    </table>

    <footer>
        <a href="index.php">Back</a>
    </footer>
</body>
</html>