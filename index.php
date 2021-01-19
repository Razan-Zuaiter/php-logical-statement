<?php 
//Question 1


function Electricity($unit){
  $Rs=1;
if($unit <50){
  $Rs=(2.5*$unit );
echo "your Electricity bill is ".$Rs;
}elseif($unit<150 && $unit >=50){
  $Rs=(5*$unit );
  echo "your Electricity bill is ".$Rs;
}elseif($unit<250 && $unit >=150){
  $Rs=(6.2*$unit );
  echo "your Electricity bill is ".$Rs;
}elseif($unit >=250){
  $Rs=(7.5*$unit );
  echo "your Electricity bill is ".$Rs;
}else{
echo "you failed";
}}
Electricity(120);
echo "<br>"."*********************"."<br>";


//Question 2

function Addition( $var1,$var2) {
  echo  "{$var1} +  {$var2} = ". ($var1+$var2) ;
 }
 Addition(10,5);
 echo "<br>"."*********************"."<br>";
 
 function sub($var1,$var2) { 
    echo  "{$var1} -  {$var2} = ". ($var1-$var2) ;
 }
 sub(6,8);
 echo "<br>"."*********************"."<br>";
 
 function multi($var1,$var2) {
  echo   "{$var1} *  {$var2} = ". ($var1*$var2) ;
 }
 multi(10,6);
 echo "<br>"."*********************"."<br>";
 
 function division($var1,$var2) {
  echo   "{$var1} / {$var2} = ". ($var1/$var2) ;
 }
 division(9,3);
 echo "<br>"."*********************"."<br>";

//Question 3
function Vote( $var1) {
 
  if ( $var1 >=18){
      echo "you allowed to vote";
  }else{
      echo "you are not allowed to vote ";
  }
}
Vote(20);
echo "<br>"."*********************"."<br>";

//Question 4

function check_int($number){
if(is_integer($number) || is_double( $number))
{
  if( $number>=0){
      echo " {$number} is an positive number"  ;
  }else{
      echo " {$number} is an nigative number"  ;
  }
}
}
check_int(5.6);
echo "<br>"."*********************"."<br>";











?>
