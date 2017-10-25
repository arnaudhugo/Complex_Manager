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
    <canvas id="canvas" width="367.5" height="367.5" style="border: dashed 1px #444;">
        your browser doesn't support canvas!
    </canvas>
    <script>
        var c = document.getElementById('canvas');
        var ctx = c.getContext("2d");

        ctx.beginPath();

        ctx.moveTo(175,0);
        ctx.lineTo(175,350);
        ctx.moveTo(0,175);
        ctx.lineTo(350,175);

        ctx.moveTo(175,0);
        ctx.lineTo(165,10);
        ctx.moveTo(175,0);
        ctx.lineTo(185,10);

        ctx.moveTo(350,175);
        ctx.lineTo(340,165);
        ctx.moveTo(350,175);
        ctx.lineTo(340,185);
        ctx.stroke();

        var i = 17.5;
        while (i < 350)
        {
            ctx.beginPath();
            ctx.moveTo(i,180);
            ctx.lineTo(i,170);
            ctx.moveTo(170,i);
            ctx.lineTo(180,i);
            ctx.stroke();
            i = i + 17.5;
        }

        //ctx.closePath();
        //ctx.stroke();
    </script>
</div>
</body>

<footer>
</footer>

</html>