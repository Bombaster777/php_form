<?php

function t1()
{
    if (isset($_GET['inp-1'])) {
        return trim($_GET['inp-1']);
    }
    return false;
}

function t2()
{
    $impVal1 = $_GET['inp-2-1'];
    $impVal2 = $_GET['inp-2-2'];
    if (isset($impVal1) && isset($impVal2) && trim($impVal1) !== '' && trim($impVal2) !== '') {
        return max($_GET);
    }

    return false;

}

function t3()
{
    $impVal1 = $_GET['inp-3'];

    if (isset($impVal1)) {
        if (strlen($impVal1) > 5) {
            return 1;
        }
    }

    return 0;
}

function t4()
{

    if (isset($_GET['inp-4'])) {
        $ageVal = intval($_GET['inp-4']);
        if (date('Y') - $ageVal >= 18) {
            return 1;
        }
    }
    return 0;
}

function t5()
{

    if (isset($_GET['i-5'])) {
        return 1;
    }
    return 0;
}

function t6()
{

    if (isset($_GET['radio-1'])) {
        return $_GET['radio-1'];
    }
    return false;
}

function t7()
{
    if (isset($_POST['radio-2'])) {
        return $_POST['radio-2'];
    }
    return false;
}

function t8()
{
    if (isset($_POST['i-8'])) {
        return 1;
    }
    return 0;
}
function t9()
{
    $string = $_POST['i-9'];
    $symbol = '@';
    if (strpos($string, $symbol) == true) {
        return 1;
    }
    return 0;

}
function t10()
{
    return $_POST['i-10'];
}
