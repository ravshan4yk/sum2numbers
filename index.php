<?php

require_once 'task.php';

if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
    $sum = sumBigNumbers($_POST['num1'], $_POST['num2']);
}

?>

<html>
<head>
    <title>Сумма чисел</title>
</head>
<body>

<form method="POST" action="index.php">
    <input type="text" name="num1">
    <br>
    <input type="text" name="num2">

    <br>
    <button type="submit">Cумма</button>
    <br>
    <br>
    <?php if (isset($sum)): ?>
        <?php echo $_POST['num1'] . ' + ' . $_POST['num2'] . ' = ' . $sum; ?>
    <?php endif; ?>
</form>

</body>
</html>