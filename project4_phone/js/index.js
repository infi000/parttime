var list = [
        { word: "a", url: "http://www.baidu.com" },
        { word: "b", url: "2" },
        { word: "c", url: "3" },
        { word: "d", url: "4" },
        { word: "e", url: "5" },
        { word: "f", url: "6" },
        { word: "g", url: "7" },
        { word: "h", url: "8" },
        { word: "i", url: "9" },
        { word: "j", url: "10" },
        { word: "k", url: "11" },
        { word: "l", url: "12" },
        { word: "m", url: "13" },
        { word: "n", url: "14" },
    ],
    cw = $("#cw"),
    btn = $("#visite"),
    key = 0;

function lb(x) {
    setEle(x, 'a1');
    if (x == (list.length - 1)) {
        key = 0;
    } else {
        key++
    }
    setTimeout(function() {
        lb(key);
    }, 1200)
};


function setEle(x, cn) {
    var data = list[x];
    var classname = cn || "";
    var ele = $("<i class=" + classname + ">" + data.word + "</i>");
    cw.html(ele);
};
(function(doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function() {
            var clientWidth = docEl.clientWidth;
            var clientHeight = docEl.clientHeight;
            if (!clientWidth) return;
            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            if (clientHeight < clientWidth) {
                docEl.style.fontSize = 100 * (clientWidth / 1334) + 'px';
            } else {
                docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            }
        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
$(document).ready(function() {
    lb(key);
    btn.on("click", function() {
        console.log("点击结果：", list[key].word, list[key].url);
        location.href = list[key].url;
    });
});