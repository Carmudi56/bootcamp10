<?php

class myself
{
	public $name;
	public $address;
	public $hobbies;
	public $is_married;
	public $school;
	public $skill;
	
	public function detail($name,$address,$hobbies,$is_married,$school,$skill){
		return json_encode(['name'=>$name,'address'=>$address,'hobbies'=>$hobbies,'is_married'=>$is_married,'school'=>$school,'skill'=>$skill]);
		}
		}
		
		$myDetail = new myself();
		$myDetail->name         = 'Carmudi';
		$myDetail->address     = 'kp.bulak macan,rt.02/03, Kel.harapan jaya, Kec.Bekasi Utara';
		$myDetail->hobbies     = ['Bikin Program','Tidur :3'];
		$myDetail->is_married = false;
		$myDetail->school       = ['highSchool'=>'SMK CIPTA KARYA, BEKASI'];
		$myDetail->skill		   = ['programing'=>['php','lua']];
		
		print myself::detail($myDetail->name,$myDetail->address,$myDetail->hobbies,$myDetail->is_married,$myDetail->school,$myDetail->skill);