<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>XXX管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <Link rel="ICON" href="/LG_ThinkPHP/LG_small.png"> 
    </head>
    <body  onkeydown="keyLogin();">  
        <div style= "
        background: url('/LG_ThinkPHP/Application/Public/js/Layout/img/main.png') no-repeat;
        width:100%;
        height:100%;
        position: absolute;              
        background-color:#E8F1F4;
        ">
        <div class="login-header">
            <div class="login-header-inline">XXX管理系统登录</div>
        </div>    
        <div class="login-main">
            <div class="login-main-inline">  
             <form id="fm" method="post">
              <table cellpadding="5">
               <tr>
                <td>用户名：</td>
                <td><input class="easyui-textbox" type="text" id="UserName" name="UserName" /></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input class="easyui-textbox" type="password" id="Password" name="Password" /></td>
            </tr>
            <tr>
                <td>验证码：</td>
                <td><input class="easyui-textbox" type="text"  id="verify_code" name="verify_code" /></td>
                <td>
                    <img src="/LG_ThinkPHP/Admin/Home/Verify" id="img" title="看不清，点击图片进行更换" style="width:120px;height:30px;" onclick="updateImg()">
                </td>	
            </tr>
        </table>
    </form>
    <div style="text-align:center;padding:5px"><!--text-align-->
      <a href="javascript:void(0)" class="easyui-linkbutton" id="go" style="width:100px;" onclick="Login()">登录</a>
  </div>
</div>
</div>
</div>    
<script src="/LG_ThinkPHP/Application/public/js/CWJS/DefaultJs.js"></script>
<script>
    function Login(){
    //这个__Public__完事出来却是少了Application的
                $('#fm').form('submit', {
                    url: '/LG_ThinkPHP/Admin/Home/Examine',
                    success: function (result) {
                        var res = eval('(' + result + ')');//strng->object        5.Json.Parse()
                        if (res.result === "1") {
                            location.href = "/LG_ThinkPHP/Admin/UserManage/AddUser";
                        } else {
                            layer.msg("验证码错误！", {          
                                icon: 2,
                                time: 1000 //1秒关闭
                            });
                            $("#Username").textbox('setValue','');
                            $("#Password").textbox('setValue','');
                            $("#verify_code").textbox('setValue','');
                            document.getElementById("img").setAttribute("src", "/LG_ThinkPHP/Admin/Home/Verify");
                        }
                    }});
            }
            function updateImg(){
                document.getElementById("img").setAttribute("src", "/LG_ThinkPHP/Admin/Home/Verify");//13..更新验证码的过程
            }
            function keyLogin(){ 
                if (event.keyCode===13)  //回车键的键值为13   
                    Login();
            }
        </script>    
    </body>   
    </html>