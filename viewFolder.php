<?php
// 定义文件夹路径和文件名
$folderPath = './'; // 文件夹路径
$fileName = 'link.txt'; // 文件名

// 检查文件夹是否存在，如果不存在则创建
if (!is_dir($folderPath)) {
    mkdir($folderPath, 0755, true); // 创建文件夹，并设置权限为755
}

// 检查文件是否存在，如果不存在则创建
if (!file_exists($folderPath . '/' . $fileName)) {
    touch($folderPath . '/' . $fileName); // 创建文件
    chmod($folderPath . '/' . $fileName, 0644); // 设置文件权限为644
}

// 判断请求类型，如果是POST请求，则保存URL链接到文件中
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $link = $_POST['link'] ?? ''; // 获取POST请求中的链接参数
    if (!empty($link)) {
        $fileContent = $link . PHP_EOL; // 文件内容，每个链接占一行，使用换行符分隔
        file_put_contents($folderPath . '/' . $fileName, $fileContent, FILE_APPEND); // 将链接写入文件
        echo '链接已保存成功！';
    } else {
        echo '链接不能为空！';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>URL链接管理</title>
</head>
<body>
    <h1>URL链接管理</h1>
    <h2>添加链接</h2>
    <form method="post" action="">
        <input type="text" name="link" placeholder="请输入URL链接">
        <input type="submit" value="添加">
    </form>
    <h2>链接列表</h2>
    <?php
    // 读取文件内容，并输出链接列表
    $fileContent = file($folderPath . '/' . $fileName, FILE_IGNORE_NEW_LINES); // 读取文件内容，并去除换行符

    // 遍历文件内容，处理每个链接
    foreach ($fileContent as $link) {
        // 在这里对每个链接进行处理，例如输出或者存储到数组中
        echo $link . '<br>'; // 以换行符分隔的链接，输出时使用HTML的换行标签
    }
    ?>
</body>
</html>

