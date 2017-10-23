<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];
preg_match_all('([0-9]+)', $imaginary_number, $matches);
$imaginary_number_bis = $matches[0][0];
preg_match_all('(.$)', $imaginary_number, $matches);
$testI = $matches[0][0];

if ($testI == 'i')
{
    if ($real_number >= '0' && $real_number <= '9') // && ($imaginary_number_bis >= '0' && $imaginary_number_bis <= '9'))
    {
        echo "Real Number: ", $real_number, "\n";
        echo "<br />";
        echo "Imaginary Number: ", $imaginary_number_bis, "\n";
        echo "<br />";
        echo $testI;
    }
    else
        echo "Error saisie.";
}
else
    echo "Imaginary Number Incorrect.";
