<?php
class osa_controller{
	
	//var $controller = null;
	//var $action = null;
	
	public function __construct(){
		date_default_timezone_set ('Asia/Shanghai');
	}
	
	/**
	 * url解析
	 */
	public function parseurl(){
		global $config ;
		//URL的普通模式
		if($config['url_model'] == 1){
			$control = !empty($_GET['c'])?trim($_GET['c']):'';
			$action = !empty($_GET['a'])?trim($_GET['a']):'';
		}else if($config['url_model'] == 2){
			if(isset($_SERVER['PATH_INFO'])){
				$path = trim($_SERVER['PATH_INFO'], '/');
				$paths = explode('/', $path);
				$control = array_shift($paths);
				$action = array_shift($paths);
			}
		}
		$_GET['c'] = $control = !empty($control) ? $control : $config['control'];
		$_GET['a'] = $action = !empty($action) ? $action : $config['action']; 
	}
	
	
	public function run(){
		$this->parseurl();
		$control = $_GET['c'];
		$action = $_GET['a'];
		$control_file = OSA_PHPROOT_PATH.'/controllers/'.$control.'.php';
		if(!file_exists($control_file)) //如果文件不存在提示错误, 否则引入
		{
			exit('控制器不存在' . $control_file);
		}
		include($control_file);
		$class = ucwords($control);	 //将控制器名称中的每个单词首字母大写,来当作控制器的类名
		if(!class_exists($class))    //判断类是否存在, 如果不存在提示错误
		{
			exit('未定义的控制器类' . $class);
		}
		$instance = new $class();	//否则创建实例
		if(!method_exists($instance, $action))	//判断实例$instance中是否存在$action方法, 不存在则提示错误
		{
			exit('不存在的方法' . $action);
		}
		$instance->$action();
	}
	
	/**
	 * 加载模型
	 */
	public function loadmodel($modelname,$param =''){
		$model_file = OSA_PHPMODEL_PATH.$modelname.'.php';
		if(!file_exists($model_file)) 
		{ 
			exit('模型不存在' . $model_file );
		}		
		include($model_file);//存在, 则引入
		if(stripos($modelname ,'/')){
			$model = explode('/',$modelname);
			$n = count($model);
			$class = $model[$n-1];
		}
		else{
			$class = $modelname;
		}//获得模型类名
		if(!class_exists($class))
		{
			exit('未定义的模型' . $class );
		} 	
		$model = new $class($param);	//实例化模型类
		return $model;	
	}
	
	/**
	 * 加载视图
	 */
	public function loadview($file , $data=array()){
		$view_file = OSA_PHPVIEWS_PATH.$file.'.php';
		if(!empty($data)){
			extract($data);
		}
		if(!file_exists($view_file)) 
		{ 
			exit('视图不存在' . $view_file );
		}
		include($view_file);
	}
	
	/**
	 * 加载emial
	 */
	public function loademail(){
		$email_file = OSA_PHPMAIL_PATH.'./class.phpmailer.php';
		if(!file_exists($email_file)) 
		{ 
			exit('邮件类不存在' . $email_file );
		}
		include($email_file);
		$email = new PHPMailer();
		return $email;
	}
	
	/**
	 * 加载config
	 */
	public function loadconfig($file){
		$config_file = OSA_PHPETC_PATH.$file.'.php';
		if(!file_exists($config_file)){
			exit('配置文件不存在' . $config_file );
		}
		include($config_file);
		//global $config ;
		return $config ;
	}
}