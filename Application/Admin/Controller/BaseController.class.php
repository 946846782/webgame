<?php
/**
 * Created by PhpStorm.
 * User: keke
 * Date: 2016/3/17
 * Time: 16:54
 *  核心基础类 ComhelperController.class
 *  this is bin of class
 */
namespace Admin\Controller;
use Think\Controller;
class BaseController extends ComhelperController {

    public function login(){
		if(IS_POST){
            $data['account'] = I('post.account','','htmlspecialchars');
            $data['password'] = I('post.password','','htmlspecialchars');
			$data['static'] = '1';
            $code = I('post.code','','htmlspecialchars');
            if($this->check_code($code) === false){
                $this->error('验证码错误','login');
            }else{
                $Admin = M('Admin');
                $da = $Admin->where($data)->find();
                if($da){
                    unset($data['password']);
                    $this->saveData($da);
					$this->redirect('Admin/Index/index');
                }
                else{
                    $this->error('登录失败！');
                }
            }
		}else{
			$this->display('login');
		}    
    }

    public function register(){
		if(IS_POST){
			$data['account'] = I('post.account','','htmlspecialchars');
			$data['password'] = I('post.password','','htmlspecialchars');
			$data['repassword'] = I('post.repassword','','htmlspecialchars');
			$data['ctime'] = date('Y-m-d H:i:s',time());

			if($data['password'] != $data['repassword']){
				$this->error('两次密码不一致！');
			}
			unset($data['repassword']);
			$Admin = M('Admin');
			//根据表单提交的POST数据创建数据对象
			$status = $Admin->data($data)->add();
			if($status >0){
				$this->error('注册成功！',U('Admin/Base/login'));	
				//$this->redirect('Admin/Index/index');
			}
			else{
				$this->error('注册失败！');
			}
		}else{
			$this->display();
		} 
    }

    //退出
    public function logout(){
        $this->unsetData();
        $this->success('退出成功！',U('Admin/Base/login'));	
    }


    public function _empty(){
        $this->display('commont/error-404');
    }
}