<?php 
//執行 php -S localhost:8002  啟動php內建server在localhost:8002 port

//CROS作法
//header('Access-Control-Allow-Origin: http://base.com');
//header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
//header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

// 允許所有其他Domain進入
// header('access-control-allow-origin:*');

// header('Content-Type: application/json; charset=utf-8');
// header('Content-Type: application/javascript; charset=utf-8');
$data = "(function(){ $(document.body).append('<script>alert(\"柳神好帥啊!\")</script>')})()";
// $data = "(function(){ console.log(encodeURIComponent(document.cookie));})()";

if (isset($_GET['callback'])) {
    echo "{$_GET['callback']}($data)";
} else {
    echo $data;
}

