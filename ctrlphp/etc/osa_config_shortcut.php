<?php
//快捷菜单
$config['shortcut']=array(
	//设备管理菜单（1-10号预留）
	'0'=>array('name'=>'设备信息','link'=>'index.php?c=device&a=index'),//设备信息（1-10号预留）
	//日常运维（21-30号预留）
	'11'=>array('name'=>'服务器列表','link'=>'index.php?c=personcenter&a=shortcut'),
	'12'=>array('name'=>'线上编写脚本','link'=>'index.php?c=maintain&a=onlinescript'),
	'13'=>array('name'=>'操作记录管理','link'=>'index.php?c=maintain&a=loglist'),
	'14'=>array('name'=>'数据库备份','link'=>'index.php?c=maintain&a=databackuplist'),
	'15'=>array('name'=>'运维知识库','link'=>'index.php?c=maintain&a=knowlist'),
	'16'=>array('name'=>'批量操作部署','link'=>'index.php?c=maintain&a=addbatchtask'),
	'17'=>array('name'=>'批量操作记录','link'=>'index.php?c=maintain&a=batchlist'),
	'18'=>array('name'=>'配置文件列表','link'=>'index.php?c=maintain&a=configfilelist'),
	'19'=>array('name'=>'批量配置更新','link'=>'index.php?c=maintain&a=configupdatelist'),
	'20'=>array('name'=>'批量配置备份','link'=>'index.php?c=maintain&a=configbackuplist'),
	//运营分析（41-50号预留）
	'31'=>array('name'=>'内存状态分析','link'=>'index.php?c=operate&a=graphcenter&type=memory'),
	'32'=>array('name'=>'负载状态分析','link'=>'index.php?c=operate&a=graphcenter&type=load'),
	'33'=>array('name'=>'登录用户分析','link'=>'index.php?c=operate&a=graphcenter&type=user'),
	'34'=>array('name'=>'进程数量分析','link'=>'index.php?c=operate&a=graphcenter&type=process'),
	'35'=>array('name'=>'磁盘状态分析','link'=>'index.php?c=operate&a=graphcenter&type=disk'),
	'36'=>array('name'=>'网络信息分析','link'=>'index.php?c=operate&a=graphcenter&type=network'),
	'37'=>array('name'=>'连接数量分析','link'=>'index.php?c=operate&a=graphcenter&type=constat'),
	'38'=>array('name'=>'故障分析报表','link'=>'index.php?c=operate&a=faultreport'),
	'39'=>array('name'=>'日常操作报表','link'=>'index.php?c=operate&a=dailyreport'),
	'40'=>array('name'=>'设备资费报表','link'=>'index.php?c=operate&a=devicereport'),
	//账户管理(53-60号预留)
	'51'=>array('name'=>'用户列表','link'=>'index.php?c=account&a=userlist'),
	'52'=>array('name'=>'角色列表','link'=>'index.php?c=account&a=rolelist'),
	//配置面板（65-70号预留）
	'61'=>array('name'=>'系统功能设置','link'=>'index.php?c=panel&a=sysfeatureset'),
	'62'=>array('name'=>'安全密钥设置','link'=>'index.php?c=panel&a=securityset'),
	'63'=>array('name'=>'通知方式设置','link'=>'index.php?c=panel&a=notiset'),
	'64'=>array('name'=>'项目监控列表','link'=>'index.php?c=panel&a=monitorlist'),
	//个人中心（75-80号预留）
	'71'=>array('name'=>'报警通知','link'=>'index.php?c=personcenter&a=index'),
	'72'=>array('name'=>'修改密码','link'=>'index.php?c=personcenter&a=changepassword'),
	'73'=>array('name'=>'个人资料','link'=>'index.php?c=personcenter&a=aboutme'),
	'74'=>array('name'=>'快捷键设置','link'=>'index.php?c=personcenter&a=shortcut')
);

//权限列表
$config['permissions'] = array(
	//设备操作
	'9'=>'devlist',
	'1'=>'devadd',
	'2'=>'devedit',
	'3'=>'devdel',
	'4'=>'devcopy',
	//设备分组
	'10'=>'devgrouplist',
	'11'=>'devgroupadd',
	'12'=>'devgroupedit',
	'13'=>'devgroupdel',
	//线上脚本
	'20'=>'scriptlist',
	'21'=>'scriptadd',
	'22'=>'scriptedit',
	'23'=>'scriptdel',
	'24'=>'scriptcopy',
	//操作记录日志
	'30'=>'loglist',
	'31'=>'logadd',
	'32'=>'logedit',
	'33'=>'logdel',
	//批量操作
	'40'=>'databackuplist',
	'41'=>'databackupadd',
	'42'=>'batchlist',
	'43'=>'batchadd',
	'44'=>'configbackuplist',
	'45'=>'configbackupadd',
	'46'=>'configupdatelist',
	'47'=>'configupdateadd',
	'48'=>'bresultdel',
	//运维知识库
	'50'=>'knowlist',
	'51'=>'knowadd',
	'52'=>'knowedit',
	'53'=>'knowdel',
	//配置文件
	'60'=>'configfilelist',
	'61'=>'configfileadd',
	'62'=>'configfileedit',
	'63'=>'configfiledel',
	//用户管理
	'70'=>'userlist',
	'71'=>'useradd',
	'72'=>'useredit',
	'73'=>'userdel',
	//角色管理
	'80'=>'rolelist',
	'81'=>'roleadd',
	'82'=>'roleedit',
	'83'=>'roledel',
	//配置面板
	'90'=>'sysfeatureset',
	'91'=>'securityset',
	'92'=>'notiset',
	'93'=>'monitorlist',
	'94'=>'alarmpro',
	'95'=>'delalarm',
	'96'=>'editalarm',
	//个人中心
	'100'=>'alarmnotice',		
	'101'=>'changepassword',
	'102'=>'aboutme',
	'103'=>'shortcut',
	'104'=>'delalarm',
	//图形中心
	'120'=>'graphcenter',
	//控制中心
	'130'=>'serverlist',
	'131'=>'devinfo',//即时信息
	'132'=>'controlcenter',//控制中心
	
);
