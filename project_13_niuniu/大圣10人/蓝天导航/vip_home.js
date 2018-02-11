function Main() {
    this.domain = 'http://guibing.jljhgl.com';
    this.title = "超稳乐娱";
    this.desc = "欢迎进入超稳乐娱官方导航，购买房卡请联系各代理！游戏仅供娱乐，请勿赌博！发现赌博立马提供相关账号向公安机关报案。";
    this.nav = [
        { name: "超稳大厅", url: "chaowen", css: "color:red" },
        { name: "大圣大厅", url: "dasheng", css: "color:orange; margin-top: 1rem " },
        { name: "飞鹰大厅", url: "feiying", css: "color:yellow;margin-top:1rem" },
        { name: "六六大厅", url: "liuliu", css: "color: green;margin-top:1rem" },
        { name: "518大厅", url: "518", css: "color:blue;margin-top:1rem" },
    ];
    this.whiteList = ['zvv10.xianzt562.cn', 'guibing.jljhgl.com', 'yuwei.seekeyes.com', 'vvvvvv.0b50ys.cn'];
}
Main.prototype.createBg = function() {
    var css = "   * {\
        margin: 0;\
        padding: 0;\
        border: 0;\
    }\
    html,\
    body {\
        margin: 0;\
    }\
    @-webkit-keyframes STAR-MOVE {\
        from {\
            background-position: 0% 0%\
        }\
        to {\
            background-position: 600% 0%\
        }\
    }\
    @keyframes STAR-MOVE {\
        from {\
            background-position: 0% 0%\
        }\
        to {\
            background-position: 600% 0%\
        }\
    }\
    .wall {\
        position: absolute;\
        top: 0;\
        left: 0;\
        bottom: 0;\
        right: 0;\
    }\
    div#background {\
        background: black url('"+this.domain+"/static/images/background.png') repeat-x 5% 0%;\
        background-size: cover;\
        -webkit-animation: STAR-MOVE 200s linear infinite;\
        -moz-animation: STAR-MOVE 200s linear infinite;\
        -ms-animation: STAR-MOVE 200s linear infinite;\
        animation: STAR-MOVE 200s linear infinite;\
    }\
    div#midground {\
        background: url('"+this.domain+"/static/images/midground.png')repeat 20% 0%;\
        z-index: 1;\
        -webkit-animation: STAR-MOVE 100s linear infinite;\
        -moz-animation: STAR-MOVE 100s linear infinite;\
        -ms-animation: STAR-MOVE 100s linear infinite;\
        animation: STAR-MOVE 100s linear infinite;\
    }\
    div#foreground {\
        background: url('"+this.domain+"/static/images/foreground.png')repeat 35% 0%;\
        z-index: 2;\
        -webkit-animation: STAR-MOVE 50s linear infinite;\
        -moz-animation: STAR-MOVE 50s linear infinite;\
        -ms-animation: STAR-MOVE 50s linear infinite;\
        animation: STAR-MOVE 50s linear infinite;\
    }";
    var html = '<div id="background" class="wall"></div><div id="midground" class="wall"></div><div id="foreground" class="wall"></div>';
    //在HEAD内加入STYLE标签 写入CSS;
    var ele_css = document.createElement("style");
    ele_css.setAttribute('type', 'text/css');
    ele_css.innerText = css;
    document.querySelector('head').appendChild(ele_css);
    document.body.innerHTML = html;
};

Main.prototype.createBody = function() {
    var nav = this.nav;
    var domain = this.domain;
    var title = this.title;
    var desc = this.desc;
    var css = " h1 {\
        position: absolute;\
        color: #7f002b;\
        text-align: center;\
        display: block;\
        width: 100%;\
        top: 30px;\
        font-family: '隶书';\
        font-size: 40px;\
        text-indent: 0.5em;\
        letter-spacing: 0.5em;\
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 20px #fff, 0 0 20px #FFEB3B, 0 0 30px #fbff00, 0 0 30px #8BC34A, 0 0 40px #ff0000, 0 0 50px #e6e6e6;\
    }\
    ul {\
        margin-top: 150px;\
        left: 50%;\
        margin-left: -6.5rem;\
        position: absolute;\
        line-height: 3rem;\
        display: block;\
        text-align: center;\
        color: blue;\
        font-family: '隶书';\
        text-decoration: none;\
        z-index: 111111\
    }\
    li {\
        margin-bottom: 20px;\
        list-style-type: none\
    }\
    li a {\
        font-size: 20px;\
        display: block;\
        margin: auto;\
        text-align: center;\
        background: rgba(255, 255, 255, 0.6);\
        border-radius: 3rem;\
        text-decoration: none;\
           width: 13rem\
    }\
    #marquee {\
        position: absolute;\
        left: 0;\
        right: 0;\
        bottom: 20px;\
        background: rgba(255, 255, 255, 0.31);\
        color: #000;\
        padding: 10px 0;\
        font-size: 16px;\
        z-index: 111111\
    }";

    function url_list() {
        var html = "<ul>";
        for (var i = 0; i < nav.length; i++) {
            html += "<li><a href='" + domain + "/home/index?skin=" + nav[i].url + "' style='" + nav[i].css + "'>" + nav[i].name + "</a></li>"
        }
        html += "</ul>";
        return html;
    };
    var html = ' <h1>' + title + '</h1>' + url_list() + '<marquee align="" behavior="scroll" direction="left" scrollamount="3" id="marquee">' + desc + '</marquee>';
    var ele_body = document.createElement("div");
    var ele_css = document.createElement("style");
    ele_css.setAttribute('type', 'text/css');
    ele_css.innerText = css;
    document.querySelector('head').appendChild(ele_css);
    ele_body.innerHTML = html;
    document.body.appendChild(ele_body);
};

Main.prototype.verify = function() {
    var w = this.whiteList;
    var that = this;
    var host = location.host;
    // var host = "vvvvvv.0b50ys.cn";
    for (var i = 0; i < w.length; i++) {
        if (host == w[i]) {
        	//验证通过
            that.createBg();
            that.createBody();
            return
        }
    }
    //不通过 跳转
    location.href="http://www.baidu.com";
    return;
}



var main = new Main();
main.verify();