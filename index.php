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
<script type="text/javascript">
    var c = document.getElementById("canvas");
    var ctx = c.getContext("2d");
    ctx.beginPath();      // Début du chemin
    ctx.moveTo(50,50);    // Le tracé part du point 50,50
    ctx.lineTo(200,200);  // Un segment est ajouté vers 200,200
    ctx.moveTo(200,50);   // Puis on saute jusqu'à 200,50
    ctx.lineTo(50,200);   // Puis on trace jusqu'à 50,200
    ctx.closePath();      // Fermeture du chemin (facultative)
</script>
</body>

<footer>
</footer>

</html>