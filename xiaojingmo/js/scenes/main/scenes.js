var Scenes = function(game) {
    var s = {
        game: game,
    };
    //初始化
    MainVar.score = 0; //分数变量
    MainVar.fps = 30; //帧率
    MainVar.pause = false; //暂停
    MainVar.blocks = Loadlevel(1);
    MainVar.ball = Ball(); //球
    //回调函数
    //加载游戏
    var paddle = Paddle(); //移动板
    var blocks;//挡板
    var ball = MainVar.ball; //小球
    //注册键盘事件
    s.game.registerAction("a", function() {
        paddle.moveLeft();
    });
    s.game.registerAction("d", function() {
        paddle.moveRight();
    });
    s.game.registerAction("f", function() {
        ball.fire();
    });


    //更新状态
    s.update = function() {
        blocks = MainVar.blocks; //挡板
        //暂停
        if (MainVar.pause) {
            return;
        }

        //ball移动
        ball.move();
        //判断游戏结束
        if(ball.y>paddle.y){
            var end=ScenesEnd(s.game);
            s.game.replaceScene(end);
        }
        //球碰撞paddle
        if (paddle.collide(ball)) {
            ball.speedY = -ball.speedY;
        }

        //block碰撞,1.block消失,2.ball反弹
        for (var i = 0; i < blocks.length; i++) {
            var b = blocks[i];
            if (b.collide(ball)) {
                b.kill();
                ball.bounce();
                MainVar.score += 100;
            }
        }

    };

    //绘图
    s.draw = function() {
        blocks = MainVar.blocks; //挡板 

        //绘制背景
        s.game.context.fillStyle = "#795548";
        s.game.context.fillRect(0, 0, 400, 300);

        //绘制paddle
        s.game.drawImage(paddle);

        //绘制iball
        s.game.drawImage(ball);

        //绘制block,存活时绘制
        for (var i = 0; i < blocks.length; i++) {
            var b = blocks[i];
            if (b.alive) {
                s.game.drawImage(b);
            }
        }
         s.game.context.fillStyle = "#fff";
        s.game.context.fillText("分数：" + MainVar.score, 30, 280);
    };
    return s;
};