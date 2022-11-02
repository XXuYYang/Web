<<<<<<< HEAD
<?php
use Workerman\Worker;
require_once __DIR__ . '\workerman\Autoloader.php';

// 创建一个Worker监听2345端口，使用http协议通讯
$worker = new Worker("websocket://0.0.0.0:8080");

// 启动4个进程对外提供服务
$worker->count = 1;

// 接收到浏览器发送的数据时回复hello world给浏览器
$worker->onMessage = function($connection, $message)use($worker)
{
    // 向浏览器发送hello world
    foreach($worker->connections as $connection){
        $connection->send($message);
    }
};

// 运行worker
Worker::runAll();
=======
<?php
use Workerman\Worker;
require_once __DIR__ . '\workerman\Autoloader.php';

// 创建一个Worker监听2345端口，使用http协议通讯
$worker = new Worker("websocket://0.0.0.0:8080");

// 启动4个进程对外提供服务
$worker->count = 1;

// 接收到浏览器发送的数据时回复hello world给浏览器
$worker->onMessage = function($connection, $message)use($worker)
{
    // 向浏览器发送hello world
    foreach($worker->connections as $connection){
        $connection->send($message);
    }
};

// 运行worker
Worker::runAll();
>>>>>>> 1ee5520968cab0defa81cb0fb948fa55bc1a4016
?>