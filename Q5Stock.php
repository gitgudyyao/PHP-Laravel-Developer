<?php

/*
You are given an array, which is a representation of stock market prices over 2
weeks. Each element of the array represents share price in one day (e.g. array index
0 = share price in day 1, array index 4 = share price in day 5).
Write a function to analyze the data, and return the trades (buy/sell) that needed to
be done in order to maximize profit. There could be multiple buying and selling
happening in 2 weeks' time.
The catch is you can only hold one trade at one time. You can only either buy or sell
in one day – cannot do both. Your algorithm must work for any variation of stock
market data, and for any duration.
Example:
Stock market data for 2 weeks:
[100, 80, 50, 145, 500, 400, 450, 300, 10, 55, 40, 15, 80, 90]
If you analyze this data by looking, we can easily tell that we can maximize profit by
doing 4 trades.
So the results are:
BUY 50, SELL 500 (BUY day 3, SELL day 5)
BUY 400, SELL 450 (BUY day 6, SELL day 7)
BUY 10, SELL 55 (BUY day 9, SELL day 10)
BUY 15, SELL 90 (BUY day 12, SELL day 14)
*/


function solution($A = [])
{
  		$profit = 0;
        $buyIndex = -1;
        $days = count($A);
        $Increased = ($A[0]<$A[1]);
        if($Increased){
            $Index = 0;
        }
        for($i=1; $i<$days; $i++){
            //if is Increased perviously
            if($Increased){

                if($A[$i]>$A[$i+1]){
                    if($Index != -1 ){
                        $profit += $A[$i]-$A[$Index];
                    }
                    $Index = $i+1;
                    $Increased = false;
                }
            }
            else{ //decreasing
                if($A[$i]<$A[$i+1]){
                    $Index = $i;
                    $Increased = true;
                }
            }
        }
        return $profit;


    
}

$stock = array('100', '80', '50', '145', '500', '400', '450', '300', '10', '55', '40', '15', '80', '90');
print_r (solution($stock)); //profit is 620