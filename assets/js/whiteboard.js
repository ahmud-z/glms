var xcolor
function setup() {
    createCanvas(640, 480);
    background(255);
}

function draw() {
    if (mouseIsPressed) {
        stroke(108, 108, 248);
        strokeWeight(4);
        line(mouseX, mouseY, pmouseX, pmouseY);
    }
}