<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-touch-fullscreen" content="yes">
    <link type="text/css" href="css/css.css" rel="stylesheet">

    <title>牛牛接金币</title>
    <!-- BAIDU_TONGJI -->
    <style type="text/css">
        body,
        div,
        canvas {
            image-rendering: optimizeSpeed;
            -webkit-image-rendering: optimizeSpeed;
            -webkit-interpolation-mode: nearest-neighbor;
        }
        
        body {
            padding: 0;
            margin: 0;
            font-size: 12px;
            background-color: #000;
        }
        
        body,
        html {
            height: 100%;
        }
        
        #outer {
            height: 100%;
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        
        #outer[id] {
            display: table;
            position: static;
        }
        
        #middle {
            position: absolute;
            top: 50%;
        }
        /* for ie only*/
        
        #middle[id] {
            display: table-cell;
            /*vertical-align: middle;*/
            position: static;
        }
        
        #end_score,
        #ljBtn,
        #ash_tan,
        #yinyekbtn,
        #yinyegbtn {
            display: table-cell;
        }
        
        .h5 {
            overflow: hidden;
            position: absolute;
            width: 100%;
            top: 15%;
            left: 0px;
            display: none;
        }
        
        #hongbao {
            width: 100%;
            overflow: hidden;
            display: block;
            padding: 0px 25%;
        }
        
        #hongbao img {
            width: 50%;
            height: 60%;
        }
        
        .sbtn {
            width: 40%;
            height: 40px;
            margin-top: 20px;
            margin-left: 40%;
        }
        
        #musicbtn {
            position: absolute;
            z-index: 9;
            right: 5px;
            top: 3%;
            display: block;
            width: 10%;
            height: 50px;
        }
        
        #on {
            display: none;
            position: absolute;
            z-index: 9;
            right: 5px;
            top: 3%;
            width: 10%;
            height: 50px;
        }
        
        #countImg {
            display: none;
            position: absolute;
            z-index: 9999;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            opacity: 0;
        }
        
        #countImg.imgon {
            opacity: 1;
            transition: all .8s;
            -webkit-transition: all .8s;
        }
    </style>


    <script type="text/javascript" src="js/quark.base-1.0.0.alpha.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
    <!-- <script type="text/javascript" src="src/Audio.js"></script> -->
    <script type="text/javascript" src="js/Orientation.js"></script>
    <script type="text/javascript" src="js/Button.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/Peach.js"></script>
    <script type="text/javascript" src="js/Monkey.js"></script>
    <script type="text/javascript" src="js/Num.js"></script>
    <link rel="stylesheet" type="text/css" href="css/css.css"> <?php require('weixin_sdk.php'); ?>
</head>

<body style="-webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    <div id="outer">
        <div id="middle">
            <div id="container" style="position: relative; top: -50%; width: 100%; height: 100%; margin: 0px auto; overflow: hidden; background: -webkit-gradient(linear, 0 0, 0 100%, from(rgb(0, 194, 235)), to(rgb(203, 254, 255)));">

            </div>

        </div>
    </div>

    <script>
        wx.ready(function() {
            var shareData = {

                title: '牛牛接金币',
                desc: '超过200分，即可获得一个免费大礼盒，小伙伴们快来一起领礼盒吧~！',
                link: window.location.href,
                imgUrl: 'http://ww1.sinaimg.cn/large/6ee3e8b3gw1f1phwlwuekj207p085mxl.jpg',
                trigger: function(res) {
                    if (1 > 0)
                        shareData.title = "牛牛接金币,我达到了" + game.score + "分，超过200分，即可获得一个免费大礼盒，小伙伴们快来一起领礼盒吧~！";
                    //        alert('用户点击发送给朋友');
                },
                success: function(res) {
                    //        alert('已分享');
                    location.href = '<?php echo $weixin_url; ?>';
                },
                cancel: function(res) {
                    alert("别这样的啦，好东西要和朋友分享的嘛！");
                    //        location.href = '<?php echo $weixin_url; ?>';
                },
                fail: function(res) {
                    //        alert(JSON.stringify(res));
                }
            };
            wx.onMenuShareAppMessage(shareData);
            wx.onMenuShareTimeline(shareData);
            wx.onMenuShareQQ(shareData);
            wx.onMenuShareWeibo(shareData);
        });
        wx.error(function(res) {
            //  alert(res.errMsg);
        });
    </script>

    <audio src="images/a.mp3" preload="auto" loop></audio>
    <div id="share" style="position:absolute;top:0px;left:0px;display:none;width:100%;height:100%; z-index:999"><img src="images/share.png" width="100%" height="100%" alt=""></div>
    <!--H5 的页面-->

    <div id="musicbtn"><img src="images/music1.png" alt="" width="100%"></div>
    <div id="on"><img src="images/music.png" width="100%"></div>
    <img id="countImg" src="images/h.png">
    <script type="text/javascript" src="js/index.js"></script>
    <!-- ZHUTIBANG_COPYRIGHT -->
</body>

</html>
