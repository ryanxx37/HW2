<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Result</title>
</head>
<body>
<?php 

$num1 = floatval($_POST['num1']);
$num2 = floatval($_POST['num2']);
$num3 = floatval($_POST["num3"]);
$operator1 = $_POST['operator1'];
$operator2 = $_POST['operator2'];

if($operator1 == '*' || $operator1 = '/'){
    if($operator1 == '*'){
        $firstResult = $num1 * $num2;
    } elseif($operator1 == '/' && $num2 != 0) {
        $firstResult = $num1 / $num2;
    } else{
        echo "ERROR: Division by zero";
        exit;
    }

    if($operator2 == '+'){
        $firstResult = $firstResult + $num3;
    } elseif($operator2 == '-'){
        $firstResult = $firstResult - $num3;
    } elseif($operator2 == '*'){
        $firstResult = $firstResult * $num3;
    } elseif($operator2 == '/'){
        $firstResult = $firstResult / $num3;
    } else{
        echo "<h4>ERROR: Division by zero</h4>";
        exit;
    }
} elseif($operator2 == '*' || $operator2 = '/'){
        if($operator2 == '*'){
            $secondResult = $num2 * $num3;
        } elseif($operator2 == '/' && $num3 != 0) {
            $secondResult = $num2 / $num3;
        } else{
            echo "<h4>ERROR: Division by zero</h4>";
            exit;
        }

        if($operator1 == '+'){
            $result = $firstResult + $secondResult;
        } elseif($operator1 == '-'){
            $result = $firstResult - $secondResult;
        }
} else{
    if($operator1 == '+'){
        $firstResult = $num1 + $num2;
    } else{
        $firstResult = $num1 - $num2;
    }

    if($operator2 == '+'){
        $result = $firstResult + $num3;
    } else{
        $result = $firstResult - $num3;
    }
    echo "<h4>'Result: ".$result"</h4>";
}


?>
</body>
</html>

