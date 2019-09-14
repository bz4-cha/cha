<?php
$bio = array ( 
	array(
"name"		  =>"Oki Rivadli", 
"age"		  =>24,	
"address"	  =>"Padang",
"interest_in_coding"=>true,
"is_married"  =>false),
array(
"hobbies"	  => array('Climbing','Coding','studies obout IT')
),

array(
"list_school" => array(
	array(
		"name"		=>"SMA N 2 Lubuk Basung",
		"year_in"	=>"2010",
		"year_out"	=>"2013",
		"major"		=>"IPS"
	),
	array(
		"name"		=>"SMP N 1 Lubuk Basung",
		"year_in"	=>"2007",
		"year_out"	=>"2010",
		"major"		=>null
	),
	array (
		"name"		=>"SD N 27 Tapian Kandis",
		"year_in"	=>"2001",
		"year_out"	=>"2007",
		"major"		=>false
	)
)
),

array(
"skilss"	=> array(
	array(
		"skill_name"=>"PHP",
		"Level"		=>"Beginer"
	),
	array(
		"skill_name"=>"Networking",
		"Level"		=>"Advanced"
	)

)
)
);



echo json_encode($bio);