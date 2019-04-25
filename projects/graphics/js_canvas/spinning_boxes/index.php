<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../../../header.php' ?>
    <script defer type="module" src="main.js"></script>
</head>
<body>
    <div class="slider-wrap">
        <input type="range" min="0" max="10" value="1" class="slider" id="sliderRange">
    </div>
    <canvas></canvas>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            height: 100vh;
        }
        canvas {
            height: 100%;
            display: block;
            z-index: -1;
        }
        .slider-wrap {
            z-index: 1;
            width: 100%;
            height: 30px;
            position: absolute;
            text-align: center;
            background: black;
        }
        .slider-wrap .slider{
            height: 30px;
        }
    </style>
</body>
</html>