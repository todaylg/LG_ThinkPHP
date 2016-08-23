<?php
namespace Admin\Controller;
use Think\Controller;

class PersoninfoController extends Controller {
    public function ChangePassword() {
        $this->assign('title','个人信息_修改密码');
        $this->assign('tip','修改密码');
        $this->assign('tip0','个人信息');
        $this->display();
    }    
    //TODO
    //数据库操作
}
