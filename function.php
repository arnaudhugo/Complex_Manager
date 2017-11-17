<?php
include_once ('index.php');
$real_number = $_POST['real_number'];
$imaginary_number = $_POST['imaginary_number'];

$real_number = str_replace(",", ".", $real_number);
$imaginary_number = str_replace(",", ".", $imaginary_number);

if (is_numeric($real_number) && is_numeric($imaginary_number))
{
    $real_number = $real_number * 1;
    $imaginary_number = $imaginary_number * 1;
    if (($real_number <= '10' && $real_number >= '-10') && ($imaginary_number <= '10' && $imaginary_number >= '-10'))
    {
        include ('canvas.php');
        echo "<div id='result'>";
        echo "<ul>";
        echo "<li><u>Nombre complexe :</u></li>";
	echo "<li>z = " . underZero($real_number, $imaginary_number) . "</li>";
        $conjug_imaginary_number = $imaginary_number * (-1);
        echo "<li><u>Conjugué :</u></li>";
	echo "<li><div class='zbarre'>z = " . underZero($real_number, $conjug_imaginary_number) . "</div></li>";
        $inverse_complex_numerator = underZero($real_number, $conjug_imaginary_number);
        $inverse_complex_denominator =  pow($real_number, 2) + pow($imaginary_number, 2);
        echo "<li><u>Inverse :</u></li>";
	echo "<table border='0' cellpadding='0'>
	          <tbody>
        	      <tr>
	    	          <td>
	        	      <table style='border-spacing:0px;'>
		    	          <tbody>
		        	      <tr>
		            	          <td style='padding:0px;border-bottom:1px solid black; text-align:center;'><i>1</i></td>
			    		  <td rowspan='2'><i>=</i></td>
		        	      </tr>
		        	      <tr>
			    	          <td style='padding:0px; text-align:center;'><i>z</i></td>
		    		      </tr>
		    		  </tbody>
			      </table>
	    		  </td>
	    		  <td>
	        	      <table style='border-spacing:0px;'>
		    	          <tbody>
		        	      <tr>
			    	          <td style='padding:0px;border-bottom:1px solid black; text-align:center;'><i>" . $inverse_complex_numerator . "</i></td>
				      </tr>
				      <tr>
			    	          <td style='padding:0px; text-align:center;'><i>" . $inverse_complex_denominator . "</i></td>
				      </tr>
		    		  </tbody>
			      </table>
	    		  </td>
		      </tr>
    		  </tbody>
	      </table>";
        $module = sqrt(pow($real_number, 2) + pow($imaginary_number, 2));
        echo "<li><u>Module :</u></li>";
	echo "<li>|z| = " . round($module, 6) . "</li>";
        echo "<li><u>Argument :</u></li>";
	$argCos = $real_number/$module;
	echo "<li>cos θ : " . round($argCos, 6) . "</li>";
	$argSin = $imaginary_number/$module;
	echo "<li>sin θ : " . round($argSin, 6) . "</li>";
        echo "<li><u>Ecriture trigonométrique :</u></li>";
	echo "<li>";
	if ($argSin > 0)
	   echo "|z|(cos θ + isin θ) = " . round($module, 6) . "(cos " . round($argCos, 6) . " + isin " . round($argSin, 6) . ")";
	else
	   echo "|z|(cos θ + isin θ) = " . round($module, 6) . "(cos " . round($argCos, 6) . " - isin " . round($argSin * (-1), 6) . ")";
	echo "</li>";
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

/*
 * Probleme quand on teste 5.1 -- 6.9 par exemple le module ne vas pas vers le bonne endroit
 * Probleme avec -0, le conjuge ne fonctionne pas
 * Afficher en txt |z| ?
 * Afficher arg(z) ?
 * Un outil pour zoomer avec plus de detail ? (JS, outil PHP)
 * Couleur ?
 */