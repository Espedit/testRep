<?php

echo'<br><b>While</b><br>';

$arr=['Rock','Pop','Soul','Funky','Reggae','Jazz'];



$ind=0;
while($ind<count($arr))
{

  if($ind === 3)

  {break;}


    echo $arr[$ind]."<br/>";


$ind++;




}



echo'<br><br><b> While &nbsp;<i>example 2</i></b><br>';

$num=0;

while($num < 8)
{

 if($num == 4)
 {
   $num++;
   continue;
 }

echo "$num\n";

$num++;

}






echo'<br><br><b>Do-while</b><br>';






 ?>
