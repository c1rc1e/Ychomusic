<?php
/**
 * JYmusic音乐管理系统 PHP version 5.4+
 *
 * @version     2.0
 * @author      战神~~巴蒂 <jyuucn@163.com>
 * @license     http://jyuu.cn/license [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

namespace app\services;

use think\Db;
use think\View;
use think\Config;

/**
 * 插件类
 * @author JYmusic <jyuucn@163.com>
 */
abstract class Addons
{
    /**
     * 视图实例对象
     * @var view
     * @access protected
     */
    protected $view = null;

    public $info = [];
    public $addonPath = '';
    public $configFile = '';
    public $customConfig = '';
    public $admin_list       = [];
    public $customAdminlist = '';
    public $access_url       = [];

    public function __construct()
    {
        // 获取当前插件目录
        $name = $this->getName();
        $this->addonPath = JYMUSIC_ADDON_PATH . $name . '/';
        
        // 读取当前插件配置信息
        if (is_file($this->addonPath . 'config.php')) {
            $this->configFile = $this->addonPath . 'config.php';
        }
    
        $rootPath = get_document_root();
        
        $replaceStr = [
            '__ADDONROOT__' => $rootPath .'/addons/' . $name,
            '__PUBLIC__'=> $rootPath . '/public',
            '__LIBS__'  => $rootPath . '/public/static/libs',
            '__ASSETS__' => $rootPath . '/addons/' . $name . '/assets',
            '__JS__' => $rootPath . '/addons/' . $name . '/assets/js',
            '__CSS__' => $rootPath . '/addons/' . $name . '/assets/css',
            '__IMG__' => $rootPath . '/addons/' . $name . '/assets/images'
        ];
        
        $TplConfig = Config::get('template');
        $TplConfig['view_path'] = $this->addonPath;
        
        $this->view = new View($TplConfig, $replaceStr);

        // 控制器初始化
        if (method_exists($this, '_initialize')) {
            $this->_initialize();
        }
    }

    /**
     * 加载模板和页面输出 可以返回输出内容
     * @access public
     * @param string $template 模板文件名或者内容
     * @param array $vars 模板输出变量
     * @param array $replace 替换内容
     * @param array $config 模板参数
     * @return mixed
     * @throws \Exception
     */
    public function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        $template = !is_file($template) ? '/' . $template : $template;
        // 关闭模板布局
        $this->view->engine->layout(false);

        echo $this->view->fetch($template, $vars, $replace, $config);
    }

    /**
     * 渲染内容输出
     * @access public
     * @param string $content 内容
     * @param array $vars 模板输出变量
     * @param array $replace 替换内容
     * @param array $config 模板参数
     * @return mixed
     */
    public function display($content, $vars = [], $replace = [], $config = [])
    {
        // 关闭模板布局
        $this->view->engine->layout(false);

        echo $this->view->display($content, $vars, $replace, $config);
    }

    /**
     * 模板变量赋值
     * @access protected
     * @param mixed $name 要显示的模板变量
     * @param mixed $value 变量的值
     * @return void
     */
    public function assign($name, $value = '')
    {
        $this->view->assign($name, $value);
    }

    /**
     * 获取当前模块名
     * @return string
     */
    final public function getName()
    {
        $data = explode('\\', get_class($this));
        return array_pop($data);
    }

    final public function checkInfo()
    {
        $info_check_keys = array('name', 'title', 'description', 'status', 'author', 'version');
        foreach ($info_check_keys as $value) {
            if (!array_key_exists($value, $this->info)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 获取插件的配置数组
     * @param string $name 可选模块名
     * @return array|mixed|null
     */
    final public function getConfig($name = '')
    {
        static $_config = [];

        $name = !empty($name)?  $name : $this->getName();
        if (isset($_config[$name])) {
            return $_config[$name];
        }

        $config = cache('addons_' . $name . '_config');
        if ($config) {
            return $config;
        }

        $config = Db::name('Addons')->where(['status' => 1, 'name' => $name])
            ->value('config');

        if ($config) {
            $config = json_decode($config, true);
            cache('addons_' . ucfirst($name) . '_config', $config);
            return $config;
        }

        if ($this->configFile) {
            $temp_arr = include $this->configFile;
            foreach ($temp_arr as $key => $value) {
                if ($value['type'] == 'group') {
                    foreach ($value['options'] as $gkey => $gvalue) {
                        foreach ($gvalue['options'] as $ikey => $ivalue) {
                            $config[$ikey] = $ivalue['value'];
                        }
                    }
                } else {
                    $config[$key] = $temp_arr[$key]['value'];
                }
            }
            unset($temp_arr);
        }

        $_config[$name] = $config;
        return $config;
    }

    /**
     * 获取插件所需的钩子是否存在，没有则新增
     * @param string $str    钩子名称
     * @param string $addons 插件名称
     * @param string $msg    插件简介
     */
    public function existHook($str, $addons = '', $msg = '')
    {
        $Hooks         = Db::name('hooks');
        $where['name'] = $str;
        $gethook       = $Hooks->where($where)->find();
		$addons 	 = !empty($addons)? $addons : $this->getName();

        if (!$gethook || empty($gethook)) {
            $data['name']        = $str;
            $data['description'] = $msg;
            $data['type']        = 1;
            $data['update_time'] = time();
            $data['addons']      = ucfirst($addons);
            $data['status']      = 1;
            $Hooks->insert($data);
        }
    }

    public function execSql($sql)
    {
    	$sql = str_replace("\r", "\n", $sql);
		$sql = explode(";\n", $sql);
        $res = false;
		foreach ($sql as $value) {
			$value = trim($value);
			if(empty($value)) continue;
			$res = Db::execute($value);
		}
    	if (false !== $res) {
    		return true;
    	}
    	session('addons_install_error', 'sql 执行失败');
    	return false;
    }
    
    public function deleteHook($hook){
        $model = Db::name('hooks');
        $condition = [
            'name' => $hook,
        ];
        $model->where($condition)->delete();
    }
    
    //必须实现安装
    abstract public function install();

    //必须卸载插件方法
    abstract public function uninstall();
}
