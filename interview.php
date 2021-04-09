<?php
// final results
$firstBet = "2-2";
$secondBet = "2-0";
$thirdBet = "0-1";
$forthBet = "3-3";
$fifthBet = "2-1";
 $show  = "";
// his bet 2-2, 3-1, 4-1, 0-1, 4-4
$hisFirstBet = "2-2";
$hisSecondBet = "3-1";
$hisThirdBet  = "4-1";
$hisForthBet  = "0-1";
$hisFifthBet  = "4-4";

if($firstBet === $hisFirstBet){
  $show .= "you lose the bet";
}elseif( $secondBet == $hisSecondBet){
   $show .=  "you lose the bet";
}elseif( $thirdBet == $hisThirdBet){
   $show .= "you lose the bet";
}elseif($forthBet == $hisForthBet){
   $show .="you lose the bet";
}elseif($fifthBet == $hisFifthBet){
   $show .= "you lose the bet";
}else{
   $show .= "you win the bet";
}
echo  $show;
?>