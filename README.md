# Uncommon PHP Bug: Infinite Recursion in Nested Array Processing

This repository demonstrates an uncommon bug that can occur in PHP when recursively processing nested array data. The bug arises from the potential for infinite recursion if the array structure contains circular references.

## Bug Description

The `processData` function recursively traverses a nested array, modifying strings that contain 'Error'. However, if the array contains circular references (where an element refers back to itself directly or indirectly), the function will enter an infinite loop, leading to a stack overflow error.

## Bug Solution

The solution involves adding a mechanism to detect and handle circular references. This can be done by using a visited array to track the elements that have already been processed during the recursion.