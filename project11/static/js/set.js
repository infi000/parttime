var $ele = {
    textarea: $("textarea")
};
var SETQUE = localStorage.getItem('gamedata') ? JSON.parse(localStorage.getItem("gamedata")) : [];
var ROUND = localStorage.getItem('gameround') || 10;
var TIME = localStorage.getItem('gametime') || 60;
$(document).ready(function() {
    get_gamedata();
    $("#input_time").val(TIME);
    $("#input_num").val(ROUND);
    $("#send").on("click", function(e) {
        send_data();
       
    });
    $("#reset").on("click",function(e){
        $ele.textarea.val("");
        SETQUE=[];
    });
});




/**
 * 将SETQUE写入textarea中
 * @return {[type]} [description]
 */
function get_gamedata() {
    if (SETQUE != []) {
        for (var i = 0; i < SETQUE.length; i++) {
            console.log(SETQUE[i])
            var arr = SETQUE[i],
                ele = $ele.textarea.eq(i),
                str = arr.join("/");

            ele.val(str);
        };
    } else {
        for (var i = 0; i < $ele.textarea.length; i++) {
            var ele = $ele.textarea.eq(i);
            ele.val("");
        };
    }
}


/**
 * 设置问题
 */
function set_gamedata() {
    SETQUE = [];
    for (var i = 0; i < $ele.textarea.length; i++) {
        var ele = $ele.textarea.eq(i),
            val = ele.val(),
            arr = val.split("/");
        if (val == "") {
            alert("数据不全！");
            SETQUE = localStorage.getItem('gamedata') || [];
            return false;
        }

        SETQUE.push(arr);
    };
    return true;
}

/**
 *
 * 上传至缓存
 */
function send_data() {
    if (set_gamedata()) {
        var q = SETQUE,
            t = $("#input_time").val(),
            n = $("#input_num").val();
        if (q && t && n) {
            var _q = JSON.stringify(q);
            localStorage.setItem('gamedata', _q);
            localStorage.setItem('gameround', n);
            localStorage.setItem('gametime', t);
        } else {
            alert("数据设置不全");
            return
        }
         alert("保存成功")
    }


}