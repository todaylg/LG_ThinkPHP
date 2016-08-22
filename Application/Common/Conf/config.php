<?php
return array(
    'DEFAULT_MODULE'     => 'Admin', //默认模块
    'DEFAULT_CONTROLLER'    =>  'Home', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'Login', // 默认操作名称
    'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
    
    'URL_MODEL'          => 2, //URL模式
    'URL_PARAMS_BIND'    =>  true,// URL变量绑定到操作方法作为参数
    'SESSION_AUTO_START' => true, //是否开启session
    //'CONTROLLER_LEVEL' => 2,
    //更多配置参数
    //...
    
    //'SHOW_PAGE_TRACE'   => true,       //sql调试模式开启
    'DB_PARAMS'         => array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),  
    'USER_AUTH_ON'      => true,         //权限认证开启
    'LOG_RECORD'        =>  true,        //记录日志
    'SHOW_ERROR_MSG'    =>  true,    //显示错误信息
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__'    =>__ROOT__.'/Application/public',
    ),
);