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
        echo "<li><u>Nombre complexe (z) :</u> ", underZero($real_number, $imaginary_number), "</li>";
        $conjug_imaginary_number = $imaginary_number * (-1);
        echo "<li><u>Conjugué (z*) :</u> ", underZero($real_number, $conjug_imaginary_number), "</li>";
        $inverse_complex_numerator = underZero($real_number, $conjug_imaginary_number);
        $inverse_complex_denominator =  pow($real_number, 2) + pow($imaginary_number, 2);
        echo "<li><u>Inverse (1/z) :</u> " ,"(", $inverse_complex_numerator, ")", "/", $inverse_complex_denominator, "</li>";
        $module = sqrt(pow($real_number, 2) + pow($imaginary_number, 2));
        echo "<li><u>Module (|z|) :</u> ", round($module, 6), "</li>";
	$argument = arg($real_number, $imaginary_number);
        echo "<li><u>Argument (arg(z)) :</u> ", $argument ,"</li>";
        echo "<li><u>Ecriture trigonométrique :</u> " . round($module, 6) . "(cos " . round(atan(($imaginary_number/$real_number)%(2*pi())), 6) . "° + isin " . round(rad2deg(atan($imaginary_number/$real_number)), 0) . "°)</li>";
        echo "</ul>";
    }
    else
        echo "<p class='alerte'>/!\ Erreur: Saisir nombre entre -10 et 10.</p>";
}
else
    echo "<p class='alerte'>/!\ Erreur: Caractere non numerique.</p>";
echo "</div>";

function underZero($real_number, $num)
{
    if ($num < 0)
        return($real_number . $num . "i");
    else
        return($real_number . "+" . $num . "i");
}

function arg($real_number, $imaginary_number)
{
	if ($real_number < 0 && $imaginary_number >= 0)
	   return(round(atan(($imaginary_number/$real_number)+pi()), 6));
	else if ($real_number < 0 && $imaginary_number < 0)
	   return(round(atan(($imaginary_number/$real_number)-pi()), 6));
	else if ($real_number = 0 && $imaginary_number > 0)
	   return(round((pi()/2), 6));
	else if ($real_number < 0 && $imaginary_number < 0)
	   return(round((-pi()/2), 6));
	else if ($real_number = 0 && $imaginary_number = 0)
	     return(0);
	else // $real_number > 0
	     return(round(atan($imaginary_number/$real_number), 6));
}

/*
 * Probleme quand on teste 5.1 -- 6.9 par exemple le module ne vas pas vers le bonne endroit
 * Probleme avec -0, le conjuge ne fonctionne pas
 * Afficher en txt |z| ?
 * Afficher arg(z) ?
 * Un outil pour zoomer avec plus de detail ? (JS, outil PHP)
 * Couleur ?
 */