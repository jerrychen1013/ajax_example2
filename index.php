<?php 
//執行 php -S localhost:8002  啟動php內建server在localhost:8002 port

//CROS作法
//header('Access-Control-Allow-Origin: http://base.com');
//header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
//header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

// 允許所有其他Domain進入
header('content-type: application/json; charset=utf-8');
// header('access-control-allow-origin:*');

$data = ['money'=> 20000000, 'name'=>'傑瑞', 'Job'=>'Chinese Medical Doctor'];

$data = json_encode($data);

if (isset($_GET['callback'])) {
    echo "{$_GET['callback']}($data)";
} else {
    echo $data;
}

