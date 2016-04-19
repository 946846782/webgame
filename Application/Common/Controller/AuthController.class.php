<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

class AuthController extends Controller {

	protected function _initialize(){
		
		
		$sess_auth = session('auth');
		/*
		if(!$sess_auth){
			$this->error('非法访问',U('Admin/Base/login'));
		}
		*/
		
		
		
		if (!session('session_memberid')) {
			$this->error('请登录！',U('Admin/Auth/login'));
		}
		
		if(APP_RULE){
			if (session('session_account') != 'admin') { //session('__superadmin')
				$AUTH = new \Think\Auth();
				$node = strtolower(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME);

				if(!$AUTH->check($node, session('session_memberid'))){
					$this->error('没有权限！');
				}
			}
		}

		$this->LeftMenus();

		/*
		$auth = new Auth();
		if(!$auth->check()){
			$this->error("没有权限",U('login/index'));
		}
		*/
		
		
		
		//$this->error("没有权限");
		
		
		//$this->assign('name','test123');
	}
	
	protected function LeftMenus(){
		if (session('session_account') =='admin') {//是超级管理员
			$data['static'] = '1';
			$Menu = M('Menu');
			$Menus = $Menu->where($data)->getField('id,pid,name,ico,url');
			$Tree = new \Org\Tree\Tree();// 实例化树类
			$d = $Tree->getTree($Menus,0);
			$this->assign('sidebar',$d);
		}else{//不是超级管理员
			// 根据用户id获取导航id集
			// session('session_memberid',$data['uid']);
			$groupids = M('Auth_group_access') -> where(array('uid'=>array('eq',session('session_memberid')))) -> getField('group_id',true);
			$menu_ids = array();
			if ($groupids) {
				$menu_ids = M('Auth_group') -> where(array('id'=>array('in',$groupids))) -> getField('menus');
			}
			
			$menus_id = explode(',', $menu_ids);
			$where['static'] = '1';
			$Menu = M('Menu');
			$Menus = $Menu->where(array('id'=>array('in',$menus_id)))->where($where)->getField('id,pid,name,ico,url');
			$Tree = new \Org\Tree\Tree();// 实例化树类
			$d = $Tree->getTree($Menus,0);
			$this->assign('sidebar',$d);	
		}
	}
}