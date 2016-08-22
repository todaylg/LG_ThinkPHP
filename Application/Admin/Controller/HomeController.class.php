<?php
namespace Admin\Controller;
use Think\Controller;

class HomeController extends Controller {
    public function Login(){
         layout(FALSE);
        $this->display();         
    }

    public function Examine(){
        $verify = new \Think\Verify();
        if($verify->check(I('post.verify_code'))==FALSE){
            // echo("<script>console.log('123');</script>");
            echo '{"result":"0"}';
            return;
        }
        //TODO
        //数据库验证
        if(true){
            session('UserName',I('post.UserName'));
            echo '{"result":"1"}';
        }else{
            echo '{"result":"0"}';
        }
    }  
    public function LoginOff() {
        session('[destroy]');
        redirect('Login');
    }
    public function Verify() {
        $config =    array(
        'fontSize'    =>    50,    // 验证码字体大小
        'length'      =>    4,     // 验证码位数
        'useCurve'    =>    false, // 关闭验证码杂点
        'codeSet'     => '0123456789',  
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
}
