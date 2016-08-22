<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($title); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<Link rel="ICON" href="/LG_ThinkPHP/LG_small.png">
	<script src="/LG_ThinkPHP/Application/public/js/CWJS/DefaultJs.js" language="JavaScript"></script> 
	
	<script>
		function LoginOff(){
			location.href = "/LG_ThinkPHP/Admin/Home/LoginOff";
		};
		function ChangePassword(){
			location.href = "/LG_ThinkPHP/Admin/Personinfo/ChangePassword";
		};
	</script>   
</head>
<body>
	<div class="header">
		<div class="headerleft">
			<img src="/LG_ThinkPHP/Application/Public/js/Layout/img/logo.png" style="height:54px;margin-top:2px;" alt="XXX管理系统" />
		</div>
		<div class="headerright" id="exit" onclick="LoginOff()" title="退出">
			<span></span>
		</div>
		<div class="headerright" id="CP" onclick="ChangePassword()" title="仅限工作人员和管理员">
			密码修改
		</div>
		<div class="headerright" title="角色">
			<?php echo '角色：'; echo "管理员";?>       
		</div>
		<div class="headerright" title="当前用户">
			<?php echo "当前用户："; echo session('UserName');?>    <!--6.cookie + php echo-->
		</div>
	</div>
	<div class="background">
		<div class="nav"> 　
			<div class="easyui-accordion" data-options="multiple:true" style="width:300px;height1:300px;">
				<div title="用户信息管理" style="overflow:auto;padding:10px;">
					<ul>
					<li><a href="/LG_ThinkPHP/Admin/UserManage/AddUser">添加用户</a></li>
						<li><a href='/LG_ThinkPHP/Admin/UserManage/UserManage'>用户管理</a></li>
					<li><a href='/LG_ThinkPHP/Admin/UserManage/CommonUserInfo'>常用成员信息</a></li>
					</ul>
				</div>
				<div title="用户信息管理" style="overflow:auto;padding:10px;">
					<ul>
					<li><a href="/LG_ThinkPHP/Admin/UserManage/AddUser">添加用户</a></li>
						<li><a href='/LG_ThinkPHP/Admin/UserManage/UserManage'>用户管理</a></li>
					<li><a href='/LG_ThinkPHP/Admin/UserManage/CommonUserInfo'>常用成员信息</a></li>
					</ul>
				</div>
				<div title="用户信息管理" style="overflow:auto;padding:10px;">
					<ul>
					<li><a href="/LG_ThinkPHP/Admin/UserManage/AddUser">添加用户</a></li>
						<li><a href='/LG_ThinkPHP/Admin/UserManage/UserManage'>用户管理</a></li>
					<li><a href='/LG_ThinkPHP/Admin/UserManage/CommonUserInfo'>常用成员信息</a></li>
					</ul>
				</div>
				<div title="用户信息管理" style="overflow:auto;padding:10px;">
					<ul>
					<li><a href="/LG_ThinkPHP/Admin/UserManage/AddUser">添加用户</a></li>
						<li><a href='/LG_ThinkPHP/Admin/UserManage/UserManage'>用户管理</a></li>
					<li><a href='/LG_ThinkPHP/Admin/UserManage/CommonUserInfo'>常用成员信息</a></li>
					</ul>
				</div>
				<div title="用户信息管理" style="overflow:auto;padding:10px;">
					<ul>
					<li><a href="/LG_ThinkPHP/Admin/UserManage/AddUser">添加用户</a></li>
						<li><a href='/LG_ThinkPHP/Admin/UserManage/UserManage'>用户管理</a></li>
					<li><a href='/LG_ThinkPHP/Admin/UserManage/CommonUserInfo'>常用成员信息</a></li>
					</ul>
				</div>
				<div title="用户信息管理" style="overflow:auto;padding:10px;">
					<ul>
					<li><a href="/LG_ThinkPHP/Admin/UserManage/AddUser">添加用户</a></li>
						<li><a href='/LG_ThinkPHP/Admin/UserManage/UserManage'>用户管理</a></li>
					<li><a href='/LG_ThinkPHP/Admin/UserManage/CommonUserInfo'>常用成员信息</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main">          
			<div class="content">
				<div style="">
					<div><h1><?php echo ($tip0); ?></h1></div><br />
					<div><h2><?php echo ($tip); ?>：</h2></div><br />
							<form id="fm" method="post">
  <table cellpadding="5" cellspacing="15">
     <tr>
        <td>真实姓名：</td>
        <td><input class="easyui-textbox" type="text" id="Name" name="Name" /></td>
        <td>性别：</td>
        <td>
            <select class="easyui-combobox" id="State" name="State" style="width:152px;" data-options='editable: false'>
                <option value="999">全部</option>      
                <option value="1">男</option>
                <option value="2">女</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>身份证号：</td>
        <td><input class="easyui-textbox" type="text" id="Name" name="Name" /></td>
    </tr>
</table>
<div style="margin-left:100px">
  <a href="javascript:void(0)" style="width:100px;" class="easyui-linkbutton" onclick="Query()">查询</a>
</div>
<hr>
<hr>
<br />
</form>
<div>
  <a href="javascript:void(0)" style="width:100px;" class="easyui-linkbutton" onclick="Query()">删除</a>
</div>
<br>
<div>
    <table id="dg" 
    class="easyui-datagrid" 
    title="用户列表" 
    style="width:700px;height:500px"
    data-options="rownumbers:true,
    singleSelect:false,
    autoRowHeight:false,
    pagination:true,
    pageSize:20,
    nowrap:false,
    url:'',
    method:'post'">
    <thead>
     <tr>
        <th data-options="field:'ck',checkbox:true"></th>
        <th data-options="field:'UserType',width:100">姓名</th>
        <th data-options="field:'UserRealName',width:100">身份证号</th>
        <th data-options="field:'UpdateTime',width:100,align:'left'">性别</th>
        <th data-options="field:'UserName',width:100">出生日期</th>
        <th data-options="field:'UserName',width:100"></th>
        <th data-options="field:'State',width:100"></th>              
    </tr>
</thead>
</table>
</div>

<script>
    //TODO
    //数据库操作
</script>

				</div>
			</div>
		</div>
		<div class="footer">Powered By ChinaWit  © 2016-2016  京ICP备00000000号</div>
	</div>
</body>
</html>