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
};
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

};
const COINS = {
    coin1: ["coin1", 420, 268, 8, 0.1, YELLOW, BLACK],
    coin2: ["coin2", 503, 185, 8, 0.1, YELLOW, BLACK],
    coin3: ["coin3", 589, 268, 8, 0.1, YELLOW, BLACK],
};

var obs, screenOne, screenTwo, screen = 1;

window.addEventListener("load", function() {
    //DOM Loaded
    startGame();
    document.querySelector('p').style.display = 'none';
    // screen_1();
});

function startGame() {
    //Begin
    game.init();
    screenOne = new SCREENONE(game);
    screenTwo = new SCREENTWO(game);
    obs = new obstacles(game);

    // screenTwo=new screen_2(game;)
}

function update() {
    game.clear();
    switch (screen) {
        case 1:
            screenOne.init();
            break;
        case 2:

            screenTwo.init();
            break;
        case 3:
            document.querySelector('p').style.display = 'flex';
            obs.animate();
            break;
    }

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
};

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
        }
    };
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
            ctx.fill();

            //Animate
            var wall = SCREENS.screen3.gameCenterWall;
            if (this.y - this.radius + this.speed < wall.top ||
                this.y + this.radius + this.speed > wall.bottom) {
                this.speed = -this.speed;
            }
            this.y += this.speed;
        };
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
        };
}



function SCREENONE(game) {
    var can = game,
        ctx = can.getContext(),
        self = this;
    this.progress = 0;
    this.hover = false;
    this.init = function() {
        self.bg();
        self.words();
        self.animate();
    };
    // 背景颜色
    this.bg = function() {
        var color1 = '#090909',
            color2 = "#4d4d4d",
            x1 = 1000,
            x2 = 0,
            y1 = 0,
            y2 = 490,
            lg = ctx.createLinearGradient(x1, y1, x2, y2);
        lg.addColorStop(0, color1);
        lg.addColorStop(0.5, color2);
        lg.addColorStop(1, color1);
        ctx.fillStyle = lg;
        ctx.fillRect(0, 0, 1000, 490);
    };

    //文字
    this.words = function() {
        //THE WORLD’S
        ctx.font = '28px Arial';
        ctx.fillStyle = '#fff';
        ctx.textAlign = 'left';
        ctx.fillText('THE WORLD’S', 50, 60);
        //白色描边
        ctx.font = " bold 110px  mono45-headline";
        ctx.fontWeight = 'bold';
        ctx.lineWidth = 10;
        ctx.strokeStyle = '#fff';
        ctx.strokeText('HARDEST GAME', 50, 160);
        //黑色描边
        ctx.lineWidth = 6;
        ctx.strokeStyle = '#000';
        ctx.strokeText('HARDEST GAME', 50, 160);
        //蓝色填充
        var color1 = '#8aa0c0',

            color2 = "#5d90dd",

            x1 = 0,
            x2 = 0,
            y1 = 0,
            y2 = 160,
            lg = ctx.createLinearGradient(x1, y1, x2, y2);
        lg.addColorStop(0, color2);
        lg.addColorStop(0.5, color1);
        lg.addColorStop(1, color2);
        ctx.fillStyle = lg;
        ctx.fillText('HARDEST GAME', 50, 160);
        // VERSION 2.0
        ctx.font = '28px Arial';
        ctx.fillStyle = '#fff';
        ctx.textAlign = 'right';
        ctx.fillText('VERSION 2.0', 960, 200);

    };
    //进度条 动画
    this.animate = function() {
        var progress = this.progress;
        if (progress < 800) {
            // This is the world's hardest game. It is harder than any game you have ever played, or ever will play.
            ctx.font = '18px Arial';
            ctx.fillStyle = '#fff';
            ctx.textAlign = 'center';
            ctx.fillText("This is the world's hardest game. It is harder than any game you have ever played, or ever will play.", 500, 420);
            ctx.strokeStyle = '#fff';
            ctx.lineWidth = 2;
            ctx.strokeRect(100, 380, 800, 10);
            this.progress += 8;
            ctx.fillRect(100, 380, self.progress, 10);
        } else {
            this.begin();
            if (this.event) {
                this.event();
            }
        }
    };
    //begin
    this.begin = function() {
        ctx.font = '48px Arial';
        ctx.textAlign = 'center';
        ctx.fillStyle = '#fff';
        if (this.hover) {
            ctx.fillStyle = '#919191';
        }
        ctx.fillText('BEGIN', 500, 380);
    };
    //event
    this.event = function() {
        console.log(345)
        can.canvas.addEventListener('mousemove', function(e) {
            var ex = e.offsetX,
                ey = e.offsetY;
            if (ex >= 400 && ex <= 600 && ey >= 340 && ey <= 380) {
                self.hover = true;
                e.target.style['cursor'] = 'pointer';
            } else {
                self.hover = false;
                e.target.style['cursor'] = 'default';
            }
        });
        can.canvas.addEventListener('click', function(e) {
            var ex = e.offsetX,
                ey = e.offsetY;
            if (ex >= 400 && ex <= 600 && ey >= 340 && ey <= 380) {
                can.canvas.addEventListener('click', function(e) {
                    return ;
                });
                 can.canvas.addEventListener('mousemove', function(e) {
                    return ;
                });
                screen = 2;
            }
        });
        this.event = null;
    };

}


function SCREENTWO(game) {
    var can = game,
        ctx = can.getContext(),
        self = this;
    this.time = 0;
    this.init = function() {
        if (this.time >= 2000) {
            screen = 3;
            return;
        }
        this.bg();
        this.words();
        this.time += 20;

    };
    //背景
    this.bg = function() {
        var color1 = '#fff',
            color2 = "#5d90dd",
            x1 = 0,
            x2 = 0,
            y1 = 0,
            y2 = 490,
            lg = ctx.createLinearGradient(x1, y1, x2, y2);
        lg.addColorStop(0, color1);
        lg.addColorStop(1, color2);
        ctx.fillStyle = lg;
        ctx.fillRect(0, 0, 1000, 490);
    };
    //文字
    this.words = function() {
        ctx.font = '30px Arial';
        ctx.fillStyle = '#000';
        ctx.textAlign = 'center';
        ctx.fillText('YOU DONT’T STAND A CHANCE.', 500, 200);
    };
}