<?php
$list = <<<EOF
朱志庭  26170604  1 88 通过
曹琦龙  26170608  3 83 通过
张仁元  26170609  1 90 通过
梅园浩  26170610  1 83 通过
郭恩洲  26170611  1 79 通过
王宁  26170612  1 83 通过
傅佳俊  26170613  1 84 通过
闫鹏飞  26170616  2 81 通过
马丁  26170619  1 84 通过
辛伟民  26170621  1 81 通过
许文豪  26170624  1 81 通过
马锐  26170626  1 81 通过
徐彬彬  26170627  1 85 通过
季超  26170631  1 78 通过
范毅敏  26170634  7 81 通过
丁帅帅  26170635  2 82 通过
邱怡  26170636  1 84 通过
刘义宝  26170638  4 88 通过
EOF;

$items = explode("\n", $list);
$students = [];
foreach($items as $item) {
    $item = str_replace('     ', ' ', $item);//5
    $item = str_replace('    ', ' ', $item);//5
    $item = str_replace('   ', ' ', $item);//5
    $item = str_replace('  ', ' ', $item);//5
    $item = explode(' ', $item);
    $students[] = $item;
}

$fd = fopen('list.csv', 'w');
foreach ($students as $student) {
    fputcsv($fd, $student);
}
fclose($fd);
