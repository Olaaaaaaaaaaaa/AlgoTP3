<?php

/*
CN1: testFindValueInTab1([8,9] , 9) => "1"
CN2: testFindValueInTab2([8,9,22,15] , 22) => "2"
CN3: testFindValueInTab3(["chien", "chat", "poisson", "singe"] , "singe") => "3"
CN4: testFindValueInTab4(["je",9,"suis",8,5,"la"] , 9) => "1"
CN5: testFindValueInTab5(["je",9,"suis",8,5,"la"] , 6) => "false"
*/

function findValueInTab($tab, $value)
{
    $taille = count($tab);
    $compteur = 0;

    while ($compteur != $taille){
        if ($tab[$compteur] == $value){
            return $compteur;
        }
        $compteur++;
    }
}

var_dump(findValueInTab([8,9] , 9));

function testFindValueInTab1()
{
    if (findValueInTab([8,9] , 9) == 1) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testFindValueInTab2()
{
    if (findValueInTab([8,9,22,15] , 22) == 2) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testFindValueInTab3()
{
    if (findValueInTab(["chien", "chat", "poisson", "singe"], "singe") == 3) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testFindValueInTab4()
{
    if (findValueInTab(["je",9,"suis",8,5,"la"], 9) == 1) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testFindValueInTab5()
{
    if (findValueInTab(["je",9,"suis",8,5,"la"], 6) == false) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}


echo PHP_EOL."Test 1: ".PHP_EOL;
testFindValueInTab1();
echo PHP_EOL."Test 2: ".PHP_EOL;
testFindValueInTab2();
echo PHP_EOL."Test 3: ".PHP_EOL;
testFindValueInTab3();
echo PHP_EOL."Test 4: ".PHP_EOL;
testFindValueInTab4();
echo PHP_EOL."Test 5: ".PHP_EOL;
testFindValueInTab5();