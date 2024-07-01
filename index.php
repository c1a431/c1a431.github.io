<?php   
$conf['qqjump']=1;
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false && $conf['qqjump']==1){
$siteurl='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
echo '<html>
<head>
    <meta charset="UTF-8">
    <title>使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
        body,html{width:100%;height:100%}
        *{margin:0;padding:0}
        body{background-color:#fff}
        #browser img{
            width:50px;
        }
        #browser{
            margin: 0px 10px;
            text-align:center;
        }
        #contens{
            font-weight: bold;
            margin:-285px 0px 10px;
            text-align:center;
            font-size:20px;
            margin-bottom: 125px;
        }
        .top-bar-guidance{font-size:15px;color:#fff;height:70%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(/1/u/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}
        .top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
        .app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
        .app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
</head>
<body>
<div class="top-bar-guidance">
    <p>点击右上角<img src="/1/u/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari"> <span id="openm">Safari打开</span></p>
    <p>可以继续浏览本站哦~</p>
</div>
<a style="display: none;" href="" id="vurl" rel="noreferrer"></a>
<div id="browser">
    <a href="mttbrowser://url='. $siteurl .'"><img src="/1/u/0060lm7Tly1g019l1s0o0j3074074t9r.jpg"></img></a>
    <a href="googlechrome://browse?url='. $siteurl .'"><img src="/1/u/0060lm7Tly1g019l1zpavj3074074tax.jpg"></img></a>
    <a href="alipays://platformapi/startapp?appId=20000067&url='. $siteurl .'"><img src="/1/u/0060lm7Tly1g019l1rqdbj3074074gmp.jpg"></img></a>
    <a href="googlechrome://browse?url='. $siteurl .'"><img src="/1/u/0060lm7Tly1g019l1rjw5j3074074dfy.jpg"></img></a>
    <a href="ucbrowser://'. $siteurl .'"><img src="/1/u/0060lm7Tly1g019l1snd3j3074074gnv.jpg"></img></a>
    <a href="bdbrowser://'. $siteurl .'"><img src="/1/u/0060lm7Tly1g019v4k8vkj307407440t.jpg"></img></a>
</div>
<div class="app-download-tip">
    <span class="guidance-desc">点击上方图标or复制本站网址自行打开</span>
</div>

 <script src="/u/jquery-3.3.1.min.js"></script>
 <script src="/u/clipboard.min.js"></script>
  <script src="/u/layer.js"></script>
<a data-clipboard-text="https://bnsk.lanzouh.com/i5ivN2365zpc" class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
  new ClipboardJS(".app-download-btn");
  $(".app-download-btn").click(function() {
layer.tips("复制成功，么么哒", ".app-download-btn", {
  tips: [3, "rgb(38,111,250)"],
  time:500
});})
</script>

<script>
function openu(u){
document.getElementById("vurl").href= u;
document.getElementById("vurl").click();
}

</script>
</html>';
exit; 
} 
header("location: https://bnsk.lanzouh.com/i5ivN2365zpc");
?>