let pacman = null;
let field = null;
const scale = 15;
const offsetX = 45;
const offsetY = 15;
function setup() {
    createCanvas(600, 400);
    angleMode(DEGREES);
    frameRate(24);
    pacman = new Pacman(offsetX, offsetY, scale);
    field = new Field(offsetX, offsetY, `
╔════════════╦════════════╗
║••••••••••••║••••••••••••║
║•╔═╗•╔═╦═══•║•═══╦═╗•╔═╗•║
║*║ ║•║ ║•••••••••║ ║•║ ║*║
║•╚═╝•╚═╝•═══╦═══•╚═╝•╚═╝•║
║••••••••••••║••••••••••••║
║•═══•══╦═══•║•═══╦══•═══•║
║••••• •║         ║• •••••║
╠═════╗•║ ╔══ ══╗ ║•╔═════╣
╚═════╝•║ ║     ║ ║•╚═════╝
X      •  ║     ║  •      X
╔═════╗•║ ║     ║ ║•╔═════╗
╠═════╝•║ ╚══╦══╝ ║•╚═════╣
║••••••••••••║••••••••••••║
║*══╗•══════•║•══════•╔══*║
║•••║•••••••• ••••••••║•••║
╠══•╚══•║•═══╦═══•║•══╝•══╣
║•••••••║••••║••••║•••••••║
║•══════╩═══•║•═══╩══════•║
║•••••••••••••••••••••••••║
╚═════════════════════════╝
`, scale);
}
function draw() {
    background("#030002");
    field.draw();
    pacman.draw();
}
function keyPressed() {
    if (keyCode === ArrowUp) {
        pacman.dir("UP");
    } else if (keyCode === ArrowDown) {
        pacman.dir("DOWN");
    } else if (keyCode === ArrowRight) {
        pacman.dir("RIGHT");
    } else if (keyCode === ArrowLeft) {
        pacman.dir("LEFT");
    }
}