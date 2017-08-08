(function(doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function() {
            var clientWidth = docEl.clientWidth;
            var clientHeight = docEl.clientHeight;
            var header = document.getElementById("header");
            var rs_header = document.getElementById("rs_header");
            if (!clientWidth) return;
            //客户端变换
            if (header) {
                header.style.height = (clientWidth / 2) + "px";
            }
            if (rs_header) {
                if (clientWidth > 1080) {
                    rs_header.style.height = (1080 / parseInt(1600 / 348)) + "px";
                } else {
                    rs_header.style.height = (clientWidth / parseInt(1600 / 348)) + "px";
                }

            }


        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);

function indexInit() {
    var navLink = document.querySelectorAll(".nav_tag a"),
        navBar = document.querySelector("#navBar"),
        lm = document.querySelector("#landmarks"),
        ov = document.querySelector("#overview"),
        rs = document.querySelector("#resturants");

    navBar.addEventListener("click", function(e) {
        var ele = e.target,
            dt = ele.getAttribute("datatype"),
            nodeName = ele.nodeName,
            eles = getSibing(ele, navLink);
        if (nodeName == "A") {
            ele.className = "visited";
            setEles(eles, "class", "");
            switch (dt) {
                case "ov":
                    ov.style.display = "block";
                    setEles([lm, rs], "style", "display:none");
                    break;
                case "lm":
                    lm.style.display = "block";
                    setEles([ov, rs], "style", "display:none");
                    break;
                case "rs":
                    rs.style.display = "block";
                    setEles([lm, ov], "style", "display:none");
                    break;
            }
        }
    });


    window.onscroll = function() {
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        var header = document.getElementById("header"),
            navBar = document.querySelector("#navBar"),
            header_h = parseInt(header.style.height),
            limite_h = header_h + 100;

        if (t >= limite_h) {
            if (navBar.style.position != 'fixed') {
                navBar.style.position = 'fixed';
                navBar.style.top = 0;
                navBar.style.margin = '0 auto';
                navBar.style.zIndex = 3;
            }

        } else {
            if (navBar.style.position == 'fixed') {
                navBar.style.position = 'relative';
                navBar.style.margin = '50px auto';
                navBar.style.zIndex = 0;
            }

        }
        // console.log(t, header_h)
    }
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