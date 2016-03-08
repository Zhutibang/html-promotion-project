<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx1eb346a7228f3e99", "78f77eea2647fc5b2f625161e76af8d4");
$signPackage = $jssdk->GetSignPackage();
$weixin_url="http://mp.weixin.qq.com/s?__biz=MjM5ODMwNTUyMw==&mid=217893365&idx=1&sn=68905c2622897ea0ba9770a2bc3215ab&scene=0#rd";
?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
wx.config({
    debug:false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
   jsApiList: [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo'
      ]
  });
  </script>

