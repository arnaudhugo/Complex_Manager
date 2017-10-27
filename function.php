<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];

$real_number = str_replace(",", ".", $real_number);
$imaginary_number = str_replace(",", ".", $imaginary_number);

echo "<div align=\"center\" >";
if (is_numeric($real_number) && is_numeric($imaginary_number))
{
    $real_number = $real_number * 1;
    $imaginary_number = $imaginary_number * 1;
    if (($real_number <= '10' && $real_number >= '-10') && ($imaginary_number <= '10' && $imaginary_number >= '-10'))
    {
        include ('canvas.php');
        echo "<ul>";
        if ($imaginary_number < 0)
            echo "<li>Nombre complexe (z): ", underZero($real_number, $imaginary_number), "</li>";
        else
            echo "<li>Nombre complexe (z): ", underZero($real_number, $imaginary_number),  "</li>";
        $conjug_imaginary_number = $imaginary_number * (-1);
        echo "<li>Conjugué (z*): ", underZero($real_number, $conjug_imaginary_number), "</li>";
        $inverse_complex_numerator = underZero($real_number, $conjug_imaginary_number);
        $inverse_complex_denominator =  pow($real_number, 2) + pow($imaginary_number, 2);
        echo "<li>Inverse (1/z): ", "(", $inverse_complex_numerator, ")", "/", $inverse_complex_denominator, "</li>";
        $module = sqrt(pow($real_number, 2) + pow($imaginary_number, 2));
        echo "<li>Module (|z|): ", round($module, 4), "</li>";
        echo "<li>Argument (arg(z)): ", "</li>";
        echo "<li>Ecriture trigonométrique: ", "</li>";
        echo "</ul>";
    }
    else
        echo "/!\ Saisir nombre entre -10 et 10.";
}
else
    echo "Caractere non numerique.";
echo "</div>";

function underZero($real_number, $num)
{
    if ($num < 0)
        return ($real_number . $num . "i");
    else
        return ($real_number . "+" . $num . "i");
}

/*
 * Probleme quand on teste 5.1 -- 6.9 par exemple le module ne vas pas vers le bonne endroit
 * Afficher en txt |z| ?
 * Afficher arg(z) ?
 * Un outil pour zoomer avec plus de detail ? (JS, outil PHP)
 * Couleur ?
 */