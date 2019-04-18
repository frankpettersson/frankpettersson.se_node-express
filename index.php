<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="assets/style/fonts.css">
    <link rel="stylesheet" href="assets/style/main.css">
    <script defer src="assets/js/events.js"></script>
    <title>frankpettersson.se</title>
</head>
<body width="100%" height="100%">
    <main>
        <div id="wrap"> 
            <div class="box nav">
                <div id="navLeft">
                    <div id="logo">
                        <div id="logoImage"></div>
                    </div>
                </div>
                <div id="navRight">
                    <span class="link"><a data-show="#canvas">CANVAS</a></span>
                    <span class="link"><a data-show="#projects"">PROJECTS</a></span>
                </div>
            </div>
            <div id="canvas" class="box box-iframe">
                <h1 id="canvas-title">FLOWING SQUARES</h1>
                <iframe title="canvasiframe" id="frontframe" src="projects/graphics/js_canvas/faded_bubbles_dark/" frameborder="0" scrolling="no"></iframe>
            </div>
            <div id="canvi" class="box box-canvas">
                <h2>PICK A CANVAS</h2>
                <div class="category">
                    <div class="grid">
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/pixi_js/rotatingRectangle/" src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></div><p>Rectangle</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/pixi_js/rotatingPolygons/" src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></div><p>Polygon</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/pixi_js/randomPolygonPositions/" src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></div><p>Random polygon</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/paper.js/pixelGrid_blurry/" src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></div><p>Blurry pixels</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/paper.js/pixelGrid_clear/" src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></div><p>Clear pixels</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/paper.js/langtonsAttempt/" src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></div><p>Langtons failure</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/paper.js/langtonsAnt/" src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></div><p>Langtons ant</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/three.js/3Dspheres/" src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></div><p>3D Shapes</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/three.js/3Dspheres_BG/" src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></div><p>3D Shapes BG</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/colours/" src="assets/images/thumbnails/colours.webp" alt="colour canvas"></div><p>Colours spinning</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/black_hole/" src="assets/images/thumbnails/black_hole.webp" alt="black hole"></div><p>Black hole</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/faded_bubbles/" src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></div><p>Bubble BG</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/faded_bubbles_dark/" src="assets/images/thumbnails/faded_bubbles_dark.webp" alt="faded bubbles"></div><p>Bubble BG Dark</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/black_donut/" src="assets/images/thumbnails/black_donut.webp" alt="black donut"></div><p>Black donut</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/look_in_the_middle/" src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></div><p>Point illusion</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/three.js/hollow_boxes/" src="assets/images/thumbnails/hollow.webp" alt="hollow boxes"></div><p>Hollow boxes</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/flowing_squares/" src="assets/images/thumbnails/squares.webp" alt="flowing squares"></div><p>Flowing squares</p></div>
                        <div class="project"><div class="thumbnail"><img data-src="projects/graphics/js_canvas/better_ant/" src="assets/images/thumbnails/bant.webp" alt="better ant"></div><p>Better ant</p></div>
                    </div>
                </div>
            </div>
            <div class="box" id="projects">
                <div class="boxHeader"><h3>Projects</h3></div> 
                <div id="games" class="category">
                    <img src="assets/images/util/triangle.svg" class="arrow" alt="hide/show">
                    <div class="categoryName">Games</div>
                    <div class="grid">
                        <div class="project"><a class="thumbnail" href="projects/games/idle/idle_0.4_no_jquery/"><img src="assets/images/thumbnails/idle.webp" alt="idle game plain javascript"></a><p>Idle game</p></div>
                        <div class="project"><a class="thumbnail" href="projects/games/idle/idle_0.3_jquery/"><img src="assets/images/thumbnails/idle.webp" alt="idle game jquery"></a><p>Idle game, jQuery</p></div>
                        <div class="project"><a class="thumbnail" href="projects/games/units_create_units/"><img src="assets/images/thumbnails/units_creating_units.webp" alt="units creating units"></a><p>Units</p></div>
                    </div>
                </div>
                <div id="graphics" class="category">
                    <img src="assets/images/util/triangle.svg" class="arrow" alt="hide/show">
                    <div class="categoryName">Graphics</div>
                    <div class="grid">
                        <div class="project"><a class="thumbnail" href="projects/graphics/pixi_js/rotatingRectangle/"><img src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></a><p>Rectangle</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/pixi_js/rotatingPolygons/"><img src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></a><p>Polygon</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/pixi_js/randomPolygonPositions/"><img src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></a><p>Random polygon</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/bubbles/"><img src="assets/images/thumbnails/bubbles_paper.webp" alt="bubbles paper.js"></a><p>Bubbles, 400x400</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/pixelGrid_blurry/"><img src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></a><p>Blurry pixels</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/pixelGrid_clear/"><img src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></a><p>Clear pixels</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/langtonsAttempt/"><img src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></a><p>Langtons failure</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/langtonsAnt/"><img src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></a><p>Langtons ant</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/three.js/3Dspheres/"><img src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></a><p>3D Shapes</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/three.js/3Dspheres_BG/"><img src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></a><p>3D Shapes BG</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/colours/"><img src="assets/images/thumbnails/colours.webp" alt="colour canvas"></a><p>Colours spinning</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/black_hole/"><img src="assets/images/thumbnails/black_hole.webp" alt="black hole"></a><p>Black hole</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/bubbles/"><img src="assets/images/thumbnails/bubbles.webp" alt="bubbles"></a><p>Bubbles</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/faded_bubbles/"><img src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></a><p>Faded bubbles</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/black_donut/"><img src="assets/images/thumbnails/black_donut.webp" alt="black donut"></a><p>Black donut</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/look_in_the_middle/"><img src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></a><p>Point illusion</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/three.js/hollow_boxes/"><img src="assets/images/thumbnails/hollow.webp" alt="hollow boxes"></a><p>Hollow boxes</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/flowing_squares/"><img src="assets/images/thumbnails/squares.webp" alt="flowing squares"></a><p>Flowing squares</p></div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/better_ant/"><img src="assets/images/thumbnails/bant.webp" alt="better ant"></a><p>Better ant</p></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>