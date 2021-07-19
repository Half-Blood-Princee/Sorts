<?php
//BUBBLE SORT is a simple sorting algorithm that iterates through a list to sort multiple times,
//compares each pair of adjacent elements, and swaps them.
//Best time: O(n)
//Midle time O(n^2)
//Worst time: O(n^2)
function Bubble_Sort($my_array)                                             //(1) Term our function of sort and specify the passed variables
{                                                                           //
    do {                                                                    //(2) Use loops 'do while' for repeating the cycle traversing the entire array until we get the specified parameter $params=true.
        $params = false;                                                    //
        for ($i = 0, $length = count($my_array) - 1; $i < $length; $i++) {  //(3) Loops 'for' go through all the elements of the array.
            if ($my_array[$i] > $my_array[$i + 1]) {                        //(4) Construction 'if' first value bigger second value then ->(5)
                list($my_array[$i + 1], $my_array[$i]) =                    //(5)List swaps adjacent values.
                    array($my_array[$i], $my_array[$i + 1]);                //
                $params = true;                                             //(6)Transfer $params=true by doing loops "do while" and exit from loops with ->(7)
            }                                                               //
        }                                                                   //
    } while ($params);                                                      //
    return $my_array;                                                       //(7) return sorted array and END :D
}                                                                           //
$my_array = [223, -12, 656, 75, 1, 54, 334];//Start Array
echo "Not Sorted Array :</br>";
echo implode($my_array, ',') . "</br>";//"implode"-function it's function unite array to string
echo "Sorted Array:</br>";
echo implode(Bubble_Sort($my_array), ',') . "</br>";//Sort array
/*----------------------------------------------------------------------
|:  Link to Video                                                     :|
|:  ===========================                                       :|
|:   https://www.youtube.com/watch?v=lyZQPjUT5B4                      :|
----------------------------------------------------------------------*/
echo "<a href='https://www.youtube.com/watch?v=lyZQPjUT5B4'>Youtube video</a>";