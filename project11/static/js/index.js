var TOTALTIME = localStorage.getItem('gametime') || 60; //总倒计时时间
var GAMETIME = 0; //游戏进行时间
var ROUND = localStorage.getItem('gameround') || 10; //总轮数
var GAMEROUND = 0; //当前轮数
var CRES = 0; //当前回答结果
var CSTATUS = false; //当前回答状态
var ANS = []; //答案
var QUE = []; //题目
var RES = []; //答题结果
var VNUM = 0; //答题正确数量
var GAMESTATUS = false; //游戏状态
var DATA = localStorage.getItem('gamedata') ? JSON.parse(localStorage.getItem("gamedata")) : [
    ['a', 'b', 'c', 'd', 'e', 'f',' g'],
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
    gNum: $(".action-q-num"),
    gMsg: $(".action-q-msg"),
    gStatus: $(".status"),
    gRes: $(".action-res")

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
            var n = $(this).attr("datatype");
            that.check(n);
            that.save_ans();
            $(".active").removeClass('active');
            // $(".status").html('');
            if (GAMEROUND == ROUND) {
                that.gameover();
                return;
            }
            that.out_que();
        });
        //确定答案
        //1.记录结果
        //2.显示下一题
        //3.取消选中状态
        $(".btn-ans").on("click", function(e) {


            that.save_ans();
            $(".active").removeClass('active');
            // $(".status").html('');
            if (GAMEROUND == ROUND) {
                that.gameover();
                return;
            }
            that.out_que();

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
            _ai,
            d,
            len;

        ANS = [];
        QUE = [];
        RES = [];
        GAMEROUND = 0;
        GAMESTATUS = true;
        CRES = 0; //当前回答结果
        CSTATUS = false; //当前回答状态
        VNUM = 0;
        $ele.gRes.html('');
        $ele.gStatus.html('');
        for (i = 0; i < round; i++) {
            s = that.random(25);
            console.log(s);
            ANS.push(s);
        }
        //e.g:ANS=[10, 4, 23, 21, 13, 23, 17, 11, 17, 17]
        for (i = 0; i < ANS.length; i++) {
            //计算ANS[i].length 作为random参数
            ai = ANS[i];
            _ai=ai+1;
            d = DATA[ai];
            console.log(d)
            len = d.length;
            s = that.random(len);
            var ob = {
                name: _ai,
                ans: d[s]
            };
            QUE.push(ob);
        }
        //开始倒计时
        that.time();
        that.out_que();
    };
    /**
     * 游戏结束
     * @return {[type]} [description]
     */
    this.gameover = function() {
        GAMESTATUS = false;
        GAMETIME = 0;
        $ele.gtime.html("gameover");
        var reshtml = '<p>题目总数:' + ROUND + '=====>正确:' + VNUM + '</p>';
        $ele.gStatus.html(reshtml)
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
    this.out_que = function() {
        var q = QUE[GAMEROUND],
            num = GAMEROUND + 1,
            a = q.ans.toString(),
            html = "";
        console.log(q);
        console.log(a);
        console.log(a.indexOf("@"))
        if (a.indexOf("@") >= 0) {
            var _a = a.replace("@", "");
            a = '<img src="./static/data/' + _a + '.jpg" >';
        }

        $ele.gNum.html(num + "/" + ROUND);

        $ele.gMsg.html(a);


    };
    /**
     * 检查回答
     */
    this.check = function(n) {
        var q = QUE[GAMEROUND],
            ans = q.name;
        CRES = n;

        if (n == ans) {
            CSTATUS = true;
            $ele.gStatus.html("<span class='status-v'>V</span>");

        } else {
            CSTATUS = false;
            $ele.gStatus.html("<span class='status-x'>X</spa>")
        }
    };
    /**
     * 记录答案
     * 1,{当前轮，选择，状态}
     * 2.显示结果
     * 3.记录正确数量
     */
    this.save_ans = function(e) {
        var d = {
                round: GAMEROUND,
                choose: CRES,
                res: CSTATUS
            },
            h_cstatus = CSTATUS ? 'V' : 'X',
            ground = GAMEROUND + 1;
        $ele.gRes.prepend('<span>' + ground + ':选择:' + CRES + '==>结果:<b>' + h_cstatus + '</b></span>');
        if (CSTATUS) { VNUM++ };
        RES.push(d);
        GAMEROUND++;
    };

}