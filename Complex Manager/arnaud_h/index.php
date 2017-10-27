<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Complex Manager</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Chau+Philomene+One|El+Messiri" rel="stylesheet">    
</head>

<body>
<header>
    <div align="center">
        <h2>Complex Manager</h2>
    </div>
</header>
<div align="center">
    <form method="post" action="function.php">
        <table>
            <tr>
                <th><input type="text" placeholder="Real Number Ex: 15" name="real_number" required> + <input type="text" placeholder="Imaginary Number Ex: 35" name="imaginary_number" required> i </th>
            </tr>
            <tr>
                <th><input type="submit" value="Envoyer"></th>
            </tr>
        </table>
    </form>
</div>
<br>
<br>
<div align="center">
    <canvas id="canvas" width="385" height="385" style="border: dashed 1px #444;">
        Your browser doesn't support canvas!
    </canvas>
</div>
<script src="js/script.js"></script>
</body>

<footer>
</footer>

</html>