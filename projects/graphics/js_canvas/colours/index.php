<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../../../../header.php" ?>
    <script async src="canvas.js"></script>
    <title>Colours</title>
</head>
<body>
    <div id="stage" style="width: 400px; height: 400px">
        <canvas id="canvas1" width="400" height="400"></canvas>
        <canvas id="canvas2" width="400" height="400"></canvas>
        <canvas id="canvas3" width="400" height="400"></canvas>
    </div>
    <style>
        #stage {
            position: relative;
            border: 2px solid black;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        canvas {position: absolute;}
        #canvas1 {
            z-index: 1;
        }
        #canvas2 {
            z-index: 2;
        }
        #canvas3 {
            z-index: 3;
        }
    </style>
</body>
</html>