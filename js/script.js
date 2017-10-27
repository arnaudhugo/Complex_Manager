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
        ctx.moveTo(0, <?php echo (192.5 - ($_POST['real_number'] * 17.5)) ?>);
        ctx.lineTo(385, <?php echo (192.5 - ($_POST['real_number'] * 17.5)) ?>);

        //ctx.moveTo(<?php echo (192.5 + ($_POST['imaginary_number'] * 17.5)) ?>, 0);
        //ctx.lineTo(<?php echo (192.5 + ($_POST['imaginary_number'] * 17.5)) ?>, 385);
        //ctx.stroke();

        //ctx.closePath();
        //ctx.stroke();