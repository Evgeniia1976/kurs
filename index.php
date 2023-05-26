<?php

$str = '89831180891 +79831180893 3872999878209';

$res = preg_replace('#\b(7|8)\d{10}\b#', 'rus', $str);



echo '<pre>';
print_r($res);
echo '</pre>';
