<?php
// Write an algorithm that takes an array and 
// moves all of the zeros to the end, preserving 
// the order of the other elements.

// Напишите алгоритм, который берет массив 
// и перемещает все нули в конец, 
// сохраняя порядок расположения остальных элементов.




function moveZeros(array $items)
{   
    $arr = [];
    $arrWithZeros = [];

    if(is_array($items)) {
        foreach ($items as $key => $value) {

            if(is_string($items[$key])) {
                if(preg_match('/0.0/', $items[$key])){
                    array_push($arrWithZeros, 0);
                    continue;
                }
            }
            if(is_float($items[$key]) && $items[$key] == 0.0){
                array_push($arrWithZeros, 0);
                continue;
            }
            if($items[$key] === 0){
                array_push($arrWithZeros, $items[$key]);
            }
            else
            {
                array_push($arr, $items[$key]);
            }
        }
    }

    if($arrWithZeros) {
        foreach($arrWithZeros as $key => $value) {
            array_push($arr, $arrWithZeros[$key]);
        }
    }

    return $arr;
}



// BEST PRACTICES


// function moveZeros(array $items): array {
//     return array_pad(array_filter($items, function($x){return $x !== 0 and $x !== 0.0;}), count($items), 0);
//   }



