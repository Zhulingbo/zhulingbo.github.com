<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">

    <script src="./static/js/jQuery/2.x/jquery-2.1.1.min.js"></script>
    <script src="./static/js/jQuery/plugin/jquery.html5loader-master/src/jquery.html5Loader.min.js"></script>
    <script src="./static/js/jQuery/ui/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./static/js/jQuery/swiper/swiper.min.js"></script>
    <script src="./media/js/rem_w.js"></script>
    <script src="./raindrops/raindrops.customer.js"></script>
    <link rel="stylesheet" type="text/css" href="./static/css/swiper.min.css">

    <title>Mr.Zhang</title>
</head>

<style>
    #orientLayer {
        display: none;
    }

    .mod-orient-layer {
        display: none;
        position: fixed;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: #333;
        z-index: 9997
    }

    .mod-orient-layer__content {
        position: absolute;
        width: 100%;
        top: 45%;
        margin-top: -75px;
        text-align: center
    }

    .mod-orient-layer__icon-orient {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAADaCAMAAABU68ovAAAAXVBMVEUAAAD29vb////x8fH////////x8fH5+fn29vby8vL////5+fn39/f6+vr////x8fH////////+/v7////09PT////x8fH39/f////////////////////x8fH///+WLTLGAAAAHXRSTlMAIpML+gb4ZhHWn1c2gvHBvq1uKJcC6k8b187lQ9yhhboAAAQYSURBVHja7d3blpowFIDhTUIAOchZDkre/zE7ycySrbUUpsRN2/1fzO18KzEqxEVgTiZNfgmmtxRc8iaR8HNe8x4BtjQePKayYCIoyBSgvNNE1AkNSHqZyLqk97EgUCCHBzZ5mkg7ScvIJuIyOyXBRFxgpqWZyGsAZLB1KjsJi8nutHU4JCRbFRH8tmirI9k8Jx2sqNs8K/m0LQkrktO2crgcgXGB4AiTEsB0hJfo9MGgX7CGcYiYwQxmMOOvZwRhBG8tCoMXjBDeXvWCEcHbi14wgCBmMIMZzGAGM5jxETNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxY6E2rUQxnH2tz9cirlJFwFBJedaPnUv0M7++egPDE8iAJcIDmxwH5wwv9vUviw2kLbVO3TJU5uul/EyB0FoLp4x60PdGUd3qPurrWyjGGTc05u+1dcgI7/+tCCPARWGhH7o5Y7RCf+bH9ctXLp6v2BVDxfqz0oPXeSVaNtINo/1SXDv4dck8IIkbhtC2ol+iouEonTBCbYvVMnXOjxww6s/RFrBUpXHh/gw1rHj5d/qhYn9Gpk2FWh6xRBRX5Oj3Znh2Sq49/L6+y8pB26q9GbE2dbA2mVbx6I+7MfBglLCttm73ZQi7AD3iL4HqjFYJHSPRppqaUaJ3ATpGa+ckpGak2hRRMyqjGMkvl+xyFeSMwjAqcsZgGDdyhl0oNTnDN4yenJGZFGxNChP5/Y3efh6SM2rDOJMzboYxkDMqwyjIGcIw6F+io2FU1IxIm1JqRmgXSkvNKNCXeTpGrU0JNSO2c6LIGPgCS8AuDHz9ta0SXWDtxoDRH+MqlbC2Dt2G2JFRadtQZt2qq/orGowdGb2euxYiqWEpVWhTBnszoNAPdStuQwxqf0aocdWKW4Z+DfszIh8pxJqbuCE4YAC+4bm0evtipjpgJHeFnyyt1Ku2xa0bhjxr27p75rECNwyI9ZwvXkHq+7aTaMEV44YYy/spfgjgjNHaWW+GeUhGEX7tLlVinIFDDSgnOwhi1V6bU0b6tVS9eAERe863g4dRrtiHdc6o+nn5vtyVVgR79Cqt4uL6gfHPQyGqtP2vf7HADGbcYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JjhtOM+J/AgT008yDMkN/dPP9hzS8zAMQN3OEYeekp5YU7KOKXwVXqiY+QS7smcinGKABWdiBgpPJTSMHJ4KidhhPBUSMLw4CmPhKHgKUXCkHsygum71ftNSgCX6bsl8FQyfbcL5EdYsDk0R3j7aiA5wpt5AjKg/2gLJEBD/0Hf2OOf/vRrj6z/7GtP4B3nMKyjHA12kIPSjnJs3FEO0TvKkYJHOWCR+rjJH0Vn6fI5PjNbAAAAAElFTkSuQmCC");
        display: inline-block;
        width: 67px;
        height: 109px;
        transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -webkit-animation: rotation infinite 1.5s ease-in-out;
        animation: rotation infinite 1.5s ease-in-out;
        -webkit-background-size: 67px;
        background-size: 67px
    }

    .mod-orient-layer__desc {
        margin-top: 20px;
        font-size: 15px;
        color: #fff
    }

    .swiper-slide, .swiper-container {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    img {
        display: inline-block;
    }

    html {
        width: 100%;
        height: 100%; /*background: url(./media/bg.jpg) no-repeat;background-size: 100%;*/
    }

    body {
        margin: 0;
        padding: 0;
        overflow: hidden;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        user-select: none;
        width: 100%;
        height: 100%;
        /*background: url(./media/bg.jpg) no-repeat;background-size: 100%;*/
    }

    #preloader {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #f0f1f1;
        z-index: 99999;
        text-align: center;
        display:none;
    }

    #progressContainer {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 100%;
        height: 1.7rem;
    }

    #country {
        width: 100%;
        height: 1.5rem;
        line-height: 1.5rem;
        margin: 0.5rem auto 0 auto;
        font-size: 1rem;
        font-weight: 900;
        text-align: center;
        color: #5e5e5e;
    }

    #percentage {
        display: inline-block;
        width: 100%;
        height: 1.5rem;
        line-height: 1.5rem;
        font-size: 1rem;
        font-weight: 900;
        text-align: center;
        color: #5e5e5e;
    }

    #progress {
        width: 70%;
        height: 0.2rem;
        margin: 0.5rem auto 0 auto;
        padding: 0.05rem;
        background: #fff;
        -webkit-border-radius: 0.2rem;
        border-radius: 0.2rem;
    }

    #progressBar {
        background: #350109;
        height: 100%;
        width: 0%;
        -webkit-border-top-left-radius: 0.2rem;
        -webkit-border-bottom-left-radius: 0.2rem;
        border-top-left-radius: 0.2rem;
        border-bottom-left-radius: 0.2rem;
    }

    #aaa {
        position: absolute;
        top: 1rem;
        left: 1rem;
        width: 10rem;
        height: 10rem;
        text-align: center;
        z-index: 9999;
        display: none;
    }

    #isobar {
        width: 2.5rem;
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
    }

    #logo {
        width: 5rem;
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
        z-index: 10;
    }

    #stamp-screen {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('./media/bg.jpg') top no-repeat;
        background-size: 100%;
    }

    #stampGifContainer {
        display: block;
        margin: auto;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -55%);
        width: 100%;
        height: 16rem;
        position: absolute;
        z-index: 15;
        overflow: hidden;
    }

    #stampGif {
        border-bottom: 1px solid #f00;
        display: block;
        height: 100%;
        margin: 0 auto;
    }

    #maskPanel {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 10rem;
        left: 0;
        z-index: 11;
        background: url(./media/bottom.png) center 0% no-repeat;
        background-size: 100%;
    }

    #waveContainer {
        /*height: 12rem;*/
        position: absolute;
        top: -100rem;
        left: 50%;
        margin-left: -4.25rem;
        width: 8.5rem;
        z-index: 10;
    }

    #wave {
        width: 8.5rem;
        height: 0rem;
        margin: 0 auto;
    }

    #waveBottom {
        width: 100%;
        height: 0rem;
        background: #350109;
        margin-top: -0.1rem;
    }

    #pao {
        width: 0.8rem;
        height: 2rem;
        background: url('./media/pao.png') no-repeat;
        background-size: 100%;
        position: absolute;
        left: 50%;
        margin-left: -0.4rem;
        top: -1.5rem;
        opacity: 0;
    }

    .pao_show {
        -webkit-animation: pao_show 1s forwards;
    }

    @-webkit-keyframes pao_show {
        0% {
            opacity: 0;
            -webkit-transform: translateY(0);
        }
        50% {
            opacity: 1;
            -webkit-transform: translateY(-2px;
        );
        }
        100% {
            opacity: 0;
            -webkit-transform: translateY(-4px;
        );
        }
    }

    #outletContainer {
        position: absolute;
        top: -1rem;
        width: 100%;
        text-align: center;
        height: 1rem;
        -webkit-transition: 0.2s linear;
        transition: 0.2s linear;
        z-index: 11;
    }

    #outletContainer img {
        height: 100%;
        margin: 0 auto;
    }

    #waterContainer {
        position: absolute;
        top: -60rem;
        width: 100%;
        text-align: center;
        -webkit-transition: 2.5s linear 0.5s;
        transition: 2.5s linear 0.5s;
        z-index: 10;
    }

    #waterContainer img {
        margin: 0 auto;
        width: 0.4rem;
    }

    #badgeContainer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 18%;
        text-align: center;
        overflow: hidden;
        z-index: 11;

    }

    #badgeList {
        padding: 0 1rem;
        display: inline-block;
        margin: 0 auto;
    }

    #badgeList li {
        list-style: none;
        float: left;
        width: 3rem;
        height: 3rem;
        background-image: url(./media/star_white.png);
        background-size: 3rem 3rem;
        /*background: #ffffff;*/
        /*border-radius: 50px;*/
    }

    #badgeList li {
        margin: 0;
    }

    #badgeList li:nth-child(2) {
        margin: 0 1rem 0 1rem;
    }

    #badge_tpl {
        display: block;
        position: absolute;
        width: 3rem;
        height: 3rem;
        background-image: url(./media/star_red.png);
        background-size: 3rem 3rem;
        top: -100rem;
        transform-origin: 50% 50%;
        -webkit-transform-origin: 50% 50%;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
        z-index: 20;
    }

    #stampLoading {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
        z-index: 999;
    }

    @-webkit-keyframes flick {
        0% {
            background: #ffffff;
            opacity: 1;
        }
        20% {
            background: #ffffff;
            opacity: 1;
        }
        100% {
            background: #000000;
            opacity: 0.5;
        }
    }

    @keyframes flick {
        0% {
            background: #ffffff;
            opacity: 1;
        }
        20% {
            background: #ffffff;
            opacity: 1;
        }
        100% {
            background: #000000;
            opacity: 0.5;
        }
    }

    .flickLoading {
        -webkit-animation: flick 0.5s ease-in-out;
        animation: flick 0.5s ease-in-out;
    }

    #stampBg {
        opacity: 0.5;
        background: #000;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .spinner {
        margin: auto;
        width: 100px;
        height: 40px;
        text-align: center;
        font-size: 10px;
        z-index: 1000;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .spinner > div {
        background-color: #fff;
        height: 100%;
        width: 6px;
        display: inline-block;

        -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
        animation: sk-stretchdelay 1.2s infinite ease-in-out;
    }

    .spinner .rect2 {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
    }

    .spinner .rect3 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    .spinner .rect4 {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
    }

    .spinner .rect5 {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
    }

    @-webkit-keyframes sk-stretchdelay {
        0%, 40%, 100% {
            -webkit-transform: scaleY(0.4)
        }
        20% {
            -webkit-transform: scaleY(1.0)
        }
    }

    @keyframes sk-stretchdelay {
        0%, 40%, 100% {
            transform: scaleY(0.4);
            -webkit-transform: scaleY(0.4);
        }
        20% {
            transform: scaleY(1.0);
            -webkit-transform: scaleY(1.0);
        }
    }

    #awardCoffee {
        width: 80%;
        position: absolute;
        left: 50%;
        margin-left: -40%;
        top: 30%;
        display: block;
        z-index: 10;
        display: none;
    }

    #awardText {
        color: black;
        margin: 0.5rem auto;
    }

    #awardCoffee img {
        width: 12rem;
        height: 4rem;

        border-radius: 0.5rem;
        -webkit-border-radius: 0.5rem;
    }

    /* @-webkit-keyframes showBarcode {
     0% {
         -webkit-transform: rotate(90deg) translateX(10%);
     }
     80% {
         -webkit-transform: rotate(-5deg) translateX(10%);
     }
     100% {
         -webkit-transform: rotate(0deg) translateX(10%);
     }
     }

     @keyframes showBarcode {
     0% {
         transform: rotate(90deg) translateX(10%);
     }
     80% {
         transform: rotate(-5deg) translateX(10%);
     }
     100% {
         transform: rotate(0deg) translateX(10%);
     }
     }*/

    #awardCoffee.show {
        animation: showBarcode 0.5s ease-in-out forwards;
        -webkit-animation: showBarcode 0.5s ease-in-out forwards;
    }

    #pageContent {
        -webkit-transition: 0.5s linear;
        transition: 0.5s linear;
    }

    .blur {
        -webkit-filter: blur(10px);
        filter: blur(10px);
    }

    #menu_page {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        position: absolute;
        left: 0;
        top: 0;
        z-index: 100;
        display: none;
    }

    .menu {
        width: 66%;
        height: 100%;
        background: #fff;
        overflow: hidden;
        -webkit-transition: 0.5s all;
        -webkit-transform: translateX(-100%);
    }

    #head {
        width: 2.4rem;
        height: 2.4rem;
        border-radius: 50%;
        border: 2px solid #ccc;
        margin: 1.2rem auto auto auto;
    }

    #name {
        text-align: center;
        color: #ea0027;
        font-size: 0.65rem;
    }

    #menu_btn {
        width: 100%;
        border-top: 1px solid #ccc;
    }

    #menu_btn a {
        width: 100%;
        line-height: 2.3rem;
        display: block;
        color: #595959;
        text-decoration: none;
        padding-left: 3rem;
        box-sizing: border-box;
        border-bottom: 1px solid #ccc;
        overflow: hidden;
        font-size: 0.65rem;
    }

    #come {
        background: url(./media/come.png) 15% center no-repeat;
        background-size: 1.2rem auto;
    }

    #get {
        background: url(./media/get.png) 15% center no-repeat;
        background-size: 1.2rem auto;
    }

    #game {
        background: url(./media/game.png) 15% center no-repeat;
        background-size: 1.2rem auto;
    }

    #shop {
        background: url(./media/shop.png) 15% center no-repeat;
        background-size: 1.2rem auto;
    }

    #wall {
        background: url(./media/heart.png) 15% center no-repeat;
        background-size: 1.2rem auto;
    }

    #list {
        background: url(./media/people.png) 15% center no-repeat;
        background-size: 1.2rem auto;
    }

    .arrow {
        width: 0.5rem;
        height: 1rem;
        display: block;
        background: url(./media/arrow.png) no-repeat;
        background-size: 100%;
        float: right;
        margin-top: 0.7rem;
        margin-right: 1rem;
    }

    .menu_b {
        width: 1.25rem;
        height: 1.25rem;
        position: absolute;
        left: 0.5rem;
        top: 0.5rem;
        display: block;
    }

    .menu_show {
        -webkit-transition: 0.5s all;
        -webkit-transform: translateX(0%);
    }

    #arrow_b {
        width: 1rem;
        display: block;
        position: absolute;
        left: 50%;
        margin-left: -0.5rem;
        bottom: 0.5%;
        z-index: 50;
        -webkit-animation: arrow 0.5s linear infinite alternate;
        -o-animation: arrow 0.5s linear infinite alternate;
        animation: arrow 0.5s linear infinite alternate;
    }

    @-webkit-keyframes arrow {
        0% {
            -webkit-transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(4px);
        }
    }

    .music {
        width: 1.2rem;
        display: block;
        position: absolute;
        right: 0.5rem;
        top: 0.5rem;
    }

    #menu_r {
        width: 1.25rem;
        height: 1.25rem;
        position: absolute;
        left: 0.5rem;
        top: 0.5rem;
        display: block;
        z-index: 50;
    }

    /*#water_b{
	width: 100%;
	height: 2px;
	position: absolute;
	left: 0;
	bottom: 0;
	background-color: #b90300;
	z-index: 20;
    }*/
    @media only screen and (max-height: 416px ) {
        #stampGifContainer {
            height: 13rem;
        }
    }
