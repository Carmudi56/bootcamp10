<?php
//Buat ka arka.. soal nya yg ini bikin kepala pusing ka :v
class view
{
	public function check($num){
		 if($num%2!=0){
			return true;
			}else{
				return false;
				}
				}
				
	public function cetak($int){
if(is_numeric($int)){
		if(self::check($int)){
		for($i=0;$i<$int;$i++){
			$ctm = null;
			$intmC = $int - $i;
			$jlh = $int / 2 + 0.5;
			for($ii=0;$ii<$int;$ii++){
				$intm = $int - $ii;
				if($intmC==$jlh){
				if($intm==1){
					$ctm = null;
					}
					if(!isset($ctm)){
				print "*";
				$ctm = 1;
				}else{
					print " * ";
					}
					}else{
				if($intm==1){
					$ctm = null;
					}
				if(!isset($ctm)){
				print "*";
				$ctm = 1;
				}else{
					print " = ";
					}
				}
				}
				print "\n";
				}
				}else{
					print "Nilai bukan bilanga Ganjil!\n";
					exit;
					}
					}else{
						print "Hanya menerima input numeric!\n";
						exit;
						}
				}
				}
				
				
				
				print view::cetak(5);