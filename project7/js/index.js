(function(doc, win) {
    var docEl = doc.documentElement,
    // var docEl = document.querySelector(".wrap"),
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function() {
            // var clientWidth = docEl.clientWidth;
            var clientWidth = document.querySelector(".wrap").clientWidth;
            var clientHeight = docEl.clientHeight;
            if (!clientWidth) return;
            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            if (clientHeight < clientWidth) {
                docEl.style.fontSize = 100 * (clientWidth / 1334) + 'px';
                // docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            } else {
                docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            }
        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);