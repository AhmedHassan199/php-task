<!-- Use a cookie to change the default website background color. Choose the new color from a dropdown menu of colors. -->

<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('background', $color, time() + (86400 * 30), "/"); // 86400 = 1 day
}
$background = isset($_COOKIE['background']) ? $_COOKIE['background'] : 'white';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Change Background Color</title>
</head>

<body style="background-color: <?php echo $background; ?>;">

    <form method="post" action="">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="white">White</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
        </select>
        <input type="submit" value="Change Color">
    </form>

</body>

</html>