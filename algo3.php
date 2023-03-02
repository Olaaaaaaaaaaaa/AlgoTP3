<?php

/*
CN1: testMeanTab1([89,5,72,16]) => "45.5"
CN2: testMeanTab2([70,50,23,51,18,1,2,3,4,85.5]) => "30.75"
CN3: testMeanTab3([23.75,4.123]) => "13.9365"
CN4: testMeanTab4([-1,5,-15,3]) => "-2"
CN5: testMeanTab5([]) => "false"
*/

function meanTab($tab)
{

    if (count($tab) <= 0){
        return false;
    }
    $total=0;
    foreach($tab as $k => $e){
        $total = $total + $tab[$k];
    }
    $total = ($total) / (count($tab));
    return $total;
}


function testMeanTab1()
{
    if (meanTab([89,5,72,16]) == 45.5) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMeanTab2()
{
    if (meanTab([70,50,23,51,18,1,2,3,4,85.5]) == 30.75) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMeanTab3()
{
    if (meanTab([23.75,4.123]) == 13.9365) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMeanTab4()
{
    if (meanTab([-1,5,-15,3]) == -2) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMeanTab5()
{
    if (!(meanTab([]))) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}


echo PHP_EOL."Test 1: ".PHP_EOL;
testMeanTab1();
echo PHP_EOL."Test 2: ".PHP_EOL;
testMeanTab2();
echo PHP_EOL."Test 3: ".PHP_EOL;
testMeanTab3();
echo PHP_EOL."Test 4: ".PHP_EOL;
testMeanTab4();
echo PHP_EOL."Test 5: ".PHP_EOL;
testMeanTab5();