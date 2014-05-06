<?php
//开启调试模式
define('APP_DEBUG', true);
define('APP_NAME','Admin'); //项目名称
define('APP_PATH','./Admin/'); //项目路径
define('RUNTIME_PATH',APP_PATH  . 'Runtime/'); //定义编译目录位置，即Runtime目录
define('ENGINE_NAME','cluster');//App Engine调用
include './ThinkPHP/ThinkPHP.php'; //引用ThinkPHP核心运行文件
?>