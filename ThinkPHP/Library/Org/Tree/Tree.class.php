<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: keke <946846782@qq.com> 2016-3-17
// +----------------------------------------------------------------------
namespace Org\Tree;
class Tree {

    /**
     * 无限极菜单树 
     * @access public
     * @return string
     */
	static public function getTree($data,$pid){
        if (!is_array($data) || empty($data) ) return false;
        $tree = array();
        foreach ($data as $k => $v) {
            if ($v['pid'] == $pid) {
                $v['pid'] = self::getTree($data,$v['id']);
                $tree[] = $v;
                unset($data[$k]); //删除遍历过的数组数据
            }
        }
        return $tree;
    }
	 

    /**
     * 无极限梯级（按自己需求修改）
	 * @param $list list数组
     * @return $list
	 * 配置参数
	 * $data['category'] = $menus;  //$data['category'] 是统一用的 
	 * $data['add_pid'] = 'pid';
	 * $data['add_id'] = 'id';
     */
    static public function getsort($data,$parent_id=0,$lev=0){
        static $list = array();
        foreach($data['category'] as $v){
            if($v[$data['add_pid']]==$parent_id){
                $v['lev']=$lev;

                if($v['lev'] > 0){
                    $v['line'] =  '&nbsp;|'.str_repeat("__",$v['lev']);
                }else{
                    $v['line'] = '';
                }
                $list[]=$v;
                self::getsort($data,$v[$data['add_id']],$lev+1);
            }
        }
        return $list;
    }

    /**
     * 无极限普通树（按自己需求修改下）
     * @param $list list数组
     * @return $list
     */
	static public function getsortmenus($data,$parent_id=0,$lev=0){
        static $list = array();
        foreach($data['category'] as $v){
            if($v[$data['add_pid']]==$parent_id){
                $v['lev']=$lev;
                $list[]=$v;
                self::getsortmenus($data,$v[$data['add_id']],$lev+1);
            }
        }
        return $list;
    }
}