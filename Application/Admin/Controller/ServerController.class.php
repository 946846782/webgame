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
class ServerController extends AuthController {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    
		echo "后台首页";
	}


	public function server_list(){
		//$Game = M('game');
		$Server = M('server');
		//$list = $Game->where('status=1')->order('ctime')->getField('gameid,shortname');
		$serverlist = $Server->field('gameid,seq,serverid,shortname,serverdesc ,opentime ,isvalid')->order('opentime')->select();

		//join查询
		//$serverlist = $Server->join('tb_game ON tb_server.gameid = tb_game.gameid')->field('tb_server.gameid,tb_server.seq,tb_server.serverid,tb_game.shortname,tb_server.serverdesc ,tb_server.opentime ,tb_server.isvalid')->select();
		$this->assign('serverlist',$serverlist);// 赋值数据集
		$this->display('server_list');
	}
}