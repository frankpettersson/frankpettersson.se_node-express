<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../../../../header.php" ?>
    <title>Black hole</title>
</head>
<body>
    <canvas id="c" width="400" height="400"></canvas>
    <style>
        #c {
            border: 2px solid black;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script>
        const c = document.getElementById('c');
        const t = c.getContext('2d');
        let x = 0, y = 0, xx = c.width, yy = c.height, v = c.width/2, r = -100;
        function d() {
            t.beginPath();
            t.moveTo(x,y);
            t.lineTo(xx,yy);
            t.stroke();
        } function l() {
            requestAnimationFrame(l);
            t.translate(v,v);
            t.rotate(r);
            t.translate(v*-1,v*-1);
            d();
        } l();
    </script>
</body>
</html>