<?php
namespace Admin\Controller;
use Think\Controller;

class UserManageController extends Controller {
    public function AddUser() {
        $this->assign('title','用户信息管理_添加用户');
        $this->assign('tip','添加用户');
        $this->assign('tip0','用户信息管理');
        $this->display();
    }    
    public function UserManage() {
        $this->assign('title','用户信息管理_用户管理');
        $this->assign('tip','用户管理');
        $this->assign('tip0','用户信息管理');
        $this->display();
    } 
    public function CommonUserInfo() {
        $this->assign('title','用户信息管理_常用成员信息');
        $this->assign('tip','常用成员信息');
        $this->assign('tip0','常用成员信息');
        $this->display();
    } 
    //TODO
    //数据库操作
}
