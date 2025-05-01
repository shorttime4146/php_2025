<?php 
    $x=3;
    $y=6;
    $z=9;

    // if ($x<$y && $x<$z){
    //     echo "The smallest numer is:$x";
    // }


//-------------even && odd-------without function-

// $value=50;
// if($value%2==0){
//     echo "This Number is Even";

// }else{
//     echo "This Number is Odd";
// }

//-------------even && odd-------with function

function check_even_odd_num($value){

    if($value%2==0){
        echo "This Number is Even";
    
    }else{
        echo "This Number is Odd";
    }
}

$xx=3;
$yy=6;
$zz=9;
function largest_num($x,y$,$z){

    if($x>$y && $x>$z){
        echo "The Largest Number is:$x";
    }elseif($y>$z && $y>$x){
        echo "The Largest Number is:$y";
    }else{
        echo "The Largest Number is:$z";
    }
}

largest_num(10,20,30)
?>