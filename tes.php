<?php
function gen($lenth){
$str = '0123456789';
for($xx=0;$xx<$lenth;$xx++){
$ran = rand(0,strlen($str)-1);
$string.=$str{$ran};
}
return $string;
}

for($i=1;$i<10;$i++){
$o = gen(6);
while(in_array($o,array())){
$o = gen(6);
}
print $o;
}