<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: keke <946846782@qq.com>
// +----------------------------------------------------------------------


namespace Admin\Controller;
use Common\Controller\AuthController;
class UserController extends AuthController {
    public function index(){
      	if(IS_POST){

      	}else{
      		$this->display();
      	}
	}
}