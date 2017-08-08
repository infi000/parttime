function getSearch(str) {
    var s = str || document.location.search;
    if (!s) return {};
    var arr = s.split("?")[1].split("&"),
        o = {};
    for (var i = 0; i < arr.length; i++) {
        var _key = arr[i].split("=")[0],
            _value = arr[i].split("=")[1];
        o[_key] = _value;
    }
    return o;
};

function typeOf(opt) {
    var o = opt,
        r;
    if (o && o.setAttribute) {
        return "dom";
    } else {
        r = Object.prototype.toString.call(o);
        return r.match(/\[object (.*?)\]/)[1].toLowerCase();
    }
};


function arrayDel(arr, val) {
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == val) {
            arr.splice(i, 1);
            break;
        }
    }
}


(function(doc, win) {
    var docEl = doc.documentElement;


    var resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
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


function timestamp() {
    //时间戳
    return new Date().getTime()
};

//字符串长度
function strlen(str) {
    return str.replace(/[^\x00-\xff]/g, "**").length;
}

function isPhone($s) {
    var s = +$s;
    return (s < 18999999999 && s > 13000000000) ? 1 : 0
}