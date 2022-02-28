<?php


$odd_equal=[2,3,4,5,6,7,11,10];
reset($odd_equal);
$odd=[];

do{

if(current($odd_equal)%2 == 0)
{
	continue;
}


$odd[]=current($odd_equal);


}while(next($odd_equal));

print_r($odd);













?>
