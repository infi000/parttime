 $(function() {
     var cImg_dialog = '<div class="input_group">\
           			    <label>宽：</label>\
           			    <input type="text" placeholder="0px" id="input_width" >\
           			</div>\
           			<div class="input_group">\
           			    <label>高：</label>\
           			    <input type="text" placeholder="0px" id="input_height">\
           			</div>\
           			<div class="input_group">\
           			    <label>图片地址：</label>\
           			    <textarea name=""  cols="30" rows="10" id="input_src" ></textarea>\
           			</div>\
           			<div class="input_group">\
           			    <label>图片跳转链接：</label>\
           			    <textarea name=""  cols="30" rows="10" id="input_url" ></textarea>\
           			</div>\
           			<div class="input_group">\
           			    <button id="btn_cImg">确定</button>\
           			    <button class="btn_hide">取消</button>\
           			    <button class="btn_del">删除</button>\
           			</div>';
     var cHtml_dialog = '<div class="input_group">\
           			    	<label>html代码：</label>\
           				    <textarea name=""  cols="30" rows="10" id="input_html" ></textarea>\
           				</div>\
           				<div class="input_group">\
           			    	<button class="btn_hide">取消</button>\
           				</div>';
     var cImg_ele = "";
     $("body").on("click", "#add", function(e) {
         //创建新图片
         var newEle = $("<a href='#' style='width: 220px;height: 310px;background-image: url(http://img03.taobaocdn.com/imgextra/i3/1682097653/TB21KxgbVXXXXXfXpXXXXXXXXXX-1682097653.jpg);background-repeat: no-repeat;position: absolute;top: 10px;left: 10px;'></a>");
         newEle.draggable({
             snap: true
         });
         newEle.on("dblclick", function(e) {
             //创建编辑
             e.preventDefault()
             $("#dialog-confirm").html(cImg_dialog).show();
             cImg_ele = this;
             var o_w = $(cImg_ele).width(),
                 o_h = $(cImg_ele).height(),
                 o_src = $(cImg_ele).css("backgroundImage"),
                 o_url = $(cImg_ele).attr("href") || "";
             $("#input_width").val(o_w);
             $("#input_height").val(o_h);
             $("#input_src").html(o_src);
             $("#input_url").val(o_url);
         });
         newEle.on("click", function(e) {
             e.preventDefault()
         });
         $("#dragcon").append(newEle)
     });
     $("body").on("click", "#create", function(e) {
         $("#dialog-confirm").html(cHtml_dialog).show();
         var html = $("#dragcon").html();
         $("#input_html").val(html);
     });
     $("body").on("click", ".btn_hide", function(e) {
         $("#dialog-confirm").hide();
     });
     $("body").on("click", "#btn_cImg", function(e) {
         var w = parseInt($("#input_width").val()) || "",
             h = parseInt($("#input_height").val()) || "",
             src = 'url(' + $("#input_src").val() + ')' || "",
             url = $("#input_url").val() || "";
         $(cImg_ele).css({
             width: w,
             height: h,
             backgroundImage: src
         });
         $(cImg_ele).attr("href", url);
         $("#dialog-confirm").hide();
     });
     $("body").on("click", ".btn_del", function(e) {
         $("#dialog-confirm").hide();
         cImg_ele.remove();
     });
 });