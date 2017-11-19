/*
    Kent State University
    CS 44105/54105 Web Programming I
    Fall 2017
    Assignment 3
    The World’s Hardest Game 2 Remake
    worldshardestgame.html
    Author 1: Abdulkareem Alali, aalali1@kent.edu
    Author 2: ...
*/

const DARKBLUE = 'rgb(0,0,139)';
const YELLOW = 'rgb(255, 193, 7)';
const BLACK = 'rgb(0,0,0)';
const BACKGROUND_IMAGE = "images/world-hardest-game-2-bg-level-1.png";
const SCREENS = {
    screen3: {
        gameCenterWall: {
            top: 100,
            bottom: 355,
        }
    }
}
const BALLS = {
    pair1: {
        ball1: ["p1b1", 400, 150, 11, 5, DARKBLUE],
        ball2: ["p1b2", 443, 150, 11, 5, DARKBLUE]
    },
    pair2: {
        ball1: ["p2b1", 483, 305, 11, -5, DARKBLUE],
        ball2: ["p2b2", 526, 305, 11, -5, DARKBLUE]
    },
    pair3: {
        ball1: ["p3b1", 569, 150, 11, 5, DARKBLUE],
        ball2: ["p3b2", 612, 150, 11, 5, DARKBLUE]
    },

}
const COINS = {
    coin1: ["coin1", 420, 268, 8, 0.1, YELLOW, BLACK],
    coin2: ["coin2", 503, 185, 8, 0.1, YELLOW, BLACK],
    coin3: ["coin3", 589, 268, 8, 0.1, YELLOW, BLACK],
}
var obs;

window.addEventListener("load", function() {
    //DOM Loaded
    startGame();

});

function startGame() {
    //Begin
    game.init();
    obs = new obstacles(game);
}

//Engine
var game = {
    canvas: null,
    context: null,
    init: function() {
        this.canvas = document.querySelector("canvas");
        this.context = this.canvas.getContext("2d");
        this.interval = setInterval(update, 20);
    },
    drawBackground: function() {
        if (this.context != undefined) {
            var img = new Image;
            img.src = BACKGROUND_IMAGE;
            this.context.drawImage(img, 0, 0);
        }
    },
    stop: function() {
        clearInterval(this.interval);
    },
    clear: function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    },
    getContext: function() {
        return this.context;
    }
}

function obstacles(game) {
    //create the array of balls that will be animated
    this.game = game;
    this.balls = [ball.construct(BALLS.pair1.ball1),
        ball.construct(BALLS.pair1.ball2),
        ball.construct(BALLS.pair2.ball1),
        ball.construct(BALLS.pair2.ball2),
        ball.construct(BALLS.pair3.ball1),
        ball.construct(BALLS.pair3.ball2),
    ];
    this.coins = [
        coin.construct(COINS.coin1),
        coin.construct(COINS.coin2),
        coin.construct(COINS.coin3),
    ];
    this.animate = function() {
        //loop through the balls array
        //draw the balls
        this.game.drawBackground();
        for (var i = 0; i < this.balls.length; i++) {
            this.balls[i].animate(this.game.getContext());
        }
        for (var i = 0; i < this.coins.length; i++) {
            this.coins[i].animate(this.game.getContext());
        };
    }
}

function ball(name, x, y, radius, speed, color) {
    this.name = name,
        this.x = x,
        this.y = y,
        this.radius = radius,
        this.speed = speed,
        this.color = color,
        this.animate = function(ctx) {
            //Draw ball
            ctx.fillStyle = this.color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
            ctx.fill()

            // Animate
            var wall = SCREENS.screen3.gameCenterWall;
            if (this.y - this.radius + this.speed < wall.top ||
                this.y + this.radius + this.speed > wall.bottom) {
                this.speed = -this.speed;
            }
            this.y += this.speed
        }
}

function coin(name, x, y, radius, scale, color, border) {
    this.name = name,
        this.x = x,
        this.y = y,
        this.radius = radius - 2,
        this.border_radius = radius,
        this.scale = scale,
        this.color = color,
        this.border = border,
        this.animate = function(ctx) {
            //Draw coin
             // ctx.save()

            ctx.fillStyle = this.border;
            // ctx.translate(50,250);
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.border_radius, 0, Math.PI * 2, true);
            // console.log(ctx)
            ctx.fill();
            ctx.beginPath();
            ctx.fillStyle = this.color;
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);

            ctx.fill();
// ctx.translate(50,250);
            // Animate
        }
}

function update() {
    game.clear();
    obs.animate();
}