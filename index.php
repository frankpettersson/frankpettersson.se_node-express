<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="assets/style/main.css">
    <script defer src="worker.js"></script>
    <script defer src="assets/js/events.js"></script>
    <title>frankpettersson.se</title>
</head>
<body>
    <div id="bg">
        <iframe title="backgroundanimation" src="projects/graphics/js_canvas/faded_bubbles/" frameborder="0" scrolling="no"></iframe>
    </div>
    <div id="wrapwrap" width="100%" height="100%">
        <header>
            <div class="title">
                <div id="titleImage"></div>
            </div>
        </header>
        <main>
            <div id="wrap">
                <div class="box iframe">
                    <iframe title="animationiframe" id="frontframe" src="projects/graphics/three.js/hollow_boxes/" frameborder="0" scrolling="no"></iframe>
                </div>
                <h1 id="thename" style="margin:0;margin-bottom:150px;text-align:center;">HOLLOW BOXES</h1>
                <div class="box animations">
                    <h2 style="margin: 0;margin-top:10px;text-align:center;">PICK A CANVAS</h2>
                    <div class="category">
                        <div class="grid">
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/pixi_js/rotatingRectangle/" src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></a><p>Rectangle</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/pixi_js/rotatingPolygons/" src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></a><p>Polygon</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/pixi_js/randomPolygonPositions/" src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></a><p>Random polygon</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/bubbles/" src="assets/images/thumbnails/bubbles_paper.webp" alt="bubbles paper.js"></a><p>Bubbles, 400x400</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/pixelGrid_blurry/" src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></a><p>Blurry pixels</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/pixelGrid_clear/" src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></a><p>Clear pixels</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/langtonsAttempt/" src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></a><p>Langtons failure</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/langtonsAnt/" src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></a><p>Langtons ant</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/three.js/3Dspheres/" src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></a><p>3D Shapes</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/three.js/3Dspheres_BG/" src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></a><p>3D Shapes BG</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/colours/" src="assets/images/thumbnails/colours.webp" alt="colour canvas"></a><p>Colours spinning</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/black_hole/" src="assets/images/thumbnails/black_hole.webp" alt="black hole"></a><p>Black hole</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/bubbles/" src="assets/images/thumbnails/bubbles.webp" alt="bubbles"></a><p>Bubbles</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/faded_bubbles/" src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></a><p>Faded bubbles</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/black_donut/" src="assets/images/thumbnails/black_donut.webp" alt="black donut"></a><p>Black donut</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/look_in_the_middle/" src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></a><p>Point illusion</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/three.js/hollow_boxes/" src="assets/images/thumbnails/hollow.webp" alt="hollow boxes"></a><p>Hollow boxes</p></div>
                        </div>
                    </div>
                </div>
                <div class="box" id="projects">
                    <div class="boxHeader"><h3>Projects</h3></div> 
                    <div class="category">
                        <img src="assets/images/util/triangle.svg" class="arrows inactive" alt="hide/show">
                        <div class="categoryName">Games</div>
                        <div class="grid hide">
                            <div class="project"><a href="projects/games/idle/idle_0.4_no_jquery/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/idle.webp" alt="idle game plain javascript"></a><p>Idle game</p></div>
                            <div class="project"><a href="projects/games/idle/idle_0.3_jquery/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/idle.webp" alt="idle game jquery"></a><p>Idle game, jQuery</p></div>
                            <div class="project"><a href="projects/games/units_create_units/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/units_creating_units.webp" alt="units creating units"></a><p>Units</p></div>
                        </div>
                    </div>
                    <div class="category">
                        <img src="assets/images/util/triangle.svg" class="arrows inactive" alt="hide/show">
                        <div class="categoryName">Graphics</div>
                        <div class="grid hide">
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/pixi_js/rotatingRectangle/" src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></a><p>Rectangle</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/pixi_js/rotatingPolygons/" src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></a><p>Polygon</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/pixi_js/randomPolygonPositions/" src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></a><p>Random polygon</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/bubbles/" src="assets/images/thumbnails/bubbles_paper.webp" alt="bubbles paper.js"></a><p>Bubbles, 400x400</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/pixelGrid_blurry/" src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></a><p>Blurry pixels</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/pixelGrid_clear/" src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></a><p>Clear pixels</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/langtonsAttempt/" src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></a><p>Langtons failure</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/paper.js/langtonsAnt/" src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></a><p>Langtons ant</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/three.js/3Dspheres/" src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></a><p>3D Shapes</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/three.js/3Dspheres_BG/" src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></a><p>3D Shapes BG</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/colours/" src="assets/images/thumbnails/colours.webp" alt="colour canvas"></a><p>Colours spinning</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/black_hole/" src="assets/images/thumbnails/black_hole.webp" alt="black hole"></a><p>Black hole</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/bubbles/" src="assets/images/thumbnails/bubbles.webp" alt="bubbles"></a><p>Bubbles</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/faded_bubbles/" src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></a><p>Faded bubbles</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/black_donut/" src="assets/images/thumbnails/black_donut.webp" alt="black donut"></a><p>Black donut</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/js_canvas/look_in_the_middle/" src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></a><p>Point illusion</p></div>
                            <div class="project"><a class="thumbnail"><img type="image/png" data-src="projects/graphics/three.js/hollow_boxes/" src="assets/images/thumbnails/hollow.webp" alt="hollow boxes"></a><p>Hollow boxes</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>