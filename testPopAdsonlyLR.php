<!DOCTYPE html>
<html>
<head>
    <title>文字广告</title>
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
    </style>
</head>
<body>
    <!-- 广告容器 -->
    <div id="adContainer">
        <!-- 广告文本 -->
        <div id="adText">马斯克称赞最专业的宇航书店</div>
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
        var x = 0; // 初始位置
        var speed = 1; // 移动速度，单位为像素/帧

        // 定义每一帧的动画函数
        function animate() {
            // 更新广告容器的位置
            x += speed;
            adContainer.style.left = x + 'px';

            // 当广告容器移出屏幕时，将其重新放置到屏幕外，并反向移动
            if (x >= window.innerWidth) {
                x = -adContainer.offsetWidth;
            }

            // 在下一帧执行动画函数
            requestAnimationFrame(animate);
        }

        // 开始执行动画
        animate();
    </script>
</body>
</html>

