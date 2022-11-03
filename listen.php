<?php
use Workerman\Worker;
require_once __DIR__ . '\workerman\Autoloader.php';

// 创建一个Worker监听2345端口，使用http协议通讯
$worker = new Worker("websocket://0.0.0.0:8080");

// 启动1个进程对外提供服务
$worker->count = 1;
$chmod = array( 'root' => 0, '123'=> 0 );
// 接收到浏览器发送的数据时回复
$worker->onMessage = function($connection, $message)use($worker)
{
    global $chmod;
    $data = explode(" ", $message);
    $owner = $data[1];
    if ( strcmp($data[0], 'chmod') == 0 ) { 
        if ( strcmp($chmod[$data[1]], 0) == 0 ) $chmod[$data[1]] = 1;
        else $chmod[$data[1]] = 0;
    }

    if ( strcmp($chmod[$data[1]], 0) == 0 ){
        foreach($worker->connections as $connection){
            $connection->send($message);
        }
    }
};

// 运行worker
Worker::runAll();
?>