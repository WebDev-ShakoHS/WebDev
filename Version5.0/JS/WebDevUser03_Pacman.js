class Pacman {
    constructor(offsetX, offsetY, scale) {
        this.offsetX = offsetX;
        this.offsetY = offsetY;
        this.r = scale / 2;
        this.x = (scale * 14) + offsetX + this.r;
        this.y = (scale * 16) + offsetY + this.r;
        this.scale = scale;
        this.speed = [0, 0];
        this.jawWidth = 45;
        this.opening = false;
        this.increment = 4.5;
        this.intention = null;
        this.direction = null;
    }
    draw(){
        fill('#FFFF00');
        noStroke();
        if(this.jawWidth === 0){
            ellipse(this.x, this.y, this.r * 2, this.r * 2);
        } else {
            push();
            translate(this.x, this.y);
            if(this.direction === "UP"){
                rotate(270);
            }
            if(this.direction === "DOWN"){
                rotate(90);
            }
            if(this.direction === "LEFT"){
                rotate(180);
            }
            arc(0, 0, this.r * 2, this.r * 2, this.jawWidth, -Math.abs(this.jawWidth), PIE);  
            pop();
        }
        this.update();
    }
    update(){
        if(!(this.x % this.scale) && !(this.y % this.scale) && this.intention){
            if(field.ask(this.x, this.y).allowed.includes(this.intention)){
                switch (this.intention){
                    case "UP":
                        this.speed = [0, -1];
                        break;
                    case "DOWN":
                        this.speed = [0, 1];
                        break;
                    case "RIGHT":
                        this.speed = [1, 0];
                        break;
                    case "LEFT":
                        this.speed = [-1, 0];
                        break;
                }
                this.direction = this.intention;
                this.intention = null;
            }
        }
        if(!(this.x % this.scale) && !(this.y % this.scale)){
            const portals = field.portal();
            const portalIndex = portals.findIndex((el) => el[0] === this.x && el[1] === this.y)
            if(!!~portalIndex){
                const exitPortal = portals[Number(!portalIndex)];
                this.x = exitPortal[0];
                this.y = exitPortal[1];
            }
        }
        if(!(this.x % 10) && !(this.y % 10) && !(field.ask(this.x, this.y).allowed.includes(this.direction))){
            this.direction = null;
            this.speed = [0, 0];
        }
        if(this.jawWidth === 0){
            this.opening = false;
        }
        if(this.jawWidth === 45){
            this.opening = true;
        }
        if(this.opening){
            this.jawWidth -= this.increment; 
        }else{
            this.jawWidth += this.increment;
        }
        this.x = this.x + this.speed[0];
        this.y = this.y + this.speed[1];
        
    }
    dir(DIR) {
        const portals = field.portal();
        const xBoundary = [this.x - this.scale, this.x + this.scale];
        const yBoundary = [this.y - this.scale, this.y + this.scale];
        const portalIndex = portals.findIndex((el) => 
          el[0] > xBoundary[0] 
          && 
          el[0] < xBoundary[1] 
          && 
          el[1] > yBoundary[0] 
          && 
          el[1] < yBoundary[1] 
        );
        console.log(!~portalIndex);
        if(!~portalIndex){
            this.intention = DIR;
        }
    }
}