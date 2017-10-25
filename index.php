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
    <canvas id="canvas" width="385" height="385" style="border: dashed 1px #444;">
        Your browser doesn't support canvas!
    </canvas>
    <script>
        var c = document.getElementById('canvas');
        var ctx = c.getContext("2d");

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
        //ctx.moveTo(192.5, 192.5);
        ctx.fillRect(<?php echo (192.5 + ($_POST['real_number'] * 17.5)) ?>, <?php echo (192.5 + ($_POST['imaginary_number'] * 17.5)) ?>, 2, 2);
        ctx.stroke();

        //ctx.closePath();
        //ctx.stroke();
    </script>
</div>
</body>

<footer>
</footer>

</html>