<?php
/*
Algorithm that takes the array of 3 chars - $arr - and the string cosisted only with these chars - $str - and returns the first of shortest seqenences (substring) that cosists of  ALL of the chars in $arr
*/
//array of chars
$arr = ['x', 'y', 'z'];
//string to check
$str = 'xyyxyyxyyyzyyx';
$length = strlen($str);

//setting the var that holds the shortest substring
$shortestWord='';

//check if all of the chars in $arr are used at least once in the $str
$ifAllExist=false;

for ($i=0; $i<$length; $i++)
{
	if($str[$i]==$arr[0]){
		for ($i=0; $i<$length; $i++)
		{	
			if($str[$i]==$arr[1]){
				for ($i=0; $i<$length; $i++){
					if($str[$i]==$arr[2])
						$ifAllExist = true;
				}
			}
		}
	}
}

if ($ifAllExist==false) echo "NO RESULTS FOR THE STRING";

//algorithm itself: looking in substrings of $str for the shortest sequence, that holds all of the chars from $arr;

else
{
	for ($i=0; $i<$length; $i++){
		$finalWord = '';
		$encountered = [false, false, false];
			{		
		for ($j=$i; $j<$length; $j++){
			
			
				switch($str[$j]){
					case $arr[0]:
					$encountered[0] = true;
					$finalWord = $finalWord.$str[$j];
					break;
					
					
					case $arr[1]:
					$encountered[1] = true;
					$finalWord = $finalWord .$str[$j];
					break;
					
					
					case $arr[2]:
					$encountered[2] = true;
					$finalWord = $finalWord.$str[$j];
					break;
				}	
				
				if($encountered[0]==true && $encountered[1]==true && $encountered[2]==true){
					
			if($i==0){
				$shortestWord=$finalWord;
				$finalWord = '';
			}
			else if(strlen($shortestWord)>strlen($finalWord)){
				$shortestWord=$finalWord;
				$finalWord = '';
			}
					break;
				}
	
			}
	
		}

	}
	
}
if ($ifAllExist==true){
echo "THE SHORTEST:";
echo "</br>";
echo $shortestWord;
}
?>