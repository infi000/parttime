function Main() {
    var that = this;
    this.page = 0; //当前页数
    this.init=function(){
        that.event();
        that.c_dom();
    };
    // 事件
    this.event = function() {
        //下一页，页数+1,创建新dom
        $('body').on("click", '#btn_next', function(e) {
            that.page++;
            that.c_dom();
            // location.href=location.href+"#a"
        });
        //详情页
        $('body').on("click","#btn_detail",function(e){
            that.c_dom('detail');
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
    };
    /**
     * 文章概况dom
     * @return {[字符串]} [dom结构]
     */
    this.dom_article = function() {
        if(!DATA[that.page]){
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
                            <a class="btn-voice"><i class="iconfont icon-bofang"></i></a>\
                            <img src="./image/' + image + '" >\
                            <p class="f-tar"><span class="article-from">' + from + '</span></p>\
                        </div>\
                        <p>' + part2 + '</p>\
                        <audio src="./voice/' + voice + '" preload></audio>\
                    </div>\
                    <div class="bg-end">\
                        <div class="btn-detail" id="btn_detail"></div>\
                    </div>\
                </div>';
        return html;
    };
    /**
     * 文章详情dom
     * @return {[字符串]} [dom结构]
     */
    this.dom_detail = function() {
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
                      </div>\
                      <div class="detail-con">\
                          <p class="f-tac"><span class="article-from">' + from + '</span></p>\
                          <audio src="./voice/' + voice + '" controls preload></audio>\
                          <p>' + part2 + '</p>\
                      </div>\
                      <div class="bg-end">\
                      </div>\
                  </div>';
        return html
    };
}