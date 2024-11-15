<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Chessboard</title>
</head>

<body>
    <table cellspacing="0" cellpadding="20">
        <?php
        $count = 8;
        for ($row = 0; $row < $count; $row++) { ?>
        <tr>
            <?php for ($col = 0; $col < $count; $col++) {
                    if (($row + $col) % 2 == 0) { ?>
            <td style="background-color: white; "></td>
            <?php } else { ?>
            <td style="background-color: black;"></td>
            <?php }
                } ?>
        </tr>
        <?php }
        ?>
    </table>
</body>

</html>
