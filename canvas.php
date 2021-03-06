<div align="center">
    <canvas id="canvas" width="385" height="385" style="border:none;">
        Your browser doesn't support canvas!
    </canvas>
</div>
<script type="text/javascript">
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
    //fillText('X',192.5,375);
    ctx.stroke();

    var i = 17.5;
    var text = -10;
    while (i < 385) // Draw | on axes
    {
        ctx.beginPath();
        ctx.moveTo(i, 197.5);
        ctx.lineTo(i, 187.5);
        ctx.font = "10px Georgia";
        if(text == 5 || text == -5 || text == 10 || text == -10 )
        {
        ctx.fillText(text,(i-4),210.6);
        ctx.fillText(-text,171,(i+3));
        }
        ctx.moveTo(187.5, i);
        ctx.lineTo(197.5, i);
        ctx.font = "10px Georgia";
        ctx.stroke();
        i = i + 17.5;
        text++;
    }
    ctx.font = "20px Georgia";
    ctx.fillText("x",370,180);
    ctx.font = "20px Georgia";
    ctx.fillText("y",210,15);

    var r_nb = <?php echo $_POST['real_number'] ?>;
    var i_nb = <?php echo $_POST['imaginary_number'] ?>;
    var rayon = Math.sqrt((i_nb*i_nb)+(r_nb*r_nb))*17.5 ;
 
    ctx.beginPath();
    ctx.strokeStyle='orange';
    ctx.arc(192.5, 192.5, rayon, 0, 20 * Math.PI);
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(192.5, 192.5);  // Draw module
    ctx.strokeStyle='blue';
    if (r_nb < 0 && i_nb < 0)
        ctx.lineTo((192.5 + (r_nb * 17.5)), (192.5 - (i_nb * 17.5)));
    else if (i_nb < 0 && r_nb > 0)
        ctx.lineTo((192.5 + (r_nb * 17.5)), (192.5 - (i_nb * 17.5)));
    else if (r_nb < 0 && i_nb > 0) 
        ctx.lineTo((192.5 + (r_nb * 17.5)), (192.5 - (i_nb * 17.5)));    
    else
        ctx.lineTo((192.5 + (r_nb * 17.5)), (192.5 - (i_nb * 17.5)));
    ctx.stroke();

    ctx.beginPath();  // Draw line --
    ctx.strokeStyle='green';
    ctx.moveTo(0, (192.5 - (i_nb * 17.5)));
    ctx.lineTo(385, (192.5 - (i_nb * 17.5)));
    ctx.stroke();

    ctx.beginPath();  // Draw line |
    ctx.strokeStyle='green';
    ctx.moveTo((192.5 + (r_nb * 17.5)), 0);
    ctx.lineTo((192.5 + (r_nb * 17.5)), 385);
    ctx.stroke();
</script>