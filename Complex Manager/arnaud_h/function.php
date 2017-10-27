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
    /*echo "<canvas id=\"canvas\" width=\"390\" height=\"385\" style=\"border: dashed 1px #444;\">
        Your browser doesn't support canvas!
    </canvas>";
    echo "<script type=\"text/javascript\">
        var c = document.getElementById('canvas');
        var ctx = c.getContext(\"2d\");

        ctx.beginPath();

        ctx.moveTo(192.5, 0);  // Draw line
        ctx.lineTo(192.5, 385);
        ctx.moveTo(0, 192.5);
        ctx.lineTo(385, 192.5);

        ctx.moveTo(192.5, 0);  // Draw arrow top
        ctx.lineTo(182.5, 10);
        ctx.moveTo(192.5, 0);
        ctx.lineTo(202.5, 10);

        ctx.moveTo(385, 192.5); // Draw arrow right
        ctx.lineTo(375, 182.5);
        ctx.moveTo(385, 192.5);
        ctx.lineTo(375, 202.5);
        ctx.stroke();

        var i = 17.5;
        while (i < 385)
        {
            ctx.beginPath();
            ctx.moveTo(i, 197.5);
            ctx.lineTo(i, 187.5);
            ctx.moveTo(187.5, i);
            ctx.lineTo(197.5, i);
            ctx.stroke();
            i = i + 17.5;
        }

        ctx.beginPath();
        ctx.moveTo(0, <?php echo ($_POST['real_number'] * 17.5) ?>);
        ctx.lineTo(385, <?php echo ($_POST['real_number'] * 17.5) ?>);
        ctx.stroke();

        //ctx.closePath();
        //ctx.stroke();
    </script>";*/
    echo "<br>";
    echo "<ul>";
    if ($imaginary_number < 0)
        echo "<li>Nombre complexe: ", underZero($real_number, $imaginary_number), "</li>";
    else
        echo "<li>Nombre complexe: ", underZero($real_number, $imaginary_number),  "</li>";
    $conjug_imaginary_number = $imaginary_number * (-1);
    echo "<li>Conjugué: ", underZero($real_number, $conjug_imaginary_number), "</li>";
    $inverse_complex_numerator = underZero($real_number, $conjug_imaginary_number);
    $inverse_complex_denominator =  pow($real_number, 2) + pow($imaginary_number, 2);
    echo "<li>Inverse: ", $inverse_complex_numerator, "/", $inverse_complex_denominator, "</li>";
    $module = sqrt(pow($real_number, 2) + pow($imaginary_number, 2));
    echo "<li>Module: ", round($module, 4), "</li>"; 
    echo "<li>Argument: ", "</li>";
    echo "<li>Ecriture trigonométrique: ", "</li>";
    echo "</ul>";
}
else
    echo "Mauvaise saisie.";
echo "</div>";

function underZero($real_number, $num)
{
    if ($num < 0)
        return ($real_number . $num . "i");
    else
        return ($real_number . "+" . $num . "i");
}