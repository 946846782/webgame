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
class GameController extends AuthController {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    
		echo "后台首页";
	}

	public function game_add(){
		
		if(IS_POST){
			$data['gameid'] = I('post.gameid','','htmlspecialchars');
			$data['shortname'] = I('post.shortname','','htmlspecialchars');
			$data['gametype'] = I('post.gametype','','htmlspecialchars');
			$data['gamedesc'] = I('post.gamedesc','','htmlspecialchars');
			$data['weburl'] = I('post.weburl','','htmlspecialchars');
			$data['coin'] = I('post.coin','','htmlspecialchars');
			$data['changerater'] = I('post.changerater','','htmlspecialchars');
			$data['pay_tip'] = I('post.pay_tip','','htmlspecialchars');
			$data['ctime'] = date('Y-m-d H:i:s',time());
			
			 if(!empty($_FILES)){
			 	   $APP_API = True;	
			 	   $Comhelper = new ComhelperController();

	               $upload_pic =  $Comhelper->upload_api($APP_API);
				   if($upload_pic['status']){
					   $data['pic'] = $upload_pic['pic']['thumb']['savepath'].$upload_pic['pic']['thumb']['savename'];
					   $thumb = $Comhelper->thumb_api($data['pic'],$upload_pic['pic']['thumb']['savename'],$APP_API);
					   if($thumb){
						    $data['thumb'] = $thumb;
					   }
				   }  
	          }

			if($data['gameid'] && $data['shortname'] && $data['gametype'] && $data['coin'] && $data['changerater']){
				$Game = M('game');
				//根据表单提交的POST数据创建数据对象
				$status = $Game->data($data)->add();
				if($status >0){
					 $this->success('添加游戏成功！', U('admin/game/game_list'));
					//$this->redirect('Game/index');
				}
				else{
					$this->error('添加游戏失败！', U('admin/game/game_list'));
				} 
			}
			else
			{
				$this->error('缺少必要参数！添加游戏失败！', U('admin/game/game_list'));
			}
		}else{
			$this->display();	
		}
	}

	public function game_list(){
		$Game = M('game');
		$list = $Game->where('status=1')->order('ctime')->select();
		$this->assign('list',$list);// 赋值数据集
		$this->display('game_list');
	}

	public function game_edit(){
		if(IS_POST){
			$where['id'] = I('id');
			$where['gameid'] = I('old_gameid');

			$data['gameid'] = I('post.gameid','','htmlspecialchars');
			$data['shortname'] = I('post.shortname','','htmlspecialchars');
			$data['gametype'] = I('post.gametype','','htmlspecialchars');
			$data['gamedesc'] = I('post.gamedesc','','htmlspecialchars');
			$data['weburl'] = I('post.weburl','','htmlspecialchars');
			$data['coin'] = I('post.coin','','htmlspecialchars');
			$data['changerater'] = I('post.changerater','','htmlspecialchars');
			$data['pay_tip'] = I('post.pay_tip','','htmlspecialchars');
			$data['ctime'] = date('Y-m-d H:i:s',time());
			
			 if(!empty($_FILES)){
	               $APP_API = True;	
			 	   $Comhelper = new ComhelperController();

	               $upload_pic =  $Comhelper->upload_api($APP_API);


				   if($upload_pic['status']){
					   $data['pic'] = $upload_pic['pic']['thumb']['savepath'].$upload_pic['pic']['thumb']['savename'];
					   $thumb = $this->thumb_api($data['pic'],$upload_pic['pic']['thumb']['savename'], $APP_API);
					   if($thumb){
						    $data['thumb'] = $thumb;
					   }
				   }  
	          }
			
			if($data['gameid'] && $data['shortname'] && $data['gametype'] && $data['coin'] && $data['changerater'] && $where[gameid] && $where['id']){
				$Game = M('game');
				//根据表单提交的POST数据创建数据对象
				$status = $Game->where($where)->save($data); // 根据条件更新记录
				if($status >0){
					 
					$this->success('修改游戏成功！', U('admin/game/game_list'));
				}
				else{
					$this->error('修改游戏失败！');
				} 
			}
			else
			{
				$this->error('缺少必要参数！添加游戏失败！');
			}

		}else{
			$data['id'] = I('id');
			$data['gameid'] = I('gameid');

			$Game = M('Game');
			$game_result = $Game->where($data)->select();
			$this->assign('game_result',$game_result);// 赋值数据集
		    $this->display('game_edit');

		}
	}
}