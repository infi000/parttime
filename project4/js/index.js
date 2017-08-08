var cw = $("#cw");
var btn = $("#visite");
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
];
var key = 0;
var stop = false;

function lb(x) {
    if (stop) {
        return
    }
    setEle(x, 'a1');
    if (x == (list.length - 1)) {
        key = 0;
    } else {
        key++
    }
    console.log("计数：",key)
    setTimeout(function() {
        if (stop) {
            return
        }
        lb(key);
    }, 1200)
}


function setEle(x, cn) {
    var data = list[x];
    var classname = cn || "";
    var ele = $("<i class=" + classname + ">" + data.word + "</i>");
    cw.html(ele);
}
btn.mouseenter(function() {
    if (key == 0) {
        key = list.length - 1;
    } else {
        key--
    }
    setEle(key)
    stop = true;

})
btn.on("click",function(){
    console.log("点击结果：",list[key].word,list[key].url);
    location.href=list[key].url;
});
btn.mouseleave(function(e) {
    var that = this;
    $(this).css({ "pointer-events": "none" });
    setTimeout(function() {
        $(that).css({ "pointer-events": "auto" });
        if (stop) {
            stop = false;
            lb(key);
            mouseleave_lock = true;
        }
    }, 2000)
})

$(document).ready(function() {
    lb(key);
});