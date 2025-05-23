<!DOCTYPE html>
<html>
<head>
    <title>Fruit Selector</title>
</head>
<body>

<h2>Select Your Favorite Fruits</h2>
<form method="post">
    <input type="checkbox" name="fruits[]" value="Apple"> Apple<br>
    <input type="checkbox" name="fruits[]" value="Banana"> Banana<br>
    <input type="checkbox" name="fruits[]" value="Mango"> Mango<br>
    <input type="checkbox" name="fruits[]" value="Orange"> Orange<br>
    <input type="checkbox" name="fruits[]" value="Grapes"> Grapes<br>
    <br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fruits'])) {
    $selectedFruits = $_POST['fruits'];
    echo "<h3>You selected:</h3><ul>";
    foreach ($selectedFruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    if (in_array("Mango", $selectedFruits)) {
        echo "<p>Mango is a great choice!</p>";
    } else {
        echo "<p>Try selecting Mango next time!</p>";
    }
    if (in_array("Mango", $selectedFruits)) {
        echo "<p>Mango is a great choice!</p>";
    } else {
        echo "<p>Try selecting Mango next time!</p>";
    }
}
?>

</body>
</html>
