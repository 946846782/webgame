<?php
return array(
	//'配置项'=>'配置值'
	//'URL_PATHINFO_DEPR' => '-',	// PATHINFO模式下，各参数之间的分割符号
    //'配置项'=>'配置值'
    'URL_PATHINFO_DEPR'=>'/',  //url分隔符
    'TMPL_L_DELIM'=>'{',       //修改左定界符号
    'TMPL_R_DELIM'=>'}',       //修改右定界符号
	
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'127.0.0.1',
    'DB_NAME'=>'webgame',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PORT'=>'3306',
    'DB_PREFIX'=>'tb_',
	// 关闭字段缓存
	'DB_FIELDS_CACHE'=>false,
	
	/*
	//分布式数据库配置定义
	'DB_DEPLOY_TYPE'=> 1, // 设置分布式数据库支持
	'DB_TYPE'       => 'mysql', //分布式数据库类型必须相同
	'DB_HOST'       => '192.168.0.1,192.168.0.2',
	'DB_NAME'       => 'thinkphp', //如果相同可以不用定义多个
	'DB_USER'       => 'user1,user2',
	'DB_PWD'        => 'pwd1,pwd2',
	'DB_PORT'       => '3306',
	'DB_PREFIX'     => 'think_',
	'DB_RW_SEPARATE'=>true,  //读写分离
	*/
	
	
    'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	// 允许访问的模块列表
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
	'DEFAULT_MODULE'       =>    'Admin',  // 默认模块
	'URL_CASE_INSENSITIVE' => true, //对于控制器及操作名大小写都可以
    'TMPL_TEMPLATE_SUFFIX'=>'.html', //模板后缀名

    //设置模板主题
    //'DEFAULT_THEME'  => 'default',
    //'TMPL_DETECT_THEME' => true, // 自动侦测模板主题

    'TMPL_PARSE_STRING'=>array(           //添加自己的模板变量规则
        '__CSS__'=>__ROOT__.'/Public/admin/css',
        '__JS__'=>__ROOT__.'/Public/admin/js',
        '__IMG__'=>__ROOT__.'/Public/admin/images',
		'__UPLOADS__'=>__ROOT__.'/Public/Uploads',
    ),
	
	/*
    'TMPL_PARSE_STRING' =>  array( // 地址替换,用_UPLOAD_目录 代替 根目录下的Upload目录
         '__UPLOAD__'    =>  __ROOT__.'/Uploads',
    ),
	*/
	
	'LOG_RECORD' => true, // 开启日志记录
	'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
	
	/*
	'TMPL_ACTION_ERROR'     =>  './Admin/View/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  './Admin/View/dispatch_jump.tpl', 
	*/
	
	/*
	'HTML_CACHE_ON' => true, // 开启静态缓存
    'HTML_CACHE_TIME' => 600, // 全局静态缓存有效期（秒）
    'HTML_FILE_SUFFIX' => '.html', // 设置静态缓存文件后缀
    'HTML_CACHE_RULES' => array(// 定义静态缓存规则
//        '静态地址' => array('静态规则', '有效期', '附加规则'),// 定义格式1 数组方式
//        '静态地址' => '静态规则',// 定义格式2 字符串方式
        '*' => array('{$_SERVER.REQUEST_URI|md5}', 600)
    ),
	*/
	
);