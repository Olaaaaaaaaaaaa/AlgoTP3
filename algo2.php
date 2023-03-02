<?php

/*
CN1: testValeurMilieu1([8,9,10]) => "9"
CN2: testValeurMilieu2([4,1,3]) => "3"
CN3: testValeurMilieu3([99,898,123]) => "123"
CN4: testValeurMilieu4([4,1,5,8]) => "4"
CN5: testValeurMilieu5([4,1]) => "false"
*/

function valeurMilieu($tab)
{
    if (count($tab) <3){
        return false;
    }

    $nb0=$tab[0];
    $nb1=$tab[1];
    $nb2=$tab[2];

    if ($nb0 > $nb1 && $nb0 > $nb2){
        if ($nb1 > $nb0){
            return $nb1;
        }else{
            return $nb2;
        }
    }

    if ($nb1 > $nb0 && $nb1 > $nb2){
        if ($nb0 > $nb2){
            return $nb0;
        }else{
            return $nb2;
        }
    }
    
    if ($nb2 > $nb0 && $nb2 > $nb1){
        if ($nb0 > $nb1){
            return $nb0;
        }else{
            return $nb1;
        }
    }

    return false;
}

var_dump(valeurMilieu([4,1,3]));

function testValeurMilieu1()
{
    if (valeurMilieu([8,9,10]) == 9) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testValeurMilieu2()
{
    if (valeurMilieu([4,1,3]) == 3) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testValeurMilieu3()
{
    if (valeurMilieu([99,898,123]) == 123) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testValeurMilieu4()
{
    if (valeurMilieu([4,1,5,8]) == 4) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testValeurMilieu5()
{
    if (!(valeurMilieu([4,1]))) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}


echo PHP_EOL."Test 1: ".PHP_EOL;
testValeurMilieu1();
echo PHP_EOL."Test 2: ".PHP_EOL;
testValeurMilieu2();
echo PHP_EOL."Test 3: ".PHP_EOL;
testValeurMilieu3();
echo PHP_EOL."Test 4: ".PHP_EOL;
testValeurMilieu4();
echo PHP_EOL."Test 5: ".PHP_EOL;
testValeurMilieu5();