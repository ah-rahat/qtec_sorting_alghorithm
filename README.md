The explanation of how I solved the array sorting Problem

1:The searchInsertPosition function takes the sorted $nums array and the $target number as input.

2:It initializes $left and $right pointers for binary search.

3:It iteratively narrows down the search range until $left pointer is less than or equal to $right.

4:Within each iteration, it calculates the middle index ($mid) and compares the value at $mid with the $target.

5:If the value at $mid is equal to the $target, it returns $mid.

6:If the value at $mid is less than the $target, it updates the $left pointer to $mid + 1.

7:If the value at $mid is greater than the $target, it updates the $right pointer to $mid - 1.

8:If the loop exits, it means the $target was not found. The function returns the $left pointer, which indicates the index where the $target would be inserted to maintain sorted order.

I used Binary Search Alghorithm to find the index of the target element 
