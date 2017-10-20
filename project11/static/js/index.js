var TOTALTIME = localStorage.getItem('time') || 60; //总倒计时时间
var GAMETIME = 0; //游戏进行时间
var ROUND = 10; //总轮数
var GAMEROUND=0;//当前轮数
var ANS = []; //答案
var QUE = []; //题目
var GAMESTATUS = false; //游戏状态
var DATA = [
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
    [12, 32, 43, 15, 65, 1, 13],
];
var $ele = {
    gtime: $(".action-time-num"),

};

function Game() {
    var that = this;
    this.init = function() {
        that.event();

    };
    this.event = function() {
        //游戏开始按钮
        $(".btn-start").on("click", function(e) {
            if (GAMESTATUS) {
                alert("游戏正在进行中！");
                return;
            }
            that.gameStart();
        });
        //选择答案
        $(".cb2").on("click", function(e) {
            if (!GAMESTATUS) {
                alert("游戏还没开始！");
                return;
            }
            $(".cb2").removeClass('active');
            $(this).addClass("active");
        });
        //确定答案
        $(".btn-ans").on("click", function(e) {
            if (!GAMESTATUS) {
                alert("游戏还没开始！");
                return;
            }
        });
    };
    /**
     * 游戏开始：
     * 初始化
     * 1.首先获取玩家设定的游戏轮数：ROUND
     * 2.for循环执行ROUND次random方法，获取随机数组，也就是答案ANS
     * 3.根据答案数组出题
     * 4.for循环执行ANS.length次random方法，将答案和问题写进对象 在放入数组QUE中
     * 5.开始倒计时
     * @return {[type]} [description]
     */
    this.gameStart = function() {

        var round = ROUND,
            i = 0,
            s,
            ai,
            d,
            len;

        ANS = [];
        QUE = [];
        GAMEROUND=0;
        GAMESTATUS = true;
        for (i = 0; i < round; i++) {
            s = that.random(25);
            console.log(s);
            ANS.push(s);
        }
        //e.g:ANS=[10, 4, 23, 21, 13, 23, 17, 11, 17, 17]
        for (i = 0; i < ANS.length; i++) {
            //计算ANS[i].length 作为random参数
            ai = ANS[i];
            d = DATA[ai];
            len = d.length;
            s = that.random(len);
            var ob = {
                name:ai,
                ans:d[s]
            };
            QUE.push(ob);
        }
        //开始倒计时
        that.time();
    };
    /**
     * 游戏结束
     * @return {[type]} [description]
     */
    this.gameover = function() {
        console.log("gameover");
        $ele.gtime.html("gameover");
        GAMESTATUS = false;
    };
    /**
     * 获取随机数，范围为0-num-1
     * @param  {[type]} num [description]
     * @return {[type]}     [description]
     */
    this.random = function(num) {
        var n = Math.random() * num,
            res = Math.ceil(n);
        return res - 1;
    };
    /**
     * 游戏倒计时
     * @param  {[type]} t [description]
     * @return {[type]}   [description]
     */
    this.time = function(t) {
        var num = t || TOTALTIME;
        GAMETIME = TOTALTIME;
        ft();

        function ft() {
            setTimeout(function() {
                if (GAMETIME == 0) {
                    that.gameover();
                    return;
                }
                $ele.gtime.html(GAMETIME);
                GAMETIME--;
                ft();

            }, 1000);
        }
    };
    /**
     * 出题
     * 1.显示当前轮数
     * 2.显示题目
     * @return {[type]} [description]
     */
    this.out_que=function(){
        var q=QUE[GAMESTATUS];


    };


}