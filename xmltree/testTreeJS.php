<!DOCTYPE html>
<html>
<head>
  <title>可伸缩的XML目录</title>
  <style>
    .folder {
      cursor: pointer;
      color: blue;
    }
    .folder:hover {
      text-decoration: underline;
    }
    .url {
      margin-left: 20px;
      color: green;
    }
    .nested {
      margin-left: 20px;
    }
  </style>
</head>
<body>
  <h1>可伸缩的XML目录</h1>

  <div id="xmlTree">
    <?php
      // 使用PHP解析tree.xml文件
      $xml = simplexml_load_file('tree.xml');
      if ($xml) {
        echo generateXmlTree($xml);
      } else {
        echo '无法解析XML文件。';
      }

      // 递归生成XML目录树
      function generateXmlTree($node, $indent = '') {
        $html = '';
        foreach ($node->children() as $child) {
          $nodeName = $child->getName();
          if ($child->count() > 0) {
            $html .= '<div class="folder">' . $indent . $nodeName . '</div>';
            $html .= '<div class="urlList" style="display: none;">';
            $html .= generateXmlTree($child, $indent . ' '); // 添加一个空格的缩进
            $html .= '</div>';
          } else {
            $html .= '<div class="url">' . $indent . $child . '</div>';
          }
        }
        return $html;
      }
    ?>
  </div>

  <script>
    // JavaScript实现目录节点可伸缩
    var folders = document.getElementsByClassName('folder');
    for (var i = 0; i < folders.length; i++) {
      folders[i].addEventListener('click', function() {
        var urlList = this.nextElementSibling;
        if (urlList.style.display === 'none') {
          urlList.style.display = 'block';
        } else {
          urlList.style.display = 'none';
        }
      });
    }
  </script>
</body>
</html>
