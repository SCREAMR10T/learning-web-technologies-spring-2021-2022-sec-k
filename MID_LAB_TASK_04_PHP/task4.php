<?php
      $number1=3;
      $number2=5;
      $number3=2;

      if($number1>$number2 && $number1>$number3){
        echo "$number1 is largest";
      }
      else{
        if($number2>$number1 && $number2>$number3){
          echo"$number2 is largest";
        }
        else
          echo "$number3 is largest";
      }
?>