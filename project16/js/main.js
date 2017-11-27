var DATA = []; //姓名，年齡，日期，地區，所屬市，薪資
var ADDRINFO = {
    shandong: {
        name: '山東',
        city: [{
            val: 'jinan',
            name: '濟南'
        }, {
            val: 'qingdao',
            name: '青島'
        }]
    },
    taiwan: {
        name: '台灣',
        city: [{
            val: 'taibei',
            name: '台北'
        }, {
            val: 'gaoxiong',
            name: '高雄'
        }]
    },
    guangdong: {
        name: '廣東',
        city: [{
            val: 'guangzhou',
            name: '廣州'
        }, {
            val: 'dongguan',
            name: '東莞'
        }, {
            val: 'shenzhen',
            name: '深圳'
        }]
    }
}
var CHOOSE = -1; //選中的數
var PAY = false; //顯示薪資

function dom_form(arr) {
    var arr = arr || [],
        name = arr[0] || "",
        age = arr[1] || "",
        date = arr[2] || "",
        addr = arr[3] || "",
        city = arr[4] || "",
        pay = arr[5] || "",
        html = ' <div class="table" id="table_form">\
                    <table>\
                        <tr>\
                            <td>*姓名</td>\
                            <td>\
                                <input type="text" value="' + name + '" name="name">\
                            </td>\
                        </tr>\
                        <tr>\
                            <td> *年齡</td>\
                            <td>\
                                <input type="number" value="' + age + '" name="age">\
                            </td>\
                        </tr>\
                        <tr>\
                            <td> *日期</td>\
                            <td>\
                                <input type="text" value="' + date + '" name="date">\
                            </td>\
                        </tr>\
                        <tr>\
                            <td> *地區</td>\
                            <td>\
                                <select name="addr">\
                                    <option value="" selected="selected">--請選擇--</option>\
                                    <option value="shandong">山東</option>\
                                    <option value="taiwan">台灣</option>\
                                    <option value="guangdong">廣東</option>\
                                </select>\
                            </td>\
                        </tr>\
                        <tr>\
                            <td> *所屬市</td>\
                            <td>\
                                <select name="city">\
                                    <option value="" selected="selected">--請選擇--</option>\
                                </select>\
                            </td>\
                        </tr>\
                        <tr>\
                            <td>薪資</td>\
                            <td>\
                                <input type="number" value="' + pay + '" name="pay">\
                            </td>\
                        </tr>\
                        <tr><td><button id="send">確定</button></td><td><button id="cancle">取消</button></td></tr>\
                    </table>\
                </div>';

    $("#form").html(html);
    $("select[name=addr]").val(addr);
    if (addr) {
        var $arr = ADDRINFO[addr].city,
            select_html = '<option value="" selected="selected">--請選擇--</option>';
        for (var i = 0; i < $arr.length; i++) {
            select_html += '<option value="' + $arr[i].name + '" >' + $arr[i].name + '</option>';
        }
        $("select[name=city]").html(select_html);
    }


    $("select[name=city]").val(city);
}

function dom_table(arr) {
    var arr = arr || [],
        name = arr[0] || "",
        age = arr[1] || "",
        date = arr[2] || "",
        addr = arr[3] || "",
        $addr = addr ? ADDRINFO[addr]['name'] : '',
        city = arr[4] || "",
        pay = arr[5] || "",
        html = ' <tr class="tr_info" >\
                    <td>' + name + '</td>\
                    <td>' + age + '</td>\
                    <td>' + date + '</td>\
                    <td>' + $addr + '</td>\
                    <td>' + city + '</td>\
                    <td class="pay_info">' + pay + '</td>\
                </tr>';
    $("#table_info tbody").append(html);
}

function dom_sum() {
    var len = DATA.length,
        sum = 0;
    if (len > 0) {
        for (var i = 0; i < len; i++) {
            if (DATA[i][5]) {
                sum += parseInt(DATA[i][5]);
            }

        }
    }

    var html = '<tr id="sum"><td  colspan="5" style="text-align:left">匯總</td><td>' + sum + '</td></tr>';
    $("#table_info tbody").append(html);
}


