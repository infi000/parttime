//全局变量
var MainVar = {};
//开启调试模式
var debugMode = function(debug) {
    if (!debug) {
        return;
    }
    //选关与暂停
    window.addEventListener("keydown", function(e) {
        var key = e.key;
        switch (true) {
            case "p" == key:
                MainVar.pause = !MainVar.pause;
                break;
            case "12345678".includes(key):
                MainVar.blocks = Loadlevel(key);
                break;
        }
    });
    //调节fps
    document.getElementById("id-input-range").addEventListener("input", function(e) {
        MainVar.fps = Number(this.value);
    });
    //拖拽小球
    document.querySelector("#id-canvas").addEventListener("mousedown", function(e) {

        var x = e.offsetX;
        var y = e.offsetY;
        var ball = MainVar.ball;
        if ((x >= ball.x && x <= ball.x + ball.image.width) && (y >= ball.y && y <= ball.y + ball.image.height)) {
            //点击坐标在小球内
            log("down", e);
            ball.drag = true;
        }
    });
    document.querySelector("#id-canvas").addEventListener("mousemove", function(e) {
        var ball = MainVar.ball;
        var x = e.offsetX;
        var y = e.offsetY;
        if (ball.drag) {
            log("drag", e);
            ball.x = x;
            ball.y = y;
        }
    });
    document.querySelector("#id-canvas").addEventListener("mouseup", function(e) {
        var ball = MainVar.ball;
        ball.drag = false;
    });
};

//加载关卡
var Loadlevel = function(lv) {
    var lev = level[lv - 1];
    var arr = [];
    for (var i = 0; i < lev.length; i++) {
        var p = lev[i];
        var b = Block(p);
        arr.push(b);
    }
    return arr;
};

var __main = function() {

    var images = {
        ball: "./img/ball.png",
        blank: "./img/blank.png",
        block: "./img/block.png",
    }; //图片初始化对象
    MainVar.imageloads = {}; //图片加载

     GuaGame(images, function(g) {

        var s = new ScenesTitle(g);
        // var s = Scenes(g);


        g.runWithScene(s);
        //开启debug模式

    });

};

__main();