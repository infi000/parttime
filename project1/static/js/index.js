var elBtn = document.getElementById("nextBtn");
var elPhone = document.getElementById("phone");
var elWrap = document.querySelector('.wrap');



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
            title: "1测试",
            desc: "海洋",
            imgUrl: "http://www.xiaomaizhibo.com/livetalk/project1/static/img/headBg.jpg",
            link: "",
            success: function() {
                var host = location.origin;
                location.href = host + '/livetalk/project1/lottery.html';
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
    alert(opt.title)
    wx.onMenuShareAppMessage(opt);
    wx.onMenuShareTimeline(opt);
    wx.onMenuShareQQ(opt)
    wx.onMenuShareWeibo(opt)
    wx.onMenuShareQZone(opt)
};
