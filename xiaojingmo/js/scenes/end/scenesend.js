var ScenesEnd = function(game) {
    var s = {
        game: game,
    };
    //注册按键
    s.game.registerAction("r", function() {
        var scene = new ScenesTitle(s.game);
        s.game.replaceScene(scene);
    });

    //更新状态
    s.update = function() {};

    //绘图
    s.draw = function() {
        s.game.context.fillStyle = "#000";
        s.game.context.fillText("游戏结束,按r返回标题", 30, 280);
    };

    return s;
};