$("#add").on("click", function(e) {
    //新增
    dom_form();

    $("#sum").remove();
    $(".pay_info").hide();

    $(".tr_info").attr('class', 'tr_info');
    CHOOSE = -1;
    PAY = false;
});
$("#change").on("click", function(e) {
    //修改
    if (CHOOSE < 0) {
        alert("請選擇");
        return
    }
    var d = DATA[CHOOSE];
    dom_form(d);
    $("#sum").remove();
    $(".pay_info").hide();
    PAY = false;
});
$("#del").on("click", function(e) {
    //刪除
    if (CHOOSE < 0) {
        alert("請選擇")
    } else {
        $("#table_info tbody").html(" <tr id='tag'>\
                        <td>姓名</td>\
                        <td>年齡</td>\
                        <td>日期</td>\
                        <td>地區</td>\
                        <td>所屬市</td>\
                        <td class='pay_info'>薪資</td>\
                    </tr>");
        DATA.splice(CHOOSE, 1);
        for (var i = 0; i < DATA.length; i++) {
            dom_table(DATA[i])
        }
    }
    $("#table_form").remove();
});
$("#addPay").on("click", function(e) {
    //新增工資欄

    if (PAY) {
        $("#sum").remove();
        $(".pay_info").hide();
        PAY = false;
        return
    }
    dom_sum();
    $(".pay_info").show();
    PAY = true;
});
$("body").on("click", "#send", function(e) {
    //確定
    var name = $("input[name=name]").val(),
        age = $("input[name=age]").val(),
        date = $("input[name=date]").val(),
        addr = $("select[name=addr]").val(),
        city = $("select[name=city]").val(),
        pay = $("input[name=pay]").val(),
        array = [name, age, date, addr, city, pay];
    if (!name || !age || !date) {
        alert("請輸入完整信息。");
        return
    }
    if (CHOOSE < 0) {
        //新增
        DATA.push(array);
        dom_table(array);
    } else {
        //修改
        $("#table_info tbody").html(" <tr id='tag'>\
                        <td>姓名</td>\
                        <td>年齡</td>\
                        <td>日期</td>\
                        <td>地區</td>\
                        <td>所屬市</td>\
                        <td class='pay_info'>薪資</td>\
                    </tr>");
        DATA[CHOOSE] = array
        for (var i = 0; i < DATA.length; i++) {
            dom_table(DATA[i])
        }
    }
    $("#table_form").remove();

});
$("#search").on("click", function(e) {
    //查詢
    var res = $("input[name=search]").val();
    console.log(res);
    $("#table_info tbody").html(" <tr id='tag'>\
                        <td>姓名</td>\
                        <td>年齡</td>\
                        <td>日期</td>\
                        <td>地區</td>\
                        <td>所屬市</td>\
                        <td class='pay_info'>薪資</td>\
                    </tr>");
    if (res && DATA) {
        for (var i = 0; i < DATA.length; i++) {
            var name = DATA[i][0];
            if (res == name) {

                dom_table(DATA[i]);
            }
        }
        return;
    }
       for (var i = 0; i < DATA.length; i++) {
            dom_table(DATA[i])
        }

});
$("body").on("click", "#cancle", function(e) {
    //取消
    $("#table_form").remove();
});

$("body").on("change", "select[name=addr]", function(e) {
    //選擇地區
    var addr = $(this).val(),
        select_html = '<option value="" selected="selected">--請選擇--</option>';
    if (addr) {
        var arr = ADDRINFO[addr].city;

        for (var i = 0; i < arr.length; i++) {
            select_html += '<option value="' + arr[i].name + '" >' + arr[i].name + '</option>';
        }

    }
    $("select[name=city]").html(select_html);
});
$("body").on('click', ".tr_info", function(e) {
    // console.log("123213");
    // console.log($(".tr_info").index(this));
    var int = $(".tr_info").index(this);
    arr = DATA[int];
    CHOOSE = int;
    $(this).addClass("choose");
    $(this).siblings(".tr_info").attr('class', 'tr_info');
})