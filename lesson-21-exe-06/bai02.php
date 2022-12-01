<?php


function bangcuuchuong($x, $y)
{
    if ($x > $y) {
        return "X không được lớn hơn Y";
    } elseif ($y - $x > 20) {
        return "X và Y không dược phép lớn hơn 20 đơn vị";
    } else {
        $xhtml = '';
        $xhtml .= '<table border="1px">';
        for ($i = 1; $i <= 10; $i++) {
            $xhtml .= '<tr>';
            for ($j = $x; $j <= $y; $j++) {
                $xhtml .= '<td>'.$j.'x'.$i.'='.($j * $i).'</td>';
            }
            $xhtml .= '</tr>';
        }
        $xhtml .= '</table >';
        return $xhtml;
    }
}
echo bangcuuchuong(1,10);

echo "<hr>";
echo bangcuuchuong(5,15);
