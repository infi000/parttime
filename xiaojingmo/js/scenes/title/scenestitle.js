var ScenesTitle = function(game) {
    var s = {
        game: game,
    };
    //注册按键
    s.game.registerAction("k", function() {
        var scene=Scenes(s.game);
        s.game.replaceScene(scene);
    });
    //更新状态
    s.update = function() {};

    //绘图
    s.draw = function() {
        s.game.context.fillStyle = "#000";
        s.game.context.fillText("按K开始游戏", 30, 280);
    };

    return s;
}