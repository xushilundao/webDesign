<!DOCTYPE html>
<html>
<head>
    <title>AI网站一网打尽！</title>
    <style>
        /* 设置广告容器的样式 */
        #adContainer {
            position: absolute;
            width: 520px;
            height: 30px;
            background-color: yellow;
            overflow: hidden;
            cursor: pointer;
        }

        /* 设置广告文本的样式 */
        #adText {
            position: absolute;
            width: 100%;
            height: 100%;
            line-height: 30px;
            font-size: 16px;
            text-align: center;
            color: red;
            white-space: nowrap;
        }
 /* 通栏广告样式 */
        .ad-container {
            width: 100%;
            height: 77px;
            background-color: #ffd700; /* 修改背景色为金黄色 */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            cursor: pointer; /* 设置鼠标样式为手型 */
        }

        .ad-text {
            font-size: 24px;
            font-weight: bold;
            animation: flicker 5s infinite;
            color: red; /* 修改初始颜色为红色 */
        }

        /* 文字闪烁动画 */
        @keyframes flicker {
            0%, 100% {
                opacity: 1;
                color: red; /* 修改颜色为红色 */
            }
            20% {
                color: yellow; /* 随机颜色选择：黄色 */
            }
            40% {
                color: blue; /* 随机颜色选择：蓝色 */
            }
            60% {
                color: green; /* 随机颜色选择：绿色 */
            }
            80% {
                color: purple; /* 随机颜色选择：紫色 */
            }
        }
    </style>
</head>
<body>
    <!-- 广告容器 -->
    <div id="adContainer">
        <!-- 广告文本 -->
        <div id="adText">马斯克同志称赞为最专业的宇航书店</div>
    </div>

    <script>
        // 获取广告容器和广告文本的 DOM 元素
        var adContainer = document.getElementById('adContainer');
        var adText = document.getElementById('adText');

        // 设置广告文本点击事件，点击时跳转到指定的 URL
        adText.addEventListener('click', function() {
            window.location.href = 'https://shop.kongfz.com/396112/';
        });

        // 设置广告容器的初始位置和速度
        var x = 0; // 初始水平位置
        var y = 0; // 初始垂直位置
        var speedX = 1; // 水平移动速度，单位为像素/帧
        var speedY = 1; // 垂直移动速度，单位为像素/帧

        // 定义每一帧的动画函数
        function animate() {
            // 更新广告容器的位置
            x += speedX;
            y += speedY;
            adContainer.style.left = x + 'px';
            adContainer.style.top = y + 'px';

            // 当广告容器移出屏幕时，将其重新放置到屏幕外，并反向移动
            if (x >= window.innerWidth || x <= -adContainer.offsetWidth) {
                speedX = -speedX;
            }
            if (y >= window.innerHeight || y <= -adContainer.offsetHeight) {
                speedY = -speedY;
            }

            // 在下一帧执行动画函数
            requestAnimationFrame(animate);
        }

        // 开始执行动画
        animate();
    </script>
<?php
$urls = array(
"https://freegpt.one/",
"https://chat.openai.com/chat",
"https://app.slack.com/client/T053CFKCJVA/D053CHVF3T6",
"https://bard.google.com/",
"https://colab.research.google.com/notebooks/",
"https://briefgpt.xyz/top",
"https://poe.com/",
"https://www.bing.com/search?q=Bing+AI&showconv=1&FORM=hpcodx",
"https://www.mathjax.org/#demo",
"https://snip.mathpix.com/",
"https://www.chatpdf.com/",
"http://lib.shutong121.com/",
"https://github.com/f/awesome-chatgpt-prompts/",
"https://www.onlinedoctranslator.com/en/translationform",
"https://matlab.mathworks.com/",
"https://www.youtube.com/watch?v=s4jtkzHhLzY&t=256s",
"https://ap.www.namecheap.com/",
"https://sci-hub.se/",
"https://zlibsearch.1kbtool.com/",
"https://buyhub.xyz/forum/forum.php?mod=viewthread&tid=67&extra=page%3D1",
"https://defiprime.com/exchanges",
"http://quote.eastmoney.com/sz000756.html",
"https://translate.google.com/?sl=en&tl=zh-CN&op=docs",
"https://shop.kongfz.com/396112/",
"http://quote.eastmoney.com/sz002603.html",
"https://leetcode.com/",
"https://colab.research.google.com/?utm_source=scs-index",
"https://pro.coinmarketcap.com/account",
"https://www.bilibili.com/video/BV1Ae4y1D7BU/?vd_source=4def9883c7a9cfc2c5071bbb43f7686d",
"https://www.dygod.net/html/gndy/dyzz/20070509/2035.html",
"https://breached.to/Thread-Selling-2022-SHGA-Shanghai-Gov-National-Police-database?page=21&highlight=shanghai",
"https://coinmarketcap.com/currencies/dogecoin/",
"https://coinmarketcap.com/currencies/shiba-inu/",
"https://www.coingecko.com/en/coins/gala",
"https://coinmarketcap.com/api/",
"https://coinmarketcap.com/api/documentation/v1/",
"https://unmineable.com/coins/DOGE/address/D8gwrJo8awcUnLPtpgVBL9Lwj4iqJMQpPc",
"https://unmineable.com/coins/ETh/address/0x754EE4ac33809464ea7Ed2Da9A9B032CA035364b",
"https://unmineable.com/coins/GALA/address/0x07BB7552e79A0cADCf4Bb56f6e48A50aa36Fb167",
"https://finance.sina.com.cn/money/forex/hq/BTCETHUSD.shtml",
"https://cn.investing.com/equities/mitsubishi-heavy-industries,-ltd.",
"https://i.finance.sina.com.cn/zixuan,all?sudaref=finance.sina.com.cn&display=0&retcode=0",
"https://mail.qq.com/",
"https://mail.google.com/mail/u/0/#inbox",
"https://www.youtube.com/",
"https://www.bilibili.com/",
"https://www.linkedin.com/feed/",
"https://twitter.com/home",
"https://www.binance.com/zh-CN/markets",
"https://www.google.com/search?q=Coinbase&oq=co&aqs=chrome.0.69i59j69i57j69i60l4j69i65j69i60.692j0j15&sourceid=chrome&ie=UTF-8",
"https://www.coinbase.com/",
"https://www.zhihu.com//",
"https://www.ixigua.com/home/554626371819964?list_entrance=homepage",
"http://www.buyhub.xyz/forum",
"https://buyhub.xyz/wordpress"
);

echo "<div style='display: flex; flex-wrap: wrap; background-color: lightgreen''>";

foreach ($urls as $url) {
  $website_name = preg_replace('#^https?://#', '', rtrim($url, '/'));
  echo "
  <a href='" . $url . "' target='_blank'>
    <button style='flex: 0 0 calc(20% - 10px); margin: 5px;'>" . $website_name . "</button>
  </a>";
}

echo "</div>";
?>
<div class="ad-container">
        <div class="ad-text">
            全网最全的宇航书店，快快点击吧。
        </div>
    </div>

    <script>
        // 点击通栏广告跳转到指定 URL，并在新标签页打开链接
        document.querySelector('.ad-container').addEventListener('click', function() {
            window.open('https://shop.kongfz.com/396112/', '_blank');
        });

        // 鼠标移到通栏时改变鼠标样式为火箭样式
        document.querySelector('.ad-container').addEventListener('mouseover', function() {
            document.querySelector('.ad-container').style.cursor = 'url("https://cur.cursors-4u.net/cursors/cur-2/cur112.ani"), auto';
        });
    </script>
</body>
</html>
