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
	/*
	第三方支付接口:
		方便接口新的支付渠道，对接新渠道时时，直接新开实体类就行，网页无需调整．
	*/
	interface IPay
	{
		/*
		发送支付请求，直接跳转出去
		当前默认为get方式提交，
		也可以设计成post,由程序自动生成一个<form>表单，最后再脚本提交如：
			<form id='paysubmit' name='paysubmit' action='url' method='post'>
				<input type='hidden' name='key' value=''/>
			</form>
			<script>document.forms['paysubmit'].submit();</script>
		
		*/
		function pay_send($para = array());
		
		/*
		做签名验证，同时处理第三方支付回复，
		返回值 array[]
			check:验证成功true，失败false
			response:回复给第三方支付的返回
		*/
		function pay_notify($para = array());
		
		/*
		支付状态查询
		*/
		function pay_search($para = array());		
		
	}

?>
