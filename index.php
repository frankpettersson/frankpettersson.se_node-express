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
    <div id="bg"></div>
    <div id="wrap"> 
        <header>
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
        </header>
        <main>
            <div id="canvas" class="box box-iframe">
                <h1 id="canvas-title">BUBBLE BG DARK</h1>
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
            <div id="projects" class="box">
                
                <div class="boxHeader"><h3>Projects</h3><p>Full versions of my projects.</p><p>Tap/click the thumbnails to view the project.</p></div>
                <div id="games" class="category">
                    <img src="assets/images/util/triangle.svg" class="arrow" alt="hide/show">
                    <div class="categoryName">Games</div>
                    <div class="project-list">
                        <div class="project"><a class="thumbnail" href="projects/games/idle/idle_0.4_no_jquery/"target="_blank" ><img src="assets/images/thumbnails/idle.webp" alt="idle game plain javascript"></a>
                            <p>
                                <b>Idle game</b> - 2019-02-25<br>
                                My first "real" game. You click on a button to get gold and then with that gold purchase units to collect even more gold for you.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/games/idle/idle_0.3_jquery/"target="_blank" ><img src="assets/images/thumbnails/idle.webp" alt="idle game jquery"></a>
                            <p>
                                <b>Idle game, jQuery</b> - 2019-02-21<br>
                                Same as the last one, just written with a code library 👍.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/games/units_create_units/"target="_blank" ><img src="assets/images/thumbnails/units_creating_units.webp" alt="units creating units"></a>
                            <p>
                                <b>Units</b> - 2019-04-02<br>
                                Another attempt at a game. I wanted to try making a game where the units create eachother, so I made this where that is so and you can name/create your own units too.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="graphics" class="category">
                    <img src="assets/images/util/triangle.svg" class="arrow" alt="hide/show">
                    <div class="categoryName">Graphics</div>
                    <div class="project-list">
                        <div class="project"><a class="thumbnail" href="projects/graphics/pixi_js/rotatingRectangle/"target="_blank" ><img src="assets/images/thumbnails/rotating_rectangle.webp" alt="rotating rectangle"></a>
                            <p>
                                <b>Rectangle</b> - 2019-02-26<br>
                                First canvas drawing in JavaScript i managed to create, using a library: <a href="http://www.pixijs.com/" target="_blank">PixiJS</a>, that I used for the next 3 aswell.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/pixi_js/rotatingPolygons/"target="_blank" ><img src="assets/images/thumbnails/rotating_polygon.webp" alt="rotating polygon"></a>
                            <p>
                                <b>Polygon</b> - 2019-02-28<br>
                                Created a polygon, bit harded since you have to defined the points of the shape, also made it spin 😌.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/pixi_js/randomPolygonPositions/"target="_blank" ><img src="assets/images/thumbnails/random_polygons.webp" alt="random polygons"></a>
                            <p>
                                <b>Random polygon</b> - 2019-02-28<br>
                                Went a bit further with the polygon creation. In this one the points defining the shape are moving around randomly(a bit jittery, but funny).
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/bubbles/"target="_blank" ><img src="assets/images/thumbnails/bubbles_paper.webp" alt="bubbles paper.js"></a>
                            <p>
                                <b>Bubbles paper.js</b> - 2019-03-01<br>
                                Did not actually make this one myself although i thought it looked cool, and so later I made one myself without the help of PixiJS.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/pixelGrid_blurry/"target="_blank" ><img src="assets/images/thumbnails/pixels_blurry.webp" alt="blurry pixels"></a>
                            <p>
                                <b>Blurry pixels</b> - 2019-03-01<br>
                                Trying another library: <a href="http://paperjs.org/" target="_blank">paper.js</a> which I use for the next 3 projects. Played around with squares, pixel-grids and colours, the blurry effect is actually me not scaling the squares the right amount, albeit the bug, cool effect.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/pixelGrid_clear/"target="_blank" ><img src="assets/images/thumbnails/pixels_clear.webp" alt="clear pixels"></a>
                            <p>
                                <b>Clear pixels</b> - 2019-03-01<br>
                                "Fixed" the last one and got the right resolution for the squares making it much clearer.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/langtonsAttempt/"target="_blank" ><img src="assets/images/thumbnails/langton_attempt.webp" alt="langtons ant attempt"></a>
                            <p>
                                <b>Langtons failure</b> - 2019-03-02<br>
                                I've known about <a href="https://en.wikipedia.org/wiki/Langton%27s_ant" target="_blank">Langtons Ant</a> for awhile and wanted to tackle it since i'd learnt a bit about canvas coding, did not work as expected. Looks pretty.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/paper.js/langtonsAnt/"target="_blank" ><img src="assets/images/thumbnails/langtons_ant.webp" alt="langtons ant"></a>
                            <p>
                                <b>Langtons ant</b> - 2019-03-02<br>
                                Working version of <a href="https://en.wikipedia.org/wiki/Langton%27s_ant" target="_blank">Langtons Ant</a> 👌.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/three.js/3Dspheres/"target="_blank" ><img src="assets/images/thumbnails/spheres.webp" alt="3d spheres with camera controls"></a>
                            <p>
                                <b>3D Shapes</b> - 2019-03-06<br>
                                Found a library: <a href="https://threejs.org/" target="_blank">three.js</a> making it easy to create 3D shapes and animations. So, i defined a cube, plopped a couple of rotating shapes with random colors and added camera controls.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/three.js/3Dspheres_BG/"target="_blank" ><img src="assets/images/thumbnails/sphere_BG.webp" alt="3d spheres static camera"></a>
                            <p>
                                <b>3D Shapes BG</b> - 2019-03-07<br>
                                Edited the last one a bit so that it could be used as a background, the moving is actually the camera rotating along its axes.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/colours/"target="_blank" ><img src="assets/images/thumbnails/colours.webp" alt="colour canvas"></a>
                            <p>
                                <b>Colours spinning</b> - 2019-03-20<br>
                                Having a bit more experience I decided to move away from using libraries to learn more about the basics of JavaScript. Which turned out to be a good idea making me discover a technique for creating cool patterns. Such as this one.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/black_hole/"target="_blank" ><img src="assets/images/thumbnails/black_hole.webp" alt="black hole"></a>
                            <p>
                                <b>Black hole</b> - 2019-03-20<br>
                                This one is one of my favourites, just because it feels very clean and reminds me of being little and seeing similar shapes and animations which would get me stuck staring at them for just a bit too long.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/bubbles/"target="_blank" ><img src="assets/images/thumbnails/bubbles.webp" alt="bubbles"></a>
                            <p>
                                <b>Bubbles</b> - 2019-03-21<br>
                                Recreated the canvas from earlier but without any library although lacking the depth effect.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/faded_bubbles/"target="_blank" ><img src="assets/images/thumbnails/faded_bubbles.webp" alt="faded bubbles"></a>
                            <p>
                                <b>Faded bubbles</b> - 2019-03-22<br>
                                Successful recreated version with depth effect and even a splash of color.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/black_donut/"target="_blank" ><img src="assets/images/thumbnails/black_donut.webp" alt="black donut"></a>
                            <p>
                                <b>Black donut</b> - 2019-03-23<br>
                                Really like this one, not much to say but, it's cool 😎.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/look_in_the_middle/"target="_blank" ><img src="assets/images/thumbnails/look.webp" alt="look in the middle illusion"></a>
                            <p>
                                <b>Point illusion</b> - 2019-03-23<br>
                                Same as last, difference being is the circle motioned drawing speed. Making for a very slowly adding of blackness with expanding patterns that you barely notice at first.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/three.js/hollow_boxes/"target="_blank" ><img src="assets/images/thumbnails/hollow.webp" alt="hollow boxes"></a>
                            <p>
                                <b>Hollow boxes</b> - 2019-04-09<br>
                                For this one I went back to the 3D shape/webGL library <a href="https://threejs.org/" target="_blank">three.js</a> and played around with stacking boxes further away but with decreasing size, using a depth material for the mesh, and blabla. Looks nice.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/flowing_squares/"target="_blank" ><img src="assets/images/thumbnails/squares.webp" alt="flowing squares"></a>
                            <p>
                                <b>Flowing squares</b>  - 2019-04-12<br>
                                This one uses various techniques that i've learned such as border detection, Class creation, moving a defined shape etc. creating this rug of squares, bouncing from wall to wall. Like those DVD screensavers.
                            </p>
                        </div>
                        <div class="project"><a class="thumbnail" href="projects/graphics/js_canvas/better_ant/"target="_blank" ><img src="assets/images/thumbnails/bant.webp" alt="better ant"></a>
                            <p>
                                <b>Better ant</b> - 2019-04-11<br>
                                Browsing the web i found <a href="http://rossscrivener.co.uk/projects/langtons-ants/" target="_blank">this</a> demonstration of Langtons Ant(which btw is alot cooler than mine), and noticed the much better performance, so being inspired to improve my attempt I did so. And also changed the color.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>