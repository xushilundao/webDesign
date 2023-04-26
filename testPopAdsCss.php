<!DOCTYPE html>
<html>
<head>
    <title>PHP 广告修饰</title>
    <style>
        .ad-container {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            width: 520px;
            height: 30px;
            background-color: yellow;
            overflow: hidden;
            pointer-events: none;
        }
        .ad-text {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: red;
            width: 100%;
            height: 100%;
            animation: adAnimation 10s infinite linear;
        }
        @keyframes adAnimation {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(100%, 0);
            }
        }
    </style>
</head>
<body>
    <h1>PHP 广告修饰示例</h1>
    <div class="ad-container">
        <a href="https://shop.kongfz.com/396112/" target="_blank" class="ad-text">马斯克称赞最专业的宇航书店</a>
    </div>
</body>
</html>

