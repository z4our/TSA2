<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_item1.css">
</head>
<body>

    <?php $fruits = array(
        array("name" => "Apple", "image" => "apple.png", "description" => "Red\nRound", "facts" => "Apples are rich in fiber and vitamin C."),
        array("name" => "Avocado", "image" => "avocado.png", "description" => "Green\nOval\nSoft", "facts" => "Avocados are a good source of healthy fats and potassium."),
        array("name" => "Banana", "image" => "banana.png", "description" => "Yellow\nCresent\nLong", "facts" => "Bananas are a good source of potassium and vitamin B6."),
        array("name" => "Coconut", "image" => "coconut.png", "description" => "Brown\nRound\nHard", "facts" => "Coconuts are a good source of dietary fiber and electrolytes."),
        array("name" => "Grapes", "image" => "grapes.png", "description" => "Purple\nRound\nSmall", "facts" => "Grapes are a good source of antioxidants and vitamin K."),
        array("name" => "Guava", "image" => "guava.png", "description" => "Green\nRound\nSoft", "facts" => "Guavas are a good source of vitamin C and dietary fiber."),
        array("name" => "Kiwi", "image" => "kiwi.png", "description" => "Brown\nOval\nSoft", "facts" => "Kiwis are a good source of vitamin C and dietary fiber."),
        array("name" => "Mango", "image" => "mango.png", "description" => "Yellow\nOval\nSoft", "facts" => "Mangoes are a good source of vitamin A and vitamin C."),
        array("name" => "Orange", "image" => "orange.png", "description" => "Orange\nRound\nSoft", "facts" => "Oranges are a good source of vitamin C and dietary fiber."),
        array("name" => "Pineapple", "image" => "pineapple.png", "description" => "Yellow\nOval\nHard", "facts" => "Pineapples are a good source of vitamin C and manganese.")
    );
    ?>

    <table>
        <tr>
            <th colspan="4">My Fruits</th>
        </tr>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

    <?php foreach($fruits as $fruit) { ?>
        <tr>
            <td><img width="200px" src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>"></td>
            <td><?php echo $fruit['name']; ?></td>
            <td><?php echo nl2br($fruit['description']); ?></td>
            <td><?php echo $fruit['facts']; ?></td>
        </tr>
    <?php } ?>

    </table>
    <footer>
        <p>The "facts" stated here are AI-generated and should not be taken as fact.</p>
        <a href="index.php">Back</a>
    </footer>    
</body>
</html>