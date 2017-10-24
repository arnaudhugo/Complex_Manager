<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];
preg_match_all('([0-9]+)', $imaginary_number, $matches);
$imaginary_number_bis = $matches[0][0];
preg_match_all('(.$)', $imaginary_number, $matches);
$testI = $matches[0][0];


if ($testI == 'i' && verif_is_number($real_number)==true && verif_is_number($imaginary_number_bis)==true)
{
    if(negative_sign($real_number)==true)
    {
        echo "-";
    }
    echo $real_number;
    if(negative_sign($imaginary_number)== false)
    {
        echo "-";
    }else {
        echo "+";
    }
    echo $imaginary_number_bis."i";
}else{
    echo "Wrong Parameters";
}


/*---------------FONCTION VERIFIANT SI LA DONNEES ENTREE EST UN NOMBRE--------------------------------------*/

function verif_is_number($number)
{
    while(isset($number))
    {
        if ($number <= 0 || $number >= 9)
        {
            return(true);
        }
        else{
            return(false);
        }
    }

}

function negative_sign($string)
{
    while(isset($string))
    {
        if($string == '-' )
        {
            return(true);
        }else{
            return(false);
        }
    }
}
/*
if ()
{
    if (($real_number >= '0' && $real_number <= '9') && ($imaginary_number >= '0' && $imaginary_number <= '9'))
    {

    }
}
if ($real_number >= '0' && $real_number <= '9') // && ($imaginary_number_bis >= '0' && $imaginary_number_bis <= '9'))
{
    echo "Real Number: ", $real_number, "\n";
    echo "<br />";
    echo "Imaginary Number: ", $imaginary_number_bis, "\n";
    echo "<br />";
    echo $testI;
}
else
    echo "Error saisie.";*/