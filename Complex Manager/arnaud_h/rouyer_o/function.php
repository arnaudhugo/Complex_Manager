<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];
preg_match_all('([0-9]+)', $real_number, $matches);
$real_number_bis = $matches[0][0];
preg_match_all('([0-9]+)', $imaginary_number, $matches);
$imaginary_number_bis = $matches[0][0];
preg_match_all('(.$)', $imaginary_number, $matches);
$testI = $matches[0][0];

if ($testI == 'i' && verif_is_number($real_number) == true && verif_is_number($imaginary_number_bis) == true)
{
    if (negative_sign($real_number) == true)
        echo "-";
    echo $real_number_bis;
    if (negative_sign($imaginary_number) == true)
        echo "-";
    else
        echo "+";
    echo $imaginary_number_bis . "i";
}
else
    echo "Wrong Parameters";

/*---------------FONCTION VERIFIANT SI LA DONNEES ENTREE EST UN NOMBRE--------------------------------------*/

function verif_is_number($number)
{
    while (isset($number))
    {
        if ($number >= 0 || $number <= 9)
            return (true);
        else
            return (false);
    }
    return (false);
}

function negative_sign($string)
{
    if (preg_match('(-)',$string,$matches) == true)
        return (true);
    else
        return (false);
}

function is_float($num)
{
    $a = 0;
    $is_decimal = false;
    while (isset($num[$a]))
    {
        if (($num[$a] == ',' || $num[$a] == '.') && $is_decimal == false)
            $is_decimal = true;
        else
            //echo "Synthaxe error.";
        $a = $a + 1;
    }
}