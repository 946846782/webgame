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
namespace Org\Payfac;
/**
 *
 * 支付相关的业务逻辑判断，如：支付成功后的一系列数据更新
 *
 */
class PayControl
{
	private $gameid;
	private $name;


	/**
	 * 构造函数
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct($data)
	{
		$this->gameid = $data['gameid'];
		$this->name = $data['name'];
	}

	public function test(){
		return "This is game face".$this->gameid;
	}




}

