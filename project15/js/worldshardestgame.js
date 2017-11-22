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
const WHITE = '#fff';
const LBLUE = '#5d90dd';
const BACKGROUND_IMAGE = "images/world-hardest-game-2-bg-level-1.png";
const BG_VOICE = "soundeffects/World'sHardestGame2ThemeSong.mp3";
const BALL_VOICE = "soundeffects/RealisticPunch.mp3";
const COIN_VOICE = "soundeffects/CoinCollect.wav";
const SCREENS = {
    screen1: {
        bg: {
            color1: '#090909',
            color2: "#4d4d4d",
            x1: 0,
            x2: 1000,
            y1: 0,
            y2: 490,
        }

    },
    screen2: {
        bg: {
            color1: WHITE,
            color2: LBLUE,
            x1: 0,
            x2: 1000,
            lx2: 0,
            y1: 0,
            y2: 490,
        }

    },
    screen3: {
        gameCenterWall: {
            top: 100,
            bottom: 355,
        },
        greenland: {
            left_l: 210,
            left_r: 382,
            top: 140,
            bottom: 288,
            right_l: 613,
            right_r: 788,
            win: 700
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
    coin1: ["coin1", 420, 268, 8, 0.2, YELLOW, BLACK],
    coin2: ["coin2", 503, 185, 8, 0.2, YELLOW, BLACK],
    coin3: ["coin3", 589, 268, 8, 0.2, YELLOW, BLACK],
};
const REDBOX = ['redbox', 300, 200, 20, 8, 'red', BLACK];
var obs,
    tar,
    bx,
    screenOne,
    screenTwo,
    ctr,
    screen = 3,
    deadNum = 0,
    html_p = function() {
        return '<span>LEVEL:<span>1</span>/50</span><span style="text-decoration: underline;cursor: pointer;" id="pause">PAUSE</span><span style="text-decoration: underline;cursor: pointer;" id="mute">MUTE</span><span>DEATHS:<span>' + deadNum + '</span></span>'
    },
    ele_bg_audio = (function() {
        var e = document.createElement('audio');
        e.src = BG_VOICE;
        document.body.appendChild(e);
        return e;
    })(),
    ele_ball_audio = (function() {
        var e = document.createElement('audio');
        e.src = BALL_VOICE;
        document.body.appendChild(e);
        return e;
    })(),
    ele_coin_audio = (function() {
        var e = document.createElement('audio');
        e.src = COIN_VOICE;
        document.body.appendChild(e);
        return e;
    })();

window.addEventListener("load", function() {
    //DOM Loaded
    startGame();
    document.querySelector('p').style.display = 'none';
    // screen_1();
});
document.querySelector('p').addEventListener("click", function(e) {
    var ele = e.target,
        id = ele.id || "";
    switch (id) {
        case "pause":

            if (ele.innerHTML == "PAUSE") {
                ele.innerHTML = "PLAY";
                game.stop();
            } else {
                ele.innerHTML = "PAUSE";
                game.init();
            }
            break;
        case "mute":
            if (ele.innerHTML == "MUTE") {
                ele.innerHTML = "SOUND";
            } else {
                ele.innerHTML = "MUTE";
            }
            break;
    }

});

function startGame() {
    //Begin
    game.init();
    screenOne = new SCREENONE(game);
    screenTwo = new SCREENTWO(game);
    obs = new obstacles(game);
    tar = new target(game);
    bx = new box(game);
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
            if (document.querySelector('p').style.display == 'none') {
                document.querySelector('p').style.display = 'flex';
                document.querySelector('p').innerHTML = html_p();
            }

            obs.animate();
            tar.animate();
            bx.animate();
            break;
    }
}

function reset(status) {
    var s = status || "";
    ctr = '';
    if (s == 'win') {
        bx = new box(game);
        tar = new target(game);
        deadNum = 0;
        alert("You Made It!");


    } else {
        deadNum += 1;
        game.stop();
        setTimeout(function() {
            bx = new box(game);
            tar = new target(game);
            game.init();
        }, 700);
    }
    document.querySelector('p').innerHTML = html_p();
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
    this.animate = function() {
        //loop through the balls array
        //draw the balls
        this.game.drawBackground();
        for (var i = 0; i < this.balls.length; i++) {
            this.balls[i].animate(this.game.getContext());
        }

    };
};

function target(game) {
    this.game = game;
    this.coins = [
        coin.construct(COINS.coin1),
        coin.construct(COINS.coin2),
        coin.construct(COINS.coin3),
    ];
    this.animate = function() {
        for (var i = 0; i < this.coins.length; i++) {
            this.coins[i].animate(this.game.getContext());
        }
    };
}

function box(game) {
    this.game = game;
    this.redbox = redbox.construct(REDBOX);
    this.animate = function() {
        this.redbox.animate(this.game.getContext());

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
        this.radius = radius,
        this.radius_x = radius,
        this.scale = scale,
        this.color = color,
        this.border = border,
        this.animate = function(ctx) {
            //Draw coin
            ctx.fillStyle = this.border;
            ctx.beginPath();
            ctx.ellipse(this.x, this.y, this.radius_x, this.radius, 0, 0, 2 * Math.PI);
            ctx.fill();
            ctx.beginPath();
            ctx.fillStyle = this.color;
            ctx.ellipse(this.x, this.y, this.radius_x - 2, this.radius - 2, 0, 0, 2 * Math.PI);
            ctx.fill();
            this.radius_x -= this.scale;
            if (this.radius_x <= 2) {
                this.scale = -this.scale;
                this.radius_x -= this.scale;
            }
            if (this.radius_x >= this.radius) {
                this.scale = -this.scale;
                this.radius_x -= this.scale;
            }

        };
}

function redbox(name, x, y, width, speed, color, border) {
    var self = this;
    this.name = name,
        this.x = x,
        this.y = y,
        this.speed = speed,
        this.width = width,
        this.color = color,
        this.border = border,
        this.animate = function(ctx) {
            var gameCenterWall = SCREENS.screen3.gameCenterWall,
                greenland = SCREENS.screen3.greenland,
                collisionBalls = this.collision(obs.balls),
                collisionCoins = this.collision(tar.coins);
            if (collisionBalls !== false) {
                //和篮球解除，失败
                reset();
            };
            if (collisionCoins !== false) {
                //吃金币，得分
                tar.coins.splice(collisionCoins, 1);
            };
            this.win();
            this.ctr = ctr || "";
            ctx.fillStyle = this.border;
            switch (this.ctr) {
                case 'left':
                    this.x -= speed;
                    break;
                case 'up':
                    this.y -= speed;
                    break;
                case 'right':
                    this.x += speed;
                    break;
                case 'down':
                    this.y += speed;
                    break;

            };

            function speedBack() {
                switch (self.ctr) {
                    case 'left':
                        self.x += speed;
                        break;
                    case 'up':
                        self.y += speed;
                        break;
                    case 'right':
                        self.x -= speed;
                        break;
                    case 'down':
                        self.y -= speed;
                        break;

                };
            }

            if (this.x < greenland.left_r) {
                if (this.x < greenland.left_l || this.y < greenland.top || this.y > greenland.bottom) {
                    speedBack();
                }
            } else if (this.x >= greenland.left_r && this.x <= greenland.right_l) {
                if (this.y > gameCenterWall.bottom - this.width || this.y < gameCenterWall.top) {
                    speedBack();
                }
            } else if (this.x > greenland.right_l - this.width) {
                if (this.x > greenland.right_r || this.y < greenland.top || this.y > greenland.bottom) {
                    speedBack();
                }
            }

            ctx.fillRect(this.x, this.y, this.width, this.width);
            ctx.fillStyle = this.color;
            ctx.fillRect(this.x + 2, this.y + 2, this.width - 4, this.width - 4);
        },
        this.collision = function(opt) {
            var o = opt || [];
            for (var i = 0; i < o.length; i++) {
                var o_x = o[i].x,
                    o_y = o[i].y,
                    o_w = o[i].radius,
                    b_x = this.x,
                    b_y = this.y,
                    b_w = this.width,
                    x = o_x - b_x,
                    y = o_y - b_y,
                    limit = o_w + b_w;
                if ((x <= limit && x >= -o_w) && (y <= limit && y >= -o_w)) {

                    return i;
                }
            }
            return false;
        },
        this.win = function() {
            var o = tar.coins,
                greenland = SCREENS.screen3.greenland;
            if (o.length == 0 && this.x > greenland.win) {
                reset('win');
                return;
            }
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
        var screen1_bg = SCREENS.screen1.bg,
            color1 = screen1_bg.color1,
            color2 = screen1_bg.color2,
            x1 = screen1_bg.x1,
            x2 = screen1_bg.x2,
            y1 = screen1_bg.y1,
            y2 = screen1_bg.y2,
            lg = ctx.createLinearGradient(x1, y1, x2, y2);
        lg.addColorStop(0, color1);
        lg.addColorStop(0.5, color2);
        lg.addColorStop(1, color1);
        ctx.fillStyle = lg;
        ctx.fillRect(x1, y1, x2, y2);
    };

    //文字
    this.words = function() {
        //THE WORLD’S
        ctx.font = '28px Arial';
        ctx.fillStyle = WHITE;
        ctx.textAlign = 'left';
        ctx.fillText('THE WORLD’S', 50, 60);
        //白色描边
        ctx.font = " bold 110px  mono45-headline";
        ctx.fontWeight = 'bold';
        ctx.lineWidth = 10;
        ctx.strokeStyle = WHITE;
        ctx.strokeText('HARDEST GAME', 50, 160);
        //黑色描边
        ctx.lineWidth = 6;
        ctx.strokeStyle = BLACK;
        ctx.strokeText('HARDEST GAME', 50, 160);
        //蓝色填充
        var color1 = '#8aa0c0',

            color2 = LBLUE,

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
        ctx.fillStyle = WHITE;
        ctx.textAlign = 'right';
        ctx.fillText('VERSION 2.0', 960, 200);

    };
    //进度条 动画
    this.animate = function() {
        var progress = this.progress;
        if (progress < 800) {
            // This is the world's hardest game. It is harder than any game you have ever played, or ever will play.
            ctx.font = '18px Arial';
            ctx.fillStyle = WHITE;
            ctx.textAlign = 'center';
            ctx.fillText("This is the world's hardest game. It is harder than any game you have ever played, or ever will play.", 500, 420);
            ctx.strokeStyle = WHITE;
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
        ctx.fillStyle = WHITE;
        if (this.hover) {
            ctx.fillStyle = '#919191';
        }
        ctx.fillText('BEGIN', 500, 380);
    };
    //event
    this.mousemove = function(e) {
        var ex = e.offsetX,
            ey = e.offsetY;
        if (ex >= 400 && ex <= 600 && ey >= 340 && ey <= 380) {
            self.hover = true;
            e.target.style['cursor'] = 'pointer';
        } else {
            self.hover = false;
            e.target.style['cursor'] = 'default';
        }
    };
    this.click = function(e) {
        var ex = e.offsetX,
            ey = e.offsetY;
        if (ex >= 400 && ex <= 600 && ey >= 340 && ey <= 380) {
            screen = 2;
            e.target.style['cursor'] = 'default';
            can.canvas.onmousemove = null;
            can.canvas.onclick = null;
        }
    };
    this.event = function() {
        can.canvas.onmousemove = this.mousemove;
        can.canvas.onclick = this.click;
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
        var screen2_bg = SCREENS.screen2.bg,
            color1 = screen2_bg.color1,
            color2 = screen2_bg.color2,
            x1 = screen2_bg.x1,
            x2 = screen2_bg.x2,
            lx2 = screen2_bg.lx2,
            y1 = screen2_bg.y1,
            y2 = screen2_bg.y2,
            lg = ctx.createLinearGradient(x1, y1, lx2, y2);
        lg.addColorStop(0, color1);
        lg.addColorStop(1, color2);
        ctx.fillStyle = lg;
        ctx.fillRect(x1, y1, x2, y2);
    };
    //文字
    this.words = function() {
        ctx.font = '30px Arial';
        ctx.fillStyle = BLACK;
        ctx.textAlign = 'center';
        ctx.fillText('YOU DONT’T STAND A CHANCE.', 500, 200);
    };
}


document.onkeydown = keyCtr;

document.onkeyup = function(e) {
    if (screen == 3) {
        ctr = '';
    }
};

function keyCtr(e) {
    if (screen == 3) {
        var code = e.keyCode;
        switch (code) {
            case 37:
                //left
                ctr = 'left';
                break;
            case 38:
                //up
                ctr = 'up';
                break;
            case 39:
                //right
                ctr = "right";
                break;
            case 40:
                //down
                ctr = "down";
                break;
        }
    }

};

function audio() {

};