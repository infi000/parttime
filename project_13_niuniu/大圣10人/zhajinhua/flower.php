<!-- ?code=9vYyYK4BQe4hueyP -->
<!DOCTYPE html>
<html>

<head lang="zh-cn">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>授权大厅</title>
    <meta name="apple-mobile-web-app-title" content="授权大厅" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script src="http://cdn.lfzgame.com/js/jquery-3.2.1.min.js"></script>
    <style>
    @charset "utf-8";
    html {
        font-size: 10px !important;
    }

    html,
    body {
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
    }

    html,
    body,
    div,
    span,
    em,
    img,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    p,
    form,
    label,
    table,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    footer,
    header,
    nav,
    section,
    figure {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        vertical-align: baseline;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        font-family: "微软雅黑", Arial;
        font-size: 0.12rem;
        color: #555;
        letter-spacing: 0px;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-touch-callout: none;
    }

    .clearfix:after {
        content: '';
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }

    ul {
        list-style: none
    }

    a,
    a:link,
    a:visited,
    a:hover,
    a:active {
        color: #555;
        text-decoration: none;
    }

    input,
    textarea,
    button {
        padding: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-appearance: none;
        outline: none;
    }

    em,
    i {
        font-style: normal;
    }

    div[contenteditable="true"] {
        line-height: 22px;
        font-size: 12px;
    }

    div[contenteditable="true"] p {
        margin: 0;
        padding: 0;
    }

    pre {
        font-family: "微软雅黑", Arial;
    }

    .spinner {
        width: 3em;
        height: 3em;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: 111000;
        color: #666;
    }

    .container1>div,
    .container2>div,
    .container3>div {
        width: 0.9em;
        height: 0.9em;
        background-color: #666;
        border-radius: 100%;
        position: absolute;
        -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
        animation: bouncedelay 1.2s infinite ease-in-out;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .spinner-container {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .container2 {
        -webkit-transform: rotateZ(45deg);
        transform: rotateZ(45deg);
    }

    .container3 {
        -webkit-transform: rotateZ(90deg);
        transform: rotateZ(90deg);
    }

    .circle1 {
        top: 0;
        left: 0;
    }

    .circle2 {
        top: 0;
        right: 0;
    }

    .circle3 {
        right: 0;
        bottom: 0;
    }

    .circle4 {
        left: 0;
        bottom: 0;
    }

    .container2 .circle1 {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
    }

    .container3 .circle1 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    .container1 .circle2 {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
    }

    .container2 .circle2 {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
    }

    .container3 .circle2 {
        -webkit-animation-delay: -0.7s;
        animation-delay: -0.7s;
    }

    .container1 .circle3 {
        -webkit-animation-delay: -0.6s;
        animation-delay: -0.6s;
    }

    .container2 .circle3 {
        -webkit-animation-delay: -0.5s;
        animation-delay: -0.5s;
    }

    .container3 .circle3 {
        -webkit-animation-delay: -0.4s;
        animation-delay: -0.4s;
    }

    .container1 .circle4 {
        -webkit-animation-delay: -0.3s;
        animation-delay: -0.3s;
    }

    .container2 .circle4 {
        -webkit-animation-delay: -0.2s;
        animation-delay: -0.2s;
    }

    .container3 .circle4 {
        -webkit-animation-delay: -0.1s;
        animation-delay: -0.1s;
    }

    @-webkit-keyframes bouncedelay {
        0%,
        80%,
        100% {
            -webkit-transform: scale(0.0)
        }
        40% {
            -webkit-transform: scale(1.0)
        }
    }

    @keyframes bouncedelay {
        0%,
        80%,
        100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        }
        40% {
            transform: scale(1.0);
            -webkit-transform: scale(1.0);
        }
    }

    .loadings-text {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 10%;
        text-align: center;
    }

    .loadings-text span {}

    .loadings-text span[data-item="1"] {
        animation: loadingsText 3s linear infinite;
    }

    .loadings-text span[data-item="2"] {
        animation: loadingsText 2s linear infinite 1s;
    }

    .loadings-text span[data-item="3"] {
        animation: loadingsText 1s linear infinite 2s;
    }

    @-webkit-keyframes loadingsText {
        0% {
            color: #fff;
        }
        100% {
            color: #000;
        }
    }

    @keyframes loadingsText {
        0% {
            color: #fff;
        }
        100% {
            color: #000;
        }
    }

    #alertBox {
        width: 2.2rem;
        min-height: 1rem;
        opacity: 0;
        box-sizing: border-box;
        overflow: hidden;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -1.1rem;
        transition: all 0.5s;
        border-radius: 0.04rem;
        padding-top: 0.96rem;
        line-height: 0.16rem;
        text-align: center;
        font-size: 0.15rem;
        color: rgba(0, 0, 0, 0.54);
        box-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.3);
        z-index: 100000;
    }

    #alertBox.success {
        background: #fff url(http://cdn.lfzgame.com/images/alertBox_success.png) no-repeat center 0.384rem / 0.384rem 0.384rem;
    }

    #alertBox.error {
        background: #fff url(http://cdn.lfzgame.com/images/alertBox_error.png) no-repeat center 0.384rem / 0.384rem 0.384rem;
    }

    #alertBox.puncherror {
        background: #fff url(http://cdn.lfzgame.com/images/punch_caution.png) no-repeat center 0.384rem / 0.384rem 0.384rem;
    }

    #alertBox .context {
        margin-bottom: 0.384rem;
        padding: 0 0.1rem;
    }

    #alertBox .closed {
        width: 2.2rem;
        height: 0.4rem;
        line-height: 0.4rem;
        display: inline-block;
        font-size: 0.145rem;
        color: #b39851;
        text-align: center;
        border-top: 0.01rem solid #f5f5f5;
    }

    .alertBoxLay {
        position: absolute;
        background: rgba(0, 0, 0, 0.3);
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 99999;
        transition: all 0.5s;
    }

    .dialogBoxLay {
        position: absolute;
        background: rgba(0, 0, 0, 0.3);
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 99990;
        transition: all 0.5s;
    }

    #dialogBox {
        min-height: 1.5rem;
        opacity: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -1.1rem;
        transition: all 0.5s;
        border-radius: 0.02rem;
        padding: 0.96rem 0 0.1rem;
        line-height: 0.25rem;
        text-align: center;
        font-size: 0.15rem;
        color: rgba(0, 0, 0, 0.54);
        box-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.3);
        z-index: 99998;
        background: #fff url(http://cdn.lfzgame.com/images/dialog_icon.png) no-repeat center 0.384rem / 0.384rem 0.384rem;
        display: flex;
        display: -webkit-flex;
    }

    #dialogBox .sbox {
        width: 2.2rem;
        background: #fff;
        display: flex;
        display: -webkit-flex;
        flex-direction: column;
        height: 100%;
        border-radius: 0.02rem;
    }

    #dialogBox .context {
        margin-bottom: 0.65rem;
        flex: 1;
        padding: 0 .1200rem;
    }

    #dialogBox .closed {
        position: absolute;
        top: 0.03rem;
        right: 0.03rem;
        width: 0.2rem;
        height: 0.2rem;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        color: #aaa;
        font-size: 0.14rem;
        line-height: 0.18rem;
        text-align: center;
        text-indent: 0.01rem;
        box-shadow: 0 0 0.01rem rgba(0, 0, 0, 0.2) inset;
        text-shadow: 0.01rem 0.01rem 0.01rem #fff;
    }

    #dialogBox .btns {
        width: 100%;
        height: 0.4224rem;
        flex: 1;
        border-radius: 0 0 0.02rem 0.02rem;
        background: #fff;
        position: absolute;
        bottom: 0;
        right: 0;
        box-sizing: border-box;
        padding: 0;
        border-top: 0.01rem solid #f5f5f5;
    }

    #dialogBox .btns button {
        width: 1.05rem;
        height: 0.4224rem;
        border: none;
        color: #888;
        margin: 0;
        background: none;
    }

    #dialogBox .btns:after {
        content: '';
        height: 0.4124rem;
        width: 0.01rem;
        position: absolute;
        background: #f5f5f5;
        top: 0;
        left: 50%;
    }

    #dialogBox .btns button.agree {
        color: #b39851;
        font-size: 0.15rem;
    }

    #dialogBox .btns button.closeBtn {
        color: #888;
        font-size: 0.15rem;
    }

    .loading {
        width: 0.25rem;
        height: 0.25rem;
    }

    @-webkit-keyframes btnRotate {
        0% {
            -webkit-transform: rotateZ(0deg);
        }
        100% {
            -webkit-transform: rotateZ(360deg);
        }
    }

    @-moz-keyframes btnRotate {
        0% {
            -moz-transform: rotateZ(0deg);
        }
        100% {
            -moz-transform: rotateZ(360deg);
        }
    }

    .loading {
        -webkit-animation: btnRotate 1.5s linear infinite;
        -moz-animation: btnRotate 1.5s linear infinite;
    }

    .toptips {
        line-height: 0.3rem;
        text-align: center;
        background: rgba(226, 82, 54, 0.33);
    }

    .flex-cont {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
    }

    .flex-cont .flex-item {
        -webkit-flex: 1;
        flex: 1;
    }

    .join-user {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 99999;
        background-color: rgba(0, 0, 0, 1);
    }

    .join-user .join-info {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 3.0816rem;
        min-height: 1.4304rem;
        overflow: hidden;
        background-color: #404040;
        border: .0048rem solid #a8a8a8;
        -webkit-border-radius: .0768rem;
        -moz-border-radius: .0768rem;
        border-radius: .0768rem;
        font-size: .1248rem;
        color: #333;
    }

    .join-user .join-info .user-text {
        position: relative;
        width: 2.8368rem;
        height: 1.7760rem;
        -webkit-border-radius: .0768rem;
        -moz-border-radius: .0768rem;
        border-radius: .0768rem;
        margin: .0768rem;
        background: url("http://cdn.lfzgame.com/images/niuniu/user-text-bg1.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .join-user .join-info .user-text>div {
        text-align: center;
    }

    .join-user .join-info .gameuser-list {
        position: absolute;
        left: 0;
        right: 0;
        top: .5184rem;
        margin: 0 .0480rem;
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
    }

    .join-user .join-info .gameuser-list .join-user-info {
        width: .4320rem;
        margin: 0 .0240rem;
    }

    .join-user .join-info .gameuser-list img {
        width: .4320rem;
        height: .4320rem;
    }

    .join-user .join-info .gameuser-list .join-user-info span {
        display: block;
        width: 100%;
        height: .1440rem;
        overflow: hidden;
        line-height: .1440rem;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .join-user .join-info .gameuser-list span {
        color: #844830;
    }

    .join-user .join-info .tips-info {
        position: absolute;
        bottom: .6480rem;
        left: 0;
        right: 0;
        text-align: center;
    }

    .join-user .join-user-bottom {
        outline: .0048rem solid #000;
        border-top: .0048rem solid #a9a9a9;
        height: .5472rem;
        background: url("http://cdn.lfzgame.com/images/index/niuniu-bottom-bg.jpg") repeat-x;
        background-size: auto 100%;
    }

    .join-user .join-info .return-index,
    .join-user .join-info .join-game {
        position: absolute;
        bottom: .0192rem;
        width: 1.2000rem;
        height: .4272rem;
        border: none;
        outline: none;
        background: none;
        font-family: 黑体;
        font-size: 0;
        color: #fff;
    }

    .join-user .join-info .return-index {
        left: .2160rem;
        background: url("http://cdn.lfzgame.com/images/niuniu/return-index1.png") no-repeat;
        background-size: 100% 100%;
    }

    .join-user .join-info .join-game {
        right: .2160rem;
        background: url("http://cdn.lfzgame.com/images/niuniu/join-game1.png") no-repeat;
        background-size: 100% 100%;
    }

    canvas {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .room-gameover {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999999;
        width: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
        background-color: #000;
    }

    .room-gameover-ten {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999999;
        width: 100%;
        height: auto;
        -o-object-fit: contain;
        object-fit: contain;
        background-color: #000;
    }

    .window-masks {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 99999;
        background-color: rgba(0, 0, 0, 1);
    }

    .window-masks .border-opacity {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        border: .0048rem solid #a7a7a6;
        -webkit-border-radius: .0480rem;
        -moz-border-radius: .0480rem;
        border-radius: .0480rem;
        background-color: rgba(255, 255, 255, .3);
        padding: .0720rem;
    }

    .window-masks .border-opacity .container {
        position: relative;
        background-color: #d1e2f6;
        -webkit-border-radius: .0480rem;
        -moz-border-radius: .0480rem;
        border-radius: .0480rem;
    }

    .window-masks .border-opacity .container:before {
        content: '';
        position: absolute;
        top: .0480rem;
        left: .0480rem;
        width: calc(100% - 0.0960rem);
        height: calc(100% - 0.0960rem);
        border: .0144rem solid #95b8e1;
        -webkit-border-radius: .024rem;
        -moz-border-radius: .024rem;
        border-radius: .024rem;
        z-index: 0;
    }

    .window-masks .border-opacity .container .mask-icon {
        position: absolute;
        width: .0816rem;
        height: .0768rem;
    }

    .window-masks .border-opacity .container .mask-icon.mask-top {
        top: .0480rem;
        left: .0480rem;
        background: url("http://cdn.lfzgame.com/images/index/mask-top.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks .border-opacity .container .mask-icon.mask-right {
        top: .0480rem;
        right: .0480rem;
        background: url("http://cdn.lfzgame.com/images/index/mask-right.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks .border-opacity .container .mask-icon.mask-bottom {
        bottom: .0480rem;
        right: .0480rem;
        background: url("http://cdn.lfzgame.com/images/index/mask-bottom.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks .border-opacity .container .mask-icon.mask-left {
        bottom: .0480rem;
        left: .0480rem;
        background: url("http://cdn.lfzgame.com/images/index/mask-left.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.agreement .border-opacity .container {
        position: relative;
        padding: .3840rem .1440rem .0480rem;
    }

    .window-masks.agreement .border-opacity .container .title {
        position: absolute;
        top: .0960rem;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: .7152rem;
        height: .1968rem;
        background: url("http://cdn.lfzgame.com/images/common/agreement-title.png") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.agreement .border-opacity .container .main {
        width: 2.8896rem;
        padding: .0864rem;
        border: .0048rem solid #fff;
        -webkit-border-radius: .0240rem;
        -moz-border-radius: .0240rem;
        border-radius: .0240rem;
        background-color: #69829e;
        color: #fff;
        font-size: .1152rem;
        line-height: 2;
        text-align: justify;
    }

    .window-masks.agreement .border-opacity .container .sure {
        position: relative;
        width: 1.3152rem;
        height: .4080rem;
        line-height: 2;
        margin: .0480rem auto;
        font-size: .1920rem;
        color: #fff;
        text-align: center;
        background: url("http://cdn.lfzgame.com/images/common/agreement-sure.png") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.user-join .container {
        position: relative;
        padding: .3840rem .1440rem .0480rem;
    }

    .window-masks.user-join .user-id {
        position: absolute;
        left: -.0576rem;
        top: 0;
        z-index: 5;
        padding-left: .1440rem;
        width: 1.4016rem;
        height: .3888rem;
        line-height: 1.5;
        color: #fff;
        font-size: .1632rem;
        background: url("http://cdn.lfzgame.com/images/common/join-game-title.png") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.user-join .container .main {
        overflow: hidden;
        width: 2.6469rem;
        margin-bottom: .0960rem;
        border: .0048rem solid #fff;
        -webkit-border-radius: .0480rem;
        -moz-border-radius: .0480rem;
        border-radius: .0480rem;
        background-color: #69829e;
        color: #fff;
    }

    .window-masks.user-join .container .main .rules {
        line-height: 1.5;
        padding: .0864rem;
        font-size: .1344rem;
    }

    .window-masks.user-join .container .main .user-list {
        width: 2.6400rem;
        height: 1.6360rem;
        padding: .2400rem .1200rem;
        background: url("http://cdn.lfzgame.com/images/common/join-user-bg1.jpg") no-repeat;
        background-size: 100% 100%;
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-align-items: center;
        align-items: center;
    }

    .window-masks.user-join .join-user-info {
        width: .3840rem;
        margin: 0 .0480rem;
        text-align: center;
    }

    .join-user .join-info .user-text2 {
        position: relative;
        width: 2.8368rem;
        height: 2.0880rem;
        -webkit-border-radius: .0768rem;
        -moz-border-radius: .0768rem;
        border-radius: .0768rem;
        margin: .0768rem;
        background: url("http://cdn.lfzgame.com/images/niuniu/user-text-bg0.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .join-user .join-info .user-text {
        position: relative;
        width: 2.8368rem;
        height: 1.5840rem;
        -webkit-border-radius: .0768rem;
        -moz-border-radius: .0768rem;
        border-radius: .0768rem;
        margin: .0768rem;
        background: url("http://cdn.lfzgame.com/images/niuniu/user-text-bg1.jpg") no-repeat;
        background-size: 100% 100%;
    }

    .join-user .join-info .user-text2>div,
    .join-user .join-info .user-text>div {
        text-align: center;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .window-masks.user-join .join-user-info img {
        width: .3840rem;
        height: .3840rem;
        -webkit-border-radius: .0240rem;
        -moz-border-radius: .0240rem;
        border-radius: .0240rem;
    }

    .window-masks.user-join .join-user-info span {
        display: block;
        width: 100%;
        height: .1200rem;
        overflow: hidden;
        line-height: .1200rem;
        font-size: .1056rem;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .window-masks.user-join .container .button {
        position: relative;
        text-align: center;
        margin-bottom: .0480rem;
    }

    .window-masks.user-join .container .join-game,
    .window-masks.user-join .container .return {
        display: inline-block;
        width: 1.1472rem;
        height: .3312rem;
        font-size: .1200rem;
        line-height: 2.5;
        text-align: center;
        margin: 0 .0480rem;
        color: #fff;
    }

    .window-masks.user-join .container .return {
        background: url("http://cdn.lfzgame.com/images/common/button1.png") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.user-join .container .join-game {
        background: url("http://cdn.lfzgame.com/images/common/button2.png") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.return-index .container {
        border: .0096rem solid #afb0b2;
    }

    .window-masks.return-index .main {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
        width: 2.3280rem;
        min-height: 1.0560rem;
        background-color: #69829e;
        border: .0048rem solid #fff;
        -webkit-border-radius: .0480rem;
        -moz-border-radius: .0480rem;
        border-radius: .0480rem;
        margin: .1200rem;
        padding: .0960rem;
        color: #fff;
        font-size: .1728rem;
        text-align: justify;
    }

    .window-masks.return-index .container .button {
        position: relative;
        text-align: center;
        margin-bottom: .0960rem;
    }

    .window-masks.return-index .container .sure,
    .window-masks.return-index .container .cancel {
        display: inline-block;
        width: 1.1472rem;
        height: .3312rem;
        font-size: .1200rem;
        line-height: 2.5;
        text-align: center;
        margin: 0 .0480rem;
        color: #fff;
    }

    .window-masks.return-index .container .sure {
        background: url("http://cdn.lfzgame.com/images/common/button1.png") no-repeat;
        background-size: 100% 100%;
    }

    .window-masks.return-index .container .cancel {
        background: url("http://cdn.lfzgame.com/images/common/button2.png") no-repeat;
        background-size: 100% 100%;
    }

    .request-member-mask {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 1);
        z-index: 999;
    }

    .request-member-mask .requst-member {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 2.5920rem;
        background-color: #fff;
        padding: .0960rem;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .request-member-mask .requst-member:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        -webkit-box-shadow: 0 0 0 .0096rem #ccc;
        -moz-box-shadow: 0 0 0 .0096rem #ccc;
        box-shadow: 0 0 0 .0096rem #ccc;
        border-radius: .0480rem;
        background-color: #fff;
        z-index: -1;
        border: .1200rem solid rgba(0, 0, 0, .5);
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

    .request-member-mask .requst-member .text {
        text-align: center;
        margin: .04800rem 0;
        font-size: .1440rem;
    }

    .request-member-mask .room-user {
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .request-member-mask .room-user-path {
        font-size: 0;
        margin-right: .1200rem;
    }

    .request-member-mask .room-user-path img {
        width: .4800rem;
    }

    .request-member-mask .room-user-name {
        max-width: 1.20rem;
        font-size: .1440rem;
    }

    .request-member-mask .button {
        text-align: center;
        padding-top: .1200rem;
        border-top: .0096rem solid #ddd;
    }

    .request-member-mask .button .request-btn {
        display: inline-block;
        width: .9600rem;
        height: .2880rem;
        line-height: .2880rem;
        font-size: .1440rem;
        font-weight: bold;
        color: #fff;
        background-color: #D6621A;
        -webkit-border-radius: .2400rem;
        -moz-border-radius: .2400rem;
        border-radius: .2400rem;
        -webkit-box-shadow: 0 .0240rem .0240rem #F5AA52 inset, 0 .0120rem .0240rem #333;
        -moz-box-shadow: 0 .0240rem .0240rem #F5AA52 inset, 0 .0120rem .0240rem #333;
        box-shadow: 0 .0240rem .0240rem #F5AA52 inset, 0 .0120rem .0240rem #333;
    }

    .request-member-mask .button .request-btn2 {
        background-color: #ccc;
        -webkit-box-shadow: 0 .0240rem .0240rem #eee inset, 0 .0120rem .0240rem #333;
        -moz-box-shadow: 0 .0240rem .0240rem #eee inset, 0 .0120rem .0240rem #333;
        box-shadow: 0 .0240rem .0240rem #eee inset, 0 .0120rem .0240rem #333;
    }

    .search-number-box {
        position: absolute;
        z-index: 999999;
    }

    .all-gonggao {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000000;
        width: 3.6rem;
        height: .2112rem;
        overflow: hidden;
        line-height: .2112rem;
        font-size: .1056rem;
        font-family: '宋体';
        color: #fff;
        background: url("http://cdn.lfzgame.com/images/index/gonggao-bg.png") no-repeat;
        background-size: 100% 100%;
        font-weight: bold;
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .gonggao-icon {
        display: inline-block;
        width: .2112rem;
        height: .2112rem;
        margin-right: .0480rem;
        background: url("http://cdn.lfzgame.com/images/index/gonggao-icon.png") no-repeat;
        background-size: 100% 100%;
        -webkit-animation: gonggaoanimate .5s linear infinite;
        -o-animation: gonggaoanimate .5s linear infinite;
        animation: gonggaoanimate .5s linear infinite;
    }

    @-webkit-keyframes gonggaoanimate {
        0% {
            background: url("http://cdn.lfzgame.com/images/index/gonggao-icon.png") no-repeat;
            background-size: 100% 100%;
        }
        50% {
            background: url("http://cdn.lfzgame.com/images/index/gonggao-icon1.png") no-repeat;
            background-size: 100% 100%;
        }
        100% {
            background: url("http://cdn.lfzgame.com/images/index/gonggao-icon2.png") no-repeat;
            background-size: 100% 100%;
        }
    }

    @keyframes gonggaoanimate {
        0% {
            background: url("http://cdn.lfzgame.com/images/index/gonggao-icon.png") no-repeat;
            background-size: 100% 100%;
        }
        50% {
            background: url("http://cdn.lfzgame.com/images/index/gonggao-icon1.png") no-repeat;
            background-size: 100% 100%;
        }
        100% {
            background: url("http://cdn.lfzgame.com/images/index/gonggao-icon2.png") no-repeat;
            background-size: 100% 100%;
        }
    }

    .scroll_div {
        display: inline-block;
        width: 2.5200rem;
        height: .2112rem;
        white-space: nowrap;
        overflow: hidden;
        position: relative;
    }

    .scroll_end,
    .scroll_begin {
        display: inline-block;
        position: absolute;
    }

    .scroll_end {}

    .qr-code {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
    }

    .qr-code .container {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .qr-code .container img {
        width: 2.4432rem;
    }

    .qr-code .container .close-qr-code {
        position: absolute;
        left: 0;
        right: 0;
        bottom: -.5760rem;
        margin: 0 auto;
        width: .3264rem;
        height: .3648rem;
        background: url("http://cdn.lfzgame.com/images/index/ting-mask-close.png") no-repeat;
        background-size: 100% 100%;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
    }

    *,
    *:after,
    *:before {
        box-sizing: border-box;
    }

    body,
    html {
        overflow: hidden;
    }

    body {
        background: url("http://cdn.lfzgame.com/images/jinhua/gold_flower_room_bg.jpg") no-repeat;
        background-size: 100% 100%;
        overflow: hidden;
    }

    .top {
        position: absolute;
        width: 100%;
        height: .5rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/room_top_bg.png") no-repeat;
        background-size: 100% 100%;
    }

    .top .left {
        padding: .1008rem .1rem 0 .1968rem;
    }

    .top .left img {
        width: .1824rem;
        height: .2448rem;
        vertical-align: middle;
    }

    .top .left span {
        display: inline-block;
        padding: 0 .0736rem;
        min-width: .6528rem;
        height: .1920rem;
        line-height: .1920rem;
        text-align: right;
        color: #FFF;
        font-size: .1392rem;
        vertical-align: middle;
        background-color: #1d1c27;
        border-radius: 0 .1128rem .1128rem 0;
    }

    .top .flex-item {
        text-align: center;
        color: #fefefe;
        font-size: .1440rem;
        line-height: 1.5;
    }

    .top .right {
        position: relative;
        width: 1.1rem;
    }

    .top .rules-focus {
        display: inline-block;
        min-width: .7728rem;
    }

    .top .rules-focus span {
        position: absolute;
        width: .2736rem;
        height: .2736rem;
        top: .0696rem;
    }

    .top .rules-focus span.rules {
        background: url("http://cdn.lfzgame.com/images/jinhua/goldFlower_rules.png?version=1") no-repeat;
        background-size: 100% 100%;
        right: .9364rem;
    }

    .top .rules-focus span.tips {
        background: url("http://cdn.lfzgame.com/images/jinhua/goldFlower_tips.png?version=1") no-repeat;
        background-size: 100% 100%;
        right: .5236rem;
    }

    .top .rules-focus span.index {
        background: url("http://cdn.lfzgame.com/images/jinhua/goldFlower_index.png?version=1") no-repeat;
        background-size: 100% 100%;
        right: .1200rem;
    }

    .top .add {
        position: absolute;
        top: .1152rem;
        right: .1728rem;
        width: .2448rem;
        height: .2400rem;
    }

    .focus-mask,
    .rules-mask,
    .share-mask {
        display: none;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .focus-mask .close,
    .rules-mask .close,
    .share-mask .close {
        position: absolute;
        left: 50%;
        bottom: 1rem;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
        width: 0.3168rem;
        height: 0.3168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/game-close.png") no-repeat;
        background-size: 100% 100%;
    }

    .rules-mask .close {
        top: 3.72rem;
    }

    .rules-mask .content {
        position: relative;
        margin: 1.6224rem auto 0;
        padding: .0720rem;
        width: 2.9856rem;
        background-color: rgba(255, 255, 255, 0.2);
        -webkit-border-radius: .0480rem;
        -moz-border-radius: .0480rem;
        border-radius: .0480rem;
        text-align: center;
        border: 0.0048rem solid rgba(255, 255, 255, 0.3);
    }

    .rules-mask .remark {
        color: #fff;
        font-size: .09537rem;
        text-align: center;
        margin: 0 auto;
        margin-top: .0912rem;
    }

    .rules-mask .content .niuniu-rules {
        background-color: #fff2d8;
        -webkit-border-radius: .0480rem;
        -moz-border-radius: .0480rem;
        border-radius: .0480rem;
    }

    .rules-mask .content .flex-cont {
        align-items: center;
        padding: .1152rem 0 .1152rem .3168rem;
        font-size: .1152rem;
        line-height: 1.5;
        text-align: left;
        background: url("http://cdn.lfzgame.com/images/jinhua/goldFlower-rules-line.png") no-repeat left bottom;
        background-size: 100% auto;
    }

    .rules-mask .content .flex-cont .name {
        color: #666;
        letter-spacing: .0240rem;
    }

    .rules-mask .content .flex-cont .flex-item {
        color: #333;
    }

    .rules-mask .content .rules-item span {
        display: inline-block;
        width: 50%;
    }

    .focus-mask .focus-img {
        margin: 1.2480rem auto 0;
        padding-top: 0.2400rem;
        text-align: center;
        width: 2.4960rem;
        height: 2.7024rem;
        background: url("http://cdn.lfzgame.com/images/game-focusbg.png") no-repeat;
        background-size: 100% 100%;
    }

    .focus-mask .focus-img img {
        width: 2.0256rem;
        height: 2.0352rem;
    }

    .focus-mask .text {
        line-height: 1.5;
        font-size: 0.1440rem;
        color: #fff;
        text-align: center;
    }

    .share-mask {
        font-size: 0.1440rem;
        color: #fff;
    }

    .share-mask .share-img {
        position: absolute;
        right: 0.1920rem;
        top: 0.2208rem;
        width: 0.9072rem;
        height: 1.1136rem;
        background: url("http://cdn.lfzgame.com/images/game-share1.png") no-repeat;
        background-size: 100% 100%;
    }

    .share-mask i {
        display: inline-block;
        margin-right: 0.0960rem;
        width: 0.2160rem;
        height: 0.2160rem;
        line-height: 0.2160rem;
        text-align: center;
        background-color: #d01210;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
    }

    .share-mask .margin {
        margin-top: 1.4400rem;
    }

    .share-mask img {
        width: 0.3120rem;
        height: 0.3120rem;
        vertical-align: middle;
        margin: 0 0.0960rem;
    }

    .share-mask .text {
        margin-bottom: 0.048rem;
        padding-left: 0.4800rem;
    }

    .share-mask .color {
        color: #f6d68b;
    }

    .bottom {
        position: absolute;
        width: 100%;
        height: 0.48rem;
        bottom: 0;
        background: url("http://cdn.lfzgame.com/images/jinhua/room_bottom_bg.png") no-repeat;
        background-size: 100% 100%;
    }

    .bottom .points {
        color: #925089;
        font-size: 0.096rem;
        padding: 0.1rem 0 0 0.06rem;
        line-height: 1.6;
    }

    .bottom .chat,
    .bottom .music {
        position: absolute;
        right: 0.6048rem;
        bottom: 0.0288rem;
        width: 0.3744rem;
        height: 0.3744rem;
        text-align: center;
        line-height: 0.3744rem;
    }

    .bottom .chat {
        right: 0.144rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/game-chat.png") no-repeat;
        background-size: 100% 100%;
    }

    .bottom .music img:first-of-type {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: .3744rem;
        height: .3744rem;
    }

    .bottom .music img:last-of-type {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: .3744rem;
        height: .3744rem;
    }

    .bottom .music.suspended {
        background: url("http://cdn.lfzgame.com/images/jinhua/game-music2.png") no-repeat;
        background-size: 100% 100%;
    }

    .chat-list-mask {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 98;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .chat-list {
        display: none;
        position: fixed;
        right: .0750rem;
        bottom: .6000rem;
        z-index: 99;
        overflow-x: hidden;
        width: 2.3040rem;
        height: 3.2352rem;
        border: .0096rem solid #919191;
        border-radius: .096rem;
        transition: display 1s;
        background-color: rgba(255, 255, 255, 0.2);
        padding: .0672rem;
    }

    .chat-list li {
        height: .2688rem;
        line-height: .2688rem;
        margin: 0 0 .0480rem 0;
        padding: 0 .1056rem;
        color: #333;
        font-size: .1200rem;
        text-align: left;
        border: 0.0096rem solid rgba(0, 160, 230, 0.1);
        border-radius: .20rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/chat-list-bg1.png") repeat-x;
        background-size: auto 100%;
        -webkit-text-shadow: 1px 1px 0 #dcdcdc, -1px -1px 0 #dcdcdc;
        -moz-text-shadow: 1px 1px 0 #dcdcdc, -1px -1px 0 #dcdcdc;
        text-shadow: 1px 1px 0 #dcdcdc, -1px -1px 0 #dcdcdc;
    }

    .user-card {
        position: absolute;
        left: 1.8rem;
        top: 2.64rem;
    }

    .cardbox {
        display: none;
        transition: all 0.15s;
        left: 0;
        top: 0;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        z-index: 10;
    }

    .cardbox[data-item="0"] {
        transition: all 0.15s linear;
    }

    .cardbox[data-item="1"] {
        transition: all 0.15s linear 0.15s;
    }

    .cardbox[data-item="2"] {
        transition: all 0.15s linear 0.3s;
    }

    .cardbox-abandon {
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
        filter: gray;
    }

    .animate {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }

    .no-transition {
        transition: all 0s!important;
    }

    .user-card[data-pos='0'] .animate[data-item='0'] {
        left: -0.426rem;
        top: 1.264rem;
    }

    .user-card[data-pos='0'] .animate[data-item='1'] {
        left: -0.186rem;
        top: 1.264rem;
    }

    .user-card[data-pos='0'] .animate[data-item='2'] {
        left: 0.054rem;
        top: 1.264rem;
    }

    .user-card[data-pos='1'] .animate[data-item='0'] {
        left: -1.1568rem;
        top: 0.2352rem;
    }

    .user-card[data-pos='1'] .animate[data-item='1'] {
        left: -0.9968rem;
        top: 0.2352rem;
    }

    .user-card[data-pos='1'] .animate[data-item='2'] {
        left: -0.8468rem;
        top: 0.2352rem;
    }

    .user-card[data-pos='2'] .animate[data-item='0'] {
        left: -1.1568rem;
        top: -0.8038rem;
    }

    .user-card[data-pos='2'] .animate[data-item='1'] {
        left: -0.9968rem;
        top: -0.8038rem;
    }

    .user-card[data-pos='2'] .animate[data-item='2'] {
        left: -0.8468rem;
        top: -0.8038rem;
    }

    .user-card[data-pos='3'] .animate[data-item='0'] {
        left: 0.0048rem;
        top: -1.8144rem;
    }

    .user-card[data-pos='3'] .animate[data-item='1'] {
        left: 0.1648rem;
        top: -1.8144rem;
    }

    .user-card[data-pos='3'] .animate[data-item='2'] {
        left: 0.3148rem;
        top: -1.8144rem;
    }

    .user-card[data-pos='4'] .animate[data-item='0'] {
        left: 0.616rem;
        top: -0.8038rem;
    }

    .user-card[data-pos='4'] .animate[data-item='1'] {
        left: 0.776rem;
        top: -0.8038rem;
    }

    .user-card[data-pos='4'] .animate[data-item='2'] {
        left: 0.926rem;
        top: -0.8038rem;
    }

    .user-card[data-pos='5'] .animate[data-item='0'] {
        left: 0.616rem;
        top: 0.2352rem;
    }

    .user-card[data-pos='5'] .animate[data-item='1'] {
        left: 0.776rem;
        top: 0.2352rem;
    }

    .user-card[data-pos='5'] .animate[data-item='2'] {
        left: 0.926rem;
        top: 0.2352rem;
    }

    .user-card[data-pos='0'] .card-animate {
        left: -0.426rem !important;
        top: 1.264rem !important;
    }

    .user-card[data-pos='1'] .card-animate {
        left: -1.1568rem !important;
        top: 0.2352rem !important;
    }

    .user-card[data-pos='2'] .card-animate {
        left: -1.1568rem !important;
        top: -0.8038rem !important;
    }

    .user-card[data-pos='3'] .card-animate {
        left: 0.0048rem !important;
        top: -1.8144rem !important;
    }

    .user-card[data-pos='4'] .card-animate {
        left: 0.616rem !important;
        top: -0.8038rem !important;
    }

    .user-card[data-pos='5'] .card-animate {
        left: 0.616rem !important;
        top: 0.2352rem !important;
    }

    .user-card .card-animate[data-item="0"] {
        transition: all 0.3s linear;
    }

    .user-card .card-animate[data-item="1"] {
        transition: all 0.3s linear;
    }

    .user-card .card-animate[data-item="2"] {
        transition: all 0.3s linear;
    }

    .user-card .user-card-fanpai-animate[data-item="0"] {
        transition: all 0.3s linear;
    }

    .user-card .user-card-fanpai-animate[data-item="1"] {
        transition: all 0.3s linear;
    }

    .user-card .user-card-fanpai-animate[data-item="2"] {
        transition: all 0.3s linear;
    }

    .prepare-list,
    .user-list {}

    .user-list .user-info {
        position: absolute;
        font-size: 0;
    }

    .choosed {}

    .choosed:after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 0.4176rem;
        height: 0.4176rem;
        border-radius: 0.0480rem;
        box-shadow: 0 0 0.0480rem #fad20a, 0 0 0.0480rem #fad20a inset;
    }

    .user-info.leave:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        z-index: 100;
        width: 0.4176rem;
        height: 0.4176rem;
        border-radius: 0.0480rem;
        background: rgba(0, 0, 0, 0.5) url("http://cdn.lfzgame.com/images/game-leave.png") no-repeat center;
        background-size: 90%;
    }

    .user-list .user-img {
        position: relative;
        margin-bottom: 0.048rem;
    }

    .user-list .user-img .winLost {
        display: none;
        position: absolute;
        left: 0;
        top: 150%;
        z-index: 20;
        width: 100%;
        text-align: center;
        font-size: .1740rem;
        color: #ffdc18;
        letter-spacing: -0.0048rem;
        border-radius: 30%;
        -webkit-border-radius: 30%;
        transition: all .5s;
        text-shadow: #333 0.0144rem 0 0, #333 -0.0144rem 0 0, #333 0 0.0144rem 0, #333 0 -0.0144rem 0;
        background: -moz-radial-gradient(circle, rgba(255, 244, 91, 0.3), transparent);
        background: -webkit-radial-gradient(circle, rgba(255, 244, 91, 0.3), transparent);
        background: -o-radial-gradient(circle, rgba(255, 244, 91, 0.3), transparent);
        background: radial-gradient(circle, rgba(255, 244, 91, 0.3), transparent);
    }

    .user-list .user-info img {
        width: 0.4176rem;
        height: 0.4176rem;
        border-radius: 0.0480rem;
    }

    .user-list .name-value {
        width: 0.4176rem;
        height: 0.2400rem;
        line-height: 1;
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 0.0960rem;
        text-align: center;
    }

    .user-list .name-value span {
        display: block;
        width: 0.4176rem;
        height: 0.1200rem;
        overflow: hidden;
    }

    .user-list .user-nickname {
        line-height: 0.1200rem;
        font-size: 0.1008rem;
        color: #FFFFFF;
    }

    .user-list .user-value {
        font-size: 0.1200rem;
        color: #FF9000;
    }

    .user-list .user-info .user-chat-text {
        display: none;
        position: absolute;
        top: -0.24rem;
        font-size: 0.1200rem;
        min-width: 0;
        height: 0.1800rem;
        line-height: 0.1800rem;
        -webkit-border-radius: 0.1200rem;
        -moz-border-radius: 0.1200rem;
        border-radius: 0.1200rem;
        color: #fff;
        background-color: #000;
        white-space: nowrap;
        padding: 0 0.096rem;
        z-index: 55555;
    }

    .user-list .user-info[data-pos='0'] .user-chat-text,
    .user-list .user-info[data-pos='3'] .user-chat-text {
        left: 50%;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
    }

    .user-list .user-info[data-pos='5'] .user-chat-text,
    .user-list .user-info[data-pos='4'] .user-chat-text {
        right: 0;
    }

    .user-list .user-info .user-chat-text:after {
        content: '';
        position: absolute;
        border: 0.1200rem solid transparent;
        z-index: -1;
    }

    .user-list .user-info[data-pos='1'] .user-chat-text:after,
    .user-list .user-info[data-pos='2'] .user-chat-text:after {
        border-left-color: #000;
        left: 0.3600rem;
    }

    .user-list .user-info[data-pos='0'] .user-chat-text:after,
    .user-list .user-info[data-pos='3'] .user-chat-text:after {
        top: 60%;
        left: 50%;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
        border-top-color: #000;
    }

    .user-list .user-info[data-pos='4'] .user-chat-text:after,
    .user-list .user-info[data-pos='5'] .user-chat-text:after {
        border-right-color: #000;
        right: 0.3600rem;
    }

    .user-list .user-info[data-pos='0'] {
        left: 1.5936rem;
        bottom: .25rem;
    }

    .user-list .user-info.reset[data-pos='0'] {
        left: .0864rem;
        bottom: .46rem;
    }

    .user-list .user-info[data-pos='1'] {
        left: 0.1536rem;
        top: 2.832rem;
    }

    .user-list .user-info[data-pos='2'] {
        left: 0.1536rem;
        top: 1.7856rem;
    }

    .user-list .user-info[data-pos='3'] {
        left: 1.32rem;
        top: 0.7776rem;
    }

    .user-list .user-info[data-pos='4'] {
        right: 0.1488rem;
        top: 1.7856rem;
    }

    .user-list .user-info[data-pos='5'] {
        right: 0.1488rem;
        top: 2.832rem;
    }

    .user-list-bg .user-bg {
        width: 0.4176rem;
        height: 0.4176rem;
        border-radius: 0.0480rem;
        border: .0180rem solid #764c4b;
        background-color: rgba(0, 0, 0, 0.3);
        position: absolute;
    }

    .user-list-bg .user-bg span {
        display: inline-block;
        font-size: .13rem;
        color: #764c4b;
        margin-left: .055rem;
        margin-top: .112rem;
    }

    .user-list-bg .user-bg[data-pos='0'] {
        left: 1.5936rem;
        bottom: 0.54rem;
    }

    .user-list-bg .user-bg.reset[data-pos='0'] {
        left: .0864rem;
        bottom: .75rem;
    }

    .user-list-bg .user-bg[data-pos='1'] {
        left: 0.1536rem;
        top: 2.832rem;
    }

    .user-list-bg .user-bg[data-pos='2'] {
        left: 0.1536rem;
        top: 1.7856rem;
    }

    .user-list-bg .user-bg[data-pos='3'] {
        left: 1.32rem;
        top: 0.7776rem;
    }

    .user-list-bg .user-bg[data-pos='4'] {
        right: 0.1488rem;
        top: 1.7856rem;
    }

    .user-list-bg .user-bg[data-pos='5'] {
        right: 0.1488rem;
        top: 2.832rem;
    }

    .prepare-item {
        display: none;
        position: absolute;
        width: 0.312rem;
        height: 0.168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/game-prepare-item.png") no-repeat;
        background-size: 100% 100%;
    }

    .prepare-item[data-pos='0'] {
        left: 1.6176rem;
        top: 3.5232rem;
    }

    .prepare-item[data-pos='1'] {
        left: 0.6576rem;
        top: 3.0192rem;
    }

    .prepare-item[data-pos='2'] {
        left: 0.6576rem;
        top: 1.9296rem;
    }

    .prepare-item[data-pos='3'] {
        left: 1.8048rem;
        top: 0.9264rem;
    }

    .prepare-item[data-pos='4'] {
        right: 0.6528rem;
        top: 1.9296rem;
    }

    .prepare-item[data-pos='5'] {
        right: 0.6528rem;
        top: 3.0192rem;
    }

    .prepare {
        display: none;
        position: absolute;
        left: 50%;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
        top: 3.366rem;
        z-index: 10;
        width: 0.96rem;
        height: 0.4272rem;
        text-align: center;
        color: #FFFFFF;
        font-size: 0.1728rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/prepare_btn.png") no-repeat;
        background-size: 100% 100%;
        font-weight: bold;
    }

    .prepare span {
        width: 0.96rem;
        height: 0.1728rem;
        line-height: 1;
        text-align: center;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        margin: auto;
    }

    .bipai-box {
        display: none;
    }

    .bipai-box span {
        position: absolute;
        left: 0.768rem;
        top: 3.304rem;
        z-index: 10;
        width: 0.4992rem;
        height: 0.4992rem;
        background-size: 100% 100%;
        line-height: 0.4992rem;
        text-align: center;
        color: #FFFFFF;
        font-size: 0.1728rem;
    }

    .bipai-box span:nth-of-type(2) {
        left: 1.32rem;
        top: 3.304rem;
    }

    .bipai-box span:nth-of-type(3) {
        left: 1.872rem;
        top: 3.304rem;
    }

    .bipai-box span:nth-of-type(4) {
        left: 2.424rem;
        top: 3.304rem;
    }

    .bipai-box span:nth-of-type(5) {
        left: 0.65rem;
        top: 4.0912rem;
        width: 0.6432rem;
        height: 0.3552rem;
        line-height: 0.3552rem;
        font-weight: bold;
        font-size: 0.1152rem;
        background-image: url("http://cdn.lfzgame.com/images/jinhua/abandon.png");
    }

    .bipai-box span:nth-of-type(6) {
        left: 2.3704rem;
        top: 4.0912rem;
        width: 0.6432rem;
        height: 0.3552rem;
        line-height: 0.3552rem;
        font-weight: bold;
        font-size: 0.1152rem;
    }

    .bipai-box span[data-bipai="1"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/compare.png");
    }

    .bipai-box span[data-bipai="0"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/compare_no.png");
    }

    .bipai-box span[data-pos="2"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn2_yes.png");
    }

    .bipai-box span[data-pos="4"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn4_yes.png");
    }

    .bipai-box span[data-pos="5"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn5_yes.png");
    }

    .bipai-box span[data-pos="8"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn8_yes.png");
    }

    .bipai-box span[data-pos="10"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn10_yes.png");
    }

    .bipai-box span[data-pos="16"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn16_yes.png");
    }

    .bipai-box span[data-pos="20"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn20_yes.png");
    }

    .bipai-box span[data-pos="40"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn40_yes.png");
    }

    .bipai-box span[data-click="0"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/chouma_btn_no.png");
    }

    .bipai-box div {
        display: none;
        position: absolute;
        top: 3.2592rem;
        z-index: 10;
        color: #FFFFFF;
        font-size: 0.144rem;
        left: 50%;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
    }

    .kanpai-box span {
        position: absolute;
        display: none;
        z-index: 10;
        width: 0.4752rem;
        height: 0.144rem;
        line-height: 0.144rem;
        text-align: center;
        color: #FFFFFF;
        background-color: rgba(0, 0, 0, 0.4);
        font-size: 0.1264rem;
        border-radius: 0.1rem;
        padding-top: .009rem;
    }

    .kanpai-box span[data-pos="0"] {
        left: 1.4208rem;
        top: 4.1488rem;
        width: 0.8rem;
        height: 0.25rem;
        line-height: 0.25rem;
        padding: 0;
    }

    .kanpai-box span[data-pos="1"] {
        left: 0.6816rem;
        top: 2.9952rem;
    }

    .kanpai-box span[data-pos="2"] {
        left: 0.6816rem;
        top: 1.9488rem;
    }

    .kanpai-box span[data-pos="3"] {
        left: 1.848rem;
        top: 0.936rem;
    }

    .kanpai-box span[data-pos="4"] {
        right: 0.6816rem;
        top: 1.9488rem;
    }

    .kanpai-box span[data-pos="5"] {
        right: 0.6816rem;
        top: 2.9952rem;
    }

    .money-box {
        width: 1.152rem;
        height: 1.152rem;
        position: absolute;
        z-index: 10;
        left: 50%;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
        top: 1.9488rem;
    }

    .money-box span {
        width: 0.264rem;
        height: 0.264rem;
        position: absolute;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }

    .money-box span[data-pos="2"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money2.png");
    }

    .money-box span[data-pos="4"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money4.png");
    }

    .money-box span[data-pos="5"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money5.png");
    }

    .money-box span[data-pos="8"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money8.png");
    }

    .money-box span[data-pos="10"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money10.png");
    }

    .money-box span[data-pos="16"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money16.png");
    }

    .money-box span[data-pos="20"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money20.png");
    }

    .money-box span[data-pos="40"] {
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money40.png");
    }

    .money-box span[data-id="0"] {
        left: 0.42rem;
        top: 2.16rem;
    }

    .money-box span[data-id="1"] {
        left: -0.624rem;
        top: 1.3152rem;
    }

    .money-box span[data-id="2"] {
        left: -0.624rem;
        top: 0.2592rem;
    }

    .money-box span[data-id="3"] {
        left: 50%;
        top: -0.7248rem;
    }

    .money-box span[data-id="4"] {
        left: 1.512rem;
        top: 0.2112rem;
    }

    .money-box span[data-id="5"] {
        left: 1.512rem;
        top: 1.3152rem;
    }

    .money-tips {
        display: none;
    }

    .money-text {
        width: 0.6rem;
        height: 0.1152rem;
        position: absolute;
        left: 1.5024rem;
        top: 1.6704rem;
        color: #fff45c;
        text-align: center;
        border-radius: 5px;
        font-size: 0.1152rem;
        line-height: 0.1152rem;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .money-all {
        width: 0.1152rem;
        height: 0.1584rem;
        position: absolute;
        left: 1.5024rem;
        top: 1.608rem;
        background-image: url("http://cdn.lfzgame.com/images/jinhua/money_all.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .head-time span {
        display: none;
        z-index: 99;
        width: 0.4176rem;
        height: 0.4176rem;
        line-height: 0.4176rem;
        text-align: center;
        color: #333333;
        font-size: 0.144rem;
        position: absolute;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-image: url("http://cdn.lfzgame.com/images/jinhua/time.png");
    }

    .head-time span[data-pos='0'] {
        left: 1.5936rem;
        bottom: .54rem;
    }

    .head-time span.reset[data-pos='0'] {
        left: .0864rem;
        bottom: .749rem;
    }

    .head-time span[data-pos='1'] {
        left: 0.1536rem;
        top: 2.832rem;
    }

    .head-time span[data-pos='2'] {
        left: 0.1536rem;
        top: 1.7856rem;
    }

    .head-time span[data-pos='3'] {
        left: 1.32rem;
        top: 0.7776rem;
    }

    .head-time span[data-pos='4'] {
        right: 0.1488rem;
        top: 1.7856rem;
    }

    .head-time span[data-pos='5'] {
        right: 0.1488rem;
        top: 2.832rem;
    }

    .head-time span[data-pos='6'] {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .box-mask {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        display: none;
    }

    .box-mask div {
        width: 1.13rem;
        height: 0.8rem;
        position: absolute;
        z-index: 88;
        display: none;
    }

    .box-mask div[data-pos="1"] {
        left: 0.1056rem;
        top: 2.79rem;
    }

    .box-mask div[data-pos="2"] {
        left: 0.1056rem;
        top: 1.75rem;
    }

    .box-mask div[data-pos="3"] {
        left: 1.2624rem;
        top: 0.74rem;
    }

    .box-mask div[data-pos="4"] {
        right: 0.1056rem;
        top: 1.75rem;
    }

    .box-mask div[data-pos="5"] {
        right: 0.1056rem;
        top: 2.79rem;
    }

    .box-mask div[data-first="1"] {
        background-color: rgba(79, 253, 193, 0.2);
        border-radius: 5px;
    }

    .box-mask .box-animate:after,
    .box-mask .box-animate:before {
        content: " ";
        display: block;
        position: absolute;
        width: 1.13rem;
        height: 0.8rem;
        border-radius: 5px;
        border: 0.0096rem solid #00FF00;
        z-index: 10;
        box-sizing: border-box;
        clip: rect(0rem, 1.13rem, 0.8rem, 1.1204rem);
        -webkit-animation: clipAni 4s infinite linear;
        -moz-animation: clipAni 4s infinite linear;
        -ms-animation: clipAni 4s infinite linear;
        -o-animation: clipAni 4s infinite linear;
        animation: clipAni 4s infinite linear;
    }

    .box-mask .box-animate:before {
        -webkit-animation-delay: -2s;
        -moz-animation-delay: -2s;
        -ms-animation-delay: -2s;
        -o-animation-delay: -2s;
        animation-delay: -2s;
    }

    @-webkit-keyframes clipAni {
        0%,
        100% {
            clip: rect(0rem, 1.13rem, 0.8rem, 1.1204rem);
        }
        25% {
            clip: rect(0rem, 1.13rem, 0.0096rem, 0rem);
        }
        50% {
            clip: rect(0rem, 0.0096rem, 0.8rem, 0rem);
        }
        75% {
            clip: rect(0.7904rem, 1.13rem, 0.8rem, 0rem);
        }
    }

    @-moz-keyframes clipAni {
        0%,
        100% {
            clip: rect(0rem, 1.13rem, 0.8rem, 1.1204rem);
        }
        25% {
            clip: rect(0rem, 1.13rem, 0.0096rem, 0rem);
        }
        50% {
            clip: rect(0rem, 0.0096rem, 0.8rem, 0rem);
        }
        75% {
            clip: rect(0.7904rem, 1.13rem, 0.8rem, 0rem);
        }
    }

    @-ms-keyframes clipAni {
        0%,
        100% {
            clip: rect(0rem, 1.13rem, 0.8rem, 1.1204rem);
        }
        25% {
            clip: rect(0rem, 1.13rem, 0.0096rem, 0rem);
        }
        50% {
            clip: rect(0rem, 0.0096rem, 0.8rem, 0rem);
        }
        75% {
            clip: rect(0.7904rem, 1.13rem, 0.8rem, 0rem);
        }
    }

    @-o-keyframes clipAni {
        0%,
        100% {
            clip: rect(0rem, 1.13rem, 0.8rem, 1.1204rem);
        }
        25% {
            clip: rect(0rem, 1.13rem, 0.0096rem, 0rem);
        }
        50% {
            clip: rect(0rem, 0.0096rem, 0.8rem, 0rem);
        }
        75% {
            clip: rect(0.7904rem, 1.13rem, 0.8rem, 0rem);
        }
    }

    @keyframes clipAni {
        0%,
        100% {
            clip: rect(0rem, 1.13rem, 0.8rem, 1.1204rem);
        }
        25% {
            clip: rect(0rem, 1.13rem, 0.0096rem, 0rem);
        }
        50% {
            clip: rect(0rem, 0.0096rem, 0.8rem, 0rem);
        }
        75% {
            clip: rect(0.7904rem, 1.13rem, 0.8rem, 0rem);
        }
    }

    .kanpai-result {
        display: none;
        position: absolute;
        color: white;
        font-size: 0.1152rem;
        left: 50%;
        top: 3.7552rem;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
    }

    .kaipai-box span {
        position: absolute;
        z-index: 10;
        display: none;
    }

    .kaipai-box span[data-pos="0"] {
        left: 50%;
        top: 2.85rem;
        -webkit-transform: translate(-50%);
        -moz-transform: translate(-50%);
        -ms-transform: translate(-50%);
        -o-transform: translate(-50%);
        transform: translate(-50%);
    }

    .kaipai-box span[data-pos="0"][data-item="0"] {
        width: 3.004rem;
        height: 1.0822rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/win_myself.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="0"][data-item="1"] {
        width: 3.5136rem;
        height: 1.056rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/lose_myself.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"] {
        left: 0.6384rem;
        top: 2.7168rem;
        font-size: 0.1152rem;
        color: #fff45c;
        font-weight: bolder;
        text-shadow: 0 0 3px black;
    }

    .kaipai-box span[data-pos="2"] {
        top: 1.632rem !important;
    }

    .kaipai-box span[data-pos="3"] {
        top: 0.6096rem !important;
    }

    .kaipai-box span[data-pos="4"] {
        top: 1.632rem !important;
    }

    .kaipai-box span[data-pos="5"] {
        top: 2.6688rem !important;
    }

    .kaipai-box span[data-pos="1"][data-value="1"][data-item="0"],
    .kaipai-box span[data-pos="2"][data-value="1"][data-item="0"],
    .kaipai-box span[data-pos="3"][data-value="1"][data-item="0"],
    .kaipai-box span[data-pos="4"][data-value="1"][data-item="0"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="0"] {
        width: 0.3744rem;
        height: 0.192rem;
        left: 0.72rem;
        top: 2.6688rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/gaopai_win.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="0"][data-item="0"],
    .kaipai-box span[data-pos="2"][data-value="0"][data-item="0"],
    .kaipai-box span[data-pos="3"][data-value="0"][data-item="0"],
    .kaipai-box span[data-pos="4"][data-value="0"][data-item="0"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="0"] {
        width: 0.3744rem;
        height: 0.1344rem;
        left: 0.72rem;
        top: 2.7168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/gaopai_lose.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="1"][data-item="1"],
    .kaipai-box span[data-pos="2"][data-value="1"][data-item="1"],
    .kaipai-box span[data-pos="3"][data-value="1"][data-item="1"],
    .kaipai-box span[data-pos="4"][data-value="1"][data-item="1"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="1"] {
        width: 0.3744rem;
        height: 0.192rem;
        left: 0.72rem;
        top: 2.6688rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/duizi_win.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="0"][data-item="1"],
    .kaipai-box span[data-pos="2"][data-value="0"][data-item="1"],
    .kaipai-box span[data-pos="3"][data-value="0"][data-item="1"],
    .kaipai-box span[data-pos="4"][data-value="0"][data-item="1"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="1"] {
        width: 0.3744rem;
        height: 0.1344rem;
        left: 0.72rem;
        top: 2.7168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/duizi_lose.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="1"][data-item="2"],
    .kaipai-box span[data-pos="2"][data-value="1"][data-item="2"],
    .kaipai-box span[data-pos="3"][data-value="1"][data-item="2"],
    .kaipai-box span[data-pos="4"][data-value="1"][data-item="2"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="2"] {
        width: 0.3744rem;
        height: 0.192rem;
        left: 0.72rem;
        top: 2.6688rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/shunzi_win.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="0"][data-item="2"],
    .kaipai-box span[data-pos="2"][data-value="0"][data-item="2"],
    .kaipai-box span[data-pos="3"][data-value="0"][data-item="2"],
    .kaipai-box span[data-pos="4"][data-value="0"][data-item="2"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="2"] {
        width: 0.3744rem;
        height: 0.1344rem;
        left: 0.72rem;
        top: 2.7168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/shunzi_lose.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="1"][data-item="3"],
    .kaipai-box span[data-pos="2"][data-value="1"][data-item="3"],
    .kaipai-box span[data-pos="3"][data-value="1"][data-item="3"],
    .kaipai-box span[data-pos="4"][data-value="1"][data-item="3"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="3"] {
        width: 0.3744rem;
        height: 0.192rem;
        left: 0.72rem;
        top: 2.6688rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/tonghua_win.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="0"][data-item="3"],
    .kaipai-box span[data-pos="2"][data-value="0"][data-item="3"],
    .kaipai-box span[data-pos="3"][data-value="0"][data-item="3"],
    .kaipai-box span[data-pos="4"][data-value="0"][data-item="3"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="3"] {
        width: 0.3744rem;
        height: 0.1344rem;
        left: 0.72rem;
        top: 2.7168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/tonghua_lose.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="1"][data-item="5"],
    .kaipai-box span[data-pos="2"][data-value="1"][data-item="5"],
    .kaipai-box span[data-pos="3"][data-value="1"][data-item="5"],
    .kaipai-box span[data-pos="4"][data-value="1"][data-item="5"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="5"] {
        width: 0.4944rem;
        height: 0.192rem;
        left: 0.6624rem;
        top: 2.6688rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/tonghuashun_win.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="0"][data-item="5"],
    .kaipai-box span[data-pos="2"][data-value="0"][data-item="5"],
    .kaipai-box span[data-pos="3"][data-value="0"][data-item="5"],
    .kaipai-box span[data-pos="4"][data-value="0"][data-item="5"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="5"] {
        width: 0.4944rem;
        height: 0.1344rem;
        left: 0.6624rem;
        top: 2.7168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/tonghuashun_lose.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="1"][data-item="6"],
    .kaipai-box span[data-pos="2"][data-value="1"][data-item="6"],
    .kaipai-box span[data-pos="3"][data-value="1"][data-item="6"],
    .kaipai-box span[data-pos="4"][data-value="1"][data-item="6"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="6"] {
        width: 0.3744rem;
        height: 0.192rem;
        left: 0.72rem;
        top: 2.6688rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/baozi_win.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="1"][data-value="0"][data-item="6"],
    .kaipai-box span[data-pos="2"][data-value="0"][data-item="6"],
    .kaipai-box span[data-pos="3"][data-value="0"][data-item="6"],
    .kaipai-box span[data-pos="4"][data-value="0"][data-item="6"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="6"] {
        width: 0.3744rem;
        height: 0.1344rem;
        left: 0.72rem;
        top: 2.7168rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/baozi_lose.png") no-repeat;
        background-size: 100% 100%;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="0"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="0"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="1"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="1"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="2"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="2"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="3"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="3"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="4"] {
        left: 1.8288rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="4"] {
        left: 1.8288rem;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="5"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="5"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="1"][data-item="6"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="3"][data-value="0"][data-item="6"] {
        left: 1.8864rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="0"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="0"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="0"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="0"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="1"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="1"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="1"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="1"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="2"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="2"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="2"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="2"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="3"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="3"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="3"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="3"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="4"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="4"] {
        left: 2.4384rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="4"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="4"] {
        left: 2.4384rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="5"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="5"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="5"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="5"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="1"][data-item="6"],
    .kaipai-box span[data-pos="5"][data-value="1"][data-item="6"] {
        left: 2.496rem;
    }

    .kaipai-box span[data-pos="4"][data-value="0"][data-item="6"],
    .kaipai-box span[data-pos="5"][data-value="0"][data-item="6"] {
        left: 2.496rem;
    }

    .max-chouma-tips {
        width: 1.44rem;
        font-size: 0.096rem;
        position: absolute;
        top: 1.8rem;
        left: 1.05rem;
        text-align: center;
        opacity: 1;
        color: #FAD20A;
    }

    .ds-wangluo-tips {
        position: fixed;
        width: 2.88rem;
        line-height: .2rem;
        font-size: .1rem;
        left: .36rem;
        text-align: center;
        bottom: 45%;
        background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        background: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        color: #FAD20A;
        z-index: 9999;
    }

    .game-state-tips {
        display: block;
        z-index: 999;
        width: 2.2032rem;
        height: .6384rem;
        font-size: 0.096rem;
        position: absolute;
        top: 2.62rem;
        left: .69rem;
        background: url("http://cdn.lfzgame.com/images/jinhua/start_tips.png") no-repeat;
        background-size: 100% 100%;
    }

    .max-chouma-tips-animate {
        transition: all 3s linear;
        left: 0.576rem;
        opacity: 1;
    }

    .max-chouma-tips-animate2 {
        transition: all 2s linear;
        left: -1.44rem;
        opacity: 0;
    }

    .canvas_coin {
        position: absolute;
        left: 0;
        top: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 99999;
    }

    .room-gameover {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999999;
        width: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
        background-color: #000;
    }

    .choosed:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 0.4176rem;
        height: 0.4176rem;
        border-radius: 0.0480rem;
        box-shadow: 0 0 0.0480rem #fad20a, 0 0 0.0480rem #fad20a inset;
    }

    .cardbox {
        position: absolute;
        -webkit-perspective: 800px;
        perspective: 800px;
        -moz-perspective: 800px;
        -o-perspective: 800px;
        -ms-perspective: 800px;
        width: .4560rem;
        height: .6912rem;
    }

    .card-small {
        width: .2400rem;
        height: .3600rem;
    }

    .cardbox.hind {}

    .cardbox>span {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transition: transform .3s ease-in-out;
        -moz-transition: transform .3s ease-in-out;
        -ms-transition: transform .3s ease-in-out;
        -o-transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -o-backface-visibility: hidden;
    }

    .cardbox>span:first-child {
        z-index: 1;
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    .cardbox>span:last-child {
        z-index: 2;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .cardbox.front>span:first-child {
        z-index: 1;
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    .cardbox.front>span:last-child {
        z-index: 2;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .cardbox.hind>span:first-child {
        z-index: 1;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .cardbox.hind>span:last-child {
        z-index: 2;
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    .card-bg {
        position: absolute;
        width: .4560rem;
        height: .6912rem;
        background: url("http://cdn.lfzgame.com/images/card-bg.png") no-repeat;
        background-size: 100% 100%;
    }

    .card-small .card-bg {
        position: absolute;
        width: .2400rem;
        height: .3600rem;
        background: url("http://cdn.lfzgame.com/images/card-bg.png") no-repeat;
        background-size: 100% 100%;
    }

    .card {
        position: absolute;
        transition: transform 0.5s;
        width: .4560rem;
        height: .6912rem;
        border: .0048rem solid #727c89;
        border-radius: .0480rem;
        background-color: #ffffff;
        background-repeat: no-repeat;
        background-position: calc(100% - .0384rem) calc(100% - .0384rem);
    }

    .card-small .card {
        width: .2400rem;
        height: .3600rem;
        font-size: .0960rem;
        border-radius: .0240rem;
        background-position: calc(100% - .0192rem) calc(100% - .0192rem);
    }

    .card:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: .2208rem;
        height: .3000rem;
        line-height: 1.5;
        text-align: center;
        color: red;
        font-family: Arial;
        font-size: .1440rem;
        font-weight: bold;
        background-repeat: no-repeat;
        background-position: center bottom;
    }

    .card-small .card:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: .1104rem;
        height: .1728rem;
        line-height: 1;
        text-align: center;
        color: red;
        font-family: Arial;
        font-size: .0960rem;
        background-repeat: no-repeat;
        background-position: center bottom;
        padding-top: .0096rem;
    } //.card[data-value='1']:before{//content: 'A';//}.card[data-value='2']:before{content: '2';}.card[data-value='3']:before{content: '3';}.card[data-value='4']:before{content: '4';}.card[data-value='5']:before{content: '5';}.card[data-value='6']:before{content: '6';}.card[data-value='7']:before{content: '7';}.card[data-value='8']:before{content: '8';}.card[data-value='9']:before{content: '9';}.card[data-value='10']:before{content: '10';}.card[data-value='11']:before{content: 'J';}.card[data-value='12']:before{content: 'Q';}.card[data-value='13']:before{content: 'K';}.card[data-value='14']:before{content: 'A';}.card[data-value='15']:before{content: '..';}.card[data-color='0']:before{color: black;background-image: url("http://cdn.lfzgame.com/images/card00.png");background-size: .1296rem .1248rem;}.card-small .card[data-color='0']:before{color: black;background-image: url("http://cdn.lfzgame.com/images/card00.png");background-size: .0648rem .0624rem;}.card[data-color='1']:before{color: red;background-image: url("http://cdn.lfzgame.com/images/card01.png");background-size: .1296rem .1248rem;}.card-small .card[data-color='1']:before{color: red;background-image: url("http://cdn.lfzgame.com/images/card01.png");background-size: .0648rem .0624rem;}.card[data-color='2']:before{color: black;background-image: url("http://cdn.lfzgame.com/images/card02.png");background-size: .1296rem .1248rem;}.card-small .card[data-color='2']:before{color: black;background-image: url("http://cdn.lfzgame.com/images/card02.png");background-size: .0648rem .0624rem;}.card[data-color='3']:before{color: red;background-image: url("http://cdn.lfzgame.com/images/card03.png");background-size: .1296rem .1248rem;}.card-small .card[data-color='3']:before{color: red;background-image: url("http://cdn.lfzgame.com/images/card03.png");background-size: .0648rem .0624rem;}.card[data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card0.png");background-size: .2640rem .2544rem;}.card-small .card[data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card0.png");background-size: .1320rem .1272rem;}.card[data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card1.png");background-size: .2640rem .2544rem;}.card-small .card[data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card1.png");background-size: .1320rem .1272rem;}.card[data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card2.png");background-size: .2640rem .2544rem;}.card-small .card[data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card2.png");background-size: .1320rem .1272rem;}.card[data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card3.png");background-size: .2640rem .2544rem;}.card-small .card[data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card3.png");background-size: .1320rem .1272rem;}.card[data-value='11'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card011.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='11'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card011.png");background-size: .1680rem .2352rem;}.card[data-value='11'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card111.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='11'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card111.png");background-size: .1680rem .2352rem;}.card[data-value='11'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card211.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='11'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card211.png");background-size: .1680rem .2352rem;}.card[data-value='11'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card311.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='11'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card311.png");background-size: .1680rem .2352rem;}.card[data-value='12'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card012.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='12'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card012.png");background-size: .1680rem .2352rem;}.card[data-value='12'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card112.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='12'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card112.png");background-size: .1680rem .2352rem;}.card[data-value='12'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card212.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='12'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card212.png");background-size: .1680rem .2352rem;}.card[data-value='12'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card312.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='12'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card312.png");background-size: .1680rem .2352rem;}.card[data-value='13'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card013.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='13'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card013.png");background-size: .1680rem .2352rem;}.card[data-value='13'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card113.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='13'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card113.png");background-size: .1680rem .2352rem;}.card[data-value='13'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card213.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='13'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card213.png");background-size: .1680rem .2352rem;}.card[data-value='13'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card313.png");background-size: .3360rem .4704rem;}.card-small .card[data-value='13'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card313.png");background-size: .1680rem .2352rem;}.card[data-value='14'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card0.png");}.card-small .card[data-value='14'][data-color='0']{background-image: url("http://cdn.lfzgame.com/images/card0.png");}.card[data-value='14'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card1.png");}.card-small .card[data-value='14'][data-color='1']{background-image: url("http://cdn.lfzgame.com/images/card1.png");}.card[data-value='14'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card2.png");}.card-small .card[data-value='14'][data-color='2']{background-image: url("http://cdn.lfzgame.com/images/card2.png");}.card[data-value='14'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card3.png");}.card-small .card[data-value='14'][data-color='3']{background-image: url("http://cdn.lfzgame.com/images/card3.png");}.card[data-value='14']{background-image: url("http://cdn.lfzgame.com/images/card14.png");}.card-small .card[data-value='14']{background-image: url("http://cdn.lfzgame.com/images/card14.png");}.card[data-value='15']{background-image: url("http://cdn.lfzgame.com/images/card15.png");}.card-small .card[data-value='15']{background-image: url("http://cdn.lfzgame.com/images/card15.png");}
    </style>
</head>

<body>
    <div id="loadings" style="position:fixed;top:0;right:0;bottom:0;left:0;background:#fff;z-index:999;font-size:16px;">
        <div class="spinner">
            <div class="spinner-container container1">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="spinner-container container2">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="spinner-container container3">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
        </div>
        <div class="loadings-text">页面加载中<span data-item="1">.</span><span data-item="2">.</span><span data-item="3">.</span></div>
    </div>
    <div id="networkReconnect" style="position: fixed; width:2.88rem; line-height:.2rem; font-size:.1rem; left:.36rem; text-align: center; bottom:45%; background: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); background: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); color:#fff; display:none; z-index:9999;">您的网络已断开，我们正在尝试重连...</div>
    <div class="body">
        <div class="user-card" data-pos="0" data-item="0" data-click="0">
            <div class="cardbox hind" data-item="0"><span class="card" data-value="12" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox hind" data-item="1"><span class="card" data-value="9" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox hind" data-item="2"><span class="card" data-value="10" data-color="0"></span><span class="card-bg"></span></div>
        </div>
        <div class="user-card" data-pos="1">
            <div class="cardbox card-small hind" data-item="0"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="1"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="2"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
        </div>
        <div class="user-card" data-pos="2">
            <div class="cardbox card-small hind" data-item="0"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="1"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="2"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
        </div>
        <div class="user-card" data-pos="3">
            <div class="cardbox card-small hind" data-item="0"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="1"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="2"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
        </div>
        <div class="user-card" data-pos="4">
            <div class="cardbox card-small hind" data-item="0"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="1"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="2"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
        </div>
        <div class="user-card" data-pos="5">
            <div class="cardbox card-small hind" data-item="0"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="1"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
            <div class="cardbox card-small hind" data-item="2"><span class="card" data-value="13" data-color="0"></span><span class="card-bg"></span></div>
        </div>
        <div class="top flex-cont">
            <div class="left"><img src="http://cdn.lfzgame.com/images/index/room-card1.png"><span>0</span></div>
            <div class="flex-item"><span>0</span>/<span>10</span>局</div>
            <div class="right">
                <div class="rules-focus"><span class="rules"></span><span class="tips"></span><span class="add index"></span></div>
            </div>
        </div>
        <div class="rules-mask">
            <div class="content">
                <div class="niuniu-rules">
                    <div class="flex-cont" data-pos="1">
                        <div class="name">底分：</div>
                        <div class="flex-item"></div>
                    </div>
                    <div class="flex-cont" data-pos="2">
                        <div class="name">筹码：</div>
                        <div class="flex-item"></div>
                    </div>
                    <div class="flex-cont" data-pos="3">
                        <div class="name">上限：</div>
                        <div class="flex-item"></div>
                    </div>
                    <div class="flex-cont" data-pos="4">
                        <div class="name">局数：</div>
                        <div class="flex-item"></div>
                    </div>
                </div>
            </div>
            <div class="close"></div>
        </div>
        <div class="bottom">
            <div class="points"><span>底分：</span><span class="bottom-dizhu">2</span>&nbsp;&nbsp;<span>单注上限：</span><span>0</span>
                <br /><span class="bottom-jushu">10</span>局<span class="bottom-fangka">1</span>张房卡</div>
            <div class="music"><img src="http://cdn.lfzgame.com/images/jinhua/game-music2.png"><img src="http://cdn.lfzgame.com/images/jinhua/game-music1.png"></div>
            <div class="chat"></div>
            <div class="chat-list-mask"></div>
            <div class="chat-list" style="display: none">
                <ul>
                    <li data-item="0">快点吧，我等到花儿也谢了</li>
                    <li data-item="1">我出去叫人</li>
                    <li data-item="2">你的牌好靓哇</li>
                    <li data-item="3">我当年横扫澳门九条街</li>
                    <li data-item="4">算你牛逼</li>
                    <li data-item="5">别吹牛逼，有本事干到底</li>
                    <li data-item="6">输得裤衩都没了</li>
                    <li data-item="7">我给你们送温暖了</li>
                    <li data-item="8">谢谢老板</li>
                    <li data-item="9">我来啦，让你们久等了</li>
                    <li data-item="10">我出去一下，马上回来，等我哦</li>
                    <li data-item="11">怎么断线了，网络太差了</li>
                    <li data-item="12">搏一搏，单车变摩托</li>
                </ul>
            </div>
        </div>
        <div class="user-list-bg">
            <div class="user-bg" data-pos="0"><span>空位</span></div>
            <div class="user-bg" data-pos="1"><span>空位</span></div>
            <div class="user-bg" data-pos="2"><span>空位</span></div>
            <div class="user-bg" data-pos="3"><span>空位</span></div>
            <div class="user-bg" data-pos="4"><span>空位</span></div>
            <div class="user-bg" data-pos="5"><span>空位</span></div>
        </div>
        <div class="user-list"></div>
        <div class="prepare-list">
            <div class="prepare-item" data-pos="0"></div>
            <div class="prepare-item" data-pos="1"></div>
            <div class="prepare-item" data-pos="2"></div>
            <div class="prepare-item" data-pos="3"></div>
            <div class="prepare-item" data-pos="4"></div>
            <div class="prepare-item" data-pos="5"></div>
        </div>
        <div class="prepare" onclick="game.clickReady()"><span>准备</span></div>
        <div class="bipai-box"><span data-pos="2" data-click="1">2</span><span data-pos="4" data-click="1">4</span><span data-pos="8" data-click="1">8</span><span data-pos="10" data-click="1">10</span><span>弃牌</span><span data-bipai="1">比牌</span>
            <div>请选择比牌玩家</div>
        </div>
        <div class="kanpai-box"><span data-id="0" data-pos="0">已看牌</span><span data-id="0" data-pos="1">已看牌</span><span data-id="0" data-pos="2">已看牌</span><span data-id="0" data-pos="3">已看牌</span><span data-id="0" data-pos="4">已看牌</span><span data-id="0" data-pos="5">已看牌</span></div>
        <div class="money-box"></div>
        <div class="money-tips"><span class="money-text">60</span><span class="money-all"></span></div>
        <div class="head-time"><span data-pos="0" data-id="0" class="">60</span><span data-pos="1" data-id="1" class="">60</span><span data-pos="2" data-id="2" class="">60</span><span data-pos="3" data-id="3" class="">60</span><span data-pos="4" data-id="4" class="">60</span><span data-pos="5" data-id="5" class="">60</span><span data-pos="6" data-id="6" class="">60</span></div>
        <div class="box-mask">
            <div data-pos="1">
                <div data-first="1"></div>
                <div data-second="1"></div>
            </div>
            <div data-pos="2">
                <div data-first="1"></div>
                <div data-second="1"></div>
            </div>
            <div data-pos="3">
                <div data-first="1"></div>
                <div data-second="1"></div>
            </div>
            <div data-pos="4">
                <div data-first="1"></div>
                <div data-second="1"></div>
            </div>
            <div data-pos="5">
                <div data-first="1"></div>
                <div data-second="1"></div>
            </div>
        </div><span class="kanpai-result">顺子</span>
        <div class="kaipai-box"><span data-pos="0" data-item="0"></span><span data-pos="1" data-value="1" data-item="0"></span><span data-pos="2" data-value="1" data-item="0"></span><span data-pos="3" data-value="1" data-item="0"></span><span data-pos="4" data-value="1" data-item="0"></span><span data-pos="5" data-value="1" data-item="0"></span></div>
    </div>
</body>
<script>
var storage = {
    get: function(key) { var data = false; if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { data = this.item(arr[0]); for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { data = data[arr[i]]; } else return false; } } else { return false; } } else if (this.item(key)) data = this.item(key); return data; },
    set: function(key, value) {
        if (value === undefined) return false;
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { _dt = data;
                        data = data[arr[i]]; } else { if (i == arr.length - 1) { data[arr[i]] = '';
                            _dt = data;
                            data = data[arr[i]]; } else return false } } } else { return false; } } else if (this.item(key)) data = this.item(key);
        data = value;
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas); }
        return true;
    },
    inset: function(key, value) {
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { if (i == arr.length - 1) _dt = data;
                        data = data[arr[i]]; } else return false; } } else { return false; } } else if (this.item(key)) data = this.item(key);
        if (typeof(data) != 'object') return false;
        data.push(value);
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas);
            data = datas; }
        return data;
    },
    outset: function(key, value) {
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { if (i == arr.length - 1) _dt = data;
                        data = data[arr[i]]; } else return false; } } else { return false; } } else if (this.item(key)) data = this.item(key);
        if (typeof(data) != 'object') return false;
        var _data = [];
        for (var i in data) { if (data[i] !== value) _data.push(data[i]); }
        data = _data;
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas);
            data = datas; }
        return data;
    },
    pop: function(key, way) {
        var way = way || 1;
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { if (i == arr.length - 1) _dt = data;
                        data = data[arr[i]]; } else return false; } } else { return false; } } else if (this.item(key)) data = this.item(key);
        if (way == 1)
            var rs = data.pop();
        else
            var rs = data.shift();
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas); }
        return rs;
    },
    shift: function(key) { return this.pop(key, -1); },
    incr: function(key, value) {
        if (typeof(value) != 'number') value = 1;
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { if (i == arr.length - 1) _dt = data;
                        data = data[arr[i]]; } else return false; } } else { return false; } } else if (this.item(key)) data = this.item(key);
        if (typeof(data) == 'number') { data += value; } else { return false; }
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas); }
        return data;
    },
    decr: function(key, value) {
        if (typeof(value) != 'number') value = 1;
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { if (i == arr.length - 1) _dt = data;
                        data = data[arr[i]]; } else return false; } } else { return false; } } else if (this.item(key)) data = this.item(key);
        if (typeof(data) == 'number') { data -= value; } else { return false; }
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas); }
        return data;
    },
    rm: function(key) {
        if (key.indexOf('.') > 0) {
            var data = [];
            var datas = null;
            var arr = key.split('.');
            if (this.item(arr[0])) {
                datas = this.item(arr[0]);
                data = datas;
                for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { if (i == arr.length - 1) { delete data[arr[i]]; } else data = data[arr[i]]; } else return false; }
                this.item(arr[0], datas);
                return datas;
            } else { return false; }
        } else { this.item(key, null); return true; }
    },
    each: function(key, fn) {
        if (typeof(fn) != 'function') return false;
        var data = [];
        var datas = null;
        var _dt = null;
        if (key.indexOf('.') > 0) { var arr = key.split('.'); if (this.item(arr[0])) { datas = this.item(arr[0]);
                data = datas; for (var i in arr) { if (i == 0) continue; if (data[arr[i]] !== undefined) { _dt = data;
                        data = data[arr[i]]; } else return false } } else { return false; } } else if (this.item(key)) data = this.item(key);
        if (typeof(data) != 'object') return false;
        for (var i in data) { var rs = fn(data[i], i); if (rs !== undefined) { data[i] = rs; } }
        if (datas === null) { this.item(key, data); } else { _dt[arr[arr.length - 1]] = data;
            this.item(arr[0], datas); }
        return true;
    },
    item: function(key, value) {
        if (window.localStorage) { if (value === undefined) { return this.decode(localStorage.getItem(key)) || false; } else if (value === null) return localStorage.removeItem(key);
            else return localStorage.setItem(key, this.encode(value)); } else {
            if (value === undefined) {
                var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
                if (arr = document.cookie.match(reg))
                    return this.decode(arr[2]);
                else
                    return false;
            } else if (value === null) { var exp = new Date();
                exp.setTime(exp.getTime() - 1);
                document.cookie = name + "=" + this.encode(value) + ";expires=" + exp.toGMTString(); return true; } else { var Days = 30; var exp = new Date();
                exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
                document.cookie = name + "=" + this.encode(value) + ";expires=" + exp.toGMTString(); return true; }
        }
    },
    encode: function(obj) {
        var str = '';
        try { str = JSON.stringify(obj); } catch (e) { str = decodeURI(obj); }
        return str;
    },
    decode: function(str) {
        var obj = '';
        try { obj = JSON.parse(str); } catch (e) { obj = encodeURI(str); }
        return obj;
    }
};
$.alert = function(msg, fn, style, sec) {
    style = style || 'success';
    if (typeof(fn) == 'string') { style = fn; }
    if (!sec) { if (style == 'error' || style == 'puncherror') { sec = 9; } else { sec = 0; } }
    var box = $('<div>').addClass('resourceBox ' + style).attr('id', 'alertBox');
    box.html('<div class="context">' + msg + '</div>');
    box.appendTo('body');
    var h = win.width / 360 * 100;
    box.css({ 'opacity': 1, 'margin-top': -1 * (box.height() + h) / 2 });
    if (sec >= 9) { var alertBoxLay = $('<div>').addClass('alertBoxLay').appendTo('body');
        $('<a>').attr('href', 'javascript:void(0);').addClass('closed').appendTo(box).text('我知道了');
        $('#alertBox a.closed, .alertBoxLay').click(function() { box.css({ 'opacity': 0, 'margin-top': -1 * (box.height() + h) });
            alertBoxLay.css('opacity', 0);
            setTimeout(function() { box.remove();
                alertBoxLay.remove(); if (typeof(fn) == 'function') fn(); }, 500); }); } else { setTimeout(function() { box.css({ 'opacity': 0, 'margin-top': -1 * (box.height() + h) });
            setTimeout(function() { box.remove(); if (typeof(fn) == 'function') fn(); }, 500); }, 1000 + sec * 1000); }
};
$.dialog = function(msg, fn, is_lock, classname) {
    is_lock = is_lock || true;
    if (typeof(fn) != 'function') return;
    classname = classname || '';
    var box = $('<div>').addClass('resourceBox  ' + classname).attr('id', 'dialogBox');
    var sb = $('<div>').addClass('sbox').appendTo(box);
    sb.html('<div class="context">' + msg + '</div>');
    box.appendTo('body');
    var h = win.width / 360 * 100;
    box.css({ 'opacity': 1, 'margin-top': -1 * (box.height() + h) / 2 });
    if (is_lock) { var dialogBoxLay = $('<div>').addClass('dialogBoxLay').appendTo('body'); }
    var btns = $('<div>').addClass('btns').appendTo(sb);
    $('<button>').addClass('closeBtn').appendTo(btns).text('否');
    var agree = $('<button>').addClass('agree').appendTo(btns).text('是');
    agree.click(function() { if (fn() !== false) { box.css({ 'opacity': 0, 'margin-top': -1 * (box.height() + h) }); if (is_lock) dialogBoxLay.css('opacity', 0);
            setTimeout(function() { box.remove(); if (is_lock) dialogBoxLay.remove(); }, 500); } });
    $('#dialogBox button.closeBtn, .dialogBoxLay, .clearpsd, .noticeid').click(function() { box.css({ 'opacity': 0, 'margin-top': -1 * (box.height() + h) });
        dialogBoxLay.css('opacity', 0);
        setTimeout(function() { box.remove();
            dialogBoxLay.remove(); }, 500); });
};
$.fn.touch = function(callback) { this.each(function() { if (typeof(callback) == 'function') { if (navigator.userAgent.indexOf('QQBrowser') > 0) { $(this).on('click', callback); } else { var time = 0;
                this.fn = callback;
                $(this).on('touchstart', function() { time = (new Date()).getTime(); });
                $(this).on('touchend', function() { if ((new Date()).getTime() - time <= 300) { this.fn(this); } }); } } else { if (navigator.userAgent.indexOf('QQBrowser') > 0) { $(this).click(); } else { this.fn(this); } } }); };

