<?php
//QUICK SORT is compare all other elements with the pivot one and rearrange them in the array so as to split the array into three continuous segments following one after another
//For segments of “left” and “right” values, perform the same sequence of operations recursively if the length of the segment is greater than one.
//Best time: O(n)
//Middle time: O(n log n)
//Worst time: O(n^2)
function Quick_Sort($my_array)                                                //(1) Term our function of sort and specify the passed variables.
{                                                                             //
    if (count($my_array) <= 1) {                                              //(2)First of all we look for correct array and not only...
        return $my_array;                                                     //(6)And at last we back to first loops 'if'. By this loops we see the last(or null) value.
    }                                                                         //Because in Quick_sort we divide the array on left and right arrays. And then left and right we divide on another left and right arrays.
    $pivot = $my_array[0];                                                    //
    $left = array();                                                          //
    $right = array();                                                         //
    for ($i = 1; $i < count($my_array); $i++) {                               //(3)We go through the array.
        if ($my_array[$i] < $pivot) {                                         //(4)Divide array values in left and right arrays.
            $left[] = $my_array[$i];                                          //
        } else {                                                              //
            $right[] = $my_array[$i];                                         //
        }                                                                     //
    }                                                                         //
    return array_merge(Quick_Sort($left), array($pivot), Quick_Sort($right)); //(5)Merge our arrays.
}

$my_array = [223, -12, 656, 75, 1, 54, 334];//Start Array
echo "Not Sorted Array :</br>";
echo implode($my_array, ',') . "</br>";//"implode"-function it's function unite array to string
echo "Sorted Array:</br>";
echo implode(Quick_Sort($my_array), ',') . "</br>";//Sort array
/*----------------------------------------------------------------------
|:  Link to Video                                                     :|
|:  ===========================                                       :|
|:   https://www.youtube.com/watch?v=ywWBy6J5gz8                      :|
----------------------------------------------------------------------*/
echo "<a href='https://www.youtube.com/watch?v=ywWBy6J5gz8'>Youtube video</a>";