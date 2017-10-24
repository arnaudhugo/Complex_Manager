<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];

if (is_numeric($real_number) && is_numeric($imaginary_number))
{
    echo $real_number, "+", $imaginary_number, "i";
}
else
    echo "Mauvaise saisie de nombre.";

/*

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
/*
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