function ajax(path, data, fn, type) {
    if (!IS_SSL)
        var url = 'http://' + API_DOMAIN + '/';
    else
        var url = 'https://' + API_DOMAIN + '/';
    var async = type === false ? false : true;
    if (typeof(data) == 'function') { fn = data;
        data = {}; }
    var arr = location.href.substr(url.length).split('/');
    https = [arr[0] ? arr[0] : 'home', arr[1] ? arr[1] : 'index', arr[2] ? arr[2] : 'index'];
    var arr = path.split('/');
    switch (arr.length) {
        case 3:
            https[2] = arr[2];
        case 2:
            https[1] = arr[1];
        case 1:
            https[0] = arr[0]; }
    url += https.join('/') + '.html';
    if (win.token != null) {
        url += "?token=" + win.token + "&v=" + win.version;
        var postdata = {};
        var getdata = [];
        if (data) {
            if (data.get) {
                if (data.post) postdata = data.post;
                for (i in data.get) { getdata.push(i + '=' + encodeURIComponent(data.get[i])); }
                url += '&' + getdata.join('&');
            } else { postdata = data; }
        }
        var arr = [];
        for (var i in postdata) { if (postdata[i] instanceof Array) { for (var j in postdata[i]) { arr.push(i + '[]=' + encodeURIComponent(postdata[i][j])); } } else if (typeof(postdata[i]) == 'number' || typeof(postdata[i]) == 'string') { arr.push(i + '=' + encodeURIComponent(postdata[i])); } }
        postdata = arr.join('&');
        var xmlHttp = new XMLHttpRequest();
        if (xmlHttp != null) {
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
            xmlHttp.send(postdata);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4) {
                    if (xmlHttp.status == 200) {
                        var data = '';
                        try { data = JSON.parse(xmlHttp.responseText); } catch (e) { data = xmlHttp.responseText; }
                        if (typeof(fn) == 'function') fn(data);
                    }
                }
            };
        } else { alert("Your browser does not support XMLHTTP."); }
    }
}
String.prototype.decodeURL = function() {
    var url = this.toString();
    if (url.indexOf('?') > 0) { url = url.split('?')[1]; }
    var arr = url.split('&');
    var params = {};
    for (var i in arr) { var a = arr[i].split('='); if (a.length == 2) { params[a[0]] = a[1]; } }
    return params;
};
String.prototype.timeFormat = function(format) {
    var time = this.toString();
    if (/^\d+$/.test(time)) { var myDate = new Date(time * 1000); } else { time = time.replace(/\-/g, '/'); var myDate = new Date(time); }
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
    for (var i in _date) { format = format.replace(i, _date[i]); }
    return format;
};

