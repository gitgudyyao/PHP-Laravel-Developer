<?php

/*
//Question 1
A binary gap within a positive integer N is any maximal sequence of consecutive zeros
that is surrounded by ones at both ends in the binary representation of N.

For example, number 9 has binary representation 1001 and contains a binary gap of
length 2. The number 529 has binary representation 1000010001 and contains two
binary gaps: one of length 4 and one of length 3. The number 20 has binary
representation 10100 and contains one binary gap of length 1. The number 15 has
binary representation 1111 and has no binary gaps.

Write a function:

function solution($N);
that, given a positive integer N, returns the length of its longest binary gap. The
function should return 0 if N doesn't contain a binary gap.

For example, given N = 1041 the function should return 5, because N has binary
representation 10000010001 and so its longest binary gap is of length 5.

Example 2: given N = 52, which has a binary representation of 110100, the longest
binary gap will be 1.

*/

function solution($N)
{
    $binaryNo =  decbin($N); // Fetch binary of number
	
    $binaryNo = trim($binaryNo, "0"); // Remove Zero
	
    $binaryGap =  explode("1", $binaryNo); // explode to split 1 
	
    $binaryLongest = array_map('strlen', $binaryGap); //use to apply strlen calback to the arrays
	
	return max($binaryLongest); //return maximum length of binary gap
}

//For example, given N = 1041 the function should return 5, because N has binary
//representation 10000010001 and so its longest binary gap is of length 5.
echo solution(1041);//Answer correct

//Example 2: given N = 52, which has a binary representation of 110100, the longest
//binary gap will be 1.
echo solution(52); //Answer correct