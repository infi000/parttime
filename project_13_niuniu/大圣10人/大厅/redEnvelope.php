<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>授权大厅</title>
    <meta name="apple-mobile-web-app-title" content="授权大厅"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/static/css/red.css"/>
</head><!--6474-->
<body><!--3897-->
<div id="loadings"
     style="position: fixed; left: 0;right: 0; top: 0; bottom: 0; z-index: 999; background:#fff url(/images/niuniu/25.gif) no-repeat center; background-size:.3072rem .3072rem; transition: all .5s;"></div>
<!--3253-->
<div id="networkReconnect"
     style="position: fixed; width:2.88rem; line-height:.2rem; font-size:.1rem; left:.36rem; text-align: center; bottom:45%; background: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); background: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); color:#fff; display:none; z-index:9999;">
    您的网络已断开，我们正在尝试重连...
</div><!--3669-->
<div class="wrap-bg">
    <div class="user-img"><img src="" onerror="this.src='http://static.wanzj.cn/images/ucenter/user.png'"></div>
    <div class="user-name"></div>
    <div class="text">给你发了一个礼盒</div>
    <div class="open" onclick="Page.open()">開</div>
</div>
<div class="container-hb">
    <div class="container-bg"></div>
    <div class="user-img"><img src="" onerror="this.src='http://static.wanzj.cn/images/ucenter/user.png'"></div>
    <div class="user-name-card">来自<em></em>的礼盒</div>
    <div class="big-card-number">
        <div class="card-number-text"><span></span>张</div>
        <div class="tips-text">可用于创建房间</div>
    </div>
    <div class="receive-list">
        <div class="flex-cont">
            <div class="user-small-img"><img src="" onerror="this.src='http://static.wanzj.cn/images/ucenter/user.png'"></div>
            <div class="flex-item">
                <div class="name"></div>
                <div class="name-text">领取了<span></span>房卡</div>
            </div>
            <div class="card-time">
                <div class="card-number"><span></span>张房卡</div>
                <div class="time">06-09 16:44</div>
            </div>
        </div>
    </div>
</div><!--8883-->


