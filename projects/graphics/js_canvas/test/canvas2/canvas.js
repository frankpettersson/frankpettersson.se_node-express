//___________________________________________________________
const canvas = {
    id: document.getElementById('canvas'),
    width: document.body.clientWidth,
    height: document.body.clientHeight
};
canvas.id.width = canvas.width;
canvas.id.height = canvas.height;
const ctx = canvas.id.getContext('2d');
//___________________________________________________________

//___________________________________________________________
class Pixel {

    constructor(x, y, width, height, color) {
        this.x = x;
        this.y = y;
        this.width = width;
        this.height = height;
        this.color = color;
    }

    draw() {
        ctx.beginPath();
        ctx.rect(this.x, this.y, this.width, this.height);
        ctx.fillStyle = this.color;
        ctx.fill();
    }
}
//___________________________________________________________

//___________________________________________________________
const factor = 10;
const pixels = [];
for (let i = 0; i < canvas.width/factor; i++) {
    let x = factor * i;
    for (let j = 0; j < canvas.height/factor; j++) {
        let y = factor * j,
            width = factor,
            height = factor,
            h = Math.floor((Math.random() * 360)+0),
            s = Math.floor((Math.random() * 100)+0),
            l = Math.floor((Math.random() * 100)+0),
            a = 1,
            color = 'hsla('+h+', '+s+'%, '+l+'%, '+a+')',
            pixel = new Pixel(x, y, width, height, color);
        pixels.push(pixel);
    }
}
//___________________________________________________________

//___________________________________________________________
let lap = 0;
function loop() {
    window.requestAnimationFrame(loop);
    lap++;
    if (lap === 10) {
        ctx.fillStyle = 'rgb(255, 255, 255)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        for (let i = 0; i < pixels.length; i++) {
            let h = 200,
                s = Math.floor((Math.random() * 40)+30),
                l = Math.floor((Math.random() * 40)+30),
                a = 1,
                color = 'hsla('+h+', '+s+'%, '+l+'%, '+a+')';
            pixels[i].color = color;
            pixels[i].draw();
        }
        lap = 0;
    }
}
loop();
//___________________________________________________________