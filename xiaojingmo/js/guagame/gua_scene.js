class GuaScenes {
    constructor(game) {
        this.game=game;
    }
    draw() {

    }
    update() {

    }
}

class ScenesTitle extends GuaScenes {
    constructor(game) {
        console.log(game)
        super(game);
        //注册按键
        game.registerAction("k", function() {
            var scene = Scenes(game);
            game.replaceScene(scene);
        });
    }
    draw() {
        this.game.context.fillStyle = "#000";
        this.game.context.fillText("按K开始游戏", 30, 280);
    }

}