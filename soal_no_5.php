<?php
class generate
{
	public function created($length){
		$str = 'abcdefghijklmnopqrstuvwxyz0123456789';
		for($xx=0;$xx<$length;$xx++){
		$ran = rand(0,strlen($str)-1);
		$string.=$str{$ran};
		}
		return $string;
		}
		
	public function unique($jmlh,$len){
		for($i=0;$i<$jmlh;$i++){
			$str = $this->created($len);
			while(in_array($str,array())){
				$str = $this->created($len);
				}
				print $str;
				print "\n";
				}
				}
				}
				
				
				$make = new generate();
				print($make->unique(3,32));
				