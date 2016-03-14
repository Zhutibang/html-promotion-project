<!-- ACCESS_TIME -->
<!-- ACCESS_DOMAIN -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>测测你天生是什么命</title>
    <meta name="keywords" content="测测你天生是什么命" />
    <meta name="description" content="测测你天生是什么命" />
    <!-- BAIDU_TONGJI -->
    <!-- WX_USER_INFO -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jQueryRotate.2.2.js"></script>
    <script type="text/javascript" src="jquery.easing.min.js"></script>
    <link rel="stylesheet" href="zp.css" />
    <style>
        #disk {
            background: url(wenzhangku.gif) no-repeat
        }
        
        .retry {
            margin: 10px;
        }
        
        button {
            padding: 4px;
        }
        
        input {
            border: 1px solid #C7C7C7;
        }
    </style>

    <script type="text/javascript">
        var info = new Array()
        info[0] = "荣华富贵命"
        info[1] = "天生脱俗的潇洒命"
        info[2] = "仕途顺畅的当官命"
        info[3] = "心比天高的丫头命"
        info[4] = "与生俱来的富贵命"
        info[5] = "状元才子命"
        info[6] = "千金小姐命"
        info[7] = "命中注定的桃花命"
        info[8] = "王侯将相的帝王命"
        info[9] = "操心费神的劳苦命"
        info[10] = "名利双收的福禄命"
        info[11] = "健康长寿命"


        function choujiang() {
            if ($("#name").val() == "") {
                alert("请输入名字");
                $("#name").focus();
                return false;
            }

            $.post("do.php", {
                name: $("#name").val()
            }, function(data) {
                var a = data * 30 + 15;
                $("#startbtn").rotate({
                    duration: 6000,
                    angle: 0,
                    animateTo: 2880 + a,
                    easing: $.easing.easeOutSine,
                    callback: function() {

                        var infos = "“" + $("#name").val() + "”天生是" + info[data] + "。";
                        $(document).attr('title', infos + "测测你天生是什么命");
                        var infos = "<font color=orange><b>【测试结果】</b></font><br />" + infos;
                        $("#tip").html(infos);
                        $("#info").css({
                            display: ""
                        });
                    }
                });

            });

        }

        function retry() {
            $("#info").css({
                display: "none"
            });
        }
    </script>
</head>

<body>
    <div id="main">
        <h1>测测你天生是什么命</h1>
        <div class="demo">
            <div id="disk"></div>
            <div id="start"><img src="start.png" id="startbtn" onClick="choujiang()"></div>
        </div>
        <div class="shuru">请输入您的名字：
            <input value="" id="name">
        </div>
    </div>
    <div id="info" style="display:none;">
        <div id="tip"></div>

        <div class="retry">
            <button onClick="retry()">重新测试</button>
            <button onClick="location.href='http://zhutibang.cn?m=ceo&p=follow'">关注我们</button>
        </div>
    </div>
    <div id="footad">
    </div>
    <footer style="margin-top:10px; font-size:10px; color:#bbb; text-align:center;">
        郑重承诺：本页面为纯静态HTML制作，绝不收集任何用户信息!
    </footer>
    <textarea id="adhtml" style="display:none">
        <button onClick="location.href='http://zhutibang.cn?m=ceo&p=follow'">关注我们</button>
    </textarea>
    <script>
        infos = $("#adhtml").val();
        $("#footad").append(infos);
    </script>
    <!-- ZHUTIBANG_COPYRIGHT -->
    <!-- BOTTOM_BANNER -->
</body>

</html>
