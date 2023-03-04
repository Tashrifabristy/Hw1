<?php
function Read($time){
    $num=$time;
    if($time<'12pm'){
        echo "Good Morning</br>";
    }
    elseif($time>'12pm'){
        echo"Good Noon</br>";
    }
    else{
        echo"Welcome to our class</br>";
    }
}
Read('1pm');
?>