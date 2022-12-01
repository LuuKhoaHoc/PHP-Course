<?php


function locfile($filename)
{
    $xhtml    = '';
    $filename = trim($filename);
    $length   = mb_strlen($filename);
    if ($length <= 0) {
        $xhtml .= "Vui lòng nhập tên file";
    } else {
        $filename = mb_strtolower($filename);
        $filename = preg_replace('!\s+!', ' ', $filename);
        $filename = str_replace(' ', '-', $filename);
        $pos      = strrpos($filename, ".") + 1;
        $ext      = substr($filename, $pos);
        if ($ext != "png" && $ext != "jpeg" && $ext != "gif") {
            $xhtml .=  "Không phải file hình";
        } else {
            $xhtml .=  "File hình : ".$filename;
        }
    }
    return $xhtml;
}

echo locfile("  khoa HOC lẬP    trinh PHP.xxx.yyy.png    ");


