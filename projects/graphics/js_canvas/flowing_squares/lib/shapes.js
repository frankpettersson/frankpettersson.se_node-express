class Box {
    constructor(x, y, w, h, c, f = false) {
        this.x = x;
        this.y = y;
        this.w = w;
        this.h = h;
        this.c = c;
        this.f = f;
    }
    draw(ctx) {
        if (this.f = true) {
            ctx.fillStyle = this.c;
            ctx.fillRect(this.x, this.y, this.w, this.h);
        } else {
            ctx.strokeStyle = this.c;
            ctx.strokeRect(this.x, this.y, this.w, this.h);
        }
    }
}

class Circle {
    constructor(x, y, radius) {
        this.x = x;
        this.y = y;
        this.radius = radius;
    }

    draw(ctx) {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
        ctx.strokeStyle = "black";
        ctx.stroke();
    }
}