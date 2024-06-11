let drawing = [];
let currentPath = [];
let isDrawing = false;

function changeColor(color) {
    currentColor = color;
}

function setup() {
    createCanvas(windowWidth, windowHeight);
    background(255);

    loadDrawing();

    setInterval(loadDrawing, 200); // Fetch new drawings every second
}

function draw() {
    noFill();
    stroke(0);
    strokeWeight(4);

    for (let path of drawing) {
        beginShape();
        for (let point of path) {
            vertex(point.x, point.y);
        }
        endShape();
    }

    if (isDrawing) {
        beginShape();
        for (let point of currentPath) {
            vertex(point.x, point.y);
        }
        endShape();
    }
}

function mousePressed() {
    isDrawing = true;
    currentPath = [];
    drawing.push(currentPath);
}

function mouseDragged() {
    if (isDrawing) {
        let point = {
            x: mouseX,
            y: mouseY
        };
        currentPath.push(point);
    }
}

function mouseReleased() {
    isDrawing = false;
    saveDrawing();
}

function saveDrawing() {
    fetch('draw.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ lines: [currentPath] })
    });
}

function loadDrawing() {
    fetch('draw.php')
        .then(response => response.json())
        .then(data => {
            drawing = data;
        });
}

function clearBoard() {
    drawing = [];
    currentPath = [];
    background(255);
    fetch('draw.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ clear: true })
    });
}