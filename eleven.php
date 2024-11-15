<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            transition: background-color 0.5s ease;
            <?php
            if (isset($_COOKIE['color'])) {
                echo 'background-color: ' . $_COOKIE['color'] . ';';
            } else {
                echo 'background-color: white;';
            }
            ?>
        }

        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Choose Your Preferred Color</h1>

    <form method="POST">
        <select name="color" id="color" onchange="changeColor()">
            <option value="" disabled>--Select a Country--</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="orange">Orange</option>
            <option value="purple">Purple</option>
            <option value="white">White</option>
        </select>
    </form>
    <script>
        // ------------------------this function to apply the color once selected 
        function changeColor() {
            var color = document.getElementById('color').value;
            document.body.style.backgroundColor = color;
            document.cookie = "color=" + color + "; path=/;";
        }

    </script>

</body>

</html>
