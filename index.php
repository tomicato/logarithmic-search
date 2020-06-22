<?php



function debug($arr)
{
    echo "<pre>" . print_r($arr, true) . "</pre>";
}

// Числовой индексированный массив

function search($arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;


    while ($low <= $high) {

        $mid = $low + $high;
        $guess = $arr[$mid];

        if ($guess == $item) {
            return  $mid;
        }

        if ($guess > $item) {
            $high = $mid - 1;

        } else {
            $low = $mid + 1;
        }

    }
        return null;
}
$some_arr = [1, 3, 5, 7, 9];

echo search($some_arr, 4);


// Строчный индексированный масси
function search($arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $i = 0;
        $mid = $low + $high;
        $guess = $arr[$mid];


        if ($guess == $item) {
            return  $mid;
        }

        if ($mid > $i) {
            $high = $mid - 1;

        } else {
            $low = $mid + 1;
        }


    }
    return null;
}
$some_arr = ['apple', 'pears', 'grapes', 'watermelon', 'melon', 'banana', 'orange'];

echo  search($some_arr, 'watermelon');

// Ассоциативный массив
function search($arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;


    while ($low <= $high) {
        $i = 0;
        $mid = $low + $high;
        $guess = $arr[$mid];

        //echo $arr[$i];

        if ($guess == $item) {
            return  $arr[$mid];
        }

        if ($mid > $i) {
            $high = $mid - 1;

        } else {
            $low = $mid + 1;
        }


    }
    return null;
}
$assocc_arr = [
    'apple'      => 891359834634391,
    'pears'      => 891359834634397,
    'grapes'     => 891359834634393,
    'watermelon' => 891359834634394,
    'melon'      => 891359834634395,
    'banana'     => 891359834634396,
    'orange'     => 891359834634397
];

$index = search(array_keys($assocc_arr), 'watermelon');
echo $some_arr[$index];
