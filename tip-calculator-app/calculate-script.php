<?php

//create variables to store info 
$submit = filter_input(INPUT_POST, 'submit'); 

//create a function to calculate the tip percentage and return 

function tipCalculate($total, $percentage){ 
    $total = $total * ($percentage * 0.01);
    echo "<p> If your bill is $total and you'd like to tip $percentage, you should tip $total</p>";
}
//if submit is set, invoke the function with the required arguments 
if(isset($submit)) {
    $bill_total = filter_input(INPUT_POST, 'amount');
    $tip_percentage = filter_input(INPUT_POST, 'percentage', FILTER_VALIDATE_FLOAT);
    tipCalculate($bill_total, $tip_Percentage);


    if ($bill_total === false)
    {
        echo "<p>Please provide a numeric value!</p>";
    }
    else
    {
        tipCalculate($bill_total, $tip_percentage);
    }
}

?>