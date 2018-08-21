<?php
echo "<table border='1' cellpadding='2'>";
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 11; $j++) {
        $z = $i * $j;
        if ($z % 2 == 0) {
            $style = "style=\" background-color:red;\"";
        } else {
            $style="";
        }
        echo "<td".$style.">".$i." x ".$j." = ".$z."</td>";
    }
    echo "</tr>";
}
echo "<table>";