function share(title, desc, link, imgUrl, fun) { imgUrl = getShareIconLink(win.gameId);
    wx.onMenuShareTimeline({ title: title, desc: desc, link: link, imgUrl: imgUrl, success: function(res) { if (typeof(fun) == 'function') fun(res); } });
    wx.onMenuShareAppMessage({ title: title, desc: desc, link: link, imgUrl: imgUrl, success: function(res) { if (typeof(fun) == 'function') fun(res); } });
    wx.onMenuShareQQ({ title: title, desc: desc, link: link, imgUrl: imgUrl, success: function(res) { if (typeof(fun) == 'function') fun(res); } });
    wx.onMenuShareWeibo({ title: title, desc: desc, link: link, imgUrl: imgUrl, success: function(res) { if (typeof(fun) == 'function') fun(res); } });
    wx.onMenuShareQZone({ title: title, desc: desc, link: link, imgUrl: imgUrl, success: function(res) { if (typeof(fun) == 'function') fun(res); } }); }

function setTitle(title) {
    document.title = title;
    if (/ip(hone|od|ad)/i.test(navigator.userAgent)) {
        var i = document.createElement('iframe');
        i.src = '/favicon.ico';
        i.style.display = 'none';
        i.onload = function() { setTimeout(function() { i.remove(); }, 9) }
        document.body.appendChild(i);
    }
}

