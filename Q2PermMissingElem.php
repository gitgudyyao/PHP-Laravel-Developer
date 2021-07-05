<?php

/*
A zero-indexed array A consisting of N different integers is given. The array contains
integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

function solution($A);
that, given a zero-indexed array A, returns the value of the missing element.

For example, given array A such that:

A[0] = 2
A[1] = 3
A[2] = 1
A[3] = 5

the function should return 4, as it is the missing element.

Example 2: given array A such that A = [2,3], the function should return 1, as it is the
missing element.

Assume that:

N is an integer within the range [0..100,000];
the elements of A are all distinct;
Each element of array A is an integer within the range [1..(N + 1)].
Array A can be empty
*/


function solution($A){

	$arraySum = array_sum($A);//set sum of array
    
	$totalSum = 0; //set total sum
	
    for ($i = 1; $i <= count($A) + 1; $i++) {
        $totalSum += $i;
    }
	//return value of missing element
    return $totalSum - $arraySum;

}


echo solution([2,3,1,5]); //Answer is 4

echo solution([2,3]); //Answer is 1