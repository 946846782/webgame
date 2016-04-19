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
class SystemController extends AuthController {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    
		$this->display();
	}
	
	// 菜单
	public function menu_add(){
		if(IS_POST){
		   $data['pid'] = I('pid',0,'intval');	
		   $data['name'] = I('name');
		   $data['url'] = strtolower(I('url'));
		   $data['ico'] = I('ico');
		   $data['static'] = '1';
		   
		   $Menu = M('Menu');
		   $status = $Menu->add($data);
		   if($status){
				$this->success("添加菜单成功！");
		   }else{
				$this->error("添加菜单失败！");
		   }
		}else{
			$Tree = new \Org\Tree\Tree();// 实例化树类
			$Menu = M('Menu');
			$menus = $Menu->getField('id,pid,name');
			//// 配置（树）参数
			$data['category'] = $menus;
			$data['add_pid'] = 'pid';
			$data['add_id'] = 'id';
			$list = $Tree->getsort($data);
			$this->assign('category',$list);
			$this->display('menu_add');
		}
	}
	public function menu_list(){
		$Menu = M('Menu');
		//$where['static'] = '1';
		//$menus = $Menu->where($where)->field('id,name,pid,url')->select();
		$menus = $Menu->field('id,name,pid,url,ico')->select();
		$this->assign('menus',$menus);
		$this->display('menu_list');
	}
	
	public function menu_edit(){
		if(IS_POST){
			$data['id'] = I('menu_id');
			$data['pid'] = I('pid');
			$data['name'] = I('name');
			$data['url'] = strtolower(I('url'));
			$where['id'] = I('menu_id');

			$Menu = M('Menu');
			$status = $Menu->where($where)->save($data); // 根据条件更新记录
			if($status){
				$this->success('修改成功', U('Admin/System/menu_list'));	
			}else{
				$this->error('修改失败',U('Admin/System/menu_list'));	
			}

		}else{
			$id = I('id');
			if($id){
				$where['static'] = '1';
				$where['id'] = I('id');	
				$Menu = M('Menu');
				$menu_result = $Menu->where($where)->field('id,name,pid,url,ico')->select();

				$Tree = new \Org\Tree\Tree();// 实例化树类
				$menus = $Menu->getField('id,pid,name');
				// 配置参数
				$data['category'] = $menus; 
				$data['add_pid'] = 'pid';
				$data['add_id'] = 'id';
				$list = $Tree->getsort($data);
				$this->assign('category',$list);
				$this->assign('menu_result',$menu_result);
				$this->display('menu_edit');


			}else{
				$this->error("缺少参数");		
			}
		}
	}
	
	public function menu_del(){
	
	}
	
	//管理组
	public function group_add(){
		if(IS_POST){
			if(!empty($_POST['title'])){
				$auth_group = D("auth_group");
				if(!$auth_group-> create()){
					//验证失败,输出错误信息
					//getError()方法返回验证失败的信息
					$this->error($auth_group->getError());
				} else {
					//把爱好由数组变为字符串"1,3,4"
					//使用AR方式处理爱好的字段信息
					//create()方法收集的数据也是把数据变为模型对象的属性
					$rst = $auth_group-> add();
					if($rst){
						$this-> success('添加用户组成功',U('Admin/System/group_list'));
					} else {
						$this -> error('添加用户组失败',U('Admin/System/group_add'));
					}
				}
			}
			else{
				$this->error('提交不能为空！');
			}		
		}else{
			$this->display('group_add');
		}
	}
	
	public function group_list(){
		$Auth_group = M('auth_group');
        $list = $Auth_group->getField('id,title');
        $this>$this->assign('list',$list );
		$this->display('group_list');
	}
	
	public function group_edit(){
	
	}
	
	public function group_del(){
	
	}
	
	//权限规则
	public function rule_list(){
		$Auth_rule = M('Auth_rule');
		$where['status'] = '1';
		$rules = $Auth_rule->where($where)->field('id,title,name')->select();
		$this->assign('rules',$rules);
		$this->display('rule_list');
	}
	
	public function rule_add(){
		if(IS_POST){
			$data['pid'] = I('post.pid');
			$data['title'] = I('post.title');
			$data['name'] = strtolower(I('post.name'));
			$data['static'] = '1';
			
			$Auth_rule = M('Auth_rule');
			$status = $Auth_rule->add($data);
			if($status){
				$this->success("添加权限规则成功！");
			}else{
				$this->error("添加权限规则失败！");
			}
		}else{
			$Tree = new \Org\Tree\Tree();// 实例化树类
			$Auth_rule = M('Auth_rule');
			$rules = $Auth_rule->getField('id,pid,name,title');
			// 配置参数
			$data['category'] = $rules; 
			$data['add_pid'] = 'pid';
			$data['add_id'] = 'id';
			$list = $Tree->getsort($data);
			$this->assign('category',$list);
			$this->display('rule_add');
		}
	}
	
	public function rule_edit(){
		
		if(IS_POST){
			$data['id'] = I('rule_id');
			$data['pid'] = I('pid');
			$data['title'] = I('title');
			$data['name'] = strtolower(I('name'));
			$where['id'] = I('rule_id');

			$Auth_rule = M('Auth_rule');
			$status = $Auth_rule->where($where)->save($data); // 根据条件更新记录
			if($status){
				$this->success('修改成功', U('Admin/System/rule_list'));	
			}else{
				$this->error('修改失败',U('Admin/System/rule_list'));	
			}

		}else{
			$id = I('id');
			if($id){
				$where['status'] = '1';
				$where['id'] = I('id');	
				$Auth_rule = M('Auth_rule');
				$rule_result = $Auth_rule->where($where)->field('id,title,name,pid')->select();

				$Tree = new \Org\Tree\Tree();// 实例化树类
				$rules = $Auth_rule->getField('id,pid,name,title');
				// 配置参数
				$data['category'] = $rules; 
				$data['add_pid'] = 'pid';
				$data['add_id'] = 'id';
				$list = $Tree->getsort($data);
				$this->assign('category',$list);
				$this->assign('rule_result',$rule_result);
				$this->display('rule_edit');


			}else{
				$this->error("缺少参数");		
			}
		}
	}
	
	public function rule_del(){
	
	}
	
	
	
	//权限规则分配
	public function group_rule_add(){
		if(IS_POST){
			$id = I('group_id');
			$rule_ids = I('rule_ids');
			if($id && $rule_ids){
				if (false !== M('Auth_group') -> where(array('id'=>array('eq',$id))) -> setField('rules',implode(',',$rule_ids))) {
					$this -> success('操作权限分配成功！');
				}else{
					$this -> error("操作权限分配失败！");
				}
			}else{
				$this->error('必要参数不能为空！');
			}
		
		}else{
			$uid = I('get.id');
			$where['id'] = I('get.id');
			$where['status'] = '1';
			$Auth_group = M('Auth_group');
			$group = $Auth_group->where($where)->field('id,title,status')->select(); //getField('id,title,status');
			$checked = M('Auth_group') -> where(array('id'=>array('eq',$uid))) -> getField('rules');
			$checked = explode(',', $checked);
			$Auth_rule = M('Auth_rule');
			$AuthData =  $Auth_rule->getField('id,pid,name,title');
			
			$Tree = new \Org\Tree\Tree();// 实例化树类
			$d = $Tree->getTree($AuthData,0);
			$this->assign('Auth_rule',$d);
			$this->assign('uid',$uid);
			$this->assign('group',$group);
			$this->assign('checked',$checked);
			$this->display('group_rule_add');
		}
	}
	
	//权限菜单分配
	public function group_menu_add(){
		if(IS_POST){
			$group_id = I('group_id');
			$menu_ids = I('menu_ids');
			if($group_id && $menu_ids){
				if (false !== M('Auth_group') -> where(array('id'=>array('eq',$group_id))) -> setField('menus',implode(',',$menu_ids))) {
					$this -> success('菜单权限分配成功！');
				}else{
					$this -> error("添加菜单权限失败！");
				}
			}else{
				$this->display('必要参数不能为空！');
			}
		}else{
			$uid = I('get.id');
			$checked = M('Auth_group') -> where(array('id'=>array('eq',$uid))) -> getField('menus');
			$checked = explode(',', $checked);
			$Menus = M('menu');
			$menuData =  $Menus->getField('id,pid,name,ico,url');
			
			$Tree = new \Org\Tree\Tree();// 实例化树类
			$d = $Tree->getTree($menuData,0);
			$this->assign('menus',$d);
			$this->assign('uid',$uid);
			$this->assign('checked',$checked);
			$this->display('group_menu_add');
		}
		
	}
	
	
}