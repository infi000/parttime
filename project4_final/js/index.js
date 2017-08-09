var cw = $("#cw");
var btn = $("#visite");
var list = [
    { word: "a", url: "https://23333.hk/?intr=28314" },
    { word: "b", url: "https://23333.hk/?intr=28315" },
    { word: "c", url: "https://25555.hk/?intr=28316" },
    { word: "d", url: "https://25555.hk/?intr=28317" },
    { word: "e", url: "https://27777.hk/?intr=28318" },
    { word: "f", url: "https://27777.hk/?intr=28319" },
    { word: "g", url: "https://35555.hk/?intr=28320" },
    { word: "h", url: "https://35555.hk/?intr=28321" },
    { word: "i", url: "https://37777.hk/?intr=28322" },
    { word: "j", url: "https://37777.hk/?intr=28323" },
    { word: "k", url: "https://52222.hk/?intr=28324" },
    { word: "l", url: "https://52222.hk/?intr=28325" },
    { word: "m", url: "https://53333.hk/?intr=28326" },
    { word: "n", url: "https://53333.hk/?intr=28327" },
    { word: "o", url: "https://57777.hk/?intr=28328" },
    { word: "p", url: "https://57777.hk/?intr=28329" },
    { word: "q", url: "https://62222.hk/?intr=28330" },
    { word: "r", url: "https://62222.hk/?intr=28331" },
    { word: "s", url: "https://65555.hk/?intr=28332" },
    { word: "t", url: "https://65555.hk/?intr=28333" },
    { word: "u", url: "https://82222.hk/?intr=28334" },
    { word: "v", url: "https://82222.hk/?intr=28335" },
    { word: "w", url: "https://85555.hk/?intr=28336" },
    { word: "x", url: "https://85555.hk/?intr=28337" },
    { word: "y", url: "https://62222.hk/?intr=28338" },
    { word: "z", url: "https://82222.hk/?intr=28339" },
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
btn.on("click", function() {
    location.href = list[key].url;
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
    // isIE()
});