function isIOS() { return /iphone|ipad|ipod/.test(navigator.userAgent.toLowerCase()); }

function createCode(len) {
    var char = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'.split('');
    var code = '';
    for (var i = 0; i < len; i++) { code += char[Math.floor(Math.random() * 62)]; }
    return code;
}

function oClone(obj) {
    var _obj = {};
    for (var i in obj) { if (typeof(obj[i]) == 'object' && !(obj[i] instanceof Array)) { _obj[i] = oClone(obj[i]); } else { _obj[i] = obj[i]; } }
    return _obj;
}

function cacl(arr, callback) {
    var ret;
    for (var i = 0; i < arr.length; i++) { ret = callback(arr[i], ret); }
    return ret;
}

function array_max(array) {
    return cacl(array, function(item, max) {
        if (!(max > item)) { return item; } else { return max; }
    });
}

function array_min(array) {
    return cacl(array, function(item, min) {
        if (!(min < item)) { return item; } else { return min; }
    });
}

function array_sum(array) {
    return cacl(array, function(item, sum) {
        if (typeof(sum) == 'undefined') { return item; } else { return sum += item; }
    });
}

function array_avg(array) {
    if (array.length == 0) { return 0; }
    return array_sum(array) / array.length;
}
var win = {
    width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
    height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
    version: '1.0.0',
    ws: {},
    status: 0,
    readed: 0,
    gameId: 0,
    reset: function(fn) { this.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        this.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        document.getElementsByTagName('html')[0].setAttribute('style', 'font-size:' + 100 * (this.width / 360) + 'px !important'); if (typeof(fn) == 'function') fn(); },
    loading: function() {
        if (this.overlay) { this.overlay.remove();
            this.overlay = null; }
        this.overlay = $('<div>').css({ 'position': 'fixed', 'width': '100%', 'height': '100%', 'background': 'rgba(255,255,255,0.7)', 'z-index': 110000 }).appendTo('body');
        if (this.loadingLay) { this.loadingLay.remove();
            this.loadingLay = null; }
        var code = '<div class="spinner">';
        code += ' <div class="spinner-container container1">';
        code += ' <div class="circle1"></div>';
        code += ' <div class="circle2"></div>';
        code += ' <div class="circle3"></div>';
        code += ' <div class="circle4"></div>';
        code += ' </div>';
        code += ' <div class="spinner-container container2">';
        code += ' <div class="circle1"></div>';
        code += ' <div class="circle2"></div>';
        code += ' <div class="circle3"></div>';
        code += ' <div class="circle4"></div>';
        code += ' </div>';
        code += ' <div class="spinner-container container3">';
        code += ' <div class="circle1"></div>';
        code += ' <div class="circle2"></div>';
        code += ' <div class="circle3"></div>';
        code += ' <div class="circle4"></div>';
        code += ' </div>';
        code += '</div>';
        document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
    },
    close_loading: function() {
        if (this.overlay) { this.overlay.remove();
            this.overlay = null; }
        if (this.loadingLay) { this.loadingLay.remove();
            this.loadingLay = null; }
    },
    closeLoading: function() { document.getElementById('loadings').style.opacity = 0;
        setTimeout(function() { document.getElementById('loadings').style.display = 'none'; }, 500); },
    load: function() { this.reset(); if (typeof(Page) == 'object' && typeof(Page.load) == 'function') Page.load(); },
    ready: function() { this.reset(); if (typeof(Page) == 'object' && typeof(Page.ready) == 'function') Page.ready(); },
    readyJoin: function(code, func) {
        ajax('home/index/readyJoin', { code: code }, function(d) {
            win.gameId = d.game;
            var user_list = d.room_users;
            if (typeof(d.info) != 'undefined') {
                if (d.info == 0) { alert2('加入房间失败', function() { wx.closeWindow(); }); } else if (d.info == -1) { alert2('房间号错误', function() { wx.closeWindow(); }); } else if (d.info == 1) {
                    document.body.style.background = '#000000';
                    document.body.minHeight = 'initial';
                    if (document.getElementsByClassName('body')[0]) { document.body.removeChild(document.getElementsByClassName('body')[0]); }
                    if (document.getElementsByTagName('canvas')[0]) { document.body.removeChild(document.getElementsByTagName('canvas')[0]); }
                    ajax('home/index/result', { code: Page.code }, function(data) {
                        if (data == 'error') { Page.init(); return; }
                        if (parseInt(data.game_id) === 3) {
                            if (win.version == '1.0.0') { Page.createRanking(data, function(data) { var img = document.createElement('img');
                                    img.className = 'room-gameover';
                                    img.src = data;
                                    img.onload = function() { document.body.appendChild(img);
                                        win.closeLoading(); }; }); } else if (win.version == '2.0.0') {
                                Page.createRanking(data, function(d) {
                                    var img = new Image();
                                    img.className = 'room-gameover ranking-img';
                                    img.src = d;
                                    img.onload = function() {
                                        if (document.getElementsByClassName('body')[0]) { document.body.removeChild(document.getElementsByClassName('body')[0]); }
                                        document.body.style.backgroundColor = '#000000';
                                        document.body.style.minHeight = 'initial';
                                        document.body.appendChild(img);
                                        var div = document.createElement('div');
                                        div.className = 'search-number-box';
                                        document.body.appendChild(div);
                                        var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                        div.insertAdjacentHTML("beforeend", detailedBtn);
                                        win.closeLoading();
                                        getRankingSix();
                                    };
                                });
                            }
                        } else if (parseInt(data.game_id) === 7) { if (win.version == '1.0.0') { Page.createRanking(data, function(data) { var img = document.createElement('img');
                                    img.className = 'room-gameover';
                                    img.src = data;
                                    img.onload = function() { document.body.appendChild(img);
                                        win.closeLoading(); }; }); } else if (win.version == '2.0.0') { Page.createRanking(data, function(d) { var img = new Image();
                                    img.className = 'room-gameover ranking-img';
                                    img.src = d;
                                    img.onload = function() { document.body.style.backgroundColor = '#000000';
                                        document.body.style.minHeight = 'initial';
                                        document.body.appendChild(img); var div = document.createElement('div');
                                        div.className = 'search-number-box';
                                        document.body.appendChild(div); var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                        div.insertAdjacentHTML("beforeend", detailedBtn);
                                        getRankingSix();
                                        win.closeLoading(); }; }); } } else if (parseInt(data.game_id) === 8 || parseInt(data.game_id) === 9) { canvasRanking(data, function(d) { var img = document.createElement('img');
                                img.className = 'room-gameover ranking-img';
                                img.setAttribute('src', d);
                                img.onload = function() { document.body.appendChild(img); var div = document.createElement('div');
                                    div.className = 'search-number-box';
                                    document.body.appendChild(div);
                                    win.closeLoading(); var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                    div.insertAdjacentHTML("beforeend", detailedBtn);
                                    $('.body').remove();
                                    $('body').css({ 'background': '#000000', 'min-height': 'initial' });
                                    getRankingSix(); }; }); } else {
                            if (win.version == '1.0.0') {
                                createRanking(data, function(d) {
                                    var img = new Image();
                                    img.src = d;
                                    if (parseInt(data.users.length) > 6) { img.className = 'room-gameover-ten'; } else { img.className = 'room-gameover'; }
                                    img.onload = function() {
                                        document.body.appendChild(img);
                                        win.closeLoading();
                                        if (document.getElementsByClassName('body')[0]) { document.body.removeChild(document.getElementsByClassName('body')[0]); }
                                        document.body.style.backgroundColor = '#000000';
                                        document.body.style.minHeight = 'initial';
                                        if (typeof(jQuery) != 'undefined') $(document.body).off('touchmove');
                                    };
                                });
                            } else if (win.version == '2.0.0') {
                                liuliuCreateRanking(data, function(d) {
                                    var img = document.createElement('img');
                                    if (parseInt(data.users.length) > 6) { img.className = 'room-gameover-ten ranking-img'; } else { img.className = 'room-gameover ranking-img'; }
                                    img.src = d;
                                    img.onload = function() {
                                        if (document.getElementsByClassName('body')[0]) { document.body.removeChild(document.getElementsByClassName('body')[0]); }
                                        document.body.style.backgroundColor = '#000000';
                                        document.body.style.minHeight = 'initial';
                                        document.body.appendChild(img);
                                        var div = document.createElement('div');
                                        div.className = 'search-number-box';
                                        document.body.appendChild(div);
                                        var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                        div.insertAdjacentHTML("beforeend", detailedBtn);
                                        win.closeLoading();
                                        if (typeof(jQuery) != 'undefined') $(document.body).off('touchmove');
                                        getRankingSix();
                                    };
                                });
                            }
                        }
                    });
                } else if (d.info == 2) { alert2('该房间人数已满', function() { wx.closeWindow(); }) }
            } else if (typeof(d.member) != 'undefined') { if (d.member == 1) { var code = '<div class="request-member-mask">';
                    code += '<div class="requst-member">';
                    code += '<div class="text">你不是该房主的好友,无法加入房间；</div>';
                    code += '<div class="room-user flex-cont">';
                    code += '<div class="room-user-path"><img id="roomUserPath" src="' + d.room_owner.path + '" onerror="this.src=\'../images/ucenter/user.png\'"></div>';
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
                    document.getElementById('requestBtn').onclick = function() { document.getElementById('button').innerHTML = '<div class="request-btn request-btn2">申请中</div>';
                        ajax('home/user/applyForFriend', { user_id: d.room_owner.id }, function(d) { if (d.status == 1) {} else {} }) } } else if (d.member == 2) { var code = '<div class="request-member-mask">';
                    code += '<div class="requst-member">';
                    code += '<div class="text">你不是该房主的好友,无法加入房间；</div>';
                    code += '<div class="room-user flex-cont">';
                    code += '<div class="room-user-path"><img id="roomUserPath" src="' + d.room_owner.path + '" onerror="this.src=\'../images/ucenter/user.png\'"></div>';
                    code += '<div class="room-user-name" id="roomUserName">' + d.room_owner.nickname + '</div>';
                    code += '</div>';
                    code += '<div class="text">是否申请成为好友？</div>';
                    code += '<div class="button" id="button">';
                    code += '<div class="request-btn request-btn2">申请中</div>';
                    code += '</div>';
                    code += '</div>';
                    code += '</div>';
                    document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code); } } else {
                if (d.first_join || d.first_join == 1) {
                    if (win.version == '1.0.0') {
                        var joinUser = '<div class="join-user" id="joinUser">';
                        joinUser += '<div class="join-info">';
                        if (user_list.length > 5) { joinUser += '<div class="user-text2">';
                            joinUser += '<div class="gameuser-list" id="gameuser-list">'; for (var n in user_list) { var code = '<div class="join-user-info">';
                                code += '<img src="' + user_list[n].path + '" alt="" onerror="this.src=\'../images/ucenter/user.png\'"><span>' + user_list[n].nickname + '</span>';
                                code += '</div>';
                                joinUser += code; } } else { joinUser += '<div class="user-text">';
                            joinUser += '<div class="gameuser-list" id="gameuser-list">'; for (var n in user_list) { var code = '<div class="join-user-info">';
                                code += '<img src="' + user_list[n].path + '" alt=""><span>' + user_list[n].nickname + '</span>';
                                code += '</div>';
                                joinUser += code; } }
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '<div class="join-user-bottom">';
                        joinUser += '<button class="return-index" onclick="location.href=\'index.html\'">返回首页</button>';
                        joinUser += '<button class="join-game" id="joinGame">加入房间</button>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                    } else if (win.version == '2.0.0') {
                        var joinUser = '<div class="window-masks user-join" id="joinUser">';
                        joinUser += '<div class="border-opacity">';
                        joinUser += '<div class="container">';
                        joinUser += '<i class="mask-icon mask-top"></i><i class="mask-icon mask-right"></i><i class="mask-icon mask-bottom"></i><i class="mask-icon mask-left"></i>';
                        joinUser += '<div class="user-id">ID：' + (parseInt(user.id) + 100000) + '</div>';
                        joinUser += '<div class="main">';
                        joinUser += '<div class="rules">';
                        if (parseInt(d.game) === 1 || parseInt(d.game) === 4 || parseInt(d.game) === 8 || parseInt(d.game) === 9) {
                            var zhuangTypeText = '',
                                cardRule = d.rule.card_rule,
                                cardRuleText = '',
                                handPatterns = d.rule.hand_patterns,
                                handPatternsText = '',
                                maxMatchesText = '';
                            if (parseInt(d.zhuang_type) === 1) { zhuangTypeText = '明牌抢庄'; } else if (parseInt(d.zhuang_type) === 2) { zhuangTypeText = '通比牛.牛'; } else if (parseInt(d.zhuang_type) === 3) { zhuangTypeText = '自由抢庄'; } else if (parseInt(d.zhuang_type) === 4) { zhuangTypeText = '牛.牛上庄'; } else if (parseInt(d.zhuang_type) === 5) { zhuangTypeText = '固定庄家'; }
                            if (parseInt(cardRule) === 1) { cardRuleText = '牛.牛×3 牛九×2 牛八×2'; } else if (parseInt(cardRule) === 2) { cardRuleText = '牛.牛×4 牛九×3 牛八×2 牛七×2'; }
                            for (var handp in handPatterns) { if (parseInt(handPatterns[handp]) === 1) { handPatternsText += '五花牛（5倍）'; } else if (parseInt(handPatterns[handp]) === 2) { handPatternsText += '炸弹牛（6倍）'; } else if (parseInt(handPatterns[handp]) === 3) { handPatternsText += '五小牛（8倍）'; } }
                            if (parseInt(d.max_matches) === 10) { maxMatchesText = '10局×1房卡 '; } else if (parseInt(d.max_matches) === 12) { maxMatchesText = '12局×2房卡 '; } else if (parseInt(d.max_matches) === 20) { maxMatchesText = '20局×2房卡 '; } else if (parseInt(d.max_matches) === 24) { maxMatchesText = '24局×4房卡 '; }
                            joinUser += '<p>模式：' + zhuangTypeText + '</p>';
                            joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                            joinUser += '<p>规则：' + cardRuleText + '</p>';
                            if (handPatterns) { joinUser += '<p>牌型：' + handPatternsText + '</p>'; }
                            joinUser += '<p>局数：' + maxMatchesText + '</p>';
                        } else if (parseInt(d.game) === 2) {
                            var goldChipRule = '',
                                goldMatchesText = '',
                                goldLimit = '';
                            if (parseInt(d.rule.chip_rule) === 1) { goldChipRule = '2/4，4/8，8/16，10/20'; } else if (parseInt(d.rule.chip_rule) === 2) { goldChipRule = '2/4，5/10，10/20，20/40'; }
                            if (parseInt(d.max_matches) === 10) { goldMatchesText = '10局×1房卡 '; } else if (parseInt(d.max_matches) === 20) { goldMatchesText = '20局×2房卡 '; }
                            if (parseInt(d.rule.upper_limit) === 0) { goldLimit = '无'; } else if (parseInt(d.rule.upper_limit) === 500) { goldLimit = '500 '; } else if (parseInt(d.rule.upper_limit) === 1000) { goldLimit = '1000 '; } else if (parseInt(d.rule.upper_limit) === 2000) { goldLimit = '2000 '; }
                            joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                            joinUser += '<p>分数：' + goldChipRule + '</p>';
                            joinUser += '<p>局数：' + goldMatchesText + '</p>';
                            joinUser += '<p>上限：' + goldLimit + '</p>';
                        } else if (parseInt(d.game) === 3) {
                            var playType = '',
                                shuiMatches = '';
                            if (parseInt(d.rule.play_type) === 1) { playType = '经典'; }
                            if (parseInt(d.max_matches) === 5) { shuiMatches = '5局×1房卡 '; } else if (parseInt(d.max_matches) === 10) { shuiMatches = '10局×2房卡 '; } else if (parseInt(d.max_matches) === 20) { shuiMatches = '20局×4房卡 '; }
                            joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                            joinUser += '<p>玩法：' + playType + '</p>';
                            joinUser += '<p>局数：' + shuiMatches + '</p>';
                        } else if (parseInt(d.game) === 5) {
                            var texaPoints = '',
                                texaMatches = '',
                                texaPointsRule = '';
                            if (parseInt(d.rule.end_points) === 1) { texaPoints = '1/2'; } else if (parseInt(d.rule.end_points) === 2) { texaPoints = '2/4'; }
                            if (parseInt(d.max_matches) === 10) { texaMatches = '10局×2房卡 '; } else if (parseInt(d.max_matches) === 20) { texaMatches = '20局×4房卡 '; }
                            if (parseInt(d.rule.end_points_rule) === 0) { texaPointsRule = '无'; } else if (parseInt(d.rule.end_points_rule) === 1) { texaPointsRule = '1倍小盲'; } else if (parseInt(d.rule.end_points_rule) === 2) { texaPointsRule = '2倍小盲'; }
                            joinUser += '<p>小盲/大盲：' + texaPoints + '</p>';
                            joinUser += '<p>局数：' + texaMatches + '</p>';
                            joinUser += '<p>前注：' + texaPointsRule + '</p>';
                            joinUser += '<p>初始分数：' + d.rule.init_points + '</p>';
                        } else if (parseInt(d.game) === 6) {
                            var sanMatches = '',
                                sanZhuangType = '';
                            if (parseInt(d.zhuang_type) === 1) { sanZhuangType = '抢庄模式'; } else if (parseInt(d.zhuang_type) === 2) { sanZhuangType = '通比模式'; } else if (parseInt(d.zhuang_type) === 3) { sanZhuangType = '三公当庄'; }
                            if (parseInt(d.max_matches) === 12) { sanMatches = '12局×2房卡 '; } else if (parseInt(d.max_matches) === 24) { sanMatches = '24局×4房卡 '; }
                            joinUser += '<p>模式：' + sanZhuangType + '</p>';
                            joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                            if (parseInt(d.rule.card_rule) === 2) { cardRuleText = '暴玖×9';
                                joinUser += '<p>规则：' + cardRuleText + '</p>'; }
                            joinUser += '<p>局数：' + sanMatches + '</p>';
                        } else if (parseInt(d.game) === 7) {
                            var str = '';
                            if (parseInt(d.rule.games_mode) === 1) { str = '半坑（满5人10起）'; } else if (parseInt(d.rule.games_mode) === 2) { str = '半坑（满5人9起）'; } else if (parseInt(d.rule.games_mode) === 3) { str = '半坑（满4人J起）'; } else if (parseInt(d.rule.games_mode) === 4) { str = '全坑（2-A）'; }
                            joinUser += '<p>模式：' + str + '</p>';
                            joinUser += '<p>底注：' + d.rule.end_points + '分</p>';
                            joinUser += '<p>喜分：' + d.rule.happy_points + '分</p>';
                            var rule = '';
                            if (d.rule.play_type && parseInt(d.rule.play_type.split(',').length) === 2) { rule += '带王  王中炮  '; } else if (d.rule.play_type && parseInt(d.rule.play_type.split(',').length) === 1 && parseInt(d.rule.play_type.split(',')[0]) === 1) { rule += '带王  '; }
                            if (parseInt(d.rule.sorce_type) === 1) { rule += '烂锅翻倍'; }
                            if (rule != '') { joinUser += '<p>规则：' + rule + '</p>'; }
                            var sanMatches = '';
                            if (parseInt(d.rule.max_matches) === 10) { sanMatches = '10局×1房卡 '; } else if (parseInt(d.rule.max_matches) === 20) { sanMatches = '20局×2房卡 '; }
                            joinUser += '<p>局数：' + sanMatches + '</p>';
                        }
                        joinUser += '</div>';
                        joinUser += '<div class="user-list">';
                        for (var n in user_list) { var code = '<div class="join-user-info">';
                            code += '<img src="' + user_list[n].path + '" alt="" onerror="this.src=\'../images/ucenter/user.png\'"><span>' + user_list[n].nickname + '</span>';
                            code += '</div>';
                            joinUser += code; }
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '<div class="button">';
                        joinUser += '<div class="return" onclick="location.href=\'index.html\'">创建房间</div>';
                        joinUser += '<div class="join-game" id="joinGame">加入游戏</div>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                        joinUser += '</div>';
                    }
                    document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", joinUser);
                    document.getElementById('joinGame').onclick = function() { win.status = 1;
                        document.getElementsByTagName('body')[0].removeChild(document.getElementById('joinUser')); if (typeof(func) == 'function') func(); }
                } else { if (user_list.length == 0) win.status = 1; if (typeof(func) == 'function') func(); }
            }
        });
    },
    reload: function() {
        if (/[\?\&]q=[0-9\.]+/.test(location.href))
            location.href = location.href.replace(/([\?\&]q=)[0-9\.]+/, '$1' + Math.random());
        else
            location.href = location.href + (location.href.indexOf('?') > 0 ? '&' : '?') + 'q=' + Math.random();
    }
};
var user = null;
var ws = {};
window.onresize = function() { win.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    win.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    win.reset(getRankingSix()); };

function alert2(msg, fn, style, sec) {
    style = style || 'success';
    if (typeof(fn) == 'string') { style = fn; }
    if (!sec) { if (style == 'error' || style == 'puncherror') { sec = 9; } else { sec = 0; } }
    var box = document.createElement('div');
    box.className = 'resourceBox ' + style;
    box.id = 'alertBox';
    box.innerHTML = '<div class="context">' + msg + '</div>';
    document.getElementsByTagName('body')[0].appendChild(box);
    var h = win.width / 360 * 100;
    box.style.opacity = 1;
    box.style.marginTop = -1 * (box.offsetHeight + h) / 2 + 'px';
    if (sec >= 9) { var alertBoxLay = document.createElement('div');
        alertBoxLay.className = 'alertBoxLay';
        document.getElementsByTagName('body')[0].appendChild(alertBoxLay); var BtnA = document.createElement('a');
        BtnA.innerText = '我知道了';
        BtnA.setAttribute('href', 'javascript:void(0);');
        BtnA.className = 'closed';
        box.appendChild(BtnA);
        alertBoxLay.addEventListener('click', function() { box.style.opacity = 0;
            box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
            this.style.opacity = 0;
            setTimeout(function() { document.getElementsByTagName('body')[0].removeChild(box);
                document.getElementsByTagName('body')[0].removeChild(alertBoxLay); if (typeof(fn) == 'function') fn(); }, 500); }) } else { setTimeout(function() { box.style.opacity = 0;
            box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
            setTimeout(function() { document.getElementsByTagName('body')[0].removeChild(box); if (typeof(fn) == 'function') fn(); }, 500); }, 1000 + sec * 1000); }
}

