<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];

$real_number = str_replace(",", ".", $real_number);
$imaginary_number = str_replace(",", ".", $imaginary_number);

if (is_numeric($real_number) && is_numeric($imaginary_number))
{
    if ($imaginary_number < 0)
        echo "Nombre complexe:", underZero($real_number, $imaginary_number);
    else
        echo "Nombre complexe:", underZero($real_number, $imaginary_number);
    echo "<br />";
    $inverse_imaginary_number = $imaginary_number * (-1);
    echo "Inverse:", underZero($real_number, $inverse_imaginary_number);
}
else
    echo "Mauvaise saisie.";

function underZero($real_number, $num)
{
    if ($num < 0)
        return ($real_number . $num . "i");
    else
        return ($real_number . "+" . $num . "i");
}