<?php
function displayFolder($folderPath, $level = 0) {
    // 检查目录是否存在
    if (!file_exists($folderPath)) {
        echo "文件夹不存在";
        return;
    }

    // 获取目录下的文件和文件夹
    $items = scandir($folderPath);

    // 遍历目录项
    foreach ($items as $item) {
        // 忽略 . 和 .. 目录
        if ($item == "." || $item == "..") {
            continue;
        }

        // 获取当前项的路径
        $itemPath = $folderPath . '/' . $item;

        // 判断是否为文件夹
        if (is_dir($itemPath)) {
            // 输出文件夹名称，并添加链接以支持分级打开
            echo str_repeat("&nbsp;", $level * 4) . "<a href=\"?folder=$itemPath\">$item</a><br>";
            
            // 递归调用自身，打开文件夹
            if (isset($_GET['folder']) && $_GET['folder'] == $itemPath) {
                displayFolder($itemPath, $level + 1);
            }
        } else {
            // 输出文件名
            echo str_repeat("&nbsp;", $level * 4) . "$item<br>";
        }
    }
}

// 指定要显示的文件夹路径
$folderPath = "./";
displayFolder($folderPath);
?>

