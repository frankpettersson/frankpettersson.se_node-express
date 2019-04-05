<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/style/font.css">
    <script defer src="worker.js"></script>
    <script defer src="assets/js/hide&show.js"></script>
    <script defer src="assets/js/darkMode.js"></script>
    <script defer src="assets/js/iframe.js"></script>
    <title>frankpettersson.se</title>
</head>

<body>
    <div id="wrapwrap" width="100%" height="100%">
        <div class="title">
            <div id="titleImage"></div>
        </div>
        <div id="wrap">
            <div class="box half">
                <div id="content">
                    <div class="etc">
                        <div class="boxHeader">Content</div>
                        <ul>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#backgroundSwap">Background</a></li>
                        </ul>
                    </div>
                </div>
                <div id="dark">
                    <div class="boxHeader">Dark mode</div>
                    <ul>
                        <li>
                            <label id="darkMode" class="switch" for="darkSwitch">.
                                <input type="checkbox" id="darkSwitch">
                                <span class="slider round"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box" id="projects">
                <div class="boxHeader">JavaScript</div>
                <ul>
                    <li class="category">
                        <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                        <b>All</b>
                    </li>
                    <li>
                        <div class="project">
                            <a href="projects/games/idle/idle_0.3_jquery/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/idle.webp" alt="idle game jquery"></a>
                            <a href="projects/games/idle/idle_0.4_no_jquery/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/idle.webp" alt="idle game plain javascript"></a>
                            <a href="projects/games/units_create_units/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/units_creating_units.webp" alt="units creating units"></a>
                            <a href="projects/graphics/pixi_js/rotatingRectangle/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></a>
                            <a href="projects/graphics/pixi_js/rotatingPolygons/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></a>
                            <a href="projects/graphics/pixi_js/randomPolygonPositions/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></a>
                            <a href="projects/graphics/paper.js/bubbles/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/bubbles_paper.webp" alt="bubbkles paper.js"></a>
                            <a href="projects/graphics/paper.js/pixelGrid_blurry/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></a>
                            <a href="projects/graphics/paper.js/pixelGrid_clear/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></a>
                            <a href="projects/graphics/paper.js/langtonsAttempt/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></a>
                            <a href="projects/graphics/paper.js/langtonsAnt/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></a>
                            <a href="projects/graphics/three.js/3Dspheres/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></a>
                            <a href="projects/graphics/three.js/3Dspheres_BG/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></a>
                            <a href="projects/graphics/js_canvas/colours/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/colours.webp" alt="colour canvas"></a>
                            <a href="projects/graphics/js_canvas/black_hole/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/black_hole.webp" alt="black hole"></a>
                            <a href="projects/graphics/js_canvas/bubbles/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/bubbles.webp" alt="bubbles"></a>
                            <a href="projects/graphics/js_canvas/faded_bubbles/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></a>
                            <a href="projects/graphics/js_canvas/black_donut/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/black_donut.webp" alt="black donut"></a>
                            <a href="projects/graphics/js_canvas/look_in_the_middle/" class="thumbnail"><img type="image/png" src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="category">
                        <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                        <b>Games</b>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <div>
                                    <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                                    2019-02-25
                                </div>
                                <div class="project" id="idle">
                                    <a href="projects/games/idle/idle_0.3_jquery/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/idle.webp" alt="idle game jquery"></div>
                                        <p class="projectname">Idle game, jQuery</p>
                                    </a>
                                    <a href="projects/games/idle/idle_0.4_no_jquery/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/idle.webp" alt="idle game plain javascript"></div>
                                        <p class="projectname">Idle game, plain JavaScript</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                                    2019-04-02
                                </div>
                                <div class="project" id="units-units">
                                    <a href="projects/games/units_create_units/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/units_creating_units.webp" alt="units creating units"></div>
                                        <p class="projectname">Units creating units</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="category">
                        <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                        <b>Graphics</b>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <div>
                                    <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                                    2019-02-28
                                </div>
                                <div class="project" id="pixijs">
                                    <a href="projects/graphics/pixi_js/rotatingRectangle/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></div>
                                        <p class="projectname">Rotating rectangle</p>
                                    </a>
                                    <a href="projects/graphics/pixi_js/rotatingPolygons/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></div>
                                        <p class="projectname">Rotating polygons</p>
                                    </a>
                                    <a href="projects/graphics/pixi_js/randomPolygonPositions/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></div>
                                        <p class="projectname">Random polygon positions</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                                    2019-03-01
                                </div>
                                <div class="project" id="paperjs">
                                    <a href="projects/graphics/paper.js/bubbles/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/bubbles_paper.webp" alt="bubbkles paper.js"></div>
                                        <p class="projectname">Bubbles</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/pixelGrid_blurry/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></div>
                                        <p class="projectname">Pixel grid, blurry</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/pixelGrid_clear/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></div>
                                        <p class="projectname">Pixel grid, clear</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/langtonsAttempt/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></div>
                                        <p class="projectname">Langtons ant attempt</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/langtonsAnt/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></div>
                                        <p class="projectname">Langtons ant</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                                    2019-03-07
                                </div>
                                <div class="project" id="threejs">
                                    <a href="projects/graphics/three.js/3Dspheres/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></div>
                                        <p class="projectname">Rotating 3D spheres, camera controls</p>
                                    </a>
                                    <a href="projects/graphics/three.js/3Dspheres_BG/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></div>
                                        <p class="projectname">Rotating 3D spheres, static</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/util/triangle.svg" class="arrows" alt="hide/show">
                                    2019-03-22
                                </div>
                                <div class="project" id="jscanvas">
                                    <a href="projects/graphics/js_canvas/colours/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/colours.webp" alt="colour canvas"></div>
                                        <p class="projectname">Colours</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/black_hole/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/black_hole.webp" alt="black hole"></div>
                                        <p class="projectname">Black hole</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/bubbles/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/bubbles.webp" alt="bubbles"></div>
                                        <p class="projectname">Bubbles</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/faded_bubbles/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></div>
                                        <p class="projectname">Faded bubbles</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/black_donut/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/black_donut.webp" alt="black donut"></div>
                                        <p class="projectname">Black donut</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/look_in_the_middle/">
                                        <div class="thumbnail"><img type="image/png" src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></div>
                                        <p class="projectname">Look in the middle</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="box" id="backgroundSwap">
                <div class="boxHeader">Change background</div>
                <ul>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/js_canvas/faded_bubbles/')">Fadedbubbles</a></li>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/js_canvas/faded_bubbles_dark/')">Fadedbubbles, dark</a></li>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/paper.js/pixelGrid_fullscreen/')">Pixelgrid</a></li>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/three.js/3Dspheres_BG/')">3D spheres</a></li>
                </ul>
            </div>
            <div class="box half" id="footer">
                <img src="assets/images/icons/android-chrome-192x192.png" alt="fp_logo">
                <div id="footer-text">
                    <p>Frank Pettersson - 2019</p>
                    <p>frank.pettersson1@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>