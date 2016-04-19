<?php 
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Org\Game;
/**
 * Http 工具类
 * 提供一系列的Http方法
 * @author    liu21st <liu21st@gmail.com>
 */
class Http {
	interface IGame
	{
		/*会员登陆*/
		function login_game($para = array());
		
		/*
		会员充值同步
		返回值：错误代码
		*/
		function charge_game($para = array());
		
		/*
		新手卡
		返回值：新手卡字符串
		*/
		function newcard_game($para = array());
	}

?>
