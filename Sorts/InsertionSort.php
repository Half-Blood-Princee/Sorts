<?php
//INSERTION SORT in this sort values from the unsorted part are picked and placed at the
//correct position (before the large element) in the sorted part.
//Best time: O(n)
//Middle time O(n^2)
//Worst time: O(n^2)
function Insertion_Sort($my_array)                                          //(1)Term our function of sort and specify the passed variables.
{                                                                           //
    for ($i = 1; $i < count($my_array); $i++) {                             //(2)Loops 'for' go through all the elements of the array.
        $cur_val = $my_array[$i];                                           //(3)The value of variable from unsorted array compared with variable of the sorted array.
        $j = $i - 1;                                                        //
        while (isset($my_array[$j]) && $my_array[$j] > $cur_val) {          //(4)If cur_val smaller then
            $my_array[$j + 1] = $my_array[$j];                              //(5)Compared variable from unsorted array with variable of the sorted array.
            $my_array[$j] = $cur_val;                                       //
            $j--;                                                           //
        }                                                                   //
    }                                                                       //
    return $my_array;                                                       //(6) return sorted array and END :D
}                                                                           //
$my_array = [223, -12, 656, 75, 1, 54, 334];//Start Array
echo "Not Sorted Array:</br>";
echo implode($my_array, ',') . "</br>";//"implode"-function it's function unite array to string
echo "Sorted Array:</br>";
echo implode(Insertion_Sort($my_array), ',') . "</br>";//Sort array
/*----------------------------------------------------------------------
|:  Link to Video                                                     :|
|:  ================================================================= :|
|:   https://www.youtube.com/watch?v=OGzPmgsI-pQ                      :|
----------------------------------------------------------------------*/
echo "<a href='https://www.youtube.com/watch?v=OGzPmgsI-pQ'>Youtube video</a>";