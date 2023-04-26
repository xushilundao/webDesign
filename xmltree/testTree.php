<?php
// 解析 XML 文件
$xmlString = file_get_contents('tree.xml'); // 替换为您的 XML 文件路径
$xml = new SimpleXMLElement($xmlString);

// 生成树形结构
function generateTree($xml, $level = 0) {
    $tree = '';
    foreach ($xml->children() as $node) {
        if ($node->getName() == 'dir') {
            $nodeName = (string)$node->attributes()->name;
            $tree .= str_repeat('  ', $level) . '<li>' . $nodeName . "\n";
            $tree .= str_repeat('  ', $level) . '<ul>' . "\n";
            $tree .= generateTree($node, $level + 1);
            $tree .= str_repeat('  ', $level) . '</ul>' . "\n";
            $tree .= str_repeat('  ', $level) . '</li>' . "\n";
        } elseif ($node->getName() == 'file') {
            $fileUrl = (string)$node;
            $tree .= str_repeat('  ', $level) . '<li><a href="' . $fileUrl . '">' . $fileUrl . '</a></li>' . "\n";
        }
    }
    return $tree;
}

// 生成树形结构的 HTML
function generateTreeHtml($xml) {
    $tree = '<ul>' . "\n";
    $tree .= generateTree($xml);
    $tree .= '</ul>' . "\n";
    return $tree;
}

// 输出树形结构的 HTML
echo generateTreeHtml($xml);
?>

