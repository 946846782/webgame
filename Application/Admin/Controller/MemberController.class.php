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


// 系统用户模块
namespace Admin\Controller;
use Common\Controller\AuthController;
class MemberController extends AuthController {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    
		echo "后台首页";
	}
	
	//添加系统用户
	public function member_add(){
		if(IS_POST){
		   $data['account'] = I('account');	
		   $data['name'] = I('name');
		   $data['password'] = I('password');
		   
		  if($data['account'] && $data['password']){
			   $data['ctime'] = date('Y-m-d H:i:s',time());	
			   $Admin = M('Admin');
			   $status = $Admin->add($data);
			   if($status){
					$this->success("添加管理员成功！");
			   }else{
					$this->error("添加管理员失败！");
			   }
		  }else{
			   $this->error("缺少必要参数");
		  }
		}else{
			$this->display('member_add');
		}
	}
	
	public function member_list(){
		$Admin = M('Admin');
		$member_list = $Admin->getField('uid,name,account');
		$this->assign('member',$member_list);
		$this->display('member_list');
	}
	
	//会员编辑 （保存）
	public function member_edit(){
		$data['uid'] = I('id');
		if(IS_POST){

		}else{
			if($data['uid']){
			
			}else{
				$this->error("缺少必要参数");
			}
		}		
	}
	
	public function member_del(){
		$data['uid'] = I('id');
		if($data['uid']){
			$this->error("删除功能暂时不开放");
		}else{
			$this->error("缺少必要参数");
		}
	}
	
	public function member_show(){
		$data['uid'] = I('id');
		if($data['uid']){
			
		}else{
			$this->error("缺少必要参数");
		}
	}
	
	public function member_rule(){
		$data['uid'] = I('id');
		if(IS_POST){
			$uid = I('uid');
			$group_ids = I('group_ids');
			if($uid && $group_ids){
				// 重新分配用户组
				// 移除老分组
				M('Auth_group_access') -> where(array('uid' => array('eq',$uid))) -> delete();
				// 重组新分组
				$data = array();
				foreach ($group_ids as $key => $value) {
					$data[] = array(
						'uid'=>$uid,
						'group_id'=>$value,
						);
				}
				if (false !== M('Auth_group_access') -> addAll($data)) {
						$this -> success('用户组分配成功！');
				}else{
						$this -> error(M('Auth_group_access') -> getDbError());
				}
				
			}else{
				$this->error('必要参数不能为空！');
			}
		}else{
			if($data['uid']){
				$Admin = M('Admin');
				$member = $Admin->where($data)->find();
				if($member){
					$Auth_group = M('Auth_group');
					$group = $Auth_group->where('status=1')->getField('id,title,status');
					$this->assign('member',$member);
					$this->assign('group',$group);
					$this->display(member_rule);
				
				}else{
					$this->error("用户不存在");
				}
			}else{
				$this->error("缺少必要参数");
			}
		}
	}
}