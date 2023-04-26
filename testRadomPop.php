<!DOCTYPE html>
<html>
<head>
  <title>PHP网页广告示例</title>
  <style>
    /* 样式代码，用于定义广告的样式 */
    .ad-container {
      position: fixed;
      z-index: 9999; /* 层级 */
      background-color: yellow; /* 黄底 */
      color: red; /* 红字 */
      font-size: 14px; /* 字体大小 */
      padding: 5px; /* 内边距 */
      border-radius: 5px; /* 边框圆角 */
      cursor: pointer; /* 鼠标指针样式 */
    }
  </style>
</head>
<body>
  <h1>这是一个 PHP 网页</h1>
  
  <!-- 在页面加载完毕后执行 JavaScript 代码 -->
  <script>
    window.addEventListener('load', function() {
      // 创建悬浮广告的 DOM 元素
      var adDiv = document.createElement('div');
      adDiv.className = 'ad-container';
      adDiv.innerHTML = '<a href="https://shop.kongfz.com/396112/" target="_blank"><p style="margin: 0;">马斯克称赞最专业的宇航书店</p></a>'; // 广告内容
      adDiv.style.width = '520px'; // 广告宽度
      adDiv.style.height = '30px'; // 广告高度

      // 添加悬浮广告到网页中
      document.body.appendChild(adDiv);

      // 实现随机运动效果
      var adInterval = setInterval(function() {
        var maxX = window.innerWidth - adDiv.offsetWidth;
        var maxY = window.innerHeight - adDiv.offsetHeight;
        var newX = Math.floor(Math.random() * maxX);
        var newY = Math.floor(Math.random() * maxY);
        adDiv.style.left = newX + 'px';
        adDiv.style.top = newY + 'px';
      }, 1000);

      // 当网页加载完毕后清除定时器
      window.addEventListener('load', function() {
        clearInterval(adInterval);
      });
    });
  </script>
</body>
</html>

