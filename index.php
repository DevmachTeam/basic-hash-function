<?php
//Devmachteam hash function

function hash_devmachteam(){
	$numbers=rand(1111,9999);
	$loop_variable=rand(1,6);
	$loop_variable_end=$loop_variable+6;
	$letters=array(
	'a','A','b','B','c','C','d','D','e','E','f','F','g','G','h','H',
	'i','I','j','J','k','K','l','L','m','M'	
	);
	$chars=array(
		'!','^','+','%','&','/','(',')','=','?','.',';','..',
		'½','{','[',']','}','-','_','|'	
	);
	$create_hash="";
	for($i=$loop_variable;$i<$loop_variable_end;$i++)
	{
		$create_hash.=$letters[$i].$chars[$i].$numbers;
	}
	
	print $create_hash;
}

hash_devmachteam();
