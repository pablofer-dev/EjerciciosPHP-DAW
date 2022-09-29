<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema3</title>
</head>

<body>
    <?php
    /* PABLO FERNANDEZ LOPEZ  */
    $var1 = 4;
    $var2 = 5;
    $var3 = 4;
    /* 3 */
    if ($var1 == 6 && $var2 == 6 && $var3 == 6) {
        echo "Excenlente";
    }
    /* 2 */ elseif (($var1 == 6 && $var2 == 6) || ($var2 == 6 && $var3 == 6) || ($var1 == 6 && $var3 == 6)) {
        echo "bien";
    }
    /* 1 */ elseif ($var1 == 6 || $var2 == 6 || $var3 == 6) {
        echo "bueno";
    }
    /* 0 */ elseif ($var1 != 6 && $var2 != 6 && $var3 != 6) {
        echo "pesimo";
    }
    ?>
</body>

</html>