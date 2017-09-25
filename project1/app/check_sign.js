// console.log(sign('jsapi_ticket', 'http://example.com'));
/*
 *something like this
 *{
 *  jsapi_ticket: 'jsapi_ticket',
 *  nonceStr: '82zklqj7ycoywrk',
 *  timestamp: '1415171822',
 *  url: 'http://example.com',
 *  signature: '1316ed92e0827786cfda3ae355f33760c4f70c1f'
 *}
 */


var express = require("express");
// var http = require('http');
var https = require("https");
var app = express();
var sign = require('./sign.js');
var fs = require('fs');
var atoken = "";
var jsapi_ticket = "";
var URL = "";
//设置跨域访问
app.all("*", function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Content-Type,Content-Length, Authorization, Accept,X-Requested-With");
    res.header("Access-Control-Allow-Methods", "PUT,POST,GET,DELETE,OPTIONS");
    res.header("X-Powered-By", ' 3.2.1')
    if (req.method == "OPTIONS") res.send(200); /*让options请求快速返回*/
    else next();
});



app.get("/wx/get", function(req, res) {
    console.log("有访问来了")
    //客户端get请求 请求配置文件
    var d = sign(atoken, "http://47.92.154.0");
    d.jsApiList = [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
    ]
    res.send(d);
});

var refresh = function() {
    //刷新atoken
    getAtoken();
    setInterval(function() {
        getAtoken();
    }, 7000 * 1000);
};


var getAtoken = function() {
    // var queryParams = {
    //     'grant_type': 'client_credential',
    //     'appid': 'wx59f0627c78d3c3e1',
    //     'secret': 'cde443140fca4b4a2a2914bed12b5644'
    // };
    var queryParams = "grant_type=client_credential&appid=wx59f0627c78d3c3e1&secret=cde443140fca4b4a2a2914bed12b5644"
    var wxGetAccessTokenBaseUrl = 'https://api.weixin.qq.com/cgi-bin/token?' + queryParams;
    https.get(wxGetAccessTokenBaseUrl, function(res) {
        res.setEncoding("binary");
        res.on("data", function(chunk) {
            atoken = JSON.parse(chunk)['access_token'];
            console.log("**************************"+new Date()+"开始*************************************************************")
            console.log("atoken:" + atoken);
            //获取atoken后，掉用接口获取jsapi_ticket
            https.get("https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=" + atoken+"&type=jsapi", function(res) {
                res.setEncoding("binary");
                res.on("data", function(_chunk) {
                    jsapi_ticket = JSON.parse(_chunk)['ticket'];
                    console.log("jsapi_ticket:" + jsapi_ticket);

                    // var d = sign(jsapi_ticket, "http://www.xx34.cn/");
                    // d.appId = 'wx59f0627c78d3c3e1';
                    // // d.debug=true;
                    // d.jsApiList = [
                    //     'checkJsApi',
                    //     'onMenuShareTimeline',
                    //     'onMenuShareAppMessage',
                    //     'onMenuShareQQ',
                    //     'onMenuShareWeibo',
                    //     'onMenuShareQZone',
                    //     'hideMenuItems',
                    //     'showMenuItems',
                    //     'hideAllNonBaseMenuItem',
                    //     'showAllNonBaseMenuItem',
                    //     'translateVoice',
                    //     'startRecord',
                    //     'stopRecord',
                    //     'onVoiceRecordEnd',
                    //     'playVoice',
                    //     'onVoicePlayEnd',
                    //     'pauseVoice',
                    //     'stopVoice',
                    //     'uploadVoice',
                    //     'downloadVoice',
                    //     'chooseImage',
                    //     'previewImage',
                    //     'uploadImage',
                    //     'downloadImage',
                    //     'getNetworkType',
                    //     'openLocation',
                    //     'getLocation',
                    //     'hideOptionMenu',
                    //     'showOptionMenu',
                    //     'closeWindow',
                    //     'scanQRCode',
                    //     'chooseWXPay',
                    //     'openProductSpecificView',
                    //     'addCard',
                    //     'chooseCard',
                    //     'openCard'
                    // ];
                    // var write_json = "var wx_str=" + JSON.stringify(d) + "";
                    var write_json = "var jsapi_ticket=" +jsapi_ticket+"";
                    fs.writeFile('./config.js', write_json);
                    fs.writeFile('/usr/share/nginx/html/static/config.js', write_json);
                    console.log("**************************"+new Date()+"结束*************************************************************")
                })
            });
        });
        res.on("end", function() {
            console.log("请求结束");
        });
        res.on("error", function(error) {
            if (err) { console.error(err) };
        })
    });
}
// getAtoken();
refresh();

app.use(express.static("static"));
app.listen("8000", function() {
    console.log("启动。。。。")
})