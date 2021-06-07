<?php $id = $_GET['id']; ?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Просмотр изображения № <?php echo $id; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<h2>Калькулятор</h2>
<?php
if (isset($_POST['new_a']) && isset($_POST['new_b'])) {

    $result2 = "";
    $new_a = "";
    $new_b = "";

    $new_a = trim($_POST['new_a']);
    $new_b = trim($_POST['new_b']);

    echo checkNum($new_a);
    echo checkNum($new_b);

    $operand = $_POST['operand'];
    if ((checkNum($new_a)) && (checkNum($new_b))) {
        switch ($operand) {
            case 'add':
                $result2 = round($new_a + $new_b, 3);
                break;
            case 'sub':
                $result2 = round($new_a - $new_b, 3);
                break;
            case 'multiply':
                $result2 = round($new_a * $new_, 3);
                break;
            case 'divide':
                if ($new_b == 0) {
                    $result2 = "Делить на ноль? А ну брось это дело!";
                } else {
                    $result2 = round($new_a / $new_b, 3);
                }
                break;
            default:
                $result2 = "Выберите знак действия";
                break;
        }
    } else {
        $result2 = "Введите корректное значение";
        //$result2 = "Введите корректное значение $new_a или $new_b";
    }
} else {
    $result2 = "Не хватает данных!";
}

echo '<br>';
if (false) {
    echo 'ya true';
} else {
    echo 'ya false';
}

echo '<br>';
if (0) {
    echo 'ya true';
} else {
    echo 'ya false';
}

echo '<br>';
if ("0") {
    echo 'ya true';
} else {
    echo 'ya false';
}

echo '<br>';
if ('0') {
    echo 'ya true';
} else {
    echo 'ya false';
}

function checkNum($val = "") {
    if ($val !='') {
        if (is_numeric($val)) {
            return true;
        } else {
            return "0";
        }
    }
}

function e($array,$name=''){
    echo '<pre>';
    echo $name.'<br>';
    print_r($array);
    echo '</pre>';
}

?>

<form method="POST">
    <input type="number" name="new_a" value="<?php echo $new_a; ?>">
    <select name="operand">
        <option <?php echo ( $_POST['operand'] == "add" ) ? "selected='selected'" :  ""; ?>value="add">+</option>
        <option <?php echo ( $_POST['operand'] == "sub" ) ? "selected='selected'" :  ""; ?>value="sub">-</option>
        <option <?php echo ( $_POST['operand'] == "multiply" ) ? "selected='selected'" :  ""; ?>value="multiply">*</option>
        <option <?php echo ( $_POST['operand'] == "divide" ) ? "selected='selected'" :  ""; ?>value="divide">/</option>
    </select>
    <input type="text" name="new_b" value="<?php echo $new_b; ?>">
    <input type="submit" value="="> <?php echo $result2; ?>
</form>


</body>
</html>