<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../../../../header.php" ?>
    <script type="text/javascript" src="../js/paper-full.js"></script>
    <script async type="text/paperscript" src="js/paper.js" canvas="paper"></script>
    <link rel="icon" href="../../../../resources/images/fp_green.png" />
    <title>Pixel grid, clear, fullscreen</title>
</head>
<body>
    <canvas id="paper" resize stats hidpi="off"></canvas>
    <style>
        body {
            margin: 0;
        }

        canvas {
            height: 100vh;
            width: 100vw;
            display: block;
        }
    </style>
</body>
</html>