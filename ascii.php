<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASCII Art</title>
    <style>
        table {
            font-family: 'Courier New', Courier, monospace;
            border-collapse: collapse;
        }
       
        td {
            width: 20px;
            height: 20px;
            text-align: center;
            vertical-align: centerdle;
        }

        table, td {
            border: none;
        }

        .outsideEdge {
            color: green; 
        }

        .crosshair {
            color: red; 
        }
    </style>
</head>
<body>

<?php
function ascii($size) {
    if ($size < 5 || $size % 2 == 0) {
        echo "Size must be an odd number greater than or equal to 5.";
        return;
    }

    $center = floor($size / 2);

    echo "<table>";
    for ($i = 0; $i < $size; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $size; $j++) {
            $char = " ";
            $class = "";

            if ($i == 0 && $j == 0) {
                $char = "/";
                $class = "outsideEdge";
            } elseif ($i == 0 && $j == $size - 1) {
                $char = "\\";
                $class = "outsideEdge";
            } elseif ($i == $size - 1 && $j == 0) {
                $char = "\\";
                $class = "outsideEdge";
            } elseif ($i == $size - 1 && $j == $size - 1) {
                $char = "/";
                $class = "outsideEdge";
            } elseif ($i == 0) {
                $char = "-";
                $class = "outsideEdge";
            } elseif ($i == $size - 1) {
                $char = "_";
                $class = "outsideEdge";
            } elseif ($j == 0 || $j == $size - 1) {
                $char = "|";
                $class = "outsideEdge";
            } elseif ($i == $center && $j == $center) {
                $char = "+";
                $class = "crosshair";
            } elseif ($j == $center) {
                $char = "|";
                $class = "crosshair";
            } elseif ($i == $center) {
                $char = "-";
                $class = "crosshair";
            }
            echo "<td class='{$class}'>{$char}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


$size = 9; 
ascii($size);
?>
</body>
</html>
