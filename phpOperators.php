<?php 

//--------------------Php Operators----------------------//

//---------------------Question #1----------------------//

//Write a PHP script to see if the specified year is a leap year or not.
{
        
        function yearLeap($year)
        {
            $flag = false;
            if($year%4==0)
            {
                if($year%100 != 0 )
                {
                    echo "Leap year";

                }else if($year%400 == 0)
                {
                    echo "Leap year";
                }else{
                    echo "NOT Leap year";
                }
            }else{
                echo "NOT Leap year";
            }
            echo "<br>";
        }
        //------Case #1------>
        yearLeap(2100);
        //------Case #2------>
        yearLeap(2016);
           
}

echo "<br><br>";
//---------------------Question #2----------------------//


// Write a PHP script to check the season depending on set temperature if the
// temperature is below 20 we are in winter otherwise the season is summe.

{
        $temperatureAvg = 20;
        $temp = 30;

        if($temp >= $temperatureAvg)        
            echo "Summer";
        else       
            echo "winter";        
}


echo "<br><br>";
//---------------------Question #3----------------------//


// Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned
{
    function  mapped($num1,$num2)
    {
        if($num1 != $num2)
        {
            echo $num1 + $num2;
        }else{
            echo ($num1 * 3)+($num2 * 3);
        }
        echo "<br>";
    }
    //------- Case #1 ---->
    $n1 = 5;
    $n2 = 5;
    mapped($n1,$n2);
    //------- Case #2 ---->
    $n3 = 6;
    $n4 = 7;
    mapped($n3,$n4);
}



echo "<br><br>";
//---------------------Question #4----------------------//

// Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.

{


    function absolute($num1)
    {
        if($num1 <= 100)
        {
            $diff = abs($num1-100);
            echo "<b>absolute difference between:</b> |$num1 - 100| = ".$diff;
        }else{
            $diff = $num1 - 100;
            echo "<b>triple the absolute difference:</b> |$num1 - 100| = ".$diff*3;
        }       
        echo "<br>"; 
    }

    //------- Case #1 ---->
    absolute(102);
    //------- Case #2 ---->
    absolute(88);
}


echo "<br><br>";
//---------------------Question #5----------------------//

// Write PHP script to check two integers, and return true if one is 30 or if their sum
// is 30.


{
    function sum30($n1,$n2)
    {
        if($n1 == 30 || $n2 ==30 ||($n1+$n2)==30)        
            echo "true";
        else
            echo "false";

    echo "<br>";
    }
    //------- Case #1 ---->
    sum30(31,30);
    //------- Case #2 ---->
    sum30(30,30);
    //------- Case #3 ---->
    sum30(15,15);
    //------- Case #4 ---->
    sum30(30,12);
    //------- Case #5 ---->
    sum30(12,12);
}


echo "<br><br>";
//--------------------- Question #6  ----------------------//

// Write a PHP script to check an integer and return an integer if it is within 10 of
// 100 or 200.
{
    function find10($n){
       echo (abs(100-$n)<=10 || abs(200-$n)<=10)? "true":  "false";   
            
    echo "<br>";
    }

    //------- Case #1 ---->
    find10(112);
    //------- Case #2 ---->
    find10(50);
    //------- Case #3 ---->
    find10(100);
    //------- Case #4 ---->
    find10(200);
     //------- Case #5 ---->
     find10(20);    
}



echo "<br><br>";
//--------------------- Question #7  ----------------------//

// Write in PHP script to check if the given positive number is a multiple of 3 or a
// multiple of 7

{
    function multi($n)
    {
        if($n % 7 == 0 && $n % 3 ==0)
            echo "multiple of 3 & 7";
        elseif($n % 3 == 0)
            echo "multiple of 3";
        elseif($n % 7 == 0 )
            echo "multiple of 7";
        else
            echo "Is not multiple of this Integer";

    echo "<br>";
    }

    //------- Case #1 ---->
        multi(49);
    //------- Case #2 ---->
        multi(21);
    //------- Case #3 ---->
        multi(6);
    //------- Case #4 ---->
        multi(5);
}


echo "<br><br>";
//--------------------- Question #8  ----------------------//

// Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string
// unchanged.

{
    $string = "Hello World!";
    $added = "Hello";
    $str = explode(" ",$string);
    if($str[0]!=$added)
    {
        echo "<b> We Add '$added' to the front: </b>";
        array_unshift($str,$added);
        print_r( join(" ",$str));
    }else{
        echo "<b> Default String: ".$string."</b>";
    }
}


