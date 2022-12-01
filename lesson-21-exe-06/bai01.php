<?php


function motden1tram ($n,$batdau = 1) {
    $xhtml = '';
    for ($i = $batdau; $i <= $n; $i++) {
        if ($i != 8 && $i != 35 && $i != 74 && $i != 86) {
            $xhtml .=  $i;
            if ($i != $n) {
                $xhtml .= ", ";
            }
        }
    }
    return $xhtml;
}

echo motden1tram(50);
echo "<hr>";
echo motden1tram(200, 150);