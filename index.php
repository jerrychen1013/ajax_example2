<?php 

// 允許所有其他Domain進入
header('content-type: application/json; charset=utf-8');
// header('access-control-allow-origin:*');

$data = ['money'=> 20000000, 'name'=>'傑瑞', 'Job'=>'Chinese Medical Doctor'];
if (isset($_GET['callback'])) {
    $data = json_encode($data);
    echo "{$_GET['callback']}($data)";
} else {
    echo json_encode($data);
}

