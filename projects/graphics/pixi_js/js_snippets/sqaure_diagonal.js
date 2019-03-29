let margin = Math.sqrt(Math.pow(box.width, 2) + Math.pow(box.width, 2)) / 2;
let boxDistanceBot = 456 - margin;
let boxDistanceTop = margin + ((512 - outerBox.height) / 2);
let state = false;
if (state == true) {
    if (box.y > boxDistanceTop) {
        box.y -= 1;
        box.x -= 1;
    } else {
        state = false;
    }
} else {
    if (box.y < boxDistanceBot) {
        box.y += 1;
        box.x += 1;
    } else {
        state = true;
    }
}