</style>

<body>
<div id="menu_page">
    <a href="javascript:;" id="menu_r">
        <img src="./media/menu_r.png" width="100%">
    </a>

    <div class="menu">
        <div id="head"><img src="./media/star_red.png" width="100%"></div>
        <p id="name">小明</p>

        <div id="menu_btn">
            <a href="javascript:;" id="come">签到<span class="arrow"></span></a>
            <a href="javascript:;" id="get">集赞<span class="arrow"></span></a>
            <a href="javascript:;" id="game">游戏<span class="arrow"></span></a>
            <a href="javascript:;" id="shop">兑换商城<span class="arrow"></span></a>
            <a href="javascript:;" id="wall">祝福墙<span class="arrow"></span></a>
            <a href="javascript:;" id="list">宾客名单<span class="arrow"></span></a>
        </div>
    </div>
</div>
<div id="preloader">
    <div id="progressContainer">
        <div id="percentage">0%</div>
        <div id="progress">
            <div id="progressBar"></div>
        </div>
        <div id="country">
            <?= $_SERVER['SERVER_ADDR'] == '114.215.208.175' ? '中国' : ''; ?>
            <?= $_SERVER['SERVER_ADDR'] == '198.11.173.209' ? '' : ''; ?>
        </div>
    </div>
</div>
<a href="javascript:;" id="arrow_b">
    <img src="./media/arrow_b.png" width="100%">
