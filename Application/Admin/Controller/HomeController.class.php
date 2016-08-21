<?php
namespace Admin\Controller;
use Think\Controller;

class HomeController extends Controller {
    public function Login(){
        layout(FALSE);
        $this->display();         
    }

    public function Examine(){
        //json={"DriverSchoolId":"1","UserName":"1","Password":"1","UserType":"1"}   
        $verify = new \Think\Verify();
        if($verify->check(I('post.verify_code'))==FALSE){
            echo '{"result":"0"}';
            return;
        }
        $Model=M('AbsUser');
        $data['DriverSchoolId']=I('post.DriverSchoolId');
        $data['UserName']=I('post.Account');
        $data['UserPassword']=I('post.Password');
        $data['UserType']=I('post.UserType');
        $data['State']='1';
        $da=$Model->where($data)->select();
        if(count($da)==1){
            session('UserRealName',$da[0]['UserRealName']);
            session('UserType',$da[0]['UserType']);
            session('DriverSchoolId',$da[0]['DriverSchoolId']);
            session('UserId',$da[0]['UserId']);
            $this->CreateCookie();
            echo '{"result":"1"}';
        }else{
            echo '{"result":"0"}';
        }
    }  
    public function queryDS(){
        $Model=M('DriverSchool');
        $da=$Model->select();
        $jsonStr=  json_encode($da);
        $obj=  json_decode($jsonStr);
        echo $this->ajaxReturn($obj);
    }
    public function CreateCookie() {
        $Model=M('DriverSchool');
        $data['DriverSchoolId']=session('DriverSchoolId');
        $da=$Model->where($data)->select();
        cookie('DriverSchoolName',$da[0]['DriverSchoolName'],3600*24);
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
    public function a() {
        for($i=1;$i<=65;$i++){
            echo "INSERT INTO `privilege` VALUES ('".$i."','3','".$i."');<br />";
        }
    }
}
