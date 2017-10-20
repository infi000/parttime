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

function timestamp() {
    //时间戳
    return new Date().getTime();
}

//字符串长度
function strlen(str) {
    return str.replace(/[^\x00-\xff]/g, '**').length;
}
