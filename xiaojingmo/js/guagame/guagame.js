var GuaGame = function(images, callback) {
    var canvas = document.getElementById("id-canvas");
    var context = canvas.getContext("2d");
    var g = {
        scene:null,
        canvas: canvas,
        context: context,
        actions: {},
        keydowns: {},
    };
    //evnets
    window.addEventListener("keydown", function(e) {
        g.keydowns[e.key] = true;
    });
    window.addEventListener("keyup", function(e) {
        g.keydowns[e.key] = false;
    });
    //register
    g.registerAction = function(key, callback) {
        g.actions[key] = callback;

    };
    //draw
    g.drawImage = function(o) {
        g.context.drawImage(o.image, o.x, o.y);
    };
    //更新状态
    g.update = function() {

        g.scene.update();
    };

    //绘图
    g.draw = function() {

        g.scene.draw();
    };

    //timer
    var runloop = function() {
        var actions = Object.keys(g.actions);
        for (var i = 0; i < actions.length; i++) {
            var key = actions[i];
            if (g.keydowns[key]) {
                //如果按键按下，调用注册的action
                g.actions[key]();
            }
        }
        //update
        if (g.update) {
            g.update();
        }

        //clear
        context.clearRect(0, 0, canvas.width, canvas.height);

        //draw
        if (g.draw) {
            g.draw();
        }

        var fps = MainVar.fps || 30;

        setTimeout(function() {
            //events
            runloop();
        }, 1000 / fps);
    };
    //预加载图片
    var loads = [];
    var name = Object.keys(images);
    for (var i = 0; i < name.length; i++) {
        var n = name[i];
        var path = images[n];
        var img = new Image();
        img.src = path;
        (function (n, img) {
            img.onload = function() {
                loads.push(1);
                MainVar.imageloads[n] = img;
                if (loads.length == name.length) {
                
                    g.__start();
                }
            };
        })(n, img);
    };

    //加载场景
    g.runWithScene=function(scene){
        g.scene=scene;
           runloop();
    };
    //切换场景
    g.replaceScene=function(scene){
        g.scene=scene;
    };
    //开始
    g.__start=function(){
        callback(g);
    };
    
    return g;
};