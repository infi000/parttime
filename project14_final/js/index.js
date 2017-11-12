function Main() {
    var that = this;
    this.page = 0; //当前页数
    this.init = function() {
        that.event();
        that.c_dom();
    };
    // 事件
    this.event = function() {
        //下一页，页数+1,创建新dom
        $('body').on("tap", '#btn_next', function(e) {
            //判断时候到字后一页
            var len = DATA.length - 1;
            if (that.page >= len) {
                alert("没有了");
                return
            }
            that.page++;
            that.c_dom();
            if (that.page == 20) {
                $("#btn_next").remove();
            }

            // location.href=location.href+"#a"
        });
        //详情页
        $('body').on("tap", "#btn_detail", function(e) {
            that.c_dom('detail');
            var len = DATA.length - 1;
            if (that.page == 20) {
                $("#btn_next").remove();
            }

        });
        //播放音频
        $('body').on("tap", ".btn-voice", function(e) {
            var ele_v = $("#voice"),
                type = $(this).attr('datatype');
            if (type == '1') {
                ele_v[0].pause();
                $(this).attr('datatype', '0').html('<i class="iconfont icon-bofang"></i>');
            } else {
                ele_v[0].play();
                $(this).attr('datatype', '1').html('<i class="iconfont icon-zanting"></i>');
            }
        });
    };
    /**
     * 创建新dom
     * @param  {[字符串]} t [创建article or detail,默认article]
     * @return {[type]}   [description]
     */
    this.c_dom = function(t) {
        var type = t || 'article',
            html = (type == 'article') ? that.dom_article() : that.dom_detail();
        $("#page").html(html);
        //设置诗背景遮挡
        $(".detail-shi").ready(function() {
            setTimeout(function() {
                $(".detail-blank-r").css("left", '100%');
                $(".detail-blank-l").css("right", '100%');
            }, 500)
        });
        wx.config({
            // 配置信息, 即使不正确也能使用 wx.ready
            debug: false,
            appId: '',
            timestamp: 1,
            nonceStr: '',
            signature: '',
            jsApiList: []
        });
        wx.ready(function() {
            document.getElementById('voice').play();
        });
    };
    /**
     * 文章概况dom
     * @return {[字符串]} [dom结构]
     */
    this.dom_article = function() {
        if (!DATA[that.page]) {
            alert("没有了")
            return
        }
        var opt = DATA[that.page].article || {},
            title = opt.title || "",
            from = opt.from || "",
            image = opt.image || "",
            voice = opt.voice || "",
            part1 = opt.part1 || "",
            part2 = opt.part2 || "",
            html = '<div class="article">\
                    <div class="btn-next" id="btn_next"></div>\
                    <div class="article-con">\
                        <h2 class="f-tac">' + title + '</h2>\
                        <p>' + part1 + '</p>\
                        <div class="article-img">\
                            <a class="btn-voice" datatype="1"><i class="iconfont icon-zanting"></i></a>\
                            <img src="./data/photo/' + image + '" >\
                            <p class="f-tar"><span class="article-from">' + from + '</span></p>\
                        </div>\
                        <p>' + part2 + '</p>\
                        <audio src="./data/voice/' + voice + '" id="voice" autoplay="autoplay" preload  ></audio>\
                    </div>\
                    <div class="bg-end">\
                        <div class="btn-detail" id="btn_detail"></div>\
                    </div>\
                      <img src="./image/shan.png" alt="" id="shan">\
                        <img src="./image/shan.png" alt="" id="shan2">\
                        <img src="./image/shan.png" alt="" id="shan3">\
                </div>';
        return html;
    };
    /**
     * 文章详情dom
     * @return {[字符串]} [dom结构]
     */
    this.dom_detail = function() {
        if (!DATA[that.page]) {
            alert("没有了")
            return
        }
        var opt = DATA[that.page].detail || {},
            title = opt.title || "",
            author = opt.author || "",
            from = opt.from || "",
            voice = opt.voice || "",
            part1 = opt.part1 || "",
            part2 = opt.part2 || "",
            html = '<div class="detail">\
                      <div class="btn-next" id="btn_next"></div>\
                      <div class="detail-shi f-tac">\
                          <h2>' + title + '</h2>\
                          <h3>' + author + '</h3>\
                          <p>' + part1 + '</p>\
                          <div class="detail-blank-l">\
                            <img src="./image/bg_5_l.png" class="detail-shi-l" />\
                          </div>\
                          <div class="detail-blank-r">\
                            <img src="./image/bg_5_r.png" class="detail-shi-r" />\
                           </div>\
                      </div>\
                      <div class="detail-con">\
                          <p class="f-tac"><span class="article-from">' + from + '</span></p>\
                          <audio src="./data/voice/' + voice + '" id="voice" autoplay="autoplay" controls preload></audio>\
                          <p>' + part2 + '</p>\
                      </div>\
                      <div class="bg-end">\
                      </div>\
                      <img src="./image/shan.png" alt="" id="shan">\
                        <img src="./image/shan.png" alt="" id="shan2">\
                        <img src="./image/shan.png" alt="" id="shan3">\
                  </div>';
        return html;
    };
    wx.config({
        // 配置信息, 即使不正确也能使用 wx.ready
        debug: false,
        appId: '',
        timestamp: 1,
        nonceStr: '',
        signature: '',
        jsApiList: []
    });
    wx.ready(function() {
        document.getElementById('voice').play();
    });
}