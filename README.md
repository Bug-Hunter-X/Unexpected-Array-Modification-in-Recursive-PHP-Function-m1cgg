# PHP Recursive Function Bug

This repository demonstrates a subtle bug in a recursive PHP function that unexpectedly modifies the original array passed to it. The function intends to process an array recursively, truncating strings longer than 10 characters. However, due to pass-by-reference behavior, modifications within the recursive call directly affect the original array.

## Bug Description
The `processData` function recursively iterates through the input array.  If it finds a string longer than 10 characters, it truncates it using `substr`. This modification, however, is not creating a copy, therefore it changes the original array. This leads to unexpected behavior and data corruption if the original array is used after the function call.

## Solution
The solution involves creating a copy of the array before making any modifications. This prevents changes to the original array from propagating outside the function's scope.  This is implemented using the `array_map` function to recursively create copies of all nested arrays.