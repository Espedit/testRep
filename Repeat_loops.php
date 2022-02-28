<?php


$example[1]='Mark';
$example[2]='Philip';
$example[3]='David';
$example[4]='Karl';
$example[5]='Simon';


echo'<br><br><b>1. Loop for</b><br>';


for($ind=1;$ind<sizeof($example); $ind++)
	
	{  
		echo"$example[$ind]\n";
		
	if($ind === 5)
	    {break;}
		
		
		
		
	}



echo'<br><br> <b>2. Loop foreach return Keys and values</b><br>';



foreach($example as $key => $value)

{echo "$key)"."$value <br>";}


echo "<br><br> <b>3.Loop While <br>";



while($example )
	
	{
		var_dump($example);
		
		$ind++;
		
		if($example[5] == 'Simon')
			
			{break;}
		
	}


echo'<br><br> <b>4.loop Do-while</b><br>';


do{
	var_dump($example);
	
	
	
}while($example <= 5);


	echo '<br><br> <b>5.loop do while return total of index and random values</b><br>';
	
	
	$index=0;
	do{
		
		
		$numbers=random_int(1,6);
		
		printf("%d\n",$numbers);
		
		$index++;
		
		
	}while($index < 6);
	
	printf("Tot: %d",$index);




echo'<br><br><b> 6.Loop Do-While leave Odd Values</b><br>';

$equal_odd=array(1,2,3,4,5,6,7,8,9,10);

reset($equal_odd);
$odd=[];
do{
	
	if(current($equal_odd)% 2 == 0)
	{
		
		continue;
		
	}
	
	
	$odd[]=current($equal_odd);
	
}while(next($equal_odd));

print_r($odd);

echo'<br><br><b> Loop For in Loop For</b><br>';












?>