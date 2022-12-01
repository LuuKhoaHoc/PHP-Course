<?php


function readMore($content)
{
    $xhtml   = '';

    $content = preg_replace('!\s+!', ' ', $content);
    $content = trim($content);
    $content = addslashes($content);
    $content = strip_tags($content);
    $length  = mb_strlen($content);

    if ($length <= 0) {
        $xhtml .= "Vui lòng nhập content";
    } else {
        $pos     = mb_strpos($content, ' ', 90);
        $content = mb_substr($content, 0, $pos);
        $xhtml   .= $content."....";
    }
    return $xhtml;
}


echo readMore("Các biện pháp xử lý vi phạm đang trong quá trình hoàn thiện, nhưng tốt nhất là các bên liên quan thảo luận và thay đổi thì hơn là phải dùng đến các biện pháp hành chính.");