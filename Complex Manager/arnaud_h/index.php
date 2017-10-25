<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Complex Manager</title>
</head>

<body>
<header>
    <div align="center">
        <h1>Complex Manager</h1>
    </div>
</header>
<div align="center">
    <form method="post" action="function.php">
        <table>
            <tr>
                <th><input type="text" placeholder="Real Number Ex: 15" name="real_number" required></th>
            </tr>
            <tr>
                <th><input type="text" placeholder="Imaginary Number Ex: 35" name="imaginary_number" required> i </th>
            </tr>
            <tr>
                <th><input type="submit" value="Envoyer"></th>
            </tr>
        </table>
    </form>
</div>
<div align="center">
    <canvas id="canvas" width="350" height="350" style="border: dashed 1px #444;">
        your browser doesn't support canvas!
    </canvas>
    <script>
        var c = document.getElementById('canvas');
        var ctx = c.getContext("2d");
        ctx.beginPath();      // Début du chemin
        ctx.moveTo(175,0);    // Le tracé part du point 10,10
        ctx.lineTo(175,350);  // Un segment est ajouté vers 125,125
        //ctx.moveTo(200,50);   // Puis on saute à 135,135
        //ctx.lineTo(50,200);  // Puis on trace jusqu'à 350,350
        //ctx.closePath();      // Fermeture du chemin
        ctx.stroke();
    </script>
</div>
</body>

<footer>
</footer>

</html>