<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];

$real_number = str_replace(",", ".", $real_number);
$imaginary_number = str_replace(",", ".", $imaginary_number);

if (is_numeric($real_number) && is_numeric($imaginary_number))
{
    if ($imaginary_number < 0)
        echo "Nombre complexe:", $real_number, $imaginary_number, "i";
    else
        echo "Nombre complexe:", $real_number, "+", $imaginary_number, "i";
    $inverse_imaginary_number = $imaginary_number * (-1);
    echo "Inverse:", $real_number, $inverse_imaginary_number, "i";
}
else
    echo "Mauvaise saisie.";