</a>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <!-- page1 -->
        <div class="swiper-slide">
            <a href="javascript:;" class="menu_b">
                <img src="./media/menu_b.png" width="100%">
            </a>
            <a href="javascript:;" class="music">
                <img src="./media/music.png" width="100%">
            </a>
            <img src="./media/index_pic.jpg" width="100%">
        </div>
        <!-- page1 end -->
        <!-- page2 -->
        <div class="swiper-slide">
            <img id="awardCoffee" src="./media/code.jpg"/>

            <div id="pageContent">
                <div id="aaa"></div>

                <?php if ($_SERVER['SERVER_ADDR'] == '198.11.173.209'): ?>
                    <img id="isobar" src="./media/isobar.png"/>
                <?php endif; ?>

                <img id="logo" src="./media/kele_logo.png"/>

                <div id="outletContainer">
                    <img id="outlet" src="./media/outlet.png"/>
                </div>
                <div id="waterContainer">
                    <img id="water" src="./media/guan.png"/>
                </div>

                <div id="stamp-screen">
                    <div id="stampGifContainer">
                        <img id="stampGif" src="./media/ping.png"/>
                    </div>

                    <div id="maskPanel"></div>

                    <div id="badgeContainer">
                        <ul id="badgeList">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>

                <div id="waveContainer">
                    <div id="wave"></div>
                    <div id="waveBottom"></div>
                    <div id="pao"></div>
                    <div id="water_b"></div>
                </div>

                <div id="vsstamp-progress-bar"></div>

                <div id="stampLoading">
                    <div id="stampBg"></div>
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>

                <span id="badge_tpl"></span>

                <audio id="stampAudio" src="./media/stamp_success.mp3" preload></audio>
                <audio id="stampError" src="./media/stamp_error.mp3" preload></audio>
                <audio id="stampGet" src="./media/stamp_get1.mp3" preload></audio>
                <audio id="pour" src="./media/pour.mp3" preload></audio>
                <audio id="watermachine" src="./media/watermachine.mp3" preload></audio>
            </div>
        </div>
        <!-- page2 end -->
    </div>