</body>
<script>/*7188*/
    var storage = {
        get: function (key) {
            var data = false;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    data = this.item(arr[0]);
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            data = data[arr[i]];
                        } else return false;
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            return data;
        }, set: function (key, value) {
            if (value === undefined) return false;
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            _dt = data;
                            data = data[arr[i]];
                        } else {
                            if (i == arr.length - 1) {
                                data[arr[i]] = '';
                                _dt = data;
                                data = data[arr[i]];
                            } else return false
                        }
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            data = value;
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
            }
            return true;
        }, inset: function (key, value) {
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            if (i == arr.length - 1) _dt = data;
                            data = data[arr[i]];
                        } else return false;
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            if (typeof(data) != 'object') return false;
            data.push(value);
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
                data = datas;
            }
            return data;
        }, outset: function (key, value) {
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            if (i == arr.length - 1) _dt = data;
                            data = data[arr[i]];
                        } else return false;
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            if (typeof(data) != 'object') return false;
            var _data = [];
            for (var i in data) {
                if (data[i] !== value) _data.push(data[i]);
            }
            data = _data;
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
                data = datas;
            }
            return data;
        }, pop: function (key, way) {
            var way = way || 1;
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            if (i == arr.length - 1) _dt = data;
                            data = data[arr[i]];
                        } else return false;
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            if (way == 1)
                var rs = data.pop(); else
                var rs = data.shift();
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
            }
            return rs;
        }, shift: function (key) {
            return this.pop(key, -1);
        }, incr: function (key, value) {
            if (typeof(value) != 'number') value = 1;
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            if (i == arr.length - 1) _dt = data;
                            data = data[arr[i]];
                        } else return false;
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            if (typeof(data) == 'number') {
                data += value;
            } else {
                return false;
            }
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
            }
            return data;
        }, decr: function (key, value) {
            if (typeof(value) != 'number') value = 1;
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            if (i == arr.length - 1) _dt = data;
                            data = data[arr[i]];
                        } else return false;
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            if (typeof(data) == 'number') {
                data -= value;
            } else {
                return false;
            }
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
            }
            return data;
        }, rm: function (key) {
            if (key.indexOf('.') > 0) {
                var data = [];
                var datas = null;
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            if (i == arr.length - 1) {
                                delete data[arr[i]];
                            } else data = data[arr[i]];
                        } else return false;
                    }
                    this.item(arr[0], datas);
                    return datas;
                } else {
                    return false;
                }
            } else {
                this.item(key, null);
                return true;
            }
        }, each: function (key, fn) {
            if (typeof(fn) != 'function') return false;
            var data = [];
            var datas = null;
            var _dt = null;
            if (key.indexOf('.') > 0) {
                var arr = key.split('.');
                if (this.item(arr[0])) {
                    datas = this.item(arr[0]);
                    data = datas;
                    for (var i in arr) {
                        if (i == 0) continue;
                        if (data[arr[i]] !== undefined) {
                            _dt = data;
                            data = data[arr[i]];
                        } else return false
                    }
                } else {
                    return false;
                }
            } else if (this.item(key)) data = this.item(key);
            if (typeof(data) != 'object') return false;
            for (var i in data) {
                var rs = fn(data[i], i);
                if (rs !== undefined) {
                    data[i] = rs;
                }
            }
            if (datas === null) {
                this.item(key, data);
            } else {
                _dt[arr[arr.length - 1]] = data;
                this.item(arr[0], datas);
            }
            return true;
        }, item: function (key, value) {
            if (window.localStorage) {
                if (value === undefined) {
                    return this.decode(localStorage.getItem(key)) || false;
                } else if (value === null) return localStorage.removeItem(key); else return localStorage.setItem(key, this.encode(value));
            } else {
                if (value === undefined) {
                    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
                    if (arr = document.cookie.match(reg))
                        return this.decode(arr[2]); else
                        return false;
                } else if (value === null) {
                    var exp = new Date();
                    exp.setTime(exp.getTime() - 1);
                    document.cookie = name + "=" + this.encode(value) + ";expires=" + exp.toGMTString();
                    return true;
                } else {
                    var Days = 30;
                    var exp = new Date();
                    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
                    document.cookie = name + "=" + this.encode(value) + ";expires=" + exp.toGMTString();
                    return true;
                }
            }
        }, encode: function (obj) {
            var str = '';
            try {
                str = JSON.stringify(obj);
            } catch (e) {
                str = decodeURI(obj);
            }
            return str;
        }, decode: function (str) {
            var obj = '';
            try {
                obj = JSON.parse(str);
            } catch (e) {
                obj = encodeURI(str);
            }
            return obj;
        }
    };
    $.alert = function (msg, fn, style, sec) {
        style = style || 'success';
        if (typeof(fn) == 'string') {
            style = fn;
        }
        if (!sec) {
            if (style == 'error' || style == 'puncherror') {
                sec = 9;
            } else {
                sec = 0;
            }
        }
        var box = $('<div>').addClass('resourceBox ' + style).attr('id', 'alertBox');
        box.html('<div class="context">' + msg + '</div>');
        box.appendTo('body');
        var h = win.width / 360 * 100;
        box.css({'opacity': 1, 'margin-top': -1 * (box.height() + h) / 2});
        if (sec >= 9) {
            var alertBoxLay = $('<div>').addClass('alertBoxLay').appendTo('body');
            $('<a>').attr('href', 'javascript:void(0);').addClass('closed').appendTo(box).text('我知道了');
            $('#alertBox a.closed, .alertBoxLay').click(function () {
                box.css({'opacity': 0, 'margin-top': -1 * (box.height() + h)});
                alertBoxLay.css('opacity', 0);
                setTimeout(function () {
                    box.remove();
                    alertBoxLay.remove();
                    if (typeof(fn) == 'function') fn();
                }, 500);
            });
        } else {
            setTimeout(function () {
                box.css({'opacity': 0, 'margin-top': -1 * (box.height() + h)});
                setTimeout(function () {
                    box.remove();
                    if (typeof(fn) == 'function') fn();
                }, 500);
            }, 1000 + sec * 1000);
        }
    };
    $.dialog = function (msg, fn, is_lock, classname) {
        is_lock = is_lock || true;
        if (typeof(fn) != 'function') return;
        classname = classname || '';
        var box = $('<div>').addClass('resourceBox  ' + classname).attr('id', 'dialogBox');
        var sb = $('<div>').addClass('sbox').appendTo(box);
        sb.html('<div class="context">' + msg + '</div>');
        box.appendTo('body');
        var h = win.width / 360 * 100;
        box.css({'opacity': 1, 'margin-top': -1 * (box.height() + h) / 2});
        if (is_lock) {
            var dialogBoxLay = $('<div>').addClass('dialogBoxLay').appendTo('body');
        }
        var btns = $('<div>').addClass('btns').appendTo(sb);
        $('<button>').addClass('closeBtn').appendTo(btns).text('否');
        var agree = $('<button>').addClass('agree').appendTo(btns).text('是');
        agree.click(function () {
            if (fn() !== false) {
                box.css({'opacity': 0, 'margin-top': -1 * (box.height() + h)});
                if (is_lock) dialogBoxLay.css('opacity', 0);
                setTimeout(function () {
                    box.remove();
                    if (is_lock) dialogBoxLay.remove();
                }, 500);
            }
        });
        $('#dialogBox button.closeBtn, .dialogBoxLay, .clearpsd, .noticeid').click(function () {
            box.css({'opacity': 0, 'margin-top': -1 * (box.height() + h)});
            dialogBoxLay.css('opacity', 0);
            setTimeout(function () {
                box.remove();
                dialogBoxLay.remove();
            }, 500);
        });
    };
    $.fn.touch = function (callback) {
        this.each(function () {
            if (typeof(callback) == 'function') {
                if (navigator.userAgent.indexOf('QQBrowser') > 0) {
                    $(this).on('click', callback);
                } else {
                    var time = 0;
                    this.fn = callback;
                    $(this).on('touchstart', function () {
                        time = (new Date()).getTime();
                    });
                    $(this).on('touchend', function () {
                        if ((new Date()).getTime() - time <= 300) {
                            this.fn(this);
                        }
                    });
                }
            } else {
                if (navigator.userAgent.indexOf('QQBrowser') > 0) {
                    $(this).click();
                } else {
                    this.fn(this);
                }
            }
        });
    };

    function ajax(path, data, fn, type) {
        if (!IS_SSL)
            var url = 'http://' + API_DOMAIN + '/'; else
            var url = 'https://' + API_DOMAIN + '/';
        var async = type === false ? false : true;
        if (typeof(data) == 'function') {
            fn = data;
            data = {};
        }
        var arr = location.href.substr(url.length).split('/');
        https = [arr[0] ? arr[0] : 'home', arr[1] ? arr[1] : 'index', arr[2] ? arr[2] : 'index'];
        var arr = path.split('/');
        switch (arr.length) {
            case 3:
                https[2] = arr[2];
            case 2:
                https[1] = arr[1];
            case 1:
                https[0] = arr[0];
        }
        url += https.join('/') + '';

        if (win.token != null) {
            url += "?token=" + win.token + "&v=" + win.version;
            var postdata = {};
            var getdata = [];
            if (data) {
                if (data.get) {
                    if (data.post) postdata = data.post;
                    for (i in data.get) {
                        getdata.push(i + '=' + encodeURIComponent(data.get[i]));
                    }
                    url += '&' + getdata.join('&');
                } else {
                    postdata = data;
                }
            }
            var arr = [];
            for (var i in postdata) {
                if (postdata[i] instanceof Array) {
                    for (var j in postdata[i]) {
                        arr.push(i + '[]=' + encodeURIComponent(postdata[i][j]));
                    }
                } else if (typeof(postdata[i]) == 'number' || typeof(postdata[i]) == 'string') {
                    arr.push(i + '=' + encodeURIComponent(postdata[i]));
                }
            }
            postdata = arr.join('&');
            var xmlHttp = new XMLHttpRequest();
            if (xmlHttp != null) {
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
                xmlHttp.send(postdata);
                xmlHttp.onreadystatechange = function () {
                    if (xmlHttp.readyState == 4) {
                        if (xmlHttp.status == 200) {
                            var data = '';
                            try {
                                data = JSON.parse(xmlHttp.responseText);
                            } catch (e) {
                                data = xmlHttp.responseText;
                            }
                            if (typeof(fn) == 'function') fn(data);
                        }
                    }
                };
            } else {
                alert("Your browser does not support XMLHTTP.");
            }
        }
    }

    String.prototype.decodeURL = function () {
        var url = this.toString();
        if (url.indexOf('?') > 0) {
            url = url.split('?')[1];
        }
        var arr = url.split('&');
        var params = {};
        for (var i in arr) {
            var a = arr[i].split('=');
            if (a.length == 2) {
                params[a[0]] = a[1];
            }
        }
        return params;
    };
    String.prototype.timeFormat = function (format) {
        var time = this.toString();
        if (/^\d+$/.test(time)) {
            var myDate = new Date(time * 1000);
        } else {
            time = time.replace(/\-/g, '/');
            var myDate = new Date(time);
        }
        var _date = {};
        _date.Y = myDate.getFullYear();
        _date.m = (myDate.getMonth() + 1).toString();
        if (_date.m.length == 1) _date.m = '0' + _date.m;
        _date.d = myDate.getDate().toString();
        if (_date.d.length == 1) _date.d = '0' + _date.d;
        _date.H = myDate.getHours();
        if (_date.H.length == 1) _date.H = '0' + _date.H;
        _date.i = myDate.getMinutes().toString();
        if (_date.i.length == 1) _date.i = '0' + _date.i;
        _date.s = myDate.getSeconds().toString();
        if (_date.s.length == 1) _date.s = '0' + _date.s;
        _date.w = myDate.getDay().toString();
        weekday = ['周日', '周一', '周二', '周三', '周四', '周五', '周六'];
        _date.W = weekday[myDate.getDay()];
        for (var i in _date) {
            format = format.replace(i, _date[i]);
        }
        return format;
    };

    function share(title, desc, link, imgUrl, fun) {
        wx.onMenuShareTimeline({
            title: title, desc: desc, link: link, imgUrl: imgUrl, success: function (res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareAppMessage({
            title: title, desc: desc, link: link, imgUrl: imgUrl, success: function (res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareQQ({
            title: title, desc: desc, link: link, imgUrl: imgUrl, success: function (res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareWeibo({
            title: title, desc: desc, link: link, imgUrl: imgUrl, success: function (res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareQZone({
            title: title, desc: desc, link: link, imgUrl: imgUrl, success: function (res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
    }

    function setTitle(title) {
        document.title = title;
        if (/ip(hone|od|ad)/i.test(navigator.userAgent)) {
            var i = document.createElement('iframe');
            i.src = '/favicon.ico';
            i.style.display = 'none';
            i.onload = function () {
                setTimeout(function () {
                    i.remove();
                }, 9)
            }
            document.body.appendChild(i);
        }
    }

    function isIOS() {
        return /iphone|ipad|ipod/.test(navigator.userAgent.toLowerCase());
    }

    function createCode(len) {
        var char = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'.split('');
        var code = '';
        for (var i = 0; i < len; i++) {
            code += char[Math.floor(Math.random() * 62)];
        }
        return code;
    }

    function oClone(obj) {
        var _obj = {};
        for (var i in obj) {
            if (typeof(obj[i]) == 'object' && !(obj[i] instanceof Array)) {
                _obj[i] = oClone(obj[i]);
            } else {
                _obj[i] = obj[i];
            }
        }
        return _obj;
    }

    function cacl(arr, callback) {
        var ret;
        for (var i = 0; i < arr.length; i++) {
            ret = callback(arr[i], ret);
        }
        return ret;
    }

    function array_max(array) {
        return cacl(array, function (item, max) {
            if (!(max > item)) {
                return item;
            }
            else {
                return max;
            }
        });
    }

    function array_min(array) {
        return cacl(array, function (item, min) {
            if (!(min < item)) {
                return item;
            }
            else {
                return min;
            }
        });
    }

    function array_sum(array) {
        return cacl(array, function (item, sum) {
            if (typeof(sum) == 'undefined') {
                return item;
            }
            else {
                return sum += item;
            }
        });
    }

    function array_avg(array) {
        if (array.length == 0) {
            return 0;
        }
        return array_sum(array) / array.length;
    }

    var win = {
        width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
        height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
        version: '1.0.0',
        ws: {},
        status: 0,
        readed: 0,
        reset: function (fn) {
            this.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            this.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            document.getElementsByTagName('html')[0].setAttribute('style', 'font-size:' + 100 * (this.width / 360) + 'px !important');
            if (typeof(fn) == 'function') fn();
        },
        closeLoading: function () {
            document.getElementById('loadings').style.opacity = 0;
            setTimeout(function () {
                document.getElementById('loadings').style.display = 'none';
            }, 500);
        },
        load: function () {
            this.reset();
            if (typeof(Page) == 'object' && typeof(Page.load) == 'function') Page.load();
        },
        ready: function () {
            this.reset();
            if (typeof(Page) == 'object' && typeof(Page.ready) == 'function') Page.ready();
        },
        readyJoin: function (code, func) {
            ajax('home/index/readyJoin', {code: code}, function (d) {
                var user_list = d.room_users;
                if (typeof(d.info) != 'undefined') {
                    if (d.info == 0) {
                        alert2('加入房间失败', function () {
                            wx.closeWindow();
                        })
                    } else if (d.info == -1) {
                        alert2('房间号错误', function () {
                            wx.closeWindow();
                        })
                    } else if (d.info == 1) {
                        document.body.style.background = '#000000';
                        document.body.minHeight = 'initial';
                        if (document.getElementsByClassName('body')[0]) {
                            document.body.removeChild(document.getElementsByClassName('body')[0]);
                        }
                        if (document.getElementsByTagName('canvas')[0]) {
                            document.body.removeChild(document.getElementsByTagName('canvas')[0]);
                        }
                        ajax('home/index/result', {code: Page.code}, function (data) {
                            if (data == 'error') {
                                Page.init();
                                return;
                            }
                            if (parseInt(data.game_id) == 3 || parseInt(data.game_id) == 7) {
                                Page.createRanking(data, function (data) {
                                    var img = document.createElement('img');
                                    img.className = 'room-gameover';
                                    img.src = data;
                                    img.onload = function () {
                                        document.body.appendChild(img);
                                        win.closeLoading();
                                    };
                                });
                            } else {
                                createRanking(data, function (data) {
                                    var img = document.createElement('img');
                                    img.className = 'room-gameover';
                                    img.src = data;
                                    img.onload = function () {
                                        document.body.appendChild(img);
                                        win.closeLoading();
                                        if (typeof(jQuery) != 'undefined') $(document.body).off('touchmove');
                                    };
                                });
                            }
                        });
                    } else if (d.info == 2) {
                        alert2('该房间人数已满', function () {
                            wx.closeWindow();
                        })
                    }
                } else if (typeof(d.member) != 'undefined') {
                    if (d.member == 1) {
                        var code = '<div class="request-member-mask">';
                        code += '<div class="requst-member">';
                        code += '<div class="text">你不是该房主的好友,无法加入房间；</div>';
                        code += '<div class="room-user flex-cont">';
                        code += '<div class="room-user-path"><img id="roomUserPath" src="' + d.room_owner.path + '" onerror="this.src=\'http://static.wanzj.cn/images/ucenter/user.png\'"></div>';
                        code += '<div class="room-user-name" id="roomUserName">' + d.room_owner.nickname + '</div>';
                        code += '</div>';
                        code += '<div class="text">是否申请成为好友？</div>';
                        code += '<div class="button" id="button">';
                        code += '<div class="request-btn" id="requestBtn">确定</div>';
                        code += '</div>';
                        code += '</div>';
                        code += '</div>';
                        document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
                        win.closeLoading();
                        document.getElementById('requestBtn').onclick = function () {
                            document.getElementById('button').innerHTML = '<div class="request-btn request-btn2">申请中</div>';
                            ajax('home/user/applyForFriend', {user_id: d.room_owner.id}, function (d) {
                                if (d.status == 1) {
                                } else {
                                }
                            })
                        }
                    } else if (d.member == 2) {
                        var code = '<div class="request-member-mask">';
                        code += '<div class="requst-member">';
                        code += '<div class="text">你不是该房主的好友,无法加入房间；</div>';
                        code += '<div class="room-user flex-cont">';
                        code += '<div class="room-user-path"><img id="roomUserPath" src="' + d.room_owner.path + '" onerror="this.src=\'http://static.wanzj.cn/images/ucenter/user.png\'"></div>';
                        code += '<div class="room-user-name" id="roomUserName">' + d.room_owner.nickname + '</div>';
                        code += '</div>';
                        code += '<div class="text">是否申请成为好友？</div>';
                        code += '<div class="button" id="button">';
                        code += '<div class="request-btn request-btn2">申请中</div>';
                        code += '</div>';
                        code += '</div>';
                        code += '</div>';
                        document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
                    }
                } else {
                    if (d.first_join || d.first_join == 1) {
                        var joinUser = '<div class="join-user" id="joinUser">';
                        joinUser += '<div class="join-info">';
                        if (user_list.length > 5) {
                            joinUser += '<div class="user-text2">';
                            joinUser += '<div class="gameuser-list" id="gameuser-list">';
                            for (var n in user_list) {
                                var code = '<div class="join-user-info">';
                                code += '<img src="' + user_list[n].path + '" alt="" onerror="this.src=\'http://static.wanzj.cn/images/ucenter/user.png\'"><span>' + user_list[n].nickname + '</span>';
                                code += '</div>';
                                joinUser += code;
                            }
                        } else {
                            joinUser += '<div class="user-text">';
                            joinUser += '<div class="gameuser-list" id="gameuser-list">';
                            for (var n in user_list) {
                                var code = '<div class="join-user-info">';
                                code += '<img src="' + user_list[n].path + '" alt=""><span>' + user_list[n].nickname + '</span>';
                                code += '</div>';
                                joinUser += code;
                            }
                        }
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '<div class="join-user-bottom">';
                        joinUser += '<button class="return-index" onclick="location.href=\'index\'">返回首页</button>';
                        joinUser += '<button class="join-game" id="joinGame">加入房间</button>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                        document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", joinUser);
                        document.getElementById('joinGame').onclick = function () {
                            win.status = 1;
                            document.getElementsByTagName('body')[0].removeChild(document.getElementById('joinUser'));
                            if (typeof(func) == 'function') func();
                        }
                    } else {
                        if (user_list.length == 0) win.status = 1;
                        if (typeof(func) == 'function') func();
                    }
                }
            });
        },
        reload: function () {
            if (/[\?\&]q=[0-9\.]+/.test(location.href))
                location.href = location.href.replace(/([\?\&]q=)[0-9\.]+/, '$1' + Math.random()); else
                location.href = location.href + (location.href.indexOf('?') > 0 ? '&' : '?') + 'q=' + Math.random();
        }
    };
    var user = null;
    var ws = {};
    window.onresize = function () {
        win.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        win.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        win.reset();
    };

    function alert2(msg, fn, style, sec) {
        style = style || 'success';
        if (typeof(fn) == 'string') {
            style = fn;
        }
        if (!sec) {
            if (style == 'error' || style == 'puncherror') {
                sec = 9;
            } else {
                sec = 0;
            }
        }
        var box = document.createElement('div');
        box.className = 'resourceBox ' + style;
        box.id = 'alertBox';
        box.innerHTML = '<div class="context">' + msg + '</div>';
        document.getElementsByTagName('body')[0].appendChild(box);
        var h = win.width / 360 * 100;
        box.style.opacity = 1;
        box.style.marginTop = -1 * (box.offsetHeight + h) / 2 + 'px';
        if (sec >= 9) {
            var alertBoxLay = document.createElement('div');
            alertBoxLay.className = 'alertBoxLay';
            document.getElementsByTagName('body')[0].appendChild(alertBoxLay);
            var BtnA = document.createElement('a');
            BtnA.innerText = '我知道了';
            BtnA.setAttribute('href', 'javascript:void(0);');
            BtnA.className = 'closed';
            box.appendChild(BtnA);
            alertBoxLay.addEventListener('click', function () {
                box.style.opacity = 0;
                box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
                this.style.opacity = 0;
                setTimeout(function () {
                    document.getElementsByTagName('body')[0].removeChild(box);
                    document.getElementsByTagName('body')[0].removeChild(alertBoxLay);
                    if (typeof(fn) == 'function') fn();
                }, 500);
            })
        } else {
            setTimeout(function () {
                box.style.opacity = 0;
                box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
                setTimeout(function () {
                    document.getElementsByTagName('body')[0].removeChild(box);
                    if (typeof(fn) == 'function') fn();
                }, 500);
            }, 1000 + sec * 1000);
        }
    }

    function usersRand(users, user_id) {
        var count = Math.round(Math.random() * users.length) + users.length * 2;
        var x = users.indexOf(user_id);
        var n = (count - x - 1) % users.length;
        var i = 0;
        (function xxx() {
            $('.user-info').removeClass('choosed');
            $('.user-info[data-id="' + users[n] + '"]').addClass('choosed');
            n++;
            i++;
            if (i == count) return;
            if (n >= users.length) n = 0;
            setTimeout(xxx, users.length * 500 / count);
        })();
    }

    function usersRand2(users, user_id) {
        var usersLength = users.length;
        var count = usersLength + 10;
        var x = users.indexOf(user_id);
        var n = (count - x - 1) % usersLength;
        var i = 0;
        var time = 1000 + (usersLength * 500);
        (function xxx() {
            $('.user-info').removeClass('choosed');
            $('.user-info[data-id="' + users[n] + '"]').addClass('choosed');
            n++;
            i++;
            if (i == count) return;
            if (n >= usersLength) n = 0;
            setTimeout(xxx, (parseInt(time) / count));
        })();
    }

    function Gold(source, target) {
        if (source == "" || target == "") {
            return;
        }
        var id_bol;
        if (Object.prototype.toString.call(source) == '[object Array]') {
            id_bol = true;
        } else {
            id_bol = false;
        }
        var count = 15;
        var gold_w = 12;
        var gold_h = 12;
        var obj = [];
        var str = [];
        var str1 = [];
        var bol = false;
        var index = 39;
        var _index = 0;
        var index1_num = 0;
        var music_bol = true;
        var $canvas = $('<canvas width="' + $("body").width() + '" height="' + $("body").height() + ' "class="canvas_gold"></canvas>').appendTo('body');
        var can = $canvas.get(0).getContext("2d");
        if (id_bol) {
            var $target = $('.user-info[data-id="' + target + '"]');
            for (var z = 0; z < source.length; z++) {
                var $source = $('.user-info[data-id="' + source[z] + '"]');
                var coins = [];
                var _str_a = [];
                var _str_b = [];
                for (var i = 0; i < count; i++) {
                    var coin = new jinbi(gold_w, gold_h);
                    coin.x = $source.position().left + Math.round(Math.random() * ($source.width() * 0.62));
                    coin.y = $source.position().top + Math.round(Math.random() * ($source.width() * 0.62));
                    coins.push(coin);
                    _str_a.push({"x": coin.x, "y": coin.y});
                    _str_b.push({
                        "x": $target.position().left + Math.round(Math.random() * ($target.width() * 0.62)),
                        "y": $target.position().top + Math.round(Math.random() * ($target.width() * 0.62))
                    });
                }
                obj.push(coins);
                str.push(_str_a);
                str1.push(_str_b);
            }
        } else {
            var $source = $('.user-info[data-id="' + source + '"]');
            for (var z = 0; z < target.length; z++) {
                var $target = $('.user-info[data-id="' + target[z] + '"]');
                var coins = [];
                var _str_a = [];
                var _str_b = [];
                for (var i = 0; i < count; i++) {
                    var coin = new jinbi(gold_w, gold_h);
                    coin.x = $source.position().left + Math.round(Math.random() * ($source.width() * 0.62));
                    coin.y = $source.position().top + Math.round(Math.random() * ($source.width() * 0.62));
                    coins.push(coin);
                    _str_a.push({"x": coin.x, "y": coin.y});
                    _str_b.push({
                        "x": $target.position().left + Math.round(Math.random() * ($target.width() * 0.62)),
                        "y": $target.position().top + Math.round(Math.random() * ($target.width() * 0.62))
                    });
                }
                obj.push(coins);
                str.push(_str_a);
                str1.push(_str_b);
            }
        }
        var img = new Image();
        img.src = "http://img.lfzgame.com/images/niuniu/gold.png";
        img.onload = function () {
            move();
        }

        function move() {
            can.clearRect(0, 0, $canvas.width(), $canvas.height());
            if (_index % 2 == 0 && index1_num < count) {
                index1_num++;
            }
            for (var j = 0; j < obj.length; j++) {
                for (var k = 0; k < index1_num; k++) {
                    obj[j][k].index++;
                    if (obj[j][k].index <= index) {
                        obj[j][k].x += (str1[j][k]["x"] - str[j][k]["x"]) / index;
                        obj[j][k].y += (str1[j][k]["y"] - str[j][k]["y"]) / index;
                        obj[j][k].draw();
                    }
                    if (obj[j][0].index == index / 3) {
                        if (music_bol) {
                            sound.play('gold');
                            music_bol = false;
                        }
                    }
                }
            }
            if (obj[0][0].index == index) {
                if (id_bol) {
                    $('.user-info[data-id="' + target + '"]').addClass('flash');
                } else {
                    for (var i = 0; i < target.length; i++) {
                        $('.user-info[data-id="' + target[i] + '"]').addClass('flash');
                    }
                }
            } else if (obj[0][count - 1].index == index) {
                if (id_bol) {
                    $('.user-info[data-id="' + target + '"]').removeClass('flash');
                } else {
                    for (var i = 0; i < target.length; i++) {
                        $('.user-info[data-id="' + target[i] + '"]').removeClass('flash');
                    }
                }
            }
            _index++;
            if (obj[0][count - 1].index > index) {
                bol = true;
                setTimeout(function () {
                    $canvas.remove();
                }, 500)
            }
            if (!bol) {
                setTimeout(move, 15)
            }
        }

        function jinbi(w, h) {
            var img = new Image();
            img.src = "http://img.lfzgame.com/images/niuniu/gold.png";
            this.play = img;
            this.x = 0;
            this.y = 0;
            this.index = 0;
            this.width1 = w;
            this.height1 = h;
            this.draw = function () {
                can.drawImage(this.play, 0, 0, this.play.width, this.play.height, this.x, this.y, this.width1, this.height1);
            }
        }
    }

    $.fn.overscroll = function () {
        this.on('touchstart', function (event) {
            $(document.body).off('touchmove');
        });
        this.on('touchend', function (event) {
            $(document.body).on('touchmove', function (evt) {
                evt.preventDefault();
            });
        });
    };
    var sound = {
        audioContext: null,
        audioBuffers: [],
        isloaded: false,
        isBgm: false,
        o: {},
        source: [],
        initModule: function () {
            this.audioBuffers = [];
            window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext || window.msAudioContext;
            this.audioContext = new window.AudioContext();
        },
        stopSound: function (name) {
            var buffer = this.audioBuffers[name];
            if (buffer) {
                if (buffer.source) {
                    buffer.source.stop(0);
                    buffer.source = null;
                }
            }
        },
        playSound: function (name, isLoop) {
            var buffer = this.audioBuffers[name];
            if (buffer) {
                WeixinJSBridge.invoke('getNetworkType', {}, function (e) {
                    buffer.source = null;
                    buffer.source = sound.audioContext.createBufferSource();
                    buffer.source.buffer = buffer.buffer;
                    buffer.source.loop = false;
                    var gainNode = sound.audioContext.createGain();
                    if (isLoop == true) {
                        buffer.source.loop = true;
                        gainNode.gain.value = 0.7;
                    } else {
                        gainNode.gain.value = 1.0;
                    }
                    buffer.source.connect(gainNode);
                    gainNode.connect(sound.audioContext.destination);
                    buffer.source.start(0);
                });
            }
        },
        initSound: function (arrayBuffer, name) {
            this.audioContext.decodeAudioData(arrayBuffer, function (buffer) {
                sound.audioBuffers[name] = {"name": name, "buffer": buffer, "source": null};
                if (name == "bgm") {
                    sound.isloaded = true;
                    sound.playSound(name, true);
                }
            }, function (e) {
                console.warn('Error decoding file');
            });
        },
        loadAudioFile: function (url, name) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.responseType = 'arraybuffer';
            xhr.onload = function (e) {
                sound.initSound(xhr.response, name);
            };
            xhr.send();
        },
        load: function () {
            if (this.isloaded) return;
            for (var i in this.source) {
                this.loadAudioFile(this.source[i], i);
            }
        },
        play: function (num, sex) {
            if (!storage.get('pausemusic')) {
                if (sex) {
                    var name = 'sound_';
                    if (sex == 1)
                        name += '1'; else
                        name += '2';
                    if (/^\d+$/.test(num))
                        name += '_' + num; else
                        name += num;
                    this.playSound(name);
                } else {
                    if (num) this.playSound(num);
                }
            }
        }
    };
    sound.initModule();
    document.addEventListener("visibilitychange", function () {
        if (!document.hidden) {
            if (!storage.get('pausemusic'))
                sound.playSound('bgm', true);
        } else {
            if (!storage.get('pausemusic'))
                sound.stopSound('bgm');
        }
    });

    function createRanking(data, func) {
        var users = data.users;
        var game_id = data.game_id;
        var room_number = data.room_number;
        var num = data.num;
        var sum = data.sum;
        var datetime = data.datetime;
        var width = 750;
        var height = 1216;
        var pics = ['http://static.wanzj.cn/images/ranking_' + game_id + '_bg.jpg', 'http://static.wanzj.cn/images/people_bg.png', 'http://static.wanzj.cn/images/ranking_icon.png'];
        if (users.length > 6) {
            pics.push('http://static.wanzj.cn/images/people_bg2.jpg');
            pics.push('http://static.wanzj.cn/images/people_bg3.jpg');
            height += 102 * (users.length - 6);
        }
        for (var i in users) {
            if (/\/\/[064]{1,2}$/.test(users[i].path)) pics.push('http://static.wanzj.cn/images/default_head.png'); else pics.push(users[i].path.replace(/\/0$/, '/64').replace('https://wx.qlogo.cn/', 'http://113.96.232.104/'));
        }
        var count = 0, imgs = [];
        for (var i in pics) {
            if (XMLHttpRequest)
                var xhr = new XMLHttpRequest(); else
                var xhr = new ActiveXObject('Microsoft.XMLHTTP');
            xhr._index = i;
            xhr.open("get", pics[i], true);
            xhr.responseType = "blob";
            xhr.onload = function () {
                var img = document.createElement("img");
                if (this.status == 200) {
                    img.src = window.URL.createObjectURL(this.response);
                } else {
                    this.src = 'http://static.wanzj.cn/images/default_head.png';
                }
                imgs[this._index] = img;
                img.onload = function (e) {
                    count++;
                    if (count >= pics.length) draw();
                };
            };
            xhr.onerror = function () {
                var img = document.createElement("img");
                img.src = 'http://static.wanzj.cn/images/default_head.png';
                imgs[this._index] = img;
                img.onload = function (e) {
                    count++;
                    if (count >= pics.length) draw();
                };
            };
            xhr.send();
        }
        var canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;
        var context = canvas.getContext('2d');

        function draw() {
            context.drawImage(imgs[0], 0, 0, width, width / 750 * 1216);
            var text = '房间号：' + room_number + '                     ' + datetime + '   ' + num + '/' + sum + '局';
            context.font = "19px 微软雅黑";
            context.textAlign = 'center';
            context.fillStyle = "#a28080";
            context.fillText(text, 375, 412);
            for (var i in users) {
                if (i >= 6) context.drawImage(imgs[3], 0, 430 + i * 102, 750, 102);
                var n = parseInt(i) + parseInt(users.length > 6 ? 5 : 3);
                context.drawImage(imgs[n], 170, 446 + i * 102, 59, 59);
                context.drawImage(imgs[1], 129, 430 + i * 102, 490, 90);
                var textwidth = 250;
                context.font = "24px 微软雅黑";
                context.textAlign = 'start';
                context.fillStyle = "#666666";
                var arr = users[i].nickname.split('');
                var txt = '', row = [];
                for (var j in arr) {
                    if (context.measureText(txt).width >= textwidth) {
                        row.push(txt);
                        txt = '';
                    }
                    txt += arr[j];
                }
                if (txt != '') row.push(txt);
                if (row.length == 1) {
                    context.fillText(row[0], 240, 482 + 102 * i);
                } else {
                    context.fillText(row[0], 240, 470 + 102 * i);
                    context.fillText(row[1], 240, 498 + 102 * i);
                }
                context.font = "36px 微软雅黑";
                context.textAlign = 'center';
                if (users[i]['value'] > 0) {
                    context.fillStyle = "#cd5908";
                    context.fillText('+' + users[i]['value'], 560, 490 + 102 * i);
                } else if (users[i]['value'] < 0) {
                    context.fillStyle = "#32b16c";
                    context.fillText(users[i]['value'], 560, 490 + 102 * i);
                } else {
                    context.fillStyle = "#989898";
                    context.fillText('0', 560, 490 + 102 * i);
                }
                if (users[i]['value'] == users[0]['value']) {
                    context.drawImage(imgs[2], 108, 430 + i * 102, 51, 84);
                }
            }
            if (i >= 6) context.drawImage(imgs[4], 0, 430 + (++i) * 102, 750, 175);
            if (typeof(func) == 'function') func(canvas.toDataURL("image/png"));
        }
    }

    function Agreement() {
        var code = '<div class="window-masks agreement">';
        code += '<div class="border-opacity">';
        code += '<div class="container">';
        code += '    <i class="mask-icon mask-top"></i><i class="mask-icon mask-right"></i><i class="mask-icon mask-bottom"></i><i class="mask-icon mask-left"></i>';
        code += '    <div class="title"></div>';
        code += '    <div class="main">';
        code += '       <p>本游戏仅供娱乐， 严禁赌博，如发现有赌博行为，将封停账号并向公安机关举报。</p>';
        code += '       <p>游戏中使用到的房卡为游戏道具，不具有任何财产性功能，本公司对于用户所拥有的房卡不提供任何形式官方回购、直接或变相兑换现金或实物等服务或相关功能。</p>';
        code += '       <p>游戏仅供休闲娱乐使用，游戏中出现问题请联系客服。</p>';
        code += '    </div>';
        code += '<div class="sure">确定</div>';
        code += '    </div>';
        code += '    </div>';
        code += '</div>';
        document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
    }

    function userJoin(data) {
        var code = '<div class="window-masks user-join">';
        code += '<div class="border-opacity">';
        code += '<div class="container">';
        code += '<i class="mask-icon mask-top"></i><i class="mask-icon mask-right"></i><i class="mask-icon mask-bottom"></i><i class="mask-icon mask-left"></i>';
        code += '<div class="user-id">ID：' + data.user_id + '</div>';
        code += '<div class="main">';
        code += '<div class="rules"></div>';
        code += '<div class="user-list">';
        code += '<div class="join-user-info">';
        code += '<img src="' + data.user_path + '" onerror="this.src=\'http://static.wanzj.cn/images/ucenter/user.png\'"><span>' + data.user_name + '</span>';
        code += '</div>';
        code += '</div>';
        code += '</div>';
        code += '<div class="button">';
        code += '<div class="return">创建房间</div>';
        code += '<div class="join-game">加入游戏</div>';
        code += '</div>';
        code += '</div>';
        code += '</div>';
        code += '</div>';
        document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
    }

    (function (ws) {
        ws.link = null;
        var func = null, connect_num = 0, close_func = null, url = null;
        var status = 0;
        var codes = [];
        ws.callback = {};
        ws._datas = [];

        var noActs = ['timer', 'userTime', 'playerjoin', 'gameRunning', 'playerleave', 'ready', 'chat', 'roomGameOver'];
        ws.send = function (data, act, _data) {
            if (ws == null) {
                console.warn('Websocket没有连接，无法进行操作！');
            } else {
                if (ws.link == null) {
                    setTimeout(function () {
                        ws.send(data, act);
                    }, 200);
                } else {
                    if (act) {
                        var d = {};
                        d['data'] = data || '';
                        d['act'] = act;
                        d = JSON.stringify(d);
                        ws.link.send(d);
                        if (_data && typeof(ws.callback[act]) == 'function') {
                            ws._datas.push(JSON.stringify({act: act, data: _data}));
                            ws.callback[act](_data);
                        }
                    } else {
                        ws.link.send(data);
                    }
                }
            }
        };
        ws.connect = function (uri, fn) {

            var uri = uri || url;
            var fn = fn || func;
            if (uri == null) return;
            url = uri;
            if (fn) func = fn;
            if (ws.link != null) {
                ws.link.close();
            }
            ws.link = new WebSocket((IS_SSL ? 'wss' : 'ws') + '://' + WS_DOMAIN + '/' + uri + '?token=' + win.token + '&code=' + location.href.split('code=')[1].split('&')[0]);




            ws.link.onopen = function (d) {
                console.info('Websocket 已连接!');
                document.getElementById('networkReconnect').style.display = 'none';
                connect_num = 0;
                status = 1;
                ws.heartbeat.start();
                if (win.status == 1) {
                    ws.send('join');
                } else if (win.status == 0) {
                    win.status = 2;
                    ws.send('init');
                    ws.send('connect_success');
                } else
                    ws.send('connect_success');
                if (typeof(fn) == 'function') fn();
            };
            ws.link.onerror = function (evt) {
                console.log(evt);
            };
            ws.link.onmessage = function (d) {
                ws.heartbeat.reply();
                if (d.data == 'pong') return;
                if (d.data == 'ping') {
                    this.send('pong');
                    return;
                }
                if (d.data == 'join_success') {
                    win.status = 2;
                    ws.send('init');
                    ws.send('connect_success');
                    return;
                }
                if (d.data == 'getout') {
                    win.reload();
                    return;
                }
                if (d.data == 'close') {
                    if (ws.link == this) {
                        document.getElementById('networkReconnect').innerText = '您已在其他设备登录！';
                        document.getElementById('networkReconnect').style.display = 'block';
                        ws.close();
                    } else {
                        this.close();
                    }
                    return;
                }
                try {
                    var dt = JSON.parse(d.data);
                    var act = dt.act;
                    var data = dt.data;
                    var i = ws._datas.indexOf(JSON.stringify({act: act, data: data}));
                    if (i > -1) {
                        ws._datas.splice(i, 1);
                        return;
                    }
                    if (typeof(ws.callback[act]) == 'function') ws.callback[act](data);
                } catch (ev) {
                    console.warn(ev);
                }
            };
            ws.link.onclose = function () {
                console.info('Websocket 已断开!');
                if (ws.link != this) return;
                if (typeof(close_func) == 'function') close_func();
                if (ws.link === null) return;
                ws.link = null;
                if (status == 3) {
                    ws.heartbeat.status = 0;
                    return;
                }
                setTimeout(function () {
                    connect_num++;
                    console.warn('系统正在进行第 ' + connect_num + ' 次重连...');
                    ws.connect();
                }, 1500);
                status = 2;
                ws.heartbeat.status = 2;
            };
        };
        ws.close = function (func) {
            status = 3;
            ws.heartbeat.status = 0;
            ws.link.close();
            close_func = function () {
                close_func = null;
                ws.link = null;
                connect_num = 0;
                if (typeof(func) == 'function') setTimeout(func, 500);
            }
        };
        ws.heartbeat = {
            ltime: 0, status: 0, speed: 5, num: 0, failcount: 0, start: function () {
                this.num = 0;
                this.failcount = 0;
                this.ltime = (new Date()).getTime();
                document.getElementById('networkReconnect').style.display = 'none';
                if (this.status == 0) this.jump();
            }, jump: function () {
                if (this.status == 0) this.status = 1;
                var that = this;
                setTimeout(function () {
                    that.num++;
                    if (that.num >= that.speed) {
                        if ((new Date()).getTime() - that.ltime >= 1500) {
                            that.failcount++;
                            if (that.failcount > 3) {
                                document.getElementById('networkReconnect').innerText = '您的网络已断开，我们正在尝试重连...';
                                document.getElementById('networkReconnect').style.display = 'block';
                                that.status = 2;
                                status = 2;
                                if (ws.link != null && status == 1) ws.link.close();
                            }
                            if (ws.link != null && status == 1) ws.link.send('ping');
                        }
                    }
                    if (that.status > 0) that.jump();
                }, 1000);
            }, reply: function () {
                document.getElementById('networkReconnect').style.display = 'none';
                this.ltime = (new Date()).getTime();
                this.num = 0;
                this.failcount = 0;
            }
        };
        setInterval(function () {
            var time = (new Date()).getTime();
            var _codes = [];
            for (var i in codes) {
                if (time - codes[i].time < 5000) {
                    _codes.push(codes[i]);
                }
            }
            codes = _codes;
        }, 1000);
    })(ws);
    var Page = {
        code: '', shareData: {}, load: function () {
            if (location.href.split('red_code=').length == 2) {
                Page.code = location.href.split('?red_code=')[1].split('&')[0];
                ajax('home/user/getGiftInfo', {code: Page.code}, function (d) {
                    if (d.info) {
                        $.alert(d.info, function () {
                            location.href = 'index';
                        }, 'error');
                    } else {
                        $('.user-img img').attr('src', d.path);
                        $('.user-name').text(d.nickname);
                        Page.shareData = {
                            title: '房卡礼盒',
                            userCard: d.nickname + ' 给你发了一个房卡礼盒',
                            link: location.href,
                            path: location.href.split('redEnvelope')[0] + 'http://static.wanzj.cn/images/roomcard-box.jpg'
                        };
                        $('.wrap-bg').addClass('show');
                        if (d.status == 1) {
                            $('.wrap-bg').removeClass('show');
                            $('.container-hb .user-name-card em').text(d.nickname);
                            $('.container-hb .name').text(d.target_name);
                            $('.container-hb .user-small-img img').attr('src', d.target_path);
                            $('.container-hb .name-text span').text(d.value + '张');
                            $('.container-hb .card-number-text span').text(d.value);
                            $('.container-hb .time').text(d.finish_time.timeFormat('m-d H:i'));
                            $('.container-hb').show();
                        }
                        $('#loadings').fadeOut('fast', function () {
                            $(this).remove();
                        });
                    }
                });
            }
        }, ready: function () {
            (function ready() {
                if (typeof(Page.shareData.title) == 'string') {
                    share(Page.shareData.title, Page.shareData.userCard, Page.shareData.link, Page.shareData.path);
                } else {
                    setTimeout(ready, 1000);
                }
            })();
        }, open: function () {
            ajax('home/user/openGift', {'code': Page.code}, function (d) {
                if (d.status == 3) {
                    Page.phoneMask();
                } else {
                    $('.wrap-bg').removeClass('show');
                    location.href = 'redEnvelope?red_code=' + Page.code + '&q=' + Math.random();
                }
            }, 2);
        }, cancel: function () {
            ajax('home/user/cancelGift', {'code': Page.code}, function (d) {
                $.alert(d.info);
                location.href = 'createGift';
            }, 2);
        }, phoneMask: function () {
            var code = '<div class="phone-number-box">';
            code += '<div class="phone-number">';
            code += '<div class="phone-number-content">';
            code += '<div class="tips-text">为了您的房卡安全，请进行短信验证!</div>';
            code += '<div class="phone"><input class="mobile" type="text" maxlength="11" placeholder="请输入您的电话号码"></div>';
            code += '<div class="phone-code">';
            code += '<input class="mobile-code" type="text" placeholder="输入验证码">';
            code += '<div class="phone-btn" onclick="Page.phoneCode()">';
            code += '</div>';
            code += '</div>';
            code += '</div>';
            code += '<button class="phone-sure" onclick="Page.phoneNumberCode()">绑定手机</button>';
            code += '</div>';
            code += '</div>';
            $(code).appendTo('body');
        }, phoneCode: function () {
            var mobile = $('.phone-number-box .mobile').val();
            if (!mobile) {
                $.alert('请输入手机号码');
            } else if (mobile.length != 11) {
                $.alert('请输入正确的手机号码');
            } else if (mobile.length == 11) {
                ajax('home/user/sendMessage', {'mobile': mobile}, function (d) {
                    if (d.status == 0 || !d.status) {
                        $.alert(d.info);
                    } else if (d.status == 1) {
                        var code = '<div class="phone-btn2">';
                        code += '       重新发送(<span>60</span>s)';
                        code += '    </div>';
                        $(code).appendTo('.phone-number-box .phone-code');
                        var times = 60;
                        var phoneTime = setInterval(function () {
                            times--;
                            if (times <= 0) {
                                $('.phone-number-box .phone-btn2').remove();
                                clearInterval(phoneTime);
                            } else {
                                $('.phone-number-box .phone-btn2 span').html(times);
                            }
                        }, 1000);
                    } else {
                        $.alert('错误操作');
                    }
                })
            }
        }, phoneNumberCode: function () {
            var mobile = $('.phone-number-box .mobile').val();
            var mobileCode = $('.phone-number-box .mobile-code').val();
            if (!mobile) {
                $.alert('请输入手机号码');
            } else if (mobile.length != 11) {
                $.alert('请输入正确的手机号码');
            } else if (!mobileCode) {
                $.alert('请输入验证码');
            } else {
                ajax('home/user/registMobile', {'mobile': mobile, 'code': mobileCode}, function (d) {
                    if (d.status == 1) {
                        $.alert(d.info);
                        $('.phone-number-box').remove();
                    } else if (d.status == 0 || !d.status) {
                        $.alert(d.info);
                    }
                })
            }
        },
    };
    $(document.body).on('touchmove', function (evt) {
        evt.preventDefault();
    });
notice = [];
</script><!--1951-->

<script>

    const DOMAIN = 'wsdw.ayriv.cn';
    const API_DOMAIN = 'wsdw.ayriv.cn';
    const WS_DOMAIN = '111.230.23.129:8084';
    const JUMP_DOMAIN = 'wsdw.ayriv.cn';
    const USE_QRCODE = 0;
    const IS_SSL = false;
    win.version = '1.0.0';
    win.sign = 'dashengzhongyu';
    win.token = 'Z2xtcnI2b2dpb2xmaXEzdjFlY282azB1b24=';
    notice.data = '';
    var user = {
        "id": "206116",
        "wechat_id": "1",
        "nickname": "infi000",
        "sex": "1",
        "citys": "未知",
        "path": "http://wx.qlogo.cn/mmopen/vi_32/ajNVdqHZLLBpQWjaWCxJrLvBkUGbiaJM9RZyicNedqCOgOVxU5oCxkMQ8CYww3Lb5on3F1icv9gI9xFzH2WOamFMQ/0",
        "room_cards": 4    };
    window.onload = function () {
        win.load();
    }
    wx.config({
        appId: 'wxd8803917b97c1289', // 必填，公众号的唯一标识
        timestamp: '1510859423', // 必填，生成签名的时间戳
        nonceStr: '69goGGtTJlbQzRBw', // 必填，生成签名的随机串
        signature: 'd9ec3d282b5c4e2dbdd6cfdb4b3c46a8e2c09cb1',// 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone', 'getLocation', 'hideOptionMenu']
    });
    wx.ready(function () {
        if (win.readed == 1) return;
        win.readed = 1;
        win.ready();
    });
    wx.error(function (res) {
        //$.alert('微信API获取失败！');
    });
</script>
<img src="//img.users.51.la/19305660.asp" style="border:none;display: none" />
<!--1951--></html>