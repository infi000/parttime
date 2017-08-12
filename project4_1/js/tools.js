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

function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
        "SymbianOS", "Windows Phone",
        "iPad", "iPod"
    ];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
};
var QQ=getSearch().qq||'69888691';
