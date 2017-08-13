(function(doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function() {
            var clientWidth = docEl.clientWidth;
            var clientHeight = docEl.clientHeight;
            var headerBox = document.getElementById("headerBox") || "";
            var header = document.getElementById("header") || "";
            var header_w = header.offsetWidth;
            var rs_header = document.getElementById("rs_header");
            var section = document.querySelectorAll("section");
            if (!clientWidth) return;
            //客户端变换
            if (headerBox) {
                headerBox.style.height = clientHeight + 'px';
            }
            if (header) {
                header.style.height = (header_w / 2) + "px";
            }
            if (rs_header) {
                if (clientWidth > 1080) {
                    rs_header.style.height = (1080 / parseInt(1600 / 348)) + "px";
                } else {
                    rs_header.style.height = (clientWidth / parseInt(1600 / 348)) + "px";
                }
            }
            if (section.length > 0) {
                setEles(section, 'style', 'min-height:' + clientHeight + 'px')
            }



        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);

function indexInit() {
    var navLink = document.querySelectorAll(".nav_tag a"),
        navBar = document.querySelector("#navBar"),
        videoSkip = document.querySelector("#videoSkip"),
        videoPage = document.querySelector(".videoPage"),
        lm = document.querySelector("#landmarks"),
        ov = document.querySelector("#overview"),
        rs = document.querySelector("#resturants"),
        PLAY = getSearch().play || 'yes';
    if (PLAY == 'no') {
        videoPage.remove();
    }
    navBar.addEventListener("click", function(e) {
        var ele = e.target,
            dt = ele.getAttribute("datatype"),
            nodeName = ele.nodeName,
            eles = getSibing(ele, navLink);
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        console.log(t)
        if (nodeName == "A") {
            ele.className = "visited";
            setEles(eles, "class", "");
            switch (dt) {
                case "ov":
                    // ov.style.display = "block";
                    // setEles([lm, rs], "style", "display:none");
                    break;
                case "lm":
                    // lm.style.display = "block";
                    // setEles([ov, rs], "style", "display:none");
                    break;
                case "rs":
                    // rs.style.display = "block";
                    // setEles([lm, ov], "style", "display:none");
                    break;
            }
        }
    });
    videoSkip.addEventListener("click", function(e) {
        var ele = e.target;
        videoPage.remove();
    });

    var nowTag = "";
    window.onscroll = function() {
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        var header = document.getElementById("header"),
            navBar_h = parseInt(navBar.offsetHeight),
            navBar_w = parseInt(navBar.offsetWidth),
            limite_h = navBar_h + 50;


            if (t >= ov.offsetTop && t < lm.offsetTop) {
                //nar改变聚焦
                if (nowTag != "ov") {
                    nowTag = "ov";
                    check()
                }

            } else
        if (t >= lm.offsetTop && t < rs.offsetTop) {
            if (nowTag != "lm") {
                nowTag = "lm";
                check()
            }

        } else if (t >= rs.offsetTop) {
            if (nowTag != "rs") {
                nowTag = "rs";
                check()
            }

        } else if (t < ov.offsetTop) {
            if (nowTag) {
                nowTag = "";
                setEles(navLink, "class", "");
            }
        }
        // console.log(t, ov.offsetTop, lm.offsetTop, rs.offsetTop)
        if (t >= limite_h) {
            var ml = -(navBar_w / 2) + "px";
            navBar.style.marginTop = '0';
            navBar.style.marginBottom = '0';
            navBar.style.zIndex = 3;
        } else {
            var cw = document.documentElement.clientWidth;
            var ch = document.documentElement.clientHeight;
            if (cw <= 768) {
                navBar.style.marginTop = '10px';
                navBar.style.marginBottom = '10px';
            } else {
                navBar.style.marginTop = '60px';
                navBar.style.marginBottom = '60px';
            }
            navBar.style.zIndex = 0;
        };


        function check() {

            for (var i = 0; i < navLink.length; i++) {
                var ele = navLink[i];
                var dt = ele.getAttribute('datatype');
                if (dt == nowTag) {
                    ele.className = 'visited'
                } else {
                    ele.className = ""
                }
            }
        }

    }
};

function  lInit(){
    var lid=getSearch().id,
     l_title=landmarks_data[lid].title,
     l_desc=landmarks_data[lid].desc,
     l_img=landmarks_data[lid].img;
     document.getElementById("l_title").innerHTML=l_title;
     document.getElementById("l_desc").innerHTML=l_desc;
     document.getElementById("rs_header").style.backgroundImage='url(../static/img/'+l_img+')';

};

function setEles(eles, attr, val) {
    if (eles.length > 0) {
        for (var i = 0; i < eles.length; i++) {
            eles[i].setAttribute(attr, val)
        }
    }
}

function getSibing(ele, arr) {
    var array = [];
    for (var i = 0; i < arr.length; i++) {
        if (ele != arr[i]) {
            array.push(arr[i]);
        }
    };
    return array;
}

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