<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/15
 * Time: 16:34
 *
 *  this is tool of clsss
 */

namespace Admin\Controller;
use Think\Controller;
class ComhelperController extends Controller {

    //基础类
    protected function saveData($data){
        session('session_account',$data['account']);
        session('session_memberid',$data['uid']);
        session('session_username',$data['name']);
        session('auth',$data);
        session('expire',3600);
        cookie('cookie_account',$data['account'],3600); // 指定cookie保存时间
        cookie('cookie_username',$data['name'],3600); // 指定cookie保存时间
        //$web = $this->get_client_browser();

        //记录登录信息
        $logData['uid'] = $data['uid'];
        $logData['ip'] = $this->IPAdresse()['ip'];
        $logData['logtime'] = date('Y-m-d H:i:s',time());
        $logData['area'] = $this->IPAdresse()['country'].'('.$this->IPAdresse()['area'].')';
        //$logData['web'] = $web['browser'];
		//$logData['version'] = $web['version'];
        $Adminlog = M('Adminlog');
        $status = $Adminlog->data($logData)->add();
        //扩展 memcache 保存数据
    }

    protected function unsetData(){
        session('session_account',null);
        session('session_memberid',null);
        session('session_username',null);
        session('auth',null);
        cookie('cookie_account',null); // 指定cookie保存时间
        cookie('cookie_username',null); // 指定cookie保存时间
        //扩展 memcache 删除数据
        return true;
    }

    //####################   功能相关   #####################
    public function verify(){
        // 导入Image类库
        $config =    array(
            'fontSize'    =>    14,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'imageW'	  =>	100,
            'imageH'      =>    34,
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    protected function check_code($code, $id = ""){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    //上传
    protected function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            //$this->error($upload->getError());
            $data['status'] = false;
            $data['error'] = $upload->getError();
            return $data;

        }else{// 上传成功
            //$this->success('上传成功！');
            $data['status'] = true;
            $data['pic'] = $info;
            return $data;
        }
    }

    public function upload_api($APP_API){
        if($APP_API){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                //$this->error($upload->getError());
                $data['status'] = false;
                $data['error'] = $upload->getError();
                return $data;

            }else{// 上传成功
                //$this->success('上传成功！');
                $data['status'] = true;
                $data['pic'] = $info;
                return $data;
            }
        }
    }

    //缩图
    protected function thumb($img,$img_name){
        if($img && $img_name){
            $img = './Public/Uploads/'.$img;
            $image = new \Think\Image();
            $image->open($img);
            $image->thumb(150, 150)->save('./Public/Uploads/thumb/thumb_'.$img_name);
            return 'thumb_'.$img_name;
        }
        else
        {
            return false;
        }
    }

    public function thumb_api($img,$img_name,$APP_API){
        if($APP_API){
            if($img && $img_name){
                $img = './Public/Uploads/'.$img;
                $image = new \Think\Image();
                $image->open($img);
                $image->thumb(150, 150)->save('./Public/Uploads/thumb/thumb_'.$img_name);
                return 'thumb_'.$img_name;
            }
            else
            {
                return false;
            } 
        }
    }

    //水印
    protected function water(){
        $image = new \Think\Image();
        // 在图片左上角添加水印（水印文件位于./logo.png） 水印图片的透明度为50 并保存为water.jpg
        $image->open('./1.jpg')->water('./logo.png',\Think\Image::IMAGE_WATER_NORTHWEST,50)->save("water.jpg");

    }



    /**
     * 获取客户端浏览器类型
     * @param  string $glue 浏览器类型和版本号之间的连接符
     * @return string|array 传递连接符则连接浏览器类型和版本号返回字符串否则直接返回数组 false为未知浏览器类型
     */
    protected function get_client_browser() {
        function getBrowser(){
            $agent=$_SERVER["HTTP_USER_AGENT"];
            if(strpos($agent,'MSIE')!==false || strpos($agent,'rv:11.0')) //ie11判断
                return "ie";
            else if(strpos($agent,'Firefox')!==false)
                return "firefox";
            else if(strpos($agent,'Chrome')!==false)
                return "chrome";
            else if(strpos($agent,'Opera')!==false)
                return 'opera';
            else if((strpos($agent,'Chrome')==false)&&strpos($agent,'Safari')!==false)
                return 'safari';
            else
                return 'other';
        }
        $data['browser'] = getBrowser();
        function getBrowserVer(){
            if (empty($_SERVER['HTTP_USER_AGENT'])){    //当浏览器没有发送访问者的信息的时候
                return 'unknow';
            }
            $agent= $_SERVER['HTTP_USER_AGENT'];
            if (preg_match('/MSIE\s(\d+)\..*/i', $agent, $regs))
                return $regs[1];
            elseif (preg_match('/FireFox\/(\d+)\..*/i', $agent, $regs))
                return $regs[1];
            elseif (preg_match('/Opera[\s|\/](\d+)\..*/i', $agent, $regs))
                return $regs[1];
            elseif (preg_match('/Chrome\/(\d+)\..*/i', $agent, $regs))
                return $regs[1];
            elseif ((strpos($agent,'Chrome')==false)&&preg_match('/Safari\/(\d+)\..*$/i', $agent, $regs))
                return $regs[1];
            else
                return 'other';
        }
        $data['version'] = getBrowserVer();

        return $data;
    }

    protected function IPAdresse(){
        $localhost_ip = get_client_ip();
        $Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $area = $Ip->getlocation($localhost_ip);
        return $area;
    }

    /**
     * 客户端类型
     */
    protected function ismobile() {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
            return true;

        //此条摘自TPM智能切换模板引擎，适合TPM开发
        if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
            return true;
        //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
            //找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
        //判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
            );
            //从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return true;
            }
        }
        //协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT'])) {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return true;
            }
        }
        return false;
    }

}