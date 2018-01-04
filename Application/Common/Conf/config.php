<?php
return array(
	//'配置项'=>'配置值'
	//扩展配置
	'LOAD_EXT_CONFIG'	=>'db',
  'DEFAULT_MODULE'	=> 'Home', // 默认访问模块
	'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写

	/* 认证相关 */
	 'USER_AUTH_KEY'	=>'user_id',	// 用户认证SESSION标记
	 'USER_AUTH_GATEWAY'	=>'public/login',// 默认认证网关
	 'USE_LOGIN' => true,



);
