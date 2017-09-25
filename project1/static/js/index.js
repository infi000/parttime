var elBtn = document.getElementById("nextBtn");
var elPhone = document.getElementById("phone");
var elWrap = document.querySelector('.wrap');
wx.config(wx_str);


// axios.get('https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket', {
//     params: {
//       access_token:'CBWxZbIdYW3zMx0R8_kwU8ytR6pf7dsgZ0xmVEP7HnxxWc8bztY6dW-HHKoFBSi8evq8n441pSSU-1ZljIZ26fmvfpfA57F0WgKwrW1OuHz9da7Gy-43mw0WbnDixrfNJCMeAFAYRB'
//     }
//   })
//   .then(function (response) {
//     console.log(response);
//   })
//   .catch(function (error) {
//     console.log(error);
//   });


elBtn.addEventListener("click", function(e) {
    if (isPhone(elPhone.value) == 1) {
        elWrap.innerHTML = '<div style="padding-top:0.2rem"></div>\
							<div class="shareBg"></div>\
           					<footer>\
           					    <i>成都海滨城海洋馆年卡免费送</i>\
           					</footer>';
        var opt = {
            title: "成都海滨城浩海立方海洋馆",
            desc: "获取抽奖码，才算成功报名",
            imgUrl: "http://www.xx34.cn/static/img/headBg.jpg",
            link: "http://www.xx34.cn",
            success: function() {
                var host = 'http://www.xx34.cn';
                location.href = host + '/lottery.html';
            },
            cancel: function() {

            }
        };
        wxBind(opt);
    } else {
        //提示输入正确手机号
        elPhone.value = "";
        alert("请输入正确手机号")
    }

});

function wxBind(opt) {
    wx.onMenuShareAppMessage(opt);
    wx.onMenuShareTimeline(opt);
    wx.onMenuShareQQ(opt)
    wx.onMenuShareWeibo(opt)
    wx.onMenuShareQZone(opt)
};

wx.ready(function(){
    console.log("已经就绪")
    // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
});
wx.error(function(res){
    console.log(res)
    // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
});