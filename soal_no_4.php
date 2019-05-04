<?php
class parse
{
	public function sort($arr){
$size =count($arr);
for($i=0; $i<$size; $i++){
        for($j=$i+1; $j<$size; $j++)
        {
            if($arr[$i] > $arr[$j])
            {
                $temp  = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
}
return $arr;
}
}

$arri = [['f','g','h','i'],['a','b','c','d','e'],['j','k','l'],['z']];
print_r(parse::sort($arri));