echo "<br><br>";
//--------------------- Question #9 ----------------------//

// Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive

{
    function Remove($string,$from,$to)
    {
        substr($string,$from,$to);
        echo substr($string,$from,$to);

     echo "<br>";
    }

    //------- Case #1 ---->
        Remove("Suheib Adel Mohammad Alabed",5,10);
    //------- Case #1 ---->
        Remove("Suheib Adel Mohammad Alabed",4,5);
    //------- Case #1 ---->
        Remove("Suheib Adel Mohammad Alabed",6,7);
}


echo "<br><br>";
//--------------------- Question #10 ----------------------//

//Write PHP script to check two integers if either is in the range 100..200 inclusive.


{
    function range1($n1,$n2)
    {
        if($n1 >=100 && $n1<=200 && $n2>=100 && $n2<=200)
        {
            echo "$n1 & $n2 in the range <b>100 <= $n1,$n2 <= 200</b>";
        }else
            echo " $n1 & $n2 out of the range <r>100 AND 200</b>";

    echo "<br>";
    }

     //------- Case #1 ---->
        range1(143,198);
     //------- Case #2 ---->
        range1(201,198);
     //------- Case #3 ---->
        range1(99,198);
     //------- Case #4 ---->
         range1(100,200);
}


echo "<br><br>";
//--------------------- Question #11 ----------------------//

// Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false.


{
    function range2($n1,$n2)
    {
        if($n1 >=20 && $n1<=50 )
        {            
            if($n2>=20 && $n2<=50)
                echo "$n1 & $n2 in the range <b>20 <= $n1,$n2 <= 50</b>";
            else
                 echo "$n1 in the range <b>20 <= $n1 <= 50</b>";
        }elseif($n2 >=20 && $n2<=50 )
            echo "$n2 in the range <b>20 <= $n2 <= 50</b>";
        else
            echo " $n1 & $n2 out of the range <r>20 AND 50</b>";


    echo "<br>";
    }

     //------- Case #1 ---->
        range2(21,44);
     //------- Case #2 ---->
        range2(11,44);
     //------- Case #3 ---->
        range2(21,55);
     //------- Case #4 ---->
        range2(11,55);
    
}



echo "<br><br>";
//--------------------- Question #12 ----------------------//

//Write PHP script to check for the largest number among three integers

{
    function largest($n)
    {
        $max = $n[0];
        for($i=0;$i<count($n);$i++)
        {
            echo "<b>".$n[$i].",</b>";
            if($n[$i]>=$max)
            {
                $max= $n[$i];
            }
        }
        echo " Max number is <b>". $max."</b><br>";
    }

    //------- Case #1 ---->
        $number  = array(8,7,6);
        largest($number);
    //------- Case #2 ---->
        $number  = array(1,3,1,2,1,1,1,1,1,0);
        largest($number);
    //------- Case #3 ---->
        $number  = array(8,7,6,23,6,14,67,23,64,123,5,23,6,34);
        largest($number);
    //------- Case #4 ---->
        $number  = array(8,7,6,23,6,2,32,0,1,2,89,3,3,2,1,);
        largest($number);
}





    echo "<br><br>";
//--------------------- Question #13 ----------------------//


// Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal.


{
    function closest($n1)
    {
        if(abs(100-$n1)==0)
        {
            echo "0";
        }elseif(abs(100-$n1)<=2)
        {
            echo "The Number $n1 is Very Closest from 100";
        }else
        {
            echo "$n1";
        }
    
    echo "<br>";
    }

    //------- Case #1 ---->
        closest(98);
    //------- Case #2 ---->
        closest(99);
    //------- Case #3 ---->
        closest(100);
    //------- Case #4 ---->
        closest(103);
    //------- Case #5 ---->
        closest(4);

}


echo "<br><br>";
//--------------------- Question #14 ----------------------//


// Write a PHP script that accepts two integers and returns an integer if one of them
// is 5, their sum, or difference between them is 5.


{
    function num5($n1,$n2)
    {
        if($n1 == 5 || $n2 == 5)
        {
            echo "One of them is <b>5</b></br>";
        }
        if(abs($n1-$n2)==5 || ($n1+$n2)==5)
        {
            echo "The different Or Sum btw num is <b>5</b></br>";
        }
    
    echo "<br>";
    }

    num5(5,6);
    num5(10,5);
    num5(3,2);
    num5(9,4);
}




echo "<br><br>";
        //--------------------- The End ----------------------//
        //------------------  Suheib Alabed  ----------------------//






?>