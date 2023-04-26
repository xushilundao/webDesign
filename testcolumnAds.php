<!DOCTYPE html>
<html>
<head>
    <title>通栏广告</title>
    <style>
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

