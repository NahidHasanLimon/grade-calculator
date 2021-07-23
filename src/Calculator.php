<?php 

namespace NahidHasanLimon\CGPACalculator;

class Calculator
{
    // GradeCalculator
    public function grade_calculator($number){

        if ($number>80 && $number<=100) {
            return "A+";
        }
        else if ($number>=70 && $number<80) {
            return "A";
        }
        else if ($number>=60 && $number<70) {
            return "A-";
        }
        else if ($number>=50 && $number<60) {
            return "B";
        }
        else if ($number>=40 && $number<50) {
            return "C";
        }
        else if ($number>=33 && $number<40) {
            return "D";
        }
        else if($number<0 && $number>100 ){
            return "Wrong Input";
        }
        else{
            return "Please Check your input number";
        }
    }
}

