<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];
preg_match_all('([0-9]+)(i$)', $imaginary_number, $matches);
$imaginary_number = $matches[0][0];

/*
if ()
{
    if (($real_number >= '0' && $real_number <= '9') && ($imaginary_number >= '0' && $imaginary_number <= '9'))
    {

    }
}
*/
echo "Real Number: ", $real_number, "\n";
echo "<br />";
echo "Imaginary Number: ", $imaginary_number, "\n";
