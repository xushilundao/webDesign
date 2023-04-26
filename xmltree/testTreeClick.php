<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>文件夹效果</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // 设置文件夹的点击事件
      $(".folder").click(function() {
        // 切换文件夹的展开/折叠状态
        $(this).toggleClass("expanded");
        // 切换子元素的显示/隐藏状态
        $(this).children(".subitems").toggle();
      });
    });
  </script>
</head>
<body>
  <?php
    // 加载 XML 文件
    $xml = simplexml_load_file("tree.xml");
    
    // 递归渲染 XML 节点
    function renderNode($node) {
      echo "<li>";
      echo "<div class='folder'>";
      echo "<span class='folder-name'>" . $node["name"] . "</span>";
      echo "</div>";
      if ($node->count() > 0) {
        echo "<ul class='subitems'>";
        foreach ($node->children() as $child) {
          renderNode($child);
        }
        echo "</ul>";
      }
      echo "</li>";
    }
    
    // 从根节点开始渲染
    echo "<ul id='file-tree'>";
    foreach ($xml->children() as $category) {
      renderNode($category);
    }
    echo "</ul>";
  ?>
</body>
</html>

