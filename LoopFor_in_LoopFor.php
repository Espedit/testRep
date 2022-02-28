<html>
<head>
<title>
LoopFor in LoopFor

</title>
</head>


<body>



<?php

$disc=array('The-beatles'=> array(
  'Please Please Me',
'1963 – With the Beatles',
'1964 – A Hard Day\'s Night',
'1964 – Beatles for Sale',
'1965 – Help!',
'1965 – Rubber Soul',
'1966 – Revolver',
'1967 – Sgt. Pepper\'s Lonely Hearts Club Band',
'1967 – Magical Mystery Tour (doppio extended play a 45 giri)',
'1968 – The Beatles (detto White Album)',
'1969 – Yellow Submarine',
'1969 – Abbey Road',
'1970 – Let It Be'),

'Led-Zeppelin'=>array(
  'I',
  'II',
  'III',
   'VI',
   'Houses of the Holy',
   'Physical Graffiti',
   'Presence',
   'In Through the Out Door',
   'Coda'



));

for($a = 1; $a <= 5; $a++) {
        for($b = 1; $b <= $a; $b++) {
            echo "#";
            if($b < $a) {
               echo " ";
            }
        }
        echo "<br />";
    }


echo '<br<br>';


for($a =1;$a<=10; $a++)
{

  for($b=1;$b<=$a; $b++)
  {
     echo "$b";



  }
  echo"<br />";
}


var_Dump($disc);

$keys=array_keys($disc);

for($ind=0; $ind<count($disc); $ind++)
{
  echo $keys[$ind].'{<br>';

    foreach($disc[$keys[$ind]] as $k => $v)
    {
      echo $k. ':'. $v.'<br>';
}

echo'}<br>';
}


















 ?>



















</body>
</html>