function getRankingSix() {
    if (document.getElementsByClassName('ranking-img')[0] && document.getElementsByClassName('search-number-box')[0]) {
        var div = document.getElementsByClassName('search-number-box')[0];
        var imag = document.getElementsByClassName('ranking-img')[0];
        var aBtn = document.getElementsByClassName('search-number-box-btn')[0];
        var a = getNaturalSize(imag).width;
        var b = getNaturalSize(imag).height;
        var c = imag.offsetWidth;
        var d = imag.offsetHeight;
        var index = (parseInt(a) / parseInt(b)) / (parseInt(c) / parseInt(d));
        if (parseInt(win.gameId) === 8 || parseInt(win.gameId) === 9) { if (index > 1) { div.style.top = (d - b / a * c) / 2 + 'px';
                div.style.left = '0px';
                aBtn.style.width = c * (228 / a) * 2 + 'px';
                aBtn.style.height = b / a * c * (68 / b) * 2 + 'px';
                aBtn.style.left = c * (420 / a) * 2 + 'px';
                aBtn.style.top = b / a * c * ((41 + 611 * 520 / 360 + 68) / b) * 2 + 'px'; } else if (index < 1) { div.style.top = '0px';
                div.style.left = (c - a / b * d) / 2 + 'px';
                aBtn.style.width = a / b * d * (228 / a) * 2 + 'px';
                aBtn.style.height = d * (68 / b) * 2 + 'px';
                aBtn.style.left = a / b * d * (420 / a) * 2 + 'px';
                aBtn.style.top = d * ((41 + 611 * 520 / 360 + 68) / b) * 2 + 'px'; } else { div.style.top = '0px';
                div.style.left = '0px';
                aBtn.style.width = c * (228 / a) * 2 + 'px';
                aBtn.style.height = d * (68 / b) * 2 + 'px';
                aBtn.style.left = c * (420 / a) * 2 + 'px';
                aBtn.style.top = d * ((41 + 611 * 520 / 360 + 68) / b) * 2 + 'px'; } } else if (parseInt(win.gameId) === 3) { if (index > 1) { div.style.top = (d - b / a * c) / 2 + 'px';
                div.style.left = '0px';
                aBtn.style.width = c * (236 / a) + 'px';
                aBtn.style.height = b / a * c * (74 / b) + 'px';
                aBtn.style.left = c * (455 / a) + 'px';
                aBtn.style.top = b / a * c * ((b - 110) / b) + 'px'; } else if (index < 1) { div.style.top = '0px';
                div.style.left = (c - a / b * d) / 2 + 'px';
                aBtn.style.width = a / b * d * (236 / a) + 'px';
                aBtn.style.height = d * (74 / b) + 'px';
                aBtn.style.left = a / b * d * (455 / a) + 'px';
                aBtn.style.top = d * ((b - 110) / b) + 'px'; } else { div.style.top = '0px';
                div.style.left = '0px';
                aBtn.style.width = c * (236 / a) + 'px';
                aBtn.style.height = d * (74 / b) + 'px';
                aBtn.style.left = c * (455 / a) + 'px';
                aBtn.style.top = d * ((b - 110) / b) + 'px'; } } else if (parseInt(win.gameId) === 7) { if (index > 1) { div.style.top = (d - b / a * c) / 2 + 'px';
                div.style.left = '0px';
                aBtn.style.width = c * (236 / a) + 'px';
                aBtn.style.height = b / a * c * (74 / b) + 'px';
                aBtn.style.left = c * (441 / a) + 'px';
                aBtn.style.top = b / a * c * ((b - 150) / b) + 'px'; } else if (index < 1) { div.style.top = '0px';
                div.style.left = (c - a / b * d) / 2 + 'px';
                aBtn.style.width = a / b * d * (236 / a) + 'px';
                aBtn.style.height = d * (74 / b) + 'px';
                aBtn.style.left = a / b * d * (441 / a) + 'px';
                aBtn.style.top = d * ((b - 150) / b) + 'px'; } else { div.style.top = '0px';
                div.style.left = '0px';
                aBtn.style.width = c * (236 / a) + 'px';
                aBtn.style.height = d * (74 / b) + 'px';
                aBtn.style.left = c * (441 / a) + 'px';
                aBtn.style.top = d * ((b - 150) / b) + 'px'; } } else { if (index > 1) { div.style.top = (d - b / a * c) / 2 + 'px';
                div.style.left = '0px';
                aBtn.style.width = c * (236 / a) + 'px';
                aBtn.style.height = b / a * c * (74 / b) + 'px';
                aBtn.style.left = c * (419 / a) + 'px';
                aBtn.style.top = b / a * c * ((b - 110) / b) + 'px'; } else if (index < 1) { div.style.top = '0px';
                div.style.left = (c - a / b * d) / 2 + 'px';
                aBtn.style.width = a / b * d * (236 / a) + 'px';
                aBtn.style.height = d * (74 / b) + 'px';
                aBtn.style.left = a / b * d * (419 / a) + 'px';
                aBtn.style.top = d * ((b - 110) / b) + 'px'; } else { div.style.top = '0px';
                div.style.left = '0px';
                aBtn.style.width = c * (236 / a) + 'px';
                aBtn.style.height = d * (74 / b) + 'px';
                aBtn.style.left = c * (419 / a) + 'px';
                aBtn.style.top = d * ((b - 110) / b) + 'px'; } }

        function getNaturalSize(Domlement) {
            var natureSize = {};
            if (window.naturalWidth && window.naturalHeight) { natureSize.width = Domlement.naturalWidth;
                natureSize.height = Domlement.naturalHeight; } else { var img = new Image();
                img.src = Domlement.src;
                natureSize.width = img.width;
                natureSize.height = img.height; }
            return natureSize;
        }
    }
}

function usersRand(users, user_id) { var count = Math.round(Math.random() * users.length) + users.length * 3; var x = users.indexOf(user_id); var n = (count - x - 1) % users.length; var i = 0;
    (function xxx() { $('.user-info').removeClass('choosed');
        $('.user-info[data-id="' + users[n] + '"]').addClass('choosed');
        n++;
        i++; if (i == count) return; if (n >= users.length) n = 0;
        setTimeout(xxx, (1000 + (users.length * 500)) / count); })(); }

function usersRand2(users, user_id) { var usersLength = users.length; var count = usersLength + 10; var x = users.indexOf(user_id); var n = (count - x - 1) % usersLength; var i = 0; var time = 1000 + (usersLength * 500);
    (function xxx() { $('.user-info').removeClass('choosed');
        $('.user-info[data-id="' + users[n] + '"]').addClass('choosed');
        n++;
        i++; if (i == count) return; if (n >= usersLength) n = 0;
        setTimeout(xxx, (parseInt(time) / count)); })(); }

function Gold(source, target) {
    if (source == "" || target == "") { return; }
    var id_bol;
    if (Object.prototype.toString.call(source) == '[object Array]') { id_bol = true; } else { id_bol = false; }
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
            for (var i = 0; i < count; i++) { var coin = new jinbi(gold_w, gold_h);
                coin.x = $source.position().left + Math.round(Math.random() * ($source.width() * 0.62));
                coin.y = $source.position().top + Math.round(Math.random() * ($source.width() * 0.62));
                coins.push(coin);
                _str_a.push({ "x": coin.x, "y": coin.y });
                _str_b.push({ "x": $target.position().left + Math.round(Math.random() * ($target.width() * 0.62)), "y": $target.position().top + Math.round(Math.random() * ($target.width() * 0.62)) }); }
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
            for (var i = 0; i < count; i++) { var coin = new jinbi(gold_w, gold_h);
                coin.x = $source.position().left + Math.round(Math.random() * ($source.width() * 0.62));
                coin.y = $source.position().top + Math.round(Math.random() * ($source.width() * 0.62));
                coins.push(coin);
                _str_a.push({ "x": coin.x, "y": coin.y });
                _str_b.push({ "x": $target.position().left + Math.round(Math.random() * ($target.width() * 0.62)), "y": $target.position().top + Math.round(Math.random() * ($target.width() * 0.62)) }); }
            obj.push(coins);
            str.push(_str_a);
            str1.push(_str_b);
        }
    }
    var img = new Image();
    img.src = "http://img.lfzgame.com/images/niuniu/gold.png";
    img.onload = function() { move(); }

    function move() {
        can.clearRect(0, 0, $canvas.width(), $canvas.height());
        if (_index % 2 == 0 && index1_num < count) { index1_num++; }
        for (var j = 0; j < obj.length; j++) {
            for (var k = 0; k < index1_num; k++) {
                obj[j][k].index++;
                if (obj[j][k].index <= index) { obj[j][k].x += (str1[j][k]["x"] - str[j][k]["x"]) / index;
                    obj[j][k].y += (str1[j][k]["y"] - str[j][k]["y"]) / index;
                    obj[j][k].draw(); }
                if (obj[j][0].index == index / 3) { if (music_bol) { sound.play('gold');
                        music_bol = false; } }
            }
        }
        if (obj[0][0].index == index) { if (id_bol) { $('.user-info[data-id="' + target + '"]').addClass('flash'); } else { for (var i = 0; i < target.length; i++) { $('.user-info[data-id="' + target[i] + '"]').addClass('flash'); } } } else if (obj[0][count - 1].index == index) { if (id_bol) { $('.user-info[data-id="' + target + '"]').removeClass('flash'); } else { for (var i = 0; i < target.length; i++) { $('.user-info[data-id="' + target[i] + '"]').removeClass('flash'); } } }
        _index++;
        if (obj[0][count - 1].index > index) { bol = true;
            setTimeout(function() { $canvas.remove(); }, 500) }
        if (!bol) { setTimeout(move, 15) }
    }

    function jinbi(w, h) { var img = new Image();
        img.src = "http://img.lfzgame.com/images/niuniu/gold.png";
        this.play = img;
        this.x = 0;
        this.y = 0;
        this.index = 0;
        this.width1 = w;
        this.height1 = h;
        this.draw = function() { can.drawImage(this.play, 0, 0, this.play.width, this.play.height, this.x, this.y, this.width1, this.height1); } }
}
$.fn.overscroll = function() { this.on('touchstart', function(event) { $(document.body).off('touchmove'); });
    this.on('touchend', function(event) { $(document.body).on('touchmove', function(evt) { evt.preventDefault(); }); }); };
var sound = {
    audioContext: null,
    audioBuffers: [],
    isloaded: false,
    isBgm: false,
    o: {},
    source: [],
    initModule: function() { this.audioBuffers = [];
        window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext || window.msAudioContext;
        this.audioContext = new window.AudioContext(); },
    stopSound: function(name) { var buffer = this.audioBuffers[name]; if (buffer) { if (buffer.source) { buffer.source.stop(0);
                buffer.source = null; } } },
    playSound: function(name, isLoop) {
        var buffer = this.audioBuffers[name];
        if (buffer) {
            WeixinJSBridge.invoke('getNetworkType', {}, function(e) {
                buffer.source = null;
                buffer.source = sound.audioContext.createBufferSource();
                buffer.source.buffer = buffer.buffer;
                buffer.source.loop = false;
                var gainNode = sound.audioContext.createGain();
                if (isLoop == true) { buffer.source.loop = true;
                    gainNode.gain.value = 0.7; } else { gainNode.gain.value = 1.0; }
                buffer.source.connect(gainNode);
                gainNode.connect(sound.audioContext.destination);
                buffer.source.start(0);
            });
        }
    },
    initSound: function(arrayBuffer, name) { this.audioContext.decodeAudioData(arrayBuffer, function(buffer) { sound.audioBuffers[name] = { "name": name, "buffer": buffer, "source": null }; if (name == "bgm") { sound.isloaded = true;
                sound.playSound(name, true); } }, function(e) { console.warn('Error decoding file'); }); },
    loadAudioFile: function(url, name) { var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = 'arraybuffer';
        xhr.onload = function(e) { sound.initSound(xhr.response, name); };
        xhr.send(); },
    load: function() { if (this.isloaded) return; for (var i in this.source) { this.loadAudioFile(this.source[i], i); } },
    play: function(num, sex) {
        if (!storage.get('pausemusic')) {
            if (sex) {
                var name = 'sound_';
                if (sex == 1)
                    name += '1';
                else
                    name += '2';
                if (/^\d+$/.test(num))
                    name += '_' + num;
                else
                    name += num;
                this.playSound(name);
            } else { if (num) this.playSound(num); }
        }
    }
};
sound.initModule();
document.addEventListener("visibilitychange", function() {
    if (!document.hidden) {
        if (!storage.get('pausemusic'))
            sound.playSound('bgm', true);
    } else {
        if (!storage.get('pausemusic'))
            sound.stopSound('bgm');
    }
});

function createRanking(data, func) {
    win.gameId = data.game_id;
    var users = data.users;
    var game_id = data.game_id;
    var room_number = data.room_number;
    var num = data.num;
    var sum = data.sum;
    var datetime = data.datetime;
    var width = 750;
    var height = 1216;
    var pics = ['http://cdn.lfzgame.com/images/ranking_' + game_id + '_bg.jpg', 'http://cdn.lfzgame.com/images/people_bg.png', 'http://cdn.lfzgame.com/images/ranking_icon.png'];
    if (users.length > 6) { pics.push('http://cdn.lfzgame.com/images/people_bg2.jpg');
        pics.push('http://cdn.lfzgame.com/images/people_bg3.jpg');
        height += 102 * (users.length - 6); }
    for (var i in users) { if (/\/\/[064]{1,2}$/.test(users[i].path)) pics.push('images/default_head.png');
        else pics.push(users[i].path.replace(/\/0$/, '/64').replace('https://wx.qlogo.cn/', 'http://113.96.232.104/')); }
    var count = 0,
        imgs = [];
    for (var i in pics) {
        if (XMLHttpRequest)
            var xhr = new XMLHttpRequest();
        else
            var xhr = new ActiveXObject('Microsoft.XMLHTTP');
        xhr._index = i;
        xhr.open("get", pics[i], true);
        xhr.responseType = "blob";
        xhr.onload = function() {
            var img = document.createElement("img");
            if (this.status == 200) { img.src = window.URL.createObjectURL(this.response); } else { this.src = 'images/default_head.png'; }
            imgs[this._index] = img;
            img.onload = function(e) { count++; if (count >= pics.length) draw(); };
        };
        xhr.onerror = function() { var img = document.createElement("img");
            img.src = 'images/default_head.png';
            imgs[this._index] = img;
            img.onload = function(e) { count++; if (count >= pics.length) draw(); }; };
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
            var txt = '',
                row = [];
            for (var j in arr) {
                if (context.measureText(txt).width >= textwidth) { row.push(txt);
                    txt = ''; }
                txt += arr[j];
            }
            if (txt != '') row.push(txt);
            if (row.length == 1) { context.fillText(row[0], 240, 482 + 102 * i); } else { context.fillText(row[0], 240, 470 + 102 * i);
                context.fillText(row[1], 240, 498 + 102 * i); }
            context.font = "36px 微软雅黑";
            context.textAlign = 'center';
            if (users[i]['value'] > 0) { context.fillStyle = "#cd5908";
                context.fillText('+' + users[i]['value'], 560, 490 + 102 * i); } else if (users[i]['value'] < 0) { context.fillStyle = "#32b16c";
                context.fillText(users[i]['value'], 560, 490 + 102 * i); } else { context.fillStyle = "#989898";
                context.fillText('0', 560, 490 + 102 * i); }
            if (users[i]['value'] == users[0]['value']) { context.drawImage(imgs[2], 108, 430 + i * 102, 51, 84); }
        }
        if (i >= 6) context.drawImage(imgs[4], 0, 430 + (++i) * 102, 750, 175);
        if (typeof(func) == 'function') func(canvas.toDataURL("image/png"));
    }
}

function liuliuCreateRanking(data, func) {
    win.gameId = data.game_id;
    var users = data.users;
    var game_id = data.game_id;
    var room_number = data.room_number;
    var num = data.num;
    var sum = data.sum;
    var datetime = data.datetime;
    var width = 750;
    var height = 1216;
    var pics = ['http://cdn.lfzgame.com/images/common/ranking_' + game_id + '_bg.jpg', 'http://cdn.lfzgame.com/images/people_bg.png', 'http://cdn.lfzgame.com/images/ranking_icon.png'];
    if (users.length > 6) { pics.push('http://cdn.lfzgame.com/images/common/people_bg2.jpg');
        pics.push('http://cdn.lfzgame.com/images/common/people_bg3.jpg');
        height += 102 * (users.length - 6); }
    for (var i in users) { if (/\/\/[064]{1,2}$/.test(users[i].path)) pics.push('images/default_head.png');
        else pics.push(users[i].path.replace(/\/0$/, '/64').replace('https://wx.qlogo.cn/', 'http://113.96.232.104/')); }
    var count = 0,
        imgs = [];
    for (var i in pics) {
        if (XMLHttpRequest)
            var xhr = new XMLHttpRequest();
        else
            var xhr = new ActiveXObject('Microsoft.XMLHTTP');
        xhr._index = i;
        xhr.open("get", pics[i], true);
        xhr.responseType = "blob";
        xhr.onload = function() {
            var img = document.createElement("img");
            if (this.status == 200) { img.src = window.URL.createObjectURL(this.response); } else { this.src = 'images/default_head.png'; }
            imgs[this._index] = img;
            img.onload = function(e) { count++; if (count >= pics.length) draw(); };
        };
        xhr.onerror = function() { var img = document.createElement("img");
            img.src = 'images/default_head.png';
            imgs[this._index] = img;
            img.onload = function(e) { count++; if (count >= pics.length) draw(); }; };
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
            var txt = '',
                row = [];
            for (var j in arr) {
                if (context.measureText(txt).width >= textwidth) { row.push(txt);
                    txt = ''; }
                txt += arr[j];
            }
            if (txt != '') row.push(txt);
            if (row.length == 1) { context.fillText(row[0], 240, 482 + 102 * i); } else { context.fillText(row[0], 240, 470 + 102 * i);
                context.fillText(row[1], 240, 498 + 102 * i); }
            context.font = "36px 微软雅黑";
            context.textAlign = 'center';
            if (users[i]['value'] > 0) { context.fillStyle = "#cd5908";
                context.fillText('+' + users[i]['value'], 560, 490 + 102 * i); } else if (users[i]['value'] < 0) { context.fillStyle = "#32b16c";
                context.fillText(users[i]['value'], 560, 490 + 102 * i); } else { context.fillStyle = "#989898";
                context.fillText('0', 560, 490 + 102 * i); }
            if (users[i]['value'] == users[0]['value']) { context.drawImage(imgs[2], 108, 430 + i * 102, 51, 84); }
        }
        if (i >= 6) context.drawImage(imgs[4], 0, 430 + (++i) * 102, 750, 175);
        if (typeof(func) == 'function') func(canvas.toDataURL("image/png"));
    }
}

function canvasRanking(data, func) {
    win.gameId = data.game_id;
    var $canvas = $('<canvas id="canvas" width="' + 750 * 2 + '" height="' + 1216 * 2 + ' "></canvas>').appendTo('body').hide();
    var can = $canvas.get(0).getContext("2d");
    var str = ["http://cdn.lfzgame.com/images/bull/rank_bg.jpg", "http://cdn.lfzgame.com/images/bull/rank_frame62.png", 'http://cdn.lfzgame.com/images/bull/scoresRank3.png', 'http://cdn.lfzgame.com/images/bull/rank_bigwinner2.png', 'http://cdn.lfzgame.com/images/bull/score_search1.png'];
    var index = 0,
        arr = [];
    for (var i in str) {
        if (XMLHttpRequest)
            var xhr = new XMLHttpRequest();
        else
            var xhr = new ActiveXObject('Microsoft.XMLHTTP');
        xhr._index = i;
        xhr.open("get", str[i], true);
        xhr.responseType = "blob";
        xhr.onload = function() {
            var img = document.createElement("img");
            if (this.status == 200) { img.src = window.URL.createObjectURL(this.response); } else { this.src = 'images/default_head.png'; }
            arr[this._index] = img;
            img.onload = function(e) { index++; if (index >= str.length) { if (data.users) { if (data.users.length > 6) { canvasStart9() } else { canvasStart() } } } };
        };
        xhr.onerror = function() { var img = document.createElement("img");
            img.src = 'images/default_head.png';
            arr[this._index] = img;
            img.onload = function(e) { index++; if (index >= str.length) { if (data.users) { if (data.users.length > 6) { canvasStart9() } else { canvasStart() } } } }; };
        xhr.send();
    }

    function canvasStart() {
        can.drawImage(arr[0], 0, 0, 750 * 2, 1216 * 2);
        can.drawImage(arr[1], 115 * 2, 41 * 2, 520 * 2, 611 * 520 / 360 * 2);
        can.drawImage(arr[2], 100 * 2, (41 + 611 * 520 / 360 + 68) * 2, 228 * 2, 66 * 2);
        can.drawImage(arr[4], 420 * 2, (41 + 611 * 520 / 360 + 68) * 2, 228 * 2, 66 * 2);
        can.lineWidth = 1;
        can.strokeStyle = "#ffffff";
        can.fillStyle = '#554A2A';
        roundRect(140 * 2, 243 * 2, 475 * 2, 35 * 2, 30).stroke();
        can.fill();
        can.font = 20 * 2 + "px 微软雅黑";
        can.fillStyle = '#ffcd06';
        can.textBaseline = 'bottom';
        can.fillText('房间号:' + data.room_number, 150 * 2, 270 * 2);
        can.fillText(data.datetime, 335 * 2, 270 * 2);
        can.fillText(data.num + '局', 550 * 2, 270 * 2);
        if (data.users.length > 0) {
            for (var i in data.users) {
                var textwidth = 500;
                can.fillStyle = '#000000';
                can.fillRect(134 * 2, 303 * 2 + (5 + 75 * 160 / 130) * 2 * i, 482 * 2, 88 * 2);
                can.font = 29 * 2 + "px 微软雅黑";
                can.textBaseline = 'middle';
                if (parseInt(data.users[i].value) > 0) {
                    var value = '+' + data.users[i].value;
                    can.fillStyle = '#FFBB00';
                    var nameArr = data.users[i].nickname.split('');
                    var txt = '',
                        row = [];
                    for (var j in nameArr) {
                        if (can.measureText(txt).width >= textwidth) { row.push(txt);
                            txt = ''; }
                        txt += nameArr[j];
                    }
                    if (txt != '') row.push(txt);
                    if (row.length == 1) { can.fillText(row[0], 209 * 2, 347 * 2 + (5 + 75 * 160 / 130) * 2 * i); } else { can.fillText(row[0], 209 * 2, 347 * 2 + ((5 + 75 * 160 / 130) * 2 * i) - 37);
                        can.fillText(row[1], 209 * 2, 347 * 2 + ((5 + 75 * 160 / 130) * 2 * i) + 33); }
                    can.fillText(value, 510 * 2, 347 * 2 + (5 + 75 * 160 / 130) * 2 * i);
                } else {
                    can.fillStyle = '#B3B2AD';
                    var nameArr = data.users[i].nickname.split('');
                    var txt = '',
                        row = [];
                    for (var j in nameArr) {
                        if (can.measureText(txt).width >= textwidth) { row.push(txt);
                            txt = ''; }
                        txt += nameArr[j];
                    }
                    if (txt != '') row.push(txt);
                    if (row.length == 1) { can.fillText(row[0], 209 * 2, 347 * 2 + (5 + 75 * 160 / 130) * 2 * i); } else { can.fillText(row[0], 209 * 2, 347 * 2 + ((5 + 75 * 160 / 130) * 2 * i) - 37);
                        can.fillText(row[1], 209 * 2, 347 * 2 + ((5 + 75 * 160 / 130) * 2 * i) + 33); }
                    can.fillText(data.users[i].value, 510 * 2, 347 * 2 + (5 + 75 * 160 / 130) * 2 * i);
                }
            }
            var maxArr = [];
            var max = parseInt(data.users[0].value);
            for (var j = 1; j < data.users.length; j++) { if (max < parseInt(data.users[j].value)) { max = parseInt(data.users[j].value); } }
            for (var k in data.users) { if (max == parseInt(data.users[k].value)) { maxArr.push(k); } }
            for (var m in maxArr) { can.drawImage(arr[3], 134 * 2, 293 * 2 + (5 + 75 * 160 / 130) * 2 * maxArr[m], 75 * 2, 75 * 160 / 130 * 2); }
        }

        function roundRect(x, y, w, h, r) { if (w < 2 * r) r = w / 2; if (h < 2 * r) r = h / 2;
            can.beginPath();
            can.moveTo(x + r, y);
            can.arcTo(x + w, y, x + w, y + h, r);
            can.arcTo(x + w, y + h, x, y + h, r);
            can.arcTo(x, y + h, x, y, r);
            can.arcTo(x, y, x + w, y, r);
            can.closePath(); return can; }
        if (typeof(func) == 'function') { func(canvas.toDataURL("image/png"));
            $('#canvas').remove(); }
    }

    function canvasStart9() {
        can.drawImage(arr[0], 0, 0, 750 * 2, 1216 * 2);
        can.drawImage(arr[1], 115 * 2, 41 * 2, 520 * 2, 611 * 520 / 360 * 2);
        can.drawImage(arr[2], 100 * 2, (41 + 611 * 520 / 360 + 68) * 2, 228 * 2, 66 * 2);
        can.drawImage(arr[4], 420 * 2, (41 + 611 * 520 / 360 + 68) * 2, 228 * 2, 66 * 2);
        can.lineWidth = 1;
        can.strokeStyle = "#ffffff";
        can.fillStyle = '#554A2A';
        roundRect(140 * 2, 243 * 2, 475 * 2, 35 * 2, 30).stroke();
        can.fill();
        can.font = 20 * 2 + "px 微软雅黑";
        can.fillStyle = '#ffcd06';
        can.textBaseline = 'bottom';
        can.fillText('房间号:' + data.room_number, 150 * 2, 270 * 2);
        can.fillText(data.datetime, 335 * 2, 270 * 2);
        can.fillText(data.num + '局', 550 * 2, 270 * 2);
        if (data.users.length > 0) {
            for (var i in data.users) {
                var textwidth = 500;
                can.fillStyle = '#000000';
                can.fillRect(134 * 2, 303 * 2 + (5 + 49 * 160 / 130) * 2 * i, 482 * 2, 58 * 2);
                can.font = 29 * 2 + "px 微软雅黑";
                can.textBaseline = 'middle';
                if (parseInt(data.users[i].value) > 0) {
                    var value = '+' + data.users[i].value;
                    can.fillStyle = '#FFBB00';
                    can.fillText(value, 510 * 2, 332 * 2 + (5 + 49 * 160 / 130) * 2 * i);
                    var nameArr = data.users[i].nickname.split('');
                    var txt = '',
                        row = [];
                    for (var j in nameArr) {
                        if (can.measureText(txt).width >= textwidth) { row.push(txt);
                            txt = ''; }
                        txt += nameArr[j];
                    }
                    if (txt != '') row.push(txt);
                    if (row.length == 1) { can.fillText(row[0], 209 * 2, 332 * 2 + (5 + 49 * 160 / 130) * 2 * i); } else { can.font = 24 * 2 + "px 微软雅黑";
                        can.fillText(row[0], 209 * 2, 332 * 2 + ((5 + 49 * 160 / 130) * 2 * i) - 32);
                        can.fillText(row[1], 209 * 2, 332 * 2 + ((5 + 49 * 160 / 130) * 2 * i) + 25); }
                } else {
                    can.fillStyle = '#B3B2AD';
                    can.fillText(data.users[i].value, 510 * 2, 332 * 2 + (5 + 49 * 160 / 130) * 2 * i);
                    var nameArr = data.users[i].nickname.split('');
                    var txt = '',
                        row = [];
                    for (var j in nameArr) {
                        if (can.measureText(txt).width >= textwidth) { row.push(txt);
                            txt = ''; }
                        txt += nameArr[j];
                    }
                    if (txt != '') row.push(txt);
                    if (row.length == 1) { can.fillText(row[0], 209 * 2, 332 * 2 + (5 + 49 * 160 / 130) * 2 * i); } else { can.font = 24 * 2 + "px 微软雅黑";
                        can.fillText(row[0], 209 * 2, 332 * 2 + ((5 + 49 * 160 / 130) * 2 * i) - 32);
                        can.fillText(row[1], 209 * 2, 332 * 2 + ((5 + 49 * 160 / 130) * 2 * i) + 25); }
                }
            }
            var maxArr = [];
            var max = parseInt(data.users[0].value);
            for (var j = 1; j < data.users.length; j++) { if (max < parseInt(data.users[j].value)) { max = parseInt(data.users[j].value); } }
            for (var k in data.users) { if (max == parseInt(data.users[k].value)) { maxArr.push(k); } }
            for (var m in maxArr) { can.drawImage(arr[3], 134 * 2, 293 * 2 + (5 + 49 * 160 / 130) * 2 * maxArr[m], 49 * 2, 49 * 160 / 130 * 2); }
        }

        function roundRect(x, y, w, h, r) { if (w < 2 * r) r = w / 2; if (h < 2 * r) r = h / 2;
            can.beginPath();
            can.moveTo(x + r, y);
            can.arcTo(x + w, y, x + w, y + h, r);
            can.arcTo(x + w, y + h, x, y + h, r);
            can.arcTo(x, y + h, x, y, r);
            can.arcTo(x, y, x + w, y, r);
            can.closePath(); return can; }
        if (typeof(func) == 'function') { func(canvas.toDataURL("image/png"));
            $('#canvas').remove(); }
    }
}

