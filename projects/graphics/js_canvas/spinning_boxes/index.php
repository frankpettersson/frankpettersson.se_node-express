<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../../../header.php' ?>
    <script defer type="module" src="main.js"></script>
</head>
<body>
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
    </style>
</body>
</html>