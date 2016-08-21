<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//define('DIR_SECURE_FILENAME', 'default.html');

//define('BIND_MODULE', 'Website'); // 绑定Home模块到当前入口文件
//define('BIND_CONTROLLER','Msg'); // 绑定Index控制器到当前入口文件
////define('BIND_MODULE','Student');
//
////define('BUILD_CONTROLLER_LIST','Msg,User,Menu');
//define('BUILD_MODEL_LIST','UserMessage,MessagePub,VMessagePub,VMessage,SendTargetType');

//为了避免某些服务器开启了目录浏览权限后可以直接在浏览器输入URL地址查看目录，系统默认开启了目录安全文件机制
define('DIR_SECURE_FILENAME', 'index.html');
//默认的安全文件需要写入其他内容,可以通过DIR_SECURE_CONTENT参数来指定
define('DIR_SECURE_CONTENT', 'deney Access!');

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单