function Agreement() { var code = '<div class="window-masks agreement" id="agreement">';
    code += '<div class="border-opacity">';
    code += '<div class="container">';
    code += '    <i class="mask-icon mask-top"></i><i class="mask-icon mask-right"></i><i class="mask-icon mask-bottom"></i><i class="mask-icon mask-left"></i>';
    code += '    <div class="title"></div>';
    code += '    <div class="main">';
    code += '       <p>本游戏仅供娱乐， 严禁赌博，如发现有赌博行为，将封停账号并向公安机关举报。</p>';
    code += '       <p>游戏中使用到的房卡为游戏道具，不具有任何财产性功能，本公司对于用户所拥有的房卡不提供任何形式官方回购、直接或变相兑换现金或实物等服务或相关功能。</p>';
    code += '       <p>游戏仅供休闲娱乐使用，游戏中出现问题请联系客服。</p>';
    code += '    </div>';
    code += '<div class="sure" id="agreementSure">确定</div>';
    code += '    </div>';
    code += '    </div>';
    code += '</div>';
    document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
    document.getElementById('agreementSure').onclick = function() { document.getElementsByTagName('body')[0].removeChild(document.getElementById('agreement')); };
    document.getElementById('agreement').onclick = function() { document.body.removeChild(document.getElementById('agreement')); }; }

function returnIndex(text) { var text = text || '确认返回主页？'; var code = '<div class="window-masks return-index" id="returnIndex">';
    code += '<div class="border-opacity">';
    code += '<div class="container">';
    code += '<i class="mask-icon mask-top"></i><i class="mask-icon mask-right"></i><i class="mask-icon mask-bottom"></i><i class="mask-icon mask-left"></i>';
    code += '<div class="main">' + text + '</div>';
    code += '<div class="button">';
    code += '<div class="sure" id="returnIndexBtn">返回首页</div>';
    code += '<div class="cancel" id="cancelBtn">取消</div>';
    code += '</div>';
    code += '</div>';
    code += '</div>';
    code += '</div>';
    document.body.insertAdjacentHTML("beforeend", code);
    document.getElementById('returnIndexBtn').onclick = function() { location.href = 'index.html'; };
    document.getElementById('cancelBtn').onclick = function() { document.body.removeChild(document.getElementById('returnIndex')); };
    document.getElementById('returnIndex').onclick = function() { document.body.removeChild(document.getElementById('returnIndex')); }; }

function getRuleScaleY(game_data) {
    var count = 0;
    for (var d in game_data) { if (game_data[d] != '' && game_data[d] != undefined && d != 'number') { count++; } }
    return (count - 5) * 30;
}

function generalRule(game_id, game_data, parent) {
    var data = game_data;
    var startPointY = 135;
    var startPointX = 33;
    var startValuePointX = 87;
    var spaceY = 30;
    var ruleJson = { '1': { 'zhuang_type': { 'text': '模式 :', 'value': { '1': '明牌抢庄', '2': '通比牛牛', '3': '自由抢庄', '4': '牛牛上庄', '5': '固定庄家' } }, 'end_points': { 'text': '底分 :', 'value': { '1': '1分', '2': '2分', '3': '3分', '4': '4分', '5': '5分', '10': '10分', '20': '20分' } }, 'card_rule': { 'text': '规则 :', 'value': { '1': '牛牛×3 牛九×2 牛八×2', '2': '牛牛×4 牛九×3 牛八×2 牛七×2' } }, 'hand_patterns': { 'text': '牌型 :', 'value': ['五花牛（5倍） ', '炸弹牛（6倍） ', '五小牛（8倍） '] }, 'max_matches': { 'text': '局数 :', 'value': { '10': '10局房卡X1', '20': '20局房卡X2' } }, 'zhuang_value': { 'text': '上庄 :', 'value': { '0': '无', '100': '100', '300': '300', '500': '500' } } }, '2': { 'end_points': { 'text': '底分 :', 'value': { '2': '2分', '4': '4分', '8': '8分' } }, 'chip_rule': { 'text': '分数 :', 'value': { '1': '2/4，4/8，8/16，10/20', '2': '2/4，5/10，10/20，20/40' } }, 'max_matches': { 'text': '局数 :', 'value': { '10': '10局房卡X1', '20': '20局房卡X2' } }, 'upper_limit': { 'text': '上限 :', 'value': { '0': '无', '500': '500', '1000': '1000', '2000': '2000' } } }, '3': { 'end_points': { 'text': '底分 :', 'value': { '1': '1分', '3': '3分', '5': '5分' } }, 'play_type': { 'text': '玩法 :', 'value': ['经典 '] }, 'max_matches': { 'text': '局数 :', 'value': { '5': '5局房卡X1', '10': '10局房卡X2', '20': '20局房卡X4' } }, }, '4': { 'zhuang_type': { 'text': '模式 :', 'value': { '1': '明牌抢庄', '2': '通比牛牛', '3': '自由抢庄', '4': '牛牛上庄', '5': '固定庄家' } }, 'end_points': { 'text': '底分 :', 'value': { '1': '1分', '2': '2分', '3': '3分', '4': '4分', '5': '5分', '10': '10分', '20': '20分' } }, 'card_rule': { 'text': '规则 :', 'value': { '1': '牛牛×3 牛九×2 牛八×2', '2': '牛牛×4 牛九×3 牛八×2 牛七×2' } }, 'hand_patterns': { 'text': '牌型 :', 'value': ['五花牛（5倍） ', '炸弹牛（6倍） ', '五小牛（8倍） '] }, 'max_matches': { 'text': '局数 :', 'value': { '12': '12局房卡X2', '24': '24局房卡X4' } }, 'zhuang_value': { 'text': '上庄 :', 'value': { '0': '无', '100': '100', '300': '300', '500': '500' } } }, '5': { 'end_points': { 'text': '小盲/大盲 :', 'value': { '1': '        1/2', '2': '        2/4' } }, 'max_matches': { 'text': '局数 :', 'value': { '10': '10局房卡X2', '20': '20局房卡X4' } }, 'end_points_rule': { 'text': '前注 :', 'value': { '0': '无', '1': '1倍小盲', '2': '2倍小盲' } }, 'init_points': { 'text': '初始分数 :', 'value': { '500': '       500', '1000': '       1000', '1500': '       1500', '2000': '       2000' } } }, '6': { 'zhuang_type': { 'text': '模式 :', 'value': { '1': '抢庄模式', '2': '通比模式', '3': '三公当庄', } }, 'end_points': { 'text': '底分 :', 'value': { '1': '1分', '2': '2分', '3': '3分', '4': '4分', '5': '5分', '10': '10分', '20': '20分' } }, 'card_rule': { 'text': '规则 :', 'value': { '2': '暴玖×9' } }, 'max_matches': { 'text': '局数 :', 'value': { '12': '12局房卡X2', '24': '24局房卡X4' } }, }, '8': { 'zhuang_type': { 'text': '模式 :', 'value': { '1': '明牌抢庄', '2': '通比牛牛', '3': '自由抢庄', '4': '牛牛上庄', '5': '固定庄家' } }, 'end_points': { 'text': '底分 :', 'value': { '1': '1分', '2': '2分', '3': '3分', '4': '4分', '5': '5分', '10': '10分', '20': '20分' } }, 'card_rule': { 'text': '规则 :', 'value': { '1': '牛牛×3 牛九×2 牛八×2', '2': '牛牛×4 牛九×3 牛八×2 牛七×2' } }, 'hand_patterns': { 'text': '牌型 :', 'value': ['五花牛（5倍） ', '炸弹牛（6倍） ', '五小牛（8倍） '] }, 'max_matches': { 'text': '局数 :', 'value': { '10': '10局房卡X1', '20': '20局房卡X2' } }, 'zhuang_value': { 'text': '上庄 :', 'value': { '0': '无', '100': '100', '300': '300', '500': '500' } } }, '9': { 'zhuang_type': { 'text': '模式 :', 'value': { '1': '明牌抢庄', '2': '通比牛牛', '3': '自由抢庄', '4': '牛牛上庄', '5': '固定庄家' } }, 'end_points': { 'text': '底分 :', 'value': { '1': '1分', '2': '2分', '3': '3分', '4': '4分', '5': '5分', '10': '10分', '20': '20分' } }, 'card_rule': { 'text': '规则 :', 'value': { '1': '牛牛×3 牛九×2 牛八×2', '2': '牛牛×4 牛九×3 牛八×2 牛七×2' } }, 'hand_patterns': { 'text': '牌型 :', 'value': ['五花牛（5倍） ', '炸弹牛（6倍） ', '五小牛（8倍） '] }, 'max_matches': { 'text': '局数 :', 'value': { '12': '12局房卡X2', '24': '24局房卡X4' } }, 'zhuang_value': { 'text': '上庄 :', 'value': { '0': '无', '100': '100', '300': '300', '500': '500' } } }, }
    var config = ruleJson[game_id];
    var count = 1;
    for (var item in config) {
        if (data[item] && data[item] != '') {
            parent.font = "18px 微软雅黑";
            parent.textAlign = 'left';
            parent.fillStyle = "#dcdcdc";
            parent.fillText(config[item]['text'], startPointX, startPointY + count * spaceY);
            var valueArray = typeof config[item]['value'] === 'string'
            if (typeof config[item]['value'] === 'object' && !isNaN(config[item]['value'].length)) {
                var tempStr = '';
                var dataArray = data[item].split(',');
                for (var j = 0; j < dataArray.length; j++) { var index = parseInt(dataArray[j] - 1);
                    tempStr += config[item]['value'][index]; }
                parent.font = "18px 微软雅黑";
                parent.textAlign = 'left';
                parent.fillStyle = "#dcdcdc";
                parent.fillText(tempStr, startValuePointX, startPointY + count * spaceY);
            } else { parent.font = "18px 微软雅黑";
                parent.textAlign = 'left';
                parent.fillStyle = "#dcdcdc";
                parent.fillText(config[item]['value'][data[item]], startValuePointX, startPointY + count * spaceY); }
            count++;
        }
    }
}

function generalQrcodeData(d) {
    var data = {};
    if (d.count_matchs) { data['max_matches'] = d.count_matchs };
    if (d.type && d.type != undefined && d.type != null && d.type != '') { data['zhuang_type'] = d.type };
    if (d.number) { data.number = d.number };
    for (var i in d.room_rule) {
        if (d.game == '1' || d.game == '4' || d.game == '8' || d.game == '9') { if (d.type != '5' && i == 'zhuang_value') { continue }; }
        data[i] = d.room_rule[i];
    }
    return data;
}

function qrcodeCreate(url, game_id, data) {
    var qr = qrcode(8, 'H');
    qr.addData(url);
    qr.make();
    var size = 300;
    var cellsize = parseInt(size / qr.getModuleCount());
    var margin = parseInt((size - qr.getModuleCount() * cellsize) / 2);
    var codeUrl = qr.createImgTag(cellsize, margin, 300);
    var gameName = '';
    var width = 507;
    var height = 826;
    var pics = [codeUrl];
    if (parseInt(game_id) === 1) { gameName = '牛牛'; } else if (parseInt(game_id) === 2) { gameName = '炸金花'; } else if (parseInt(game_id) === 3) { gameName = '十三水'; } else if (parseInt(game_id) === 4) { gameName = '十人牛牛'; } else if (parseInt(game_id) === 5) { gameName = '德州扑克'; } else if (parseInt(game_id) === 6) { gameName = '三公'; } else if (parseInt(game_id) === 8) { gameName = '六人牛牛'; } else if (parseInt(game_id) === 9) { gameName = '九人牛牛'; }
    pics.push(getShareIconLink(game_id));
    var index = 0;
    var imgs = [];
    for (var i = 0; i < pics.length; i++) {
        if (pics[i].indexOf('data:image/gif') != -1 || pics[i].indexOf('data:image/jpg') != -1 || pics[i].indexOf('data:image/jpeg') != -1 || pics[i].indexOf('data:image/png') != -1) { var img = document.createElement("img");
            img.src = pics[i];
            imgs[i] = img;
            img.onload = function(e) { index++; if (index >= pics.length) { canvasStart(); } } } else {
            if (XMLHttpRequest)
                var xhr = new XMLHttpRequest();
            else
                var xhr = new ActiveXObject('Microsoft.XMLHTTP');
            xhr._index = i;
            xhr.open("get", pics[i], true);
            xhr.responseType = "blob";
            xhr.onload = function() {
                var img = document.createElement("img");
                if (this.status == 200) { img.src = window.URL.createObjectURL(this.response); } else { this.src = 'images/default_head.png'; }
                imgs[this._index] = img;
                img.onload = function(e) { index++; if (index >= pics.length) { canvasStart(); } }
            };
            xhr.onerror = function() { var img = document.createElement("img");
                img.src = 'images/default_head.png';
                imgs[this._index] = img;
                img.onload = function(e) { index++; if (index >= pics.length) canvasStart(); }; };
            xhr.send();
        }
    }
    var canvas = document.createElement('canvas');
    var scaleY = getRuleScaleY(data);
    canvas.width = width;
    canvas.height = height + scaleY;
    var context = canvas.getContext("2d");

    function canvasStart() { context.fillStyle = "#333333";
        context.fillRect(0, 0, width, height + scaleY);
        context.strokeStyle = "#525252";
        context.beginPath();
        context.lineCap = "butt";
        context.lineWidth = 1;
        context.moveTo(9, 133);
        context.lineTo(489, 133);
        context.stroke();
        context.drawImage(imgs[1], 33, 28, 86, 86);
        generalRule(game_id, data, context);
        context.font = "24px 微软雅黑";
        context.textAlign = 'left';
        context.fillStyle = "#ffffff";
        context.fillText(gameName, 130, 48);
        context.font = "18px 微软雅黑";
        context.textAlign = 'left';
        context.fillStyle = "#dcdcdc";
        context.fillText('房间号:' + data.number, 130, 100);
        context.strokeRect(10, 310 + scaleY, 487, 506);
        context.fillStyle = "#f7f7f7";
        context.fillRect(48, 332 + scaleY, 413, 413);
        context.drawImage(imgs[0], 76, 359 + scaleY, 359, 359);
        context.font = "18px 微软雅黑";
        context.textAlign = 'left';
        context.fillStyle = "#999999";
        context.fillText("长按二维码扫描进入房间", 155, 788 + scaleY); var img = new Image(); var imgData = canvas.toDataURL("image/png");
        img.src = imgData;
        img.onload = function() { var qrCode = '<div class="qr-code"><div class="container"><img src="' + img.src + '"><div class="close-qr-code"></div></div></div>';
            document.body.insertAdjacentHTML("beforeend", qrCode);
            $('.qr-code .container .close-qr-code').click(function() { $('.qr-code').remove(); }) } }
}

function canvasQRCodeCreate(data, codeUrl) {
    var game_id = data;
    var gameName = '';
    var width = 507;
    var height = 826;
    var pics = [];
    if (parseInt(game_id) === 1) { pics.push("http://cdn.lfzgame.com/images/game-niuniu.jpg");
        gameName = '牛牛'; } else if (parseInt(game_id) === 2) { pics.push("http://cdn.lfzgame.com/images/game-jinhua.jpg");
        gameName = '炸金花'; } else if (parseInt(game_id) === 3) { pics.push('http://cdn.lfzgame.com/images/thirteencards/game_logo.png');
        gameName = '十三水'; } else if (parseInt(game_id) === 4) { pics.push('http://cdn.lfzgame.com/images/niuniuten/share-niuniuten.jpg');
        gameName = '十人牛牛'; } else if (parseInt(game_id) === 5) { pics.push('http://cdn.lfzgame.com/images/texasholdem/game-texasholdem.jpg');
        gameName = '德州扑克'; } else if (parseInt(game_id) === 6) { pics.push('http://cdn.lfzgame.com/images/sangong/share-sangong.jpg');
        gameName = '三公'; } else if (parseInt(game_id) === 8) { pics.push('http://cdn.lfzgame.com/images/liuliuxianyue/bull6-share.jpg');
        gameName = '六人牛牛'; } else if (parseInt(game_id) === 8) { pics.push('http://cdn.lfzgame.com/images/liuliuxianyue/bull9-share.jpg');
        gameName = '九人牛牛'; }
    var index = 0;
    var imgs = [];
    for (var i = 0; i < pics.length; i++) { var img = new Image();
        img.src = pics[i];
        imgs.push(img);
        img.onload = function() { index++; if (index >= pics.length) { canvasStart(); } } }
    var canvas = $('<canvas id="canvas" width="' + width + '" height="' + height + '" style="z-index:999;left: 0;top: 0;"></canvas>').appendTo('body');
    canvas.width = width;
    canvas.height = height;
    var context = canvas.get(0).getContext("2d");

    function canvasStart() { context.fillStyle = "#333333";
        context.fillRect(0, 0, width, height);
        context.strokeStyle = "#525252";
        context.beginPath();
        context.lineCap = "butt";
        context.lineWidth = 1;
        context.moveTo(9, 133);
        context.lineTo(489, 133);
        context.stroke();
        context.drawImage(imgs[0], 33, 28, 86, 86);
        context.font = "24px 微软雅黑";
        context.textAlign = 'left';
        context.fillStyle = "#ffffff";
        context.fillText(gameName, 130, 48);
        context.font = "18px 微软雅黑";
        context.textAlign = 'left';
        context.fillStyle = "#dcdcdc";
        context.fillText('房间号:1234567', 130, 100);
        context.strokeRect(10, 310, 487, 506); }
}