</div>
<script>
    var tpl = '<div id="orientLayer" class="mod-orient-layer"><div class="mod-orient-layer__content"><i class="icon mod-orient-layer__icon-orient"></i><div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div></div></div>';
    $('body').append(tpl);
    oriChange();
    window.addEventListener("orientationchange", oriChange, false);
    function oriChange() {
        var ori = window.orientation;
        if (ori == 180 || ori == 0) {
            $("#orientLayer").css("display", "none");
            $(".mod-orient-layer").css("display", "none");
        }
        if (ori == 90 || ori == -90) {
            $("#orientLayer").css("display", "block");
            $(".mod-orient-layer").css("display", "block");
        }
    }
    //start-- swiper js
    var mySwiper = new Swiper('.swiper-container', {
        effect: 'fade',
        direction: 'vertical',
        onSlideChangeEnd: function (swiper) {
            if (mySwiper.activeIndex == 1) {
                $("#arrow_b").fadeOut();
            } else {
                $("#arrow_b").fadeIn();
            }
        }
    });

    $(".menu_b").on('touchstart', function () {
        $("#menu_page").fadeIn();
        $(".menu").addClass('menu_show');
    });
    $("#menu_r").on('touchstart', function () {
        $("#menu_page").fadeOut();
        $(".menu").removeClass('menu_show');
    });

    $("#get").on('touchstart', function () {
        $("#menu_page").fadeOut();
        $(".menu").removeClass('menu_show');
        mySwiper.slideTo(2);
    });
    $("#arrow_b").on('touchstart', function () {
        mySwiper.slideTo(2);
    });
    //end-- swiper js
    document.getElementById("watermachine").volume = 0.3;
    document.getElementById("pour").volume = 0.1;


    var showStampLoading = function () {
        $('#stampLoading').show();
        $('#stampBg').addClass('flickLoading');
    }
    var hideStampLoading = function () {
        $('#stampLoading').hide();
        $('#stampBg').removeClass('flickLoading');
    }

    var added_badge = [];
    var badge_limit = 3;
    var allowTouch = true;
    var addBadge = function (data) {
        if (added_badge.length >= badge_limit) return false;

        //动画过程中不允许印章
        allowTouch = false;

        if (data.error) {
            var err_txt = 'Unrecognized';
            $('#stampError')[0].play();
            $("#vsstamp-messages").html(err_txt).fadeIn();
            setTimeout(function () {
                    if ($("#vsstamp-messages").html() == err_txt) {
                        $("#vsstamp-messages").fadeOut({
                            complete: $(this).empty()
                        });
                    }

                    ifAllowStamp();
                },
                2000);
            return false;
        }

        var success_txt = 'STAMP-ID: ' + data.stamp.serial;
        $("#vsstamp-messages").html(success_txt).fadeIn();
        setTimeout(function () {
                if ($("#vsstamp-messages").html() == success_txt) {
                    $("#vsstamp-messages").fadeOut({
                        complete: $(this).empty()
                    });
                }
            },
            2000);

        //已经添加过，不再添加印章
        /*
         if ($.inArray(data.stamp.serial, added_badge) >= 0) {
         var err_added_txt = '重复盖章无效';
         $('#stampError')[0].play();
         $("#vsstamp-messages").html(err_added_txt);
         setTimeout(function () {
         if ($("#vsstamp-messages").html() == err_added_txt) {
         $("#vsstamp-messages").empty();
         }

         ifAllowStamp();
         }, 2000);
         return false;
         }
         */

        added_badge.push(data.stamp.serial);
        if (added_badge.length >= 3) {
            delete localStorage.added_badge;
        } else {
            localStorage.added_badge = added_badge;
        }

        var new_badge = $('#badge_tpl').clone(true);
        var target_badge = $('#badgeList li').get(added_badge.length - 1);

        var cssAnimation = document.createElement('style');
        cssAnimation.type = 'text/css';

        var keyframes_name = 'badge_keyframes_' + added_badge.length;

        var rules_webkit = document.createTextNode('@-webkit-keyframes ' + keyframes_name + ' {' + 'from { -webkit-transform: scale(10, 10) }' + 'to { -webkit-transform: scale(1, 1) }' + '}');
        cssAnimation.appendChild(rules_webkit);

        var rules = document.createTextNode('@keyframes ' + keyframes_name + ' {' + 'from { transform: scale(10, 10) }' + 'to { transform: scale(1, 1) }' + '}');
        cssAnimation.appendChild(rules);

        document.getElementsByTagName("head")[0].appendChild(cssAnimation);

        $(new_badge).css({
            top: $(target_badge).offset().top,
            left: $(target_badge).offset().left,

            'animation': keyframes_name + ' 0.3s ease-in',
            '-webkit-animation': keyframes_name + ' 0.3s ease-in',
        });

        $('#pageContent').append(new_badge);

        setTimeout(function () {
                $('#stampGet')[0].play();
            },
            200);

        setTimeout(function () {
                pour(added_badge.length);
            },
            1000);
    }

    var ifAllowStamp = function () {
        if (added_badge.length >= badge_limit) {
            allowTouch = false;
        } else {
            allowTouch = true;
        }
    }

    var pour = function (step) {
        //倒水动画
        //1. 下水管
        $('#outletContainer').one('transitionend webkitTransitionEnd',
            function () {
                $('#outletContainer').off('transitionend webkitTransitionEnd');

                //2.1 倒水
                $('#waterContainer').one('transitionend webkitTransitionEnd',
                    function () {
                        $('#waterContainer').off('transitionend webkitTransitionEnd');

                        //重置water
                        $('#waterContainer').css('-webkit-transition', '0s');
                        $('#waterContainer').css('transition', '0s');

                        $('#waterContainer').css('-webkit-transform', 'translateY(0rem)');
                        $('#waterContainer').css('transform', 'translateY(0rem)');

                        setTimeout(function () {
                                $('#waterContainer').css('-webkit-transition', '2.5s linear 0.5s');
                                $('#waterContainer').css('transition', '2.5s linear 0.5s');
                            },
                            0);

                        //3. 收起水管
                        $('#outletContainer').css('-webkit-transform', 'translateY(0rem)');
                        $('#outletContainer').css('transform', 'translateY(0rem)');

                        ifAllowStamp();
                    });
                $('#waterContainer').css('-webkit-transform', 'translateY(80rem)');
                $('#waterContainer').css('transform', 'translateY(80rem)');

                //2.2 涨水
                if (step == 1) {
                    $('#waveContainer').css('-webkit-transition', '2.5s linear');
                    $('#waveContainer').css('transition', '2.5s linear');

                    //setTimeout为了凑动画时间
                    setTimeout(function () {
                            $('#pour')[0].play();
                        },
                        1500);

                    setTimeout(function () {
                            $("#pao").removeClass('pao_show');
                            waveObj.raindrops('startWave');
                            $('#waveContainer').css('-webkit-transform', 'translateY(-4.3rem)');
                            $('#waveContainer').css('transform', 'translateY(-4.3rem)');
                            $('#waveBottom').css('height', '4.3rem');
                            $('#waveBottom,#waveContainer,#wave').css('transition', '2s 1s linear');
                            // $("#pao").css('bottom', '4.7rem');
                            $("#wave").css('height', '1rem');
                            setTimeout(function () {
                                    waveObj.raindrops('stopWave');
                                    $("#pao").addClass('pao_show');
                                    setTimeout(function () {
                                            $("#pao").removeClass('pao_show');
                                        },
                                        1000)
                                },
                                3000);
                        },
                        1);
                }

                if (step == 2) {
                    $('#waveContainer').css('-webkit-transition', '2s linear');
                    $('#waveContainer').css('transition', '2s linear');

                    setTimeout(function () {
                            $('#pour')[0].play();
                        },
                        1400);

                    //setTimeout为了凑动画时间
                    setTimeout(function () {
                            waveObj.raindrops('startWave');
                            $('#waveContainer').css('-webkit-transform', 'translateY(-8.3rem)');
                            $('#waveContainer').css('transform', 'translateY(-8.3rem)');
                            $('#waveBottom').css('height', '8.3rem');
                            $('#waveBottom,#waveContainer,#wave').css('transition', '2s linear');
                            $("#wave").css('height', '1rem');
                            setTimeout(function () {
                                    waveObj.raindrops('stopWave');
                                    $("#pao").addClass('pao_show');
                                    setTimeout(function () {
                                            $("#pao").removeClass('pao_show');
                                        },
                                        1000)
                                },
                                1500);
                        },
                        1200);
                }

                if (step == 3) {
                    $('#waveContainer').css('-webkit-transition', '2s linear');
                    $('#waveContainer').css('transition', '2s linear');

                    setTimeout(function () {
                            $('#pour')[0].play();
                        },
                        1300);

                    //setTimeout为了凑动画时间
                    setTimeout(function () {
                            waveObj.raindrops('startWave');
                            // $('#waveContainer').css('-webkit-transform', 'translateY(-10.5rem)');
                            $('#waveContainer').css('-webkit-transform', 'translateY(-12rem)');
                            $('#waveContainer').css('transform', 'translateY(-12rem)');
                            $('#waveBottom').css('height', '12rem');
                            $('#waveBottom,#waveContainer,#wave').css('transition', '2s linear');
                            $("#wave").css('height', '1rem');
                            setTimeout(function () {
                                    waveObj.raindrops('stopWave');
                                    $("#pao").addClass('pao_show');
                                    setTimeout(function () {
                                            $("#pao").removeClass('pao_show');
                                        },
                                        1000);
                                    awardCoffee();
                                },
                                1500);
                        },
                        1100);
                }
            });
        $('#outletContainer').css('-webkit-transform', 'translateY(0.8rem)');
        $('#outletContainer').css('transform', 'translateY(0.8rem)');

        $('#watermachine')[0].play();
    }

    var awardCoffee = function () {
        setTimeout(function () {
                $('#pageContent').one('transitionend webkitTransitionEnd',
                    function () {
                        $('#pageContent').off('transitionend webkitTransitionEnd');
                        $('#awardCoffee').addClass('show');
                    });
                $('#pageContent').addClass('blur');

                $('#awardCoffee').fadeIn();
            },
            2000);
    }

    var waveObj;
    $(function () {
        if (typeof localStorage.added_badge != 'undefined') {
            var tmp_added_badge_list = localStorage.added_badge.split(',');
            var tmp_index = 1;
            for (var i in tmp_added_badge_list) {
                added_badge.push(tmp_added_badge_list[i]);
                $('#badgeList li:nth-child(' + tmp_index + ')').css('background-image', 'url(./media/star_red.png)');

                if (tmp_index == 1) {
                    $('#waveBottom').css('height', '4.3rem');
                } else if (tmp_index == 2) {
                    $('#waveBottom').css('height', '8.3rem');
                }

                tmp_index++;
            }
        }

        $('#waveContainer').css('top', $("#stampGifContainer").offset().top + $("#stampGifContainer").height() - 15);
        /* $('#stampGifContainer').height())*/
        $('#progressBar').css('border-radius', '0.2rem');
        $('#progressBar').css('-webkit-border-radius', '0.2rem');
        // alert(0);
        $('#preloader').fadeOut();
        $(".swiper-container").show();

        $('body')[0].addEventListener('touchmove',
            function (e) {
                e.preventDefault();
            },
            false);

        $('#stamp-screen').width($(window).width());
        $('#stamp-screen').height($(window).height());
        // $('#maskPanel').css('top', $("#stampGifContainer").offset().top + $("#stampGifContainer").height());
        $('#maskPanel').css('top', $('#stampGifContainer').offset().top + $('#stampGifContainer').height() - 2);

        waveObj = $('#wave').raindrops({
            color: '#350109',
            canvasHeight: 20,
            waveLength: 100,
            waveHeight: 100,
            density: 0.01,
            rippleSpeed: 0.05,
        });

        $('#stamp-screen').on('touchstart', function (data) {
            if (!allowTouch) return;

            //3点就触发
            if (data.originalEvent.touches.length >= 3) {
                //模拟网络请求
                showStampLoading();

                //播放音效
                $('#stampAudio')[0].play();

                if ("vibrate" in navigator) {
                    // vibration API supported
                    navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;

                    if (navigator.vibrate) {
                        // vibration API supported
                        navigator.vibrate([200, 300, 200]);
                    }
                }

                setTimeout(function () {
                    hideStampLoading();
                    addBadge({
                        stamp: {
                            serial: 1,
                        }
                    });
                }, 1000);
            }
        });
    });
</script>
</div>
</body>
</html>