<?php

$jml = $_GET['jml'];
echo "<table border=1 cellspacing=0 cellpadding=5 style='border-collapse: collapse; text-align: center; width: 20%; table-layout: fixed;'>\n";

for ($a = $jml; $a > 0; $a--) {
    $total = 0;
    
    for ($b = $a; $b > 0; $b--) {
        $total += $b;
    }
    
    echo "<tr>\n";
    echo "<td colspan='4'>TOTAL : $total</td>";
    echo "</tr>\n";
    
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }
    for ($c = $jml - $a; $c > 0; $c--) {
        echo "<td></td>";
    }
    echo "</tr>\n";
}

echo "</table>";
?>