function getShareIconLink(game_id) {
    var shareLinkJson = { '1': 'niuniu', '2': 'jinhua', '3': 'shisanshui', '4': 'niuniuten', '5': 'texasholdem', '6': 'sangong', '7': 'tiandakeng', '8': 'bull6', '9': 'bull9' }
    var gameVersionJson = { 'bailexiuxian': '2', 'chaowenzhongyu': '2', 'dahonghuaqipai': '2', 'dashengzhongyu': '2', 'fuchenghuyu': '1', 'haichaoyouxi': '2', 'hongtaohuyu': '1', 'jingongmenhuyu': '2', 'laopengyouqipai': '1', 'lekuyoule': '2', 'leyueguibinting': '2', 'lianyundating': '3', 'liuliulexiang': '3', 'liuliuxianyue': '3', 'shouquandating': '2', 'wuyibahuyu': '1', 'xianshihuyu': '1', 'yingduoduo': '1', 'huangguanhuyu': '2', 'test': '2', 'ceshi': '2' }
    if (gameVersionJson[win.sign] == undefined || shareLinkJson[game_id] == undefined) { return 'http://cdn.lfzgame.com/images/shareIcon/undefined-share-image.jpg'; } else { return 'http://cdn.lfzgame.com/images/shareIcon/' + 'v' + gameVersionJson[win.sign] + '/' + 'share-' + shareLinkJson[game_id] + '.jpg'; }
}
var notice = {
    data: '',
    play: function(data) {
        if (data.length > 0) {
            var gonggao = document.getElementById("gongao");
            if (!gonggao) {
                var aa = '<div id="gongao" class="all-gonggao">';
                aa += '<div class="gonggao-icon"></div>';
                aa += '<div class="scroll_div" style="" id="scroll_div">';
                aa += '<div id="scroll_begin" class="scroll_begin" style="">➤ ' + data.join('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;➤ ') + '</div>';
                aa += '<div id="scroll_end" class="scroll_end" style=""></div>';
                aa += '</div>';
                aa += '</div>';
                document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", aa);
                var speed = 20;
                var scroll_begin = document.getElementById("scroll_begin");
                var scroll_div = document.getElementById("scroll_div");
                var left_begin = scroll_div.offsetWidth;
                scroll_begin.style.left = left_begin + 'px';

                function Marquee() {
                    if (left_begin <= -scroll_begin.offsetWidth) {
                        var gonggao = document.getElementById("gongao");
                        if (gonggao) { gonggao.parentNode.removeChild(gonggao); }
                        clearInterval(MyMar);
                        return;
                    }
                    left_begin--;
                    scroll_begin.style.left = left_begin + 'px';
                }
                var MyMar = setInterval(Marquee, speed);
            }
        }
    },
    start: function() {
        var that = this;
        var datas = [];
        try { datas = JSON.parse(this.data); } catch (e) { return; }
        setInterval(function() {
            var data = [];
            var time = Math.round(new Date().getTime() / 1000).toString();
            for (var i in datas) { if ((datas[i].play_time <= time && datas[i].end_time >= time) || (datas[i].play_time <= time && datas[i].end_time == 0)) { data.push(datas[i].contents); } }
            that.play(data);
        }, 10000);
    }
};
(function(ws) {
    ws.link = null;
    var func = null,
        connect_num = 0,
        close_func = null,
        url = null;
    var status = 0;
    var codes = [];
    ws.callback = {};
    ws._datas = [];
    var noActs = ['timer', 'userTime', 'playerjoin', 'gameRunning', 'playerleave', 'ready', 'chat', 'roomGameOver'];
    ws.send = function(data, act, _data) { if (ws == null) { console.warn('Websocket没有连接，无法进行操作！'); } else { if (ws.link == null) { setTimeout(function() { ws.send(data, act); }, 200); } else { if (act) { var d = {};
                    d['data'] = data || '';
                    d['act'] = act;
                    d = JSON.stringify(d);
                    ws.link.send(d); if (_data && typeof(ws.callback[act]) == 'function') { ws._datas.push(JSON.stringify({ act: act, data: _data }));
                        ws.callback[act](_data); } } else { ws.link.send(data); } } } };
    ws.connect = function(uri, fn) {
        var uri = uri || url;
        var fn = fn || func;
        if (uri == null) return;
        url = uri;
        if (fn) func = fn;
        if (ws.link != null) { ws.link.close(); }
        ws.link = new WebSocket((IS_SSL ? 'wss' : 'ws') + '://' + WS_DOMAIN + '/' + uri + '.html?token=' + win.token + '&code=' + location.href.split('code=')[1].split('&')[0]);
        ws.link.onopen = function(d) {
            console.info('Websocket 已连接!');
            document.getElementById('networkReconnect').style.display = 'none';
            connect_num = 0;
            status = 1;
            ws.heartbeat.start();
            if (win.status == 1) { ws.send('join'); } else if (win.status == 0) { win.status = 2;
                ws.send('init');
                ws.send('connect_success'); } else
                ws.send('connect_success');
            if (typeof(fn) == 'function') fn();
        };
        ws.link.onerror = function(evt) { console.log(evt); };
        ws.link.onmessage = function(d) {
            ws.heartbeat.reply();
            if (d.data == 'pong') return;
            if (d.data == 'ping') { this.send('pong'); return; }
            if (d.data == 'join_success') { win.status = 2;
                ws.send('init');
                ws.send('connect_success'); return; }
            if (d.data == 'getout') { win.reload(); return; }
            if (d.data == 'close') {
                if (ws.link == this) { document.getElementById('networkReconnect').innerText = '您已在其他设备登录！';
                    document.getElementById('networkReconnect').style.display = 'block';
                    ws.close(); } else { this.close(); }
                return;
            }
            try {
                var dt = JSON.parse(d.data);
                var act = dt.act;
                var data = dt.data;
                var i = ws._datas.indexOf(JSON.stringify({ act: act, data: data }));
                if (i > -1) { ws._datas.splice(i, 1); return; }
                if (act == 'notice') { notice.play(data); return; }
                if (typeof(ws.callback[act]) == 'function') ws.callback[act](data);
            } catch (ev) { console.warn(ev); }
        };
        ws.link.onclose = function() {
            console.info('Websocket 已断开!');
            if (ws.link != this) return;
            if (typeof(close_func) == 'function') close_func();
            if (ws.link === null) return;
            ws.link = null;
            if (status == 3) { ws.heartbeat.status = 0; return; }
            setTimeout(function() { connect_num++;
                console.warn('系统正在进行第 ' + connect_num + ' 次重连...');
                ws.connect(); }, 1500);
            status = 2;
            ws.heartbeat.status = 2;
        };
    };
    ws.close = function(func) { status = 3;
        ws.heartbeat.status = 0;
        ws.link.close();
        close_func = function() { close_func = null;
            ws.link = null;
            connect_num = 0; if (typeof(func) == 'function') setTimeout(func, 500); } };
    ws.heartbeat = {
        ltime: 0,
        status: 0,
        speed: 5,
        num: 0,
        failcount: 0,
        start: function() { this.num = 0;
            this.failcount = 0;
            this.ltime = (new Date()).getTime();
            document.getElementById('networkReconnect').style.display = 'none'; if (this.status == 0) this.jump(); },
        jump: function() {
            if (this.status == 0) this.status = 1;
            var that = this;
            setTimeout(function() {
                that.num++;
                if (that.num >= that.speed) {
                    if ((new Date()).getTime() - that.ltime >= 1500) {
                        that.failcount++;
                        if (that.failcount > 3) { document.getElementById('networkReconnect').innerText = '您的网络已断开，我们正在尝试重连...';
                            document.getElementById('networkReconnect').style.display = 'block';
                            that.status = 2;
                            status = 2; if (ws.link != null && status == 1) ws.link.close(); }
                        if (ws.link != null && status == 1) ws.link.send('ping');
                    }
                }
                if (that.status > 0) that.jump();
            }, 1000);
        },
        reply: function() { document.getElementById('networkReconnect').style.display = 'none';
            this.ltime = (new Date()).getTime();
            this.num = 0;
            this.failcount = 0; }
    };
    setInterval(function() {
        var time = (new Date()).getTime();
        var _codes = [];
        for (var i in codes) { if (time - codes[i].time < 5000) { _codes.push(codes[i]); } }
        codes = _codes;
    }, 1000);
})(ws);
var players = {};
var users = [0, 0, 0, 0, 0, 0];
var time = 0;
var Page = {
    running: '',
    cur_match: '',
    code: '',
    shareData: {},
    chipInData: { answerData: {}, sendData: {} },
    comePareUsersData: { answerData: {}, sendData: {} },
    comPareData: { answerData: {}, sendData: {} },
    currentTimerUserId: 0,
    nextTimerUserId: 0,
    join: function() { $('.join-user').remove();
        Page.init(); },
    load: function() {
        if (location.href.split('code=').length < 2) { $.alert('非法访问！'); return; }
        Page.code = location.href.split('code=')[1].split('&')[0];
        $('.top .left span').html(user.room_cards + '张');
        $('.focus-mask .focus-img img').attr('src', '/images/qrcode-' + win.sign + '.jpg');
        game.showHide($('.top .right .rules'), $('.rules-mask'));
        game.showHide($('.rules-mask'), $('.rules-mask'));
        game.showHide($('.top .right .focus'), $('.focus-mask'));
        game.showHide($('.focus-mask'), $('.focus-mask'));
        game.showHide($('.top .right .share'), $('.share-mask'));
        game.showHide($('.share-mask'), $('.share-mask'));
        $('.chat').click(function() { if ($('.chat-list').css("display") == "block") { $('.chat-list-mask').hide();
                $('.chat-list').hide(); } else { $('.chat-list-mask').show();
                $('.chat-list').show(); } });
        $('.chat-list').click(function() { $('.chat-list-mask').hide();
            $(this).hide(); });
        $('.chat-list-mask').click(function() { $('.chat-list').hide();
            $(this).hide(); });
        $('.box-mask').touch(function() { $(this).hide().find('div').removeClass('box-animate');
            $('.bipai-box').show(); })
        $('.chat-list li').click(function() { var chat = $(this).attr('data-item');
            ws.send(chat, 'chat', { "user_id": user.id, "sex": user.sex, "content": chat }); });
        $('.user-card[data-pos="0"],.kanpai-box>span[data-pos="0"]').touch(function() { if (parseInt($('.user-card[data-pos="0"]').attr('data-click'))) { ws.send('', 'lookCards'); } })
        $('.bipai-box>span:nth-of-type(5)').touch(function() { ws.send('', 'discard'); })
        $(".bipai-box>span:nth-of-type(6)").touch(function() { if (parseInt($(this).attr('data-bipai')) == 1) { ws.send('', 'compareUsers') } })
        $('.bipai-box > span[data-click]').touch(function() { if (parseInt($(this).attr("data-click"))) { Page.chipInData.sendData = $(this).attr('data-pos');
                ws.send($(this).attr('data-pos'), 'chipIn'); } })
        $(".box-mask>div").touch(function(e) {
            if ($('.kanpai-box>span[data-pos="0"]').html() == '点击看牌') { $('.kanpai-box>span[data-pos="0"]').hide();
                $('.user-card[data-pos="0"]').attr('data-click', 0); }
            $('.head-time>span').hide();
            var userId = $('.user-info[data-pos="' + $(this).attr('data-pos') + '"]').attr('data-id')
            Page.comPareData.sendData = userId;
            ws.send(userId, 'compareCards')
        })
        $('.rules-focus .tips').click(function() { Agreement(); });
        $('.rules-focus .index').click(function() { returnIndex(); });
        Page.code = location.href.split('code=')[1].split('&')[0];
        win.readyJoin(Page.code, function() { ws.connect('home/jinhua', function() { $('#loadings').fadeOut('fast', function() { $(this).remove(); }); }); })
        this.wsCallback();
    },
    init: function() { game.initGamePanel();
        ws.send('init'); },
    ready: function() { this.loadBgm();
        (function ready() { if (typeof(Page.shareData.title) == 'string') { share(Page.shareData.title, Page.shareData.description, Page.shareData.link, Page.shareData.path); } else { setTimeout(ready, 1000); } })(); },
    wsCallback: function() {
        ws.callback.init = function(data) { game.init(data); };
        ws.callback.gameUserStatus = function(data) { game.gameUserStatus(data); };
        ws.callback.gameRunning = function(data) { game.gameRunning(data); };
        ws.callback.playerjoin = function(data) { game.join(data); };
        ws.callback.playerleave = function(data) { game.leave(data); };
        ws.callback.ready = function(data) { Page.running = 0;
            players['u_' + data].is_ready = 1;
            game.ready(data); };
        ws.callback.timer = function(data) { game.timer(data); };
        ws.callback.userTime = function(data) {
            game.userTime(data);
            var timerCount = 0;
            for (var i = 0; i < 6; i++) { if ($('.head-time>span[data-pos=' + i + ']').css('display') == 'block') { timerCount++; } }
            if (timerCount > 1) { console.log('repeatTimer');
                $('.head-time>span').hide(); }
            if (data.s <= 5) {
                if (data.user_id == user.id) {
                    var i = ws._datas.indexOf(JSON.stringify({ act: 'chipIn', data: Page.chipInData.answerData }));
                    if (i > -1) { ws.send(Page.chipInData.sendData, 'chipIn'); return; }
                    var i = ws._datas.indexOf(JSON.stringify({ act: 'compareUsers', data: Page.comePareUsersData.answerData }));
                    if (i > -1) { ws.send('', 'compareUsers'); return; }
                    var i = ws._datas.indexOf(JSON.stringify({ act: 'compareCards', data: Page.comPareData.answerData }));
                    if (i > -1) { ws.send(Page.comPareData.sendData, 'compareCards'); return; }
                }
            }
        }
        ws.callback.start = function(data) {
            Page.running = 2;
            if (data.user_list) { for (var i = 0; i < data.user_list.length; i++) { var player = players['u_' + data.user_list[i].user_id];
                    player.is_ready = 1; } }
            game.start(data);
        };
        ws.callback.upperLimit = function(data) { game.upperLimit(data); }
        ws.callback.systemTimer = function(data) { game.dxTips(data) }
        ws.callback.lookCards = function(data) { game.lookCards(data); }
        ws.callback.roomGameOver = function(data) { Page.running = 0;
            game.roomGameOver(data); };
        ws.callback.chipInStart = function(data) { game.chipInStart(data); }
        ws.callback.discard = function(data) {
            if (data.round == '0') { Page.running = 2; } else if (data.round == '1') { Page.running = 3; }
            players['u_' + data.user_id].is_discard = 1;
            game.discard(data);
        }
        ws.callback.updateChipIn = function(data) { game.updateChipIn(data); }
        ws.callback.compareUsers = function(data) { Page.comePareUsersData.answerData = data;
            game.compareUsers(data); }
        ws.callback.compareCardsChip = function(data) { game.compareCardsChip(data); }
        ws.callback.chipIn = function(data) { Page.chipInData.answerData = data;
            game.chipIn(data); }
        ws.callback.showfanpaiTips = function(data) {
            if (data.round == '0') { Page.running = 2; } else if (data.round == '1') { Page.running = 3; }
            game.showFanpaiTips(data);
        }
        ws.callback.cards = function(data) { Page.running = 3;
            game.cards(data); }
        ws.callback.compareCards = function(data) { Page.comPareData.answerData = data;
            game.compareCards(data); }
        ws.callback.settlement = function(data) {
            for (var i in players) { players[i].is_ready = 0;
                players[i].is_end = 0;
                players[i].is_discard = 0; }
            Page.running = 4;
            Page.nextTimerUserId = 0;
            game.settlement(data);
        }
        ws.callback.chat = function(data) { game.chat(data); };
    },
    loadBgm: function() {
        if (!storage.get('pausemusic')) { sound.load();
            $('.bottom .music img:first').hide(); } else { $('.bottom .music img:last').hide(); }
        $('.bottom .music').click(function() {
            if (!storage.get('pausemusic')) { storage.set('pausemusic', 1);
                sound.stopSound('bgm');
                $('.bottom .music img:last').hide();
                $('.bottom .music img:first').show(); } else {
                storage.rm('pausemusic');
                if (!sound.isloaded) { sound.load(); }
                sound.playSound('bgm', true);
                $('.bottom .music img:last').show();
                $('.bottom .music img:first').hide();
            }
        });
    }
};
$(document.body).on('touchmove', function(evt) { evt.preventDefault(); });
$('.chat-list').overscroll();
var game;
game = {
    gameRunning: function(data) {
        if ($('.user-info')) { var userLength = $('.user-info').length; }
        if (data.running == '0' || data.cur_match != Page.cur_match) { $(".money-box > span").remove(); }
        if (data.running != Page.running || data.cur_match != Page.cur_match || data.users.length != userLength) { Page.init(); return; }
        if (data.users) {
            for (var i in data.users) {
                if (data.users[i][0] == user.id) {
                    if (data.users[i][3] != players['u_' + data.users[i][0]].is_end) { Page.init(); break; }
                    if (data.users[i][4] != players['u_' + data.users[i][0]].is_discard) { Page.init(); break; }
                }
                players['u_' + data.users[i][0]].value = data.users[i][2];
                if (data.users[i][1] == 0) { players['u_' + data.users[i][0]].changeStatus(0); }
                if (data.users[i][1] == 1) { players['u_' + data.users[i][0]].changeStatus(1); }
                $('.user-info[data-id="' + data.users[i][0] + '"] span.user-value').html(data.users[i][2]);
            }
        }
    },
    init: function(d) {
        players = {};
        Page.nextTimerUserId = 0;
        if (d.room_users) { if (d.room_users.length > 6) { $.alert('该房间人数已满', function() { window.location.href = DOMAIN; }) } }
        if (d.info) {
            if (d.info == 0) { $.alert('加入房间失败', function() { wx.closeWindow(); }) } else if (d.info == -1) { $.alert('房间号错误', function() { wx.closeWindow(); }) } else if (d.info == 1) {
                $('#loadings').fadeOut('fast', function() { $(this).remove(); });
                $('.body').remove();
                $('body').css({ 'background': '#ffffff' })
                ajax('home/gameJinhua/result', { code: Page.code }, function(data) { if (data == 'error') { Page.init(); } else { createRanking(data, function(data) { var $img = $('<img class="room-gameover">').attr('src', data);
                            $img.appendTo('body').show(); }) } });
            } else if (d.info == 2) { $.alert('该房间人数已满', function() { wx.closeWindow(); }) }
        } else {
            $('#loadings').fadeOut('normal', function() { $('#loadings').remove(); });
            $('.points .bottom-dizhu').html(d.end_points);
            $('.points  .bottom-jushu').html(d.max_matches);
            $('.points .bottom-fangka').html(parseInt(d.max_matches) / 10);
            $('.top .flex-item span:first').html(d.cur_match);
            $('.top .flex-item span:last').html(d.max_matches);
            var user_list = d.room_users;
            if (d.chip_rule == 1) { var card_rule = "2/4，4/8，8/16，10/20"; } else if (d.chip_rule == 2) { var card_rule = "2/4，5/10，10/20，20/40"; }
            if (d.max_matches == 10) { var matchesText = '10局×1房卡'; } else if (d.max_matches == 20) { var matchesText = '20局×2房卡'; }
            $('.points>span:nth-of-type(4)').html(d.max_chip);
            $('.rules-mask .flex-cont[data-pos="1"] .flex-item').html($('<span>').html(d.end_points + '分'));
            $('.rules-mask .flex-cont[data-pos="2"] .flex-item').html($('<span>').html(card_rule));
            $('.rules-mask .flex-cont[data-pos="3"] .flex-item').html($('<span>').html(d.upper_limit == 0 ? '无限' : d.upper_limit))
            $('.rules-mask .flex-cont[data-pos="4"] .flex-item').html($('<span>').html(matchesText))
            Page.shareData = { title: '金花(房间:' + d.number + ')', description: '模式:' + ' 底分:' + d.end_points + '分 规则:' + card_rule + ' 局数:' + d.max_matches + '局×' + parseInt(d.max_matches) / 10 + '房卡', link: location.href, path: location.href.split('goldFlower')[0] + 'images/game-jinhua.jpg' };
            setTitle(Page.shareData.title);
            Page.running = d.running;
            Page.cur_match = d.cur_match;
            if (user_list) {
                if (user_list.length > 0) {
                    $('.user-list').empty();
                    for (var i in user_list) {
                        users[parseInt(user_list[i].position) - 1] = user_list[i].user_id;
                        var player = new Player(user_list[i].user_id, user_list[i].position, user_list[i].nickname, user_list[i].path, 0);
                        player.changeStatus(user_list[i].online);
                        player.isjoin = user_list[i].is_join;
                        player.is_end = user_list[i].is_end || 0;
                        player.is_ready = user_list[i].ready || user_list[i].is_join;
                        player.is_discard = user_list[i].is_discard || 0;
                        switch (parseInt(d.running)) {
                            case 0:
                                game.showReadyState(user_list[i], player, user_list); break;
                            case 1:
                                game.showReadyState(user_list[i], player, user_list); break;
                            case 2:
                                game.showPlayersState(user_list[i], player, user_list); break;
                            case 3:
                                game.showPlayersState(user_list[i], player, user_list); break;
                            case 4:
                                game.showPlayersState(user_list[i], player, user_list); break; }
                        players['u_' + user_list[i].user_id] = player;
                    }
                    game.userSort(user_list);
                    game.initPlayerValue(d.room_users);
                    game.initCurrentPlayer(d);
                }
            } else { Page.init(); }
        }
    },
    gameUserStatus: function(data) {
        if (Page.chip_allow) { if (data != Page.chip_allow) { Page.init(); } }
        if (data.compare_button) { if (data.compare_button == 1) { $('.bipai-box>span:nth-of-type(6)').html('开牌'); } else { $('.bipai-box>span:nth-of-type(6)').html('比牌'); } }
    },
    join: function(data) { if (!players['u_' + data.user_id]) { users[parseInt(data.position) - 1] = data.user_id;
            players['u_' + data.user_id] = new Player(data.user_id, data.position, data.nickname, data.path, 1);
            game.insertUserPosition(data); } else { players['u_' + data.user_id].changeStatus(1);
            $('.user-info[data-id="' + data.user_id + '"]').removeClass('leave'); } },
    maxTips: function(text) { $('<span class="max-chouma-tips">' + text + '</span>').appendTo(".body"); },
    dxTips: function(data) { $('<span class="ds-wangluo-tips">' + '玩家 ' + players['u_' + data].nickname + ' 网络不好，请耐心等待！' + '</span>').appendTo(".body");
        setTimeout(function() { $('.ds-wangluo-tips').remove(); }, 1000) },
    generalGameStateTips: function(stateName) { $('<span class="game-state-tips"></span>').css({ 'background': 'url("../images/jinhua/' + stateName + '.png") no-repeat', 'background-size': '100% 100%' }).appendTo(".body");
        setTimeout(function() { $('.game-state-tips').fadeOut('fast', function() { $('.game-state-tips').remove(); }) }, 1500) },
    removeMaxTips: function() { $(".max-chouma-tips").remove(); },
    upperLimit: function() { this.maxTips('底池已满，即将开牌！'); },
    playerPosValidate: function(playerData, pos) {
        var count = 0;
        for (var j in players) { count++; if (players[j].pos == pos && players[j].user_id != playerData.user_id) { return '-1'; } else if (players[j].pos == pos && players[j].user_id == playerData.user_id) { return '0'; } else { return '1'; } }
        if (count == 0) { return '1'; } else { return '-1'; }
    },
    parsePositionToPos: function(position, data) {
        if (position == 0) { Page.init(); return; }
        var PlayerPosition;
        if (data) { for (var i = 0; i < data.length; i++) { if (data[i].user_id == user.id) { PlayerPosition = data[i].position; break; } } } else { PlayerPosition = parseInt(players['u_' + user.id].position); }
        var temp = PlayerPosition - parseInt(position);
        var pos = 0;
        if (temp < 0) { pos = 6 - Math.abs(temp); } else if (temp > 0) { pos = temp } else { pos = 0; }
        return pos;
    },
    insertUserPosition: function(data) {
        var position = parseInt(players['u_' + user.id].position);
        var pos = game.parsePositionToPos(data.position);
        var valite = game.playerPosValidate(data, pos);
        if (valite == '-1') { Page.init(); return; }
        players['u_' + data.user_id].pos = pos;
        if (!players['u_' + data.user_id].position) { players['u_' + data.user_id].position = position; }
        $('.user-info[data-id=' + data.user_id + ']').attr('data-pos', players['u_' + data.user_id].pos);
    },
    userSort: function(data) { for (var i = 0; i < data.length; i++) {
            (function(arg) { game.insertUserPosition(data[arg]); })(i) } },
    leave: function(user) { if (user.is_exist == 1) { players['u_' + user.user_id].changeStatus(0);
            $('.user-info[data-id="' + user.user_id + '"]').addClass('leave'); } else { users[parseInt(players['u_' + user.user_id].position) - 1] = 0;
            delete players['u_' + user.user_id];
            $('.user-info[data-id="' + user.user_id + '"]').remove(); } },
    clickReady: function() { ws.send('', 'ready', user.id); },
    chat: function(data) { sound.play(data.content, data.sex);
        $('.user-info[data-id="' + data.user_id + '"] .user-chat-text').remove(); var chat_text = $('.chat-list li[data-item="' + data.content + '"]').text();
        $('<div class="user-chat-text">').text(chat_text).appendTo('.user-info[data-id="' + data.user_id + '"]').show();
        setTimeout(function() { $('.user-info[data-id="' + data.user_id + '"] .user-chat-text').remove(); }, 3500); },
    ready: function(user_id) {
        if (user_id == user.id) { $('.prepare').hide(); }
        players['u_' + user_id].isjoin = 1;
        var pos = $('.user-info[data-id="' + user_id + '"]').attr('data-pos');
        if (pos != 0) { $('.kanpai-box>span[data-pos="' + pos + '"]').hide();
            $('.user-card[data-pos="' + pos + '"] .cardbox').hide();
            $('.kaipai-box>span[data-pos="' + pos + '"]').hide(0); }
        $('.prepare-item[data-pos="' + pos + '"]').show();
    },
    timer: function(s) { $('.head-time>span[data-pos="6"]').html(s).show(); },
    userTime: function(data) {
        var userId = data.user_id;
        var pos = $('.user-info[data-id="' + userId + '"]').attr('data-pos');
        if (parseInt(data.s) == 0) { $('.head-time>span[data-pos="' + pos + '"]').hide(); } else { $('.head-time>span[data-pos="' + pos + '"]').html(data.s).show(); }
        if (userId == user.id && this.checkChipInStart == true) { if ($('.head-time>span[data-pos="0"]').css('display') == 'block') { if ($('.bipai-box').css('display') == 'none') { Page.init(); } } }
    },
    chouma: function(num, id, bol) { if (bol) { var $span = $('<span data-pos="' + num + '" data-id="' + id + '"></span>').appendTo(".money-box");
            $span.css({ "-webkit-transform": "scale(1)", "-moz-transform": "scale(1)", "-ms-transform": "scale(1)", "-o-transform": "scale(1)", "transform": " scale(1)", "left": Math.random() * $(".money-box").width() * (240 - 55) / 240, "top": Math.random() * $(".money-box").width() * (240 - 55) / 240, "transition": "all .25s" }) } else { $('<span data-pos="' + num + '" data-id="' + id + '"></span>').css({ "-webkit-transform": "scale(1)", "-moz-transform": "scale(1)", "-ms-transform": "scale(1)", "-o-transform": "scale(1)", "transform": " scale(1)", "left": Math.random() * $(".money-box").width() * (240 - 55) / 240, "top": Math.random() * $(".money-box").width() * (240 - 55) / 240, "transition": "all .25s" }).appendTo(".money-box"); } },
    initGamePanel: function() {
        $('.bipai-box').hide();
        $('.prepare-item').hide();
        $('.user-card').hide();
        $('.cardbox').hide().removeClass('animate').removeClass('front').addClass('hind');
        $('.choosed').removeClass('choosed');
        $('.bipai-box>span:nth-of-type(6)').html('比牌');
        $('.winLost').remove()
        $('.bipai-box').hide();
        $('.cardbox .card').attr('data-value', '0').html('');
        $('.user-card').attr('data-click', '0');
        $('.cardbox-abandon').removeClass('cardbox-abandon');
        $('.no-transition').removeClass('no-transition');
        $('.user-card-fanpai-animate').removeClass('user-card-fanpai-animate');
        $('.money-tips .money-text').html('0');
        $(".bipai-box>span:nth-of-type(6)").addClass("cardbox-abandon").attr("data-bipai", 0);
        $('.kanpai-box>span').hide();
        $('.kaipai-box>span').hide();
        $('.head-time>span').hide();
        $('.box-mask').hide().find('div').hide();
        $('.box-animate').removeClass('box-animate');
        $('.kanpai-result').hide().html('');
    },
    settlement: function(data) { this.removeMaxTips();
        $('.head-time>span').hide();
        $('.bipai-box').hide(); var _this = this;
        setTimeout(function() { _this.coin(data.win, function() { var winPos = $('.user-info[data-id="' + data.win + '"]').attr('data-pos');
                $('.money-tips .money-text').html('0');
                $('.user-info[data-pos="' + winPos + '"] .user-value').html(data.winValue);
                _this.generlScore(data.win, data.winValue); if ($('.top .flex-item span:first').text() == $('.top .flex-item span:last').text()) { $('.tips-text').remove();
                    $('.prepare').hide();
                    setTimeout(function() { if (!$('body > .room-gameover').length) { Page.init(); } }, 3000) } else { setTimeout(function() { $('.prepare').show(); }, 750) } }); }, 500) },
    cards: function(data) {
        for (i in data) {
            var cards = data[i].cards;
            var cards_type = data[i].cards_type;
            var pos = $('.user-info[data-id="' + data[i].user_id + '"]').attr('data-pos');
            if (data.all) {
                if (this.checkUptterLimitCardsInArr(data)) {
                    if ((data[i].user_id == user.id && data[i].is_showdown == 1)) { continue }
                    this.fanpaiAnimate(cards, cards_type, pos, data);
                } else { if ((data[i].user_id == user.id && data[i].is_showdown == 0) || data[i].user_id == data[i].win || data[i].win == user.id) { this.fanpaiAnimate(cards, cards_type, pos, data); } }
            } else {
                if ((pos == 0 && data[0].is_showdown) || !cards) { continue; }
                this.fanpaiAnimate(cards, cards_type, pos, data);
            }
        }
        this.showPaiXin(data);
    },
    checkUptterLimitCardsInArr: function(data) {
        for (var i in data) { if (data[i].user_id == user.id) { return true; } }
        return false;
    },
    coin: function(id, callback) { var $user = $('.user-info[data-id="' + id + '"]');
        $(".money-box span").each(function() { var that = $(this);
            setTimeout(function() { that.css({ "transition": "all .8s", "-webkit-transform": "scale(.9)", "-moz-transform": "scale(.9)", "-ms-transform": "scale(.9)", "-o-transform": "scale(.9)", "transform": " scale(.9)", "left": ($user.position().left - $('.money-box').position().left + $user.width() / 4), "top": ($user.position().top - $('.money-box').position().top + $user.children(".user-img").height() / 2) }) }, 200) });
        setTimeout(function() { $(".money-box").html("");
            callback(); }, 1000) },
    generlScore: function(user_id, value) {
        var winLost = Math.abs(parseInt(value) - parseInt(players['u_' + user_id].value));
        if (winLost >= 0) { $("<span class='winLost'>").html('+' + winLost).appendTo('.user-info[data-id="' + user_id + '"] .user-img'); } else { $("<span class='winLost'>").html(winLost).appendTo('.user-info[data-id="' + user_id + '"] .user-img'); }
        $('.winLost').show();
        setTimeout(function() { $('.winLost').css('top', '-55%');
            $('.user-info[data-pos="3"] .winLost').css('top', '0%'); }, 200);
    },
    removeCardsTrantion: function(playerCardDom) { playerCardDom.find('.cardbox').addClass('no-transition').find('span').addClass('no-transition'); return playerCardDom.find('.cardbox'); },
    addCardsTrantion: function(playerCardDom) { playerCardDom.find('.cardbox').removeClass('no-transition').find('span').removeClass('no-transition'); return playerCardDom.find('.cardbox'); },
    start: function(data) {
        var ids = [];
        var user_list = data.user_list;
        $('.user-list').children('.user-info').each(function() { ids.push(parseInt($(this).data('id'))); });
        for (var i in user_list) { if (ids.indexOf(parseInt(user_list[i].user_id)) == -1) { Page.init(); } }
        var _this = this;
        Page.cur_match = data.cur_match;
        Page.chip_allow = data.chip_allow;
        this.initGamePanel();
        this.generalGameStateTips('start_tips');
        setTimeout(function() { $('.head-time>span[data-pos="6"]').hide(); }, 1000);
        $('.top .flex-item span:first').html(data.cur_match);
        $(".money-tips .money-text").html(data.total_chip);
        $(".money-tips").show()
        $('.prepare').hide();
        $('.prepare-item').hide();
        setTimeout(function() {
            sound.play('sound_101');
            if (user_list) {
                for (var i in user_list) {
                    if (user_list[i]) {
                        var pos = $('.user-info[data-id="' + user_list[i].user_id + '"]').attr('data-pos');
                        $('.user-card[data-pos="' + pos + '"] .cardbox').show();
                        $('.user-info[data-pos="' + pos + '"] .user-value').html(user_list[i].value);
                        if (players['u_' + user_list[i].user_id]) { players['u_' + user_list[i].user_id].value = user_list[i].value; }
                        _this.chouma(Math.abs(data.end_points), pos, 0);
                        for (var j in players) {
                            if (players[j].user_id == user_list[i].user_id)
                                players[j].isjoin = 1;
                        }
                    }
                }
            }
            $('.user-card').show();
            $('.user-card .cardbox').addClass('animate');
        }, 1800);
    },
    roomGameOver: function(data) {
        delete Page.running;
        if (data == 'error') { Page.init(); } else {
            if (win.version == '1.0.0') { createRanking(data, function(data) { var img = new Image();
                    img.src = data;
                    img.className = 'room-gameover';
                    img.onload = function() { document.body.appendChild(img);
                        $('.room-gameover').fadeIn('slow');
                        $('.body').remove();
                        ws.close(); }; }) } else if (win.version == '2.0.0') {
                liuliuCreateRanking(data, function(d) {
                    var img = document.createElement('img');
                    if (parseInt(data.users.length) > 6) { img.className = 'room-gameover-ten ranking-img'; } else { img.className = 'room-gameover ranking-img'; }
                    img.src = d;
                    img.onload = function() { document.body.style.backgroundColor = '#000000';
                        document.body.style.minHeight = 'initial';
                        document.body.appendChild(img); var div = document.createElement('div');
                        div.className = 'search-number-box';
                        document.body.appendChild(div); var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                        div.insertAdjacentHTML("beforeend", detailedBtn);
                        getRankingSix();
                        $('.body').remove();
                        ws.close(); };
                });
            }
        }
    },
    getCardType: function(cardsTypeStr) {
        var cardsType = parseInt(cardsTypeStr);
        var returnStr;
        switch (cardsType) {
            case 0:
                returnStr = '高牌'; break;
            case 1:
                returnStr = '对子'; break;
            case 2:
                returnStr = '顺子'; break;
            case 3:
                returnStr = '同花'; break;
            case 5:
                returnStr = '同花顺'; break;
            case 6:
                returnStr = '豹子'; break; }
        return returnStr;
    },
    lookCards: function(data) { var chipList = data.chipList; var maxChip = data.max_chip; var cards = data.cards; var cards_type = data.cards_type;
        sound.play(98, data.sex);
        $('.user-card[data-pos="0"]').attr('data-click', 0);
        this._updateChipIn(chipList, maxChip);
        this.fanpaiAnimate(cards, cards_type, 0, data); },
    fanpaiAnimate: function(cards, cards_type, pos, data) {
        var _this = this;
        $('.kanpai-box>span[data-pos="' + pos + '"]').hide();
        for (j in cards) { $('.user-card[data-pos="' + pos + '"] span.card:eq(' + j + ')').attr({ 'data-value': cards[j].value, 'data-color': cards[j].color }); }
        if (!data.is_look) { setTimeout(function() { if ($('.kanpai-result').html() == '' && pos == 0) { $('.kanpai-result').html(_this.getCardType(cards_type)).show(); } }, 400) }
        _this.addCardsTrantion($('.user-card[data-pos="' + pos + '"]')).addClass('card-animate');
        setTimeout(function() { _this.addCardsTrantion($('.user-card[data-pos="' + pos + '"]')).addClass('user-card-fanpai-animate').removeClass('hind').addClass('front').removeClass('card-animate'); }, 350)
    },
    showPaiXin: function(data) {
        setTimeout(function() {
            if (!data.is_look) { for (i in data) { var pos = $('.user-info[data-id="' + data[i].user_id + '"]').attr('data-pos'); var winUserId = data[i].win; if (pos == '0') { if (data[i].user_id == winUserId) { sound.play('sound_102');
                            $('.kaipai-box>span[data-pos="' + pos + '"]').attr('data-item', '0').fadeIn('fast');
                            $('.kaipai-box>span[data-pos="' + pos + '"]').delay(1000).hide(0); } else { $('.kaipai-box>span[data-pos="' + pos + '"]').attr('data-item', '1').fadeIn('fast');
                            $('.kaipai-box>span[data-pos="' + pos + '"]').delay(1000).hide(0); } } else { if (data[i].user_id == winUserId) { $('.kaipai-box>span[data-pos="' + pos + '"]').attr('data-value', '1').attr('data-item', data[i].cards_type).show(); } else { $('.user-card[data-pos="' + pos + '"] .card-bg').addClass('cardbox-abandon');
                            $('.kaipai-box>span[data-pos="' + pos + '"]').attr('data-value', '0').attr('data-item', data[i].cards_type).show(); } } } } else { var pos = $('.user-info[data-id="' + data[0].user_id + '"]').attr('data-pos'); if (pos != 0) { $('.kaipai-box>span[data-pos="' + pos + '"]').attr('data-value', '1').attr('data-item', data[0].cards_type).show(); } }
        }, 600);
    },
    showFanpaiTips: function(data) { var userId = data.user_id; var pos = $('.user-info[data-id="' + userId + '"]').attr('data-pos');
        sound.play(98, data.sex);
        $('.kanpai-box>span[data-pos="' + pos + '"]').html("已看牌").show(); },
    discard: function(data) {
        var userId = data.user_id;
        var pos = $('.user-info[data-id="' + userId + '"]').attr('data-pos');
        sound.play(99, data.sex);
        $('.user-card[data-pos="' + pos + '"] .card-bg').addClass('cardbox-abandon');
        $('.kanpai-box>span[data-pos="' + pos + '"]').html("弃牌").show();
        $('.head-time>span[data-pos="' + pos + '"]').hide();
        if (!parseInt(pos)) { $('.user-card[data-pos="0"]').attr('data-click', 0);
            $(".bipai-box").hide(); }
        $('.box-mask').hide().find('div').hide();
        $('.box-animate').removeClass('box-animate');
    },
    pkCanvas: function(a, b, callback) {
        var str = ["../images/jinhua/pk1.png", "../images/jinhua/pk2.png", "../images/jinhua/pk_circle.png", "../images/jinhua/pk_text.png", "../images/jinhua/win.png", "../images/jinhua/lose.png", a.src, b.src];
        var index = 0;
        for (var i = 0; i < str.length; i++) { var img = new Image();
            img.src = str[i];
            img.onload = function() { index++; if (index >= str.length) { start(a, b); return; } } }

        function start(hh, kk) {
            var $canvas = $('<canvas width="' + $("body").width() + '" height="' + $("body").height() + ' "class="canvas_coin"></canvas>').prependTo('body');
            var can = $canvas.get(0).getContext("2d");
            var left = new drawImg("../images/jinhua/pk1.png");
            var center = new drawImg("../images/jinhua/pk_circle.png");
            var right = new drawImg("../images/jinhua/pk2.png");
            var tou_l = new drawImg(hh.src);
            var tou_r = new drawImg(kk.src);
            var win_l = new drawImg("../images/jinhua/win.png");
            var lose_r = new drawImg("../images/jinhua/lose.png");
            var center_text = new drawImg("../images/jinhua/pk_text.png");
            if (hh.pk_id > 0) { win_l.play.src = "../images/jinhua/win.png";
                lose_r.play.src = "../images/jinhua/lose.png"; } else { win_l.play.src = "../images/jinhua/lose.png";
                lose_r.play.src = "../images/jinhua/win.png"; }
            var obj_str = [];
            obj_str.push(left);
            obj_str.push(center);
            obj_str.push(right);
            obj_str.push(tou_l);
            obj_str.push(tou_r);
            obj_str.push(win_l);
            obj_str.push(lose_r);
            obj_str.push(center_text);
            var scaling = (1 / 750) * $("body").width();
            var l_x = -330;
            var r_x = 750;
            var c_x = 750;
            var c_x_bol = false;
            var step1_bol = false;
            var bol = true;
            var c_x_index = 0;
            var step = 0;
            var left_step = 0;
            var right_step = 0;
            var step1 = 0;
            var scale_x = 300;
            var c_x_bol_index = 0;
            animateDraw();

            function animateDraw() {
                can.clearRect(0, 0, $("body").width(), $("body").height())
                if (l_x >= 0) { l_x = 0; }
                can.font = 20 * scaling + "px 黑体";
                can.textAlign = 'center';
                can.textBaseline = 'middle';
                obj_str[0].x = l_x * scaling;
                obj_str[0].y = 488 * scaling;
                obj_str[0].draw();
                obj_str[2].x = r_x * scaling;
                obj_str[2].y = 523 * scaling;
                obj_str[2].draw();
                if (l_x >= -(348 - 89 - 87)) { obj_str[3].x = (l_x + 87) * scaling;
                    obj_str[3].y = 523 * scaling;
                    obj_str[3].width = 89;
                    obj_str[3].height = 89;
                    obj_str[3].draw(); var rect1 = Rect((l_x + 87 + 2) * scaling, 615 * scaling, 87 * scaling, 43 * scaling);
                    drawRoundedRect(rect1, 20 * scaling, can);
                    can.fillStyle = "white";
                    can.fillText(hh.name, (l_x + 87 + 49) * scaling, 628 * scaling);
                    can.fillStyle = "#ff9000";
                    can.fillText(hh.score, (l_x + 87 + 43) * scaling, 649 * scaling);
                    r_x -= 0.5 * right_step;
                    right_step += 15; }
                if (r_x <= 750 - 330) { r_x = 750 - 330;
                    c_x_bol_index++; if (c_x_bol_index > 30) { c_x_bol = true; } }
                if (r_x <= 750 - 140) { obj_str[4].x = (r_x + 140) * scaling;
                    obj_str[4].y = 560 * scaling;
                    obj_str[4].width = 89;
                    obj_str[4].height = 89;
                    obj_str[4].draw(); var rect2 = Rect((r_x + 140 + 4) * scaling, 652 * scaling, 87 * scaling, 43 * scaling);
                    drawRoundedRect(rect2, 20 * scaling, can);
                    can.fillStyle = "white";
                    can.fillText(kk.name, (r_x + 140 + 49) * scaling, 665 * scaling);
                    can.fillStyle = "#ff9000";
                    can.fillText(kk.score, (r_x + 140 + 43) * scaling, 686 * scaling); }
                if (c_x_bol) {
                    c_x_index++;
                    if (step1_bol) { step += 6; } else { step += 8; }
                    if (c_x_index > 15) { c_x -= 0.2 * right_step; }
                    if (c_x <= 260) { c_x = 260;
                        step1_bol = true; }
                    can.save();
                    can.translate(750 / 2 * scaling, (479 + 260 / 2) * scaling)
                    obj_str[1].x = -c_x / 2 * scaling;
                    obj_str[1].y = -c_x / 2 * scaling;
                    obj_str[1].width = c_x;
                    obj_str[1].height = c_x;
                    can.rotate(-Math.PI / 180 * step);
                    obj_str[1].draw();
                    can.restore();
                    obj_str[7].x = (750 - c_x * 216 / 260) / 2 * scaling;
                    obj_str[7].y = (479 + 260 / 2 - c_x * 216 / 260 * 156 / 216 / 2) * scaling;
                    obj_str[7].width = c_x * 216 / 260;
                    obj_str[7].height = c_x * 216 / 260 * 156 / 216;
                    obj_str[7].draw();
                }
                if (step1 > 90) {
                    step1_bol = false;
                    scale_x -= 20;
                    if (scale_x <= 0) { scale_x = 0;
                        bol = false }
                    obj_str[5].x = (71 - scale_x / 2) * scaling;
                    obj_str[5].y = (544 + obj_str[5].play.height / 2 - ((obj_str[5].play.width + scale_x) * obj_str[5].play.height / obj_str[5].play.width) / 2) * scaling;
                    obj_str[5].width = obj_str[5].play.width + scale_x;
                    obj_str[5].height = (obj_str[5].play.width + scale_x) * obj_str[5].play.height / obj_str[5].play.width;
                    obj_str[5].draw();
                    obj_str[6].x = (542 - scale_x / 2) * scaling;
                    obj_str[6].y = (574 + obj_str[6].play.height / 2 - ((obj_str[6].play.width + scale_x) * obj_str[6].play.height / obj_str[6].play.width) / 2) * scaling;
                    obj_str[6].width = obj_str[6].play.width + scale_x;
                    obj_str[6].height = (obj_str[6].play.width + scale_x) * obj_str[6].play.height / obj_str[6].play.width;
                    obj_str[6].draw();
                }
                if (step1_bol) {
                    pt1 = { x: 132 * scaling, y: 568 * scaling };
                    pt2 = { x: 620 * scaling, y: 605 * scaling };
                    step1++;
                    lightningDraw();
                    lightningDraw();

                    function lightningDraw() {
                        var iterations = [pt1, pt2]
                        var newiterations, i, j
                        for (i = 0; i < 8; i++) {
                            newiterations = [iterations[0]]
                            for (j = 1; j < iterations.length; j++) {
                                newiterations.push(getRandMidpoint(iterations[j - 1], iterations[j], 200 / (i * i + 1)))
                                newiterations.push(iterations[j])
                            }
                            iterations = newiterations.concat([])
                        }
                        can.beginPath();
                        can.moveTo(iterations[0].x, iterations[0].y);
                        can.lineWidth = 1;
                        can.strokeStyle = '#d4e4fb';
                        for (i = 1; i < iterations.length; i++) { can.lineTo(iterations[i].x, iterations[i].y); }
                        can.stroke()
                        can.closePath()
                    }

                    function getRandMidpoint(pa, pb, range) {
                        var a = Math.atan2(pb.y - pa.y, pb.x - pa.x) + Math.PI / 90 * 10
                        var half = { y: (pb.y - pa.y) / 2 + pa.y, x: (pb.x - pa.x) / 2 + pa.x }
                        var offset = Math.random() * range - range / 2
                        var ho = { x: Math.cos(a) * offset + half.x, y: Math.sin(a) * offset + half.y }
                        return ho
                    }
                }
                l_x += 0.5 * left_step;
                r_x = r_x;
                left_step += 15;
                if (bol) { setTimeout(function() { animateDraw(); }, 10) } else { setTimeout(function() { $canvas.remove();
                        callback(); }, 1000) }
            }

            function Point(x, y) { return { x: x, y: y }; };

            function Rect(x, y, w, h) { return { x: x, y: y, width: w, height: h }; }

            function drawRoundedRect(rect, r, ctx) {
                var ptA = Point(rect.x + r, rect.y);
                var ptB = Point(rect.x + rect.width, rect.y);
                var ptC = Point(rect.x + rect.width, rect.y + rect.height);
                var ptD = Point(rect.x, rect.y + rect.height);
                var ptE = Point(rect.x, rect.y);
                ctx.beginPath();
                ctx.moveTo(ptA.x, ptA.y);
                ctx.arcTo(ptB.x, ptB.y, ptC.x, ptC.y, r);
                ctx.arcTo(ptC.x, ptC.y, ptD.x, ptD.y, r);
                ctx.arcTo(ptD.x, ptD.y, ptE.x, ptE.y, r);
                ctx.arcTo(ptE.x, ptE.y, ptA.x, ptA.y, r);
                ctx.fillStyle = "rgba(0,0,0,0.5)"
                ctx.fill();
            }

            function drawImg(src) { var img = new Image();
                img.src = src;
                this.play = img;
                this.x = 0;
                this.y = 0;
                this.width = this.play.width;
                this.height = this.play.height;
                this.draw = function() { can.drawImage(this.play, 0, 0, this.play.width, this.play.height, this.x, this.y, this.width * scaling, this.height * scaling); } }

            function rnd(max, min) { return Math.round(Math.random() * (max - min) + min); }
        }
    },
    compareCards: function(data) {
        Page.running = 3;
        players['u_' + data.lose[0]].is_end = 1;
        var _this = this;
        $('.head-time>span').hide();
        if (data.is_pk) {
            $('.box-mask').hide().find('div').removeClass('box-animate');
            this.generalGameStateTips('bipai_tips');
            setTimeout(function() {
                var leftPlayerObject = { 'src': players['u_' + data.win].path, 'name': players['u_' + data.win].nickname, 'score': players['u_' + data.win].value, 'pk_id': '1' }
                var rightPlayerObject = { 'src': players['u_' + data.lose[0]].path, 'name': players['u_' + data.lose[0]].nickname, 'score': players['u_' + data.lose[0]].value, 'pk_id': '0' }
                var pkArr = [];
                pkArr.push(leftPlayerObject);
                pkArr.push(rightPlayerObject);
                pkArr.sort(function() { return 0.5 - Math.random() })
                _this.pkCanvas(pkArr[0], pkArr[1], function() { _this.generalResultState(data); })
            }, 1700)
        } else {
            if (data.sex) { sound.play(100, data.sex); }
            setTimeout(function() { _this.generalResultState(data); }, 1500)
        }
    },
    compareCardsChip: function(data) { Page.running = 3; var pos = $('.user-info[data-id="' + data.user_id + '"]').attr('data-pos'); var toUserId = data.to_user_id || '';
        $('.bipai-box').hide();
        this.chouma(data.chip, pos, 1);
        $(".money-tips .money-text").html(data.total_chip);
        $('.user-info[data-pos="' + pos + '"] .user-value').html(data.value);
        players['u_' + data.user_id].value = data.value; },
    generalResultState: function(data) {
        var losePlayerId = data.lose;
        var lostPos = $('.user-info[data-id="' + losePlayerId + '"]').attr('data-pos');
        var winPlayerId = data.win;
        if ($('.kanpai-box>span[data-pos="0"]').html() != '比牌输' && $('.kanpai-box>span[data-pos="0"]').html() != '弃牌' && $('.kanpai-box>span[data-pos="0"]').attr('data-click') == 0) { $('.kanpai-box>span[data-pos="0"]').hide(); }
        $('.user-info[data-id="' + winPlayerId + '"]>.user-img').addClass('choosed');
        $('.user-card[data-pos="' + lostPos + '"] .card-bg').addClass('cardbox-abandon');
        $('.kanpai-box>span[data-pos="' + lostPos + '"]').html("比牌输").show();
    },
    chipIn: function(data) {
        if (data.round && data.round >= 1) { Page.running = 3; } else { Page.running = 2; }
        this.checkChipInStart = false;
        var pos = $('.user-info[data-id="' + data.user_id + '"]').attr('data-pos');
        sound.play('x' + data.chip, data.sex);
        this.chouma(data.chip, pos, 1);
        $(".bipai-box").hide();
        $(".money-tips .money-text").html(data.total_chip);
        $('.user-info[data-pos="' + pos + '"] .user-value').html(data.value);
        players['u_' + data.user_id].value = data.value;
        $('.head-time>span[data-pos="' + pos + '"]').hide();
        if (pos == '0') { $('.kanpai-box>span[data-pos="0"]').hide(); }
        $('.user-card[data-pos="0"]').attr('data-click', 0);
    },
    compareUsers: function(data) { this.checkChipInStart = false;
        $('.box-mask>div').hide(); if (data.compare_users.length > 0) { $('.bipai-box').hide();
            $('.box-mask').show(); for (i in data.compare_users) { var userId = data.compare_users[i]; var userPos = $('.user-info[data-id="' + userId + '"]').attr('data-pos');
                $('.box-mask>div[data-pos="' + userPos + '"]').show().find('div[data-first]').addClass('box-animate').show(); } } },
    chipInStart: function(data) {
        if (data.user_id = user.id) { if ($('.bipai-box').css('display') == 'block') { return; } }
        var _this = this;
        $('.head-time>span').hide();
        var is_compare = data.is_compare;
        if (data.round && data.round >= 1) { Page.running = 3; } else { Page.running = 2; }
        setTimeout(function() {
            var chipList = data.chipList;
            var maxChip = data.max_chip;
            _this._updateChipIn(chipList, maxChip);
            if (data.compare_button == 1) { $('.bipai-box>span:nth-of-type(6)').html('开牌'); }
            $('.choosed').removeClass('choosed');
            $('.user-card[data-pos="0"]').attr('data-click', 1);
            if (!parseInt(data.is_showdown)) { $('.kanpai-box>span[data-pos="0"]').html("点击看牌").show(); } else { $('.user-card[data-pos="0"]').attr('data-click', 0); }
            if (!parseInt(is_compare)) { $(".bipai-box>span:nth-of-type(6)").addClass("cardbox-abandon").attr("data-bipai", 0); } else { $(".bipai-box>span:nth-of-type(6)").removeClass("cardbox-abandon").attr("data-bipai", 1); }
            $(".bipai-box").show();
            this.checkChipInStart = true;
        }, 1000)
    },
    _updateChipIn: function(chipList, maxChip) { if (chipList) { for (i = 0; i < chipList.length; i++) { var xiaZhuButton = $('.bipai-box').children().eq(i); var xiaZhuValue = chipList[i]; var canXiaZhu = !parseInt(maxChip) ? 1 : (parseInt(xiaZhuValue) < parseInt(maxChip)) ? 0 : 1; var blockClassName = (canXiaZhu ? '' : 'cardbox-abandon');
                xiaZhuButton.html(xiaZhuValue).attr('data-pos', xiaZhuValue).attr('data-click', canXiaZhu).addClass(blockClassName); } } },
    updateChipIn: function(data) { var chipList = data.chipList; var maxChip = data.max_chip;
        this._updateChipIn(chipList, maxChip); },
    showHide: function(start, obj) { start.click(function() { if (obj.css("display") == "block") { obj.hide(); } else { obj.show(); } }) },
    showReadyState: function(userData, player, userList) { var pos = game.parsePositionToPos(player.position, userList); if (userData.ready || userData.ready == 1) { $('.prepare-item[data-pos="' + pos + '"]').show();
            $('.tips-text').remove(); } else { $('.prepare').show(); } },
    showPlayersState: function(userData, player, data) {
        var pos = game.parsePositionToPos(player.position, data)
        if (parseInt(userData.is_end)) { $('.user-card[data-pos="' + pos + '"] .card-bg').addClass('cardbox-abandon'); if (parseInt(userData.is_discard)) { $('.kanpai-box>span[data-pos="' + pos + '"]').html((parseInt(userData.is_discard) ? '弃牌' : '')).show(); } else { $('.kanpai-box>span[data-pos="' + pos + '"]').html('比牌输').show(); } } else if (parseInt(userData.is_showdown) && pos != 0) { $('.kanpai-box>span[data-pos="' + pos + '"]').html((parseInt(userData.is_showdown) ? '已看牌' : '')).show(); }
        if (userData.is_showdown || userData.is_discard) {
            $('.user-card[data-pos="0"]').attr('data-click', 0);
            if (parseInt(userData.is_showdown) || parseInt(userData.is_discard)) {
                if (userData.cards && userData.cards.length > 0) {
                    for (j in userData.cards) { $('.user-card[data-pos="0"] span.card:eq(' + j + ')').attr({ 'data-value': userData.cards[j].value, 'data-color': userData.cards[j].color }); }
                    $('.user-card[data-pos="0"] .cardbox').addClass('user-card-fanpai-animate').removeClass('hind').addClass('front').removeClass('card-animate');
                }
            }
        }
        this.removeCardsTrantion($('.user-card[data-pos="' + pos + '"]'));
        if (player.isjoin == 1) {
            $('.user-card[data-pos="' + pos + '"]').show()
            $('.user-card[data-pos="' + pos + '"] .cardbox').addClass('animate').show();
        }
    },
    initPlayerValue: function(d) { for (var i = 0; i < d.length; i++) { var pos = game.parsePositionToPos(d[i].position); if (parseInt($('.user-info[data-pos="' + pos + '"] .user-value').html()) != d[i].value) { $('.user-info[data-pos="' + pos + '"] .user-value').html(d[i].value); } } },
    initCurrentPlayer: function(d) {
        var _this = this;
        var userData;
        for (var i = 0; i < d.room_users.length; i++) { if (d.room_users[i].user_id == user.id) { userData = d.room_users[i]; break; } }
        var scale = win.width / win.height;
        if (scale >= 0.65) { $('.user-list .user-info[data-pos="0"]').addClass('reset');
            $('.head-time span[data-pos="0"]').addClass('reset');
            $('.user-list-bg .user-bg[data-pos="0"]').addClass('reset'); }
        if (userData.chipList && userData.chipList.length > 0) {
            $('.prepare').hide();
            this._updateChipIn(userData.chipList, userData.max_chip);
            if (!parseInt(userData.is_compare)) { $(".bipai-box>span:nth-of-type(6)").addClass("cardbox-abandon").attr("data-bipai", 0); } else { $(".bipai-box>span:nth-of-type(6)").removeClass("cardbox-abandon").attr("data-bipai", 1); }
            $('.user-card[data-pos="0"] .cardbox').show();
            if (parseInt(userData.is_end) == 0) {
                if (userData.compare_button == 1) { $('.bipai-box>span:nth-of-type(6)').html('开牌'); }
                $(".bipai-box").show();
            }
        }
        if (userData.cards_type && userData.cards_type != "") { $('.kanpai-result').html(_this.getCardType(userData.cards_type)).show(); }
        if (parseInt(d.running) == 0 || parseInt(d.running) == 1) { if (userData.ready || userData.ready == 1) { $('.prepare').hide(); } else { $('.prepare').show(); } } else { $('.prepare').hide(); }
        if (userData.chip_allow && parseInt(userData.chip_allow) == 1) { if (userData.is_showdown != null && (parseInt(userData.is_showdown)) == 0 && userData.is_discard != null && (parseInt(userData.is_discard) == 0) && parseInt(userData.is_end) == 0) { $('.user-card[data-pos="0"]').attr('data-click', 1);
                $('.kanpai-box>span[data-pos="0"]').html("点击看牌").show(); } }
        if (parseInt(d.running) == 2 || parseInt(d.running) == 3) { $('.money-tips').show().find('.money-text').html(d.jackpot).show(); }
        var pos = game.parsePositionToPos(userData.position);
        if (parseInt($('.user-info[data-pos="' + pos + '"] .user-value').html()) != userData.value) { $('.user-info[data-pos="' + pos + '"] .user-value').html(userData.value); }
    }
};

