<?php

$a=$b=5;
$a=$b+5;

echo "\$a=$a, \$b=$b<br>"; 

$b=$a-1;
echo "\$a=$a, \$b=$b<br>";

$c=$a/$b;
echo "\$a=$a, \$b=$b, \$c=$c <br>";

$c=$a%$b;
echo "\$a=$a, \$b=$b, \$c=$c=$a <br><br>";


$a+=6;
$b-=2;
echo "\$a=$a, \$b=$b<br>";

$c=++$a;
echo "\$a=$a, \$b=$b, \$c=$c <br>";

$b=$a++;
$c=++$a;
echo "\$a=$a, \$b=$b, \$c=$c <br>";