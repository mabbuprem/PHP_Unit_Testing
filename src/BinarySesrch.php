<?php

/**
 * Program for binary search 
 */
class BinarySearch
{
    /**
     * Function for Searching the Element in the array
     */
    function search($searchArray, $lower, $higher, $searchElement)
    {
        if ($higher >= $lower) {
            $mid = ceil($lower + ($higher - $lower) / 2);

            if ($searchArray[$mid] == $searchElement) {
                return $mid;
            } elseif ($searchArray[$mid] > $searchElement) {
                return $this->search($searchArray, $lower, $mid - 1, $searchElement);
            } else {
                return $this->search($searchArray, $mid + 1, $higher, $searchElement);
            }
        } else {
            return -1;
        }
    }

    /**
     * Function to check whether the given parameter is 
     * of type array or not
     * Returns True if array, else return False
     */
    function isArrayType($binarySearchArray)
    {
        $type = gettype($binarySearchArray);
        if ($type == "array") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function to check the given array is sorted or not
     * @parameter binary search Array
     * return boolean
     */
    function isArraySorted($binarySearchArray)
    {
        $array = $binarySearchArray;
        sort($array);
        if ($array == $binarySearchArray) {
            return true;
        } else {
            return false;
        }
    }
}
?>