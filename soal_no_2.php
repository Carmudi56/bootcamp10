<?php

class validasi
{
	
	public function check($data,$type){
		if($type=='username'){
			$uppercase = preg_match('@[A-Z]@', $data);
			$lowercase = preg_match('@[a-z]@', $data);
			if(!$uppercase || !$lowercase || strlen($data)!=8){
				return false;
				}else{
					return true;
					}
					}elseif($type=='password'){
						$uppercase = preg_match('@[A-Z]@', $data);
						$lowercase = preg_match('@[a-z]@', $data);
						$number    = preg_match('@[0-9]@', $data);
						$special = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/',$data);
						if(!$uppercase || !$lowercase || !$number || !$special || strlen($data)!=8){
							return false;
							}else{
								return true;
								}
								}
}
								
	public function username($user){
		return self::check($user,'username')? 'valid':'invalid';
		}
		public function password($pass){
		return self::check($pass,'password')? 'valid':'invalid';
		}
		}
		
		$valid_user = 'jJjJjJjJ';
		$invalid_user = 'jjjjjjjj';
		$valid_pass = '~f69FF@&';
		$invalid_pass = 'js3jd2od8';
		
		print "Check username: \nCheck => $valid_user ";
		print validasi::username($valid_user);
		print "\nCheck => $invalid_user ";
		print validasi::username($invalid_user);
		
		
		print "\nCheck Password: \nCheck => $valid_pass ";
		print validasi::password($valid_pass);
		print "\nCheck => $invalid_pass ";
		print validasi::password($invalid_pass);
		