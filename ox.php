<?php
function win($array) {
  if ( ($arr[0][0] && $arr[0][1] && $arr[0][2] == "x") || ($arr[1][0]&&$arr[1][1]&&$arr[1][2]=="x") || ($arr[2][0] && $arr[2][1] && $arr[2][2] =="x") || ($arr[0][0] && $arr[1][0] && $arr[2][0]=="x") || ($arr[0][1] && $arr[1][1] && $arr[1][2]=="x") || ($arr[2][0] && $arr[1][2] && $arr[2][2]=="x") || ($arr[0][0] && $arr[1][1] && $arr[2][2]=="x") || ($$arr[0][2] && $arr[1][1] && $arr[2][0]=="x")) {
	echo "X-Team Win!";
  }
	elseif ( ($arr[0][0] && $arr[0][1] && $arr[0][2] == "o") || ($arr[1][0]&&$arr[1][1]&&$arr[1][2]=="o") || ($arr[2][0] && $arr[2][1] && $arr[2][2] =="o") || ($arr[0][0] && $arr[1][0] && $arr[2][0]=="o") || ($arr[0][1] && $arr[1][1] && $arr[1][2]=="o") || ($arr[2][0] && $arr[1][2] && $arr[2][2]=="o") || ($arr[0][0] && $arr[1][1] && $arr[2][2]=="o") || ($arr[0][2] && $arr[1][1] && $arr[2][0]=="o") ) {
	echo "O-Team Win!";}
	else {echo "Win Friendship :)";}
}

$fullfield = ["","","","","","","","",""];
$field = array_chunk($fullfield,3);
function playX($arr) {
  start:
  echo "choose field\n";
  $handler = fopen("php://stdin","r");
  $choise = fgets($handler);
      if ($choise ==1) {
        $arr [0][0] = "x";
      }
      elseif($choise==2) {
        $arr[0][1] = "x";
      }
      elseif($choise==3) {
        $arr[0][2] = "x";
      }
      elseif($choise==4) {
        $arr[1][0] = "x";
      }
      elseif($choise==5) {
        $arr[1][1] = "x";
      }
      elseif($choise==6) {
        $arr[1][2] = "x";
      }
      elseif($choise==7) {
        $arr[2][0] = "x";
      }
      elseif($choise==8) {
        $arr[2][1] = "x";
      }
      elseif($choise==9) {
        $arr[2][2] = "x";
      }
      else {
        echo 'enter again field!';
        goto start;
      }
    return $arr;
  }
function playO($arr) {
  start:
  echo "choose field\n";
  $handler = fopen("php://stdin","r");
  $choise = fgets($handler);
      if ($choise ==1) {
        $arr[0][0] = "o";
      }
      elseif($choise == 2) {
        $arr[0][1] = "o";
      }
      elseif($choise==3) {
        $arr[0][2] = "o";
      }
      elseif($choise==4) {
        $arr[1][0] = "o";
      }
      elseif($choise==5) {
        $arr[1][1] = "o";
      }
      elseif($choise==6) {
        $arr[1][2] = "o";
      }
      elseif($choise==7) {
        $arr[2][0] = "o";
      }
      elseif($choise==8) {
        $arr[2][1] = "o";
      }
      elseif($choise==9) {
        $arr[2][2] = 'o';
      }
      else {
        echo 'enter again field!';
        goto start;
      }
    return $arr;
  }
$step1 = playX($field);
$field = $step1;
$step2 = playO($field);
$field = $step2;
$step3 = playX($field);
$field = $step3;
$step4 = playO($field);
$field = $step4;
$step5 = playX($field);
$field = $step5;
$step6 = playO($field);
$field = $step6;
$step7 = playX($field);
$field = $step7;
$step8 = playO($field);
$field = $step8;
$step9 = playX($field);
$field = $step9;
var_dump($field);





