function Player(user_id, _position, nickname, path, is_join, value) {
    this.user_id = user_id || 0;
    this.nickname = nickname || '未命名';
    this.path = path || '';
    this.value = value || 0;
    this.online = 1;
    this.isjoin = 0;
    this.position = _position;
    this.is_end = 0;
    this.is_discard = 0;
    this.is_ready = 0;
    this.pos = $('.user-info').length;
    this.getUserDom = function() { var code = '<div class="user-info" data-id="' + this.user_id + '" data-pos="' + this.pos + '">';
        code += '    <div class="user-img"><img src="' + this.path + '" onerror="this.src=\'images/ucenter/user.png\'"></div>';
        code += '   <div class="name-value">';
        code += '      <span class="user-nickname">' + this.nickname + '</span>';
        code += '      <span class="user-value">' + this.value + '</span>';
        code += '   </div>';
        code += '</div>'; return code; }
    $('.user-list').append(this.getUserDom());
    this.changeStatus = function(status) { if (status == 0) { this.online = 0;
            $('.user-info[data-id="' + this.user_id + '"]').addClass('leave'); } else { this.online = 1;
            $('.user-info[data-id="' + this.user_id + '"]').removeClass('leave'); } };
    this.ready = function(calllback) { if (typeof callback == 'function') callback(); };
}
var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?80efa2441f82216a74a64ac0e941a394";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();

const DOMAIN = 'www.kmjgg.cn';
const API_DOMAIN = 'shouquandatingapi.lfzgame.com';
const WS_DOMAIN = 'shouquandatingws.lfzgame.com';
const JUMP_DOMAIN = 'www.kmjgg.cn';
const USE_QRCODE = 0;
const IS_SSL = true;
win.version = '2.0.0';
win.sign = 'shouquandating';
win.token = '7kSg2krWamlwwW04lyzhm4EYUWgd6GGFVyYMy1Dk';
notice.data = '';
var user = { "id": "530029", "wechat_id": "18", "nickname": "infi000", "sex": "1", "citys": "Shanghai,Po", "path": "https:\/\/wx.qlogo.cn\/mmopen\/vi_32\/ajNVdqHZLLAp6GGaTqpibLUzRWbMFldywn1QagzbWOppxzkL4cG42C2lyI0H6Ye67EXtdmIAo4YajoKWnU8XL9Q\/64", "room_cards": "69" };
window.onload = function() {
    win.load();
}
wx.config({
    appId: 'wxed4e97d70ed402cc', // 必填，公众号的唯一标识
    timestamp: '1512571069', // 必填，生成签名的时间戳
    nonceStr: '9VUbAl9GXLqJMpy9', // 必填，生成签名的随机串
    signature: 'b07cc6a8067e20006b9e5b657f667ff96d52b917', // 必填，签名，见附录1
    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone', 'getLocation', 'hideOptionMenu']
});
wx.ready(function() {
    if (win.readed == 1) return;
    win.readed = 1;
    win.ready();
});
wx.error(function(res) {
    //$.alert('微信API获取失败！');
});
sound.source.bgm = "http://cdn.lfzgame.com/music/public/bgm.mp3";
sound.source.gold = "http://cdn.lfzgame.com/music/public/gold.mp3";
sound.source.sound_1_0 = "http://cdn.lfzgame.com/music/voice/sound_1_0.mp3";
sound.source.sound_1_1 = "http://cdn.lfzgame.com/music/voice/sound_1_1.mp3";
sound.source.sound_1_10 = "http://cdn.lfzgame.com/music/voice/sound_1_10.mp3";
sound.source.sound_1_11 = "http://cdn.lfzgame.com/music/voice/sound_1_11.mp3";
sound.source.sound_1_12 = "http://cdn.lfzgame.com/music/voice/sound_1_12.mp3";
sound.source.sound_1_2 = "http://cdn.lfzgame.com/music/voice/sound_1_2.mp3";
sound.source.sound_1_3 = "http://cdn.lfzgame.com/music/voice/sound_1_3.mp3";
sound.source.sound_1_4 = "http://cdn.lfzgame.com/music/voice/sound_1_4.mp3";
sound.source.sound_1_5 = "http://cdn.lfzgame.com/music/voice/sound_1_5.mp3";
sound.source.sound_1_6 = "http://cdn.lfzgame.com/music/voice/sound_1_6.mp3";
sound.source.sound_1_7 = "http://cdn.lfzgame.com/music/voice/sound_1_7.mp3";
sound.source.sound_1_8 = "http://cdn.lfzgame.com/music/voice/sound_1_8.mp3";
sound.source.sound_1_9 = "http://cdn.lfzgame.com/music/voice/sound_1_9.mp3";
sound.source.sound_2_0 = "http://cdn.lfzgame.com/music/voice/sound_2_0.mp3";
sound.source.sound_2_1 = "http://cdn.lfzgame.com/music/voice/sound_2_1.mp3";
sound.source.sound_2_10 = "http://cdn.lfzgame.com/music/voice/sound_2_10.mp3";
sound.source.sound_2_11 = "http://cdn.lfzgame.com/music/voice/sound_2_11.mp3";
sound.source.sound_2_12 = "http://cdn.lfzgame.com/music/voice/sound_2_12.mp3";
sound.source.sound_2_2 = "http://cdn.lfzgame.com/music/voice/sound_2_2.mp3";
sound.source.sound_2_3 = "http://cdn.lfzgame.com/music/voice/sound_2_3.mp3";
sound.source.sound_2_4 = "http://cdn.lfzgame.com/music/voice/sound_2_4.mp3";
sound.source.sound_2_5 = "http://cdn.lfzgame.com/music/voice/sound_2_5.mp3";
sound.source.sound_2_6 = "http://cdn.lfzgame.com/music/voice/sound_2_6.mp3";
sound.source.sound_2_7 = "http://cdn.lfzgame.com/music/voice/sound_2_7.mp3";
sound.source.sound_2_8 = "http://cdn.lfzgame.com/music/voice/sound_2_8.mp3";
sound.source.sound_2_9 = "http://cdn.lfzgame.com/music/voice/sound_2_9.mp3";
sound.source.bgm = "http://cdn.lfzgame.com/music/goldFlower/bgm.mp3";
sound.source.sound_101 = "http://cdn.lfzgame.com/music/goldFlower/sound_101.mp3";
sound.source.sound_102 = "http://cdn.lfzgame.com/music/goldFlower/sound_102.mp3";
sound.source.sound_1_100 = "http://cdn.lfzgame.com/music/goldFlower/sound_1_100.mp3";
sound.source.sound_1_98 = "http://cdn.lfzgame.com/music/goldFlower/sound_1_98.mp3";
sound.source.sound_1_99 = "http://cdn.lfzgame.com/music/goldFlower/sound_1_99.mp3";
sound.source.sound_1x10 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x10.mp3";
sound.source.sound_1x16 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x16.mp3";
sound.source.sound_1x2 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x2.mp3";
sound.source.sound_1x20 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x20.mp3";
sound.source.sound_1x4 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x4.mp3";
sound.source.sound_1x40 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x40.mp3";
sound.source.sound_1x5 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x5.mp3";
sound.source.sound_1x8 = "http://cdn.lfzgame.com/music/goldFlower/sound_1x8.mp3";
sound.source.sound_2_100 = "http://cdn.lfzgame.com/music/goldFlower/sound_2_100.mp3";
sound.source.sound_2_98 = "http://cdn.lfzgame.com/music/goldFlower/sound_2_98.mp3";
sound.source.sound_2_99 = "http://cdn.lfzgame.com/music/goldFlower/sound_2_99.mp3";
sound.source.sound_2x10 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x10.mp3";
sound.source.sound_2x16 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x16.mp3";
sound.source.sound_2x2 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x2.mp3";
sound.source.sound_2x20 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x20.mp3";
sound.source.sound_2x4 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x4.mp3";
sound.source.sound_2x40 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x40.mp3";
sound.source.sound_2x5 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x5.mp3";
sound.source.sound_2x8 = "http://cdn.lfzgame.com/music/goldFlower/sound_2x8.mp3";
</